<?php
namespace App\Patterns\BuilderPattern\Ex1;

interface ISQLQueryBuilder{
    public function select(string $table,array $fields): ISQLQueryBuilder;

    public function where(string $field,string $value,string $operator='='): ISQLQueryBuilder;

    public function limit(int $start,int $offset): ISQLQueryBuilder;

    //....

    public function getSQL(): string;
}