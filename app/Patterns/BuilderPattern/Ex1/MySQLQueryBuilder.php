<?php

namespace App\Patterns\BuilderPattern\Ex1;

use Exception;
use stdClass;

class MySQLQueryBuilder implements ISQLQueryBuilder
{

    protected $query;

    public function reset(): void
    {
        $this->query = new stdClass();
    }

    public function select(string $table, array $fields): ISQLQueryBuilder
    {
        $this->reset();
        $this->query->base = "SELECT " . implode(", ", $fields) . " FROM " . $table;
        $this->query->type = 'select';
        return $this;
    }

    public function where(string $field, string $value, string $operator = '='): ISQLQueryBuilder
    {
        if (!in_array($this->query->type, ['select', 'update', 'delete'])) {
            throw new Exception("WHERE can only be added to SELECT, UPDATE OR DELETE");
        }
        $this->query->where[] = "$field $operator '$value'";
        return $this;
    }

    public function limit(int $start, int $offset): ISQLQueryBuilder
    {
        if (!in_array($this->query->type, ['select'])) {
            throw new Exception("LIMIT can only be added to SELECT");
        }
        $this->query->limit = " LIMIT " . $start . ", " . $offset;

        return $this;
    }

    public function getSQL(): string
    {
        $query = $this->query;
        $sql = $query->base;
        if (!empty($query->where)) {
            $sql .= " WHERE " . implode(' AND ', $query->where);
        }
        if (isset($query->limit)) {
            $sql .= $query->limit;
        }
        $sql .= ";";
        return $sql;
    }
}
