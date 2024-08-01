<?php

namespace App\Patterns\BuilderPattern\Ex1;

class PostgresQueryBuilder extends MySQLQueryBuilder
{

    public function limit(int $start, int $offset): ISQLQueryBuilder
    {
        parent::limit($start, $offset);

        $this->query->limit = " LIMIT " . $start . " OFFSET " . $offset;

        return $this;
    }
}
