<?php

namespace App\Http\Controllers;

use App\Patterns\BuilderPattern\Ex1\ISQLQueryBuilder;
use App\Patterns\BuilderPattern\Ex1\MySQLQueryBuilder;
use App\Patterns\BuilderPattern\Ex1\PostgresQueryBuilder;
use Illuminate\Http\Request;

class BuilderPatternController extends Controller
{
    public function queryBuilder(ISQLQueryBuilder $query){
        return $query->select("users", ["name", "email", "password"])
        ->where("age", 18, ">")
        ->where("age", 30, "<")
        ->limit(10, 20)
        ->getSQL();
    }

    public function sqlQueryBuilder(){
        $this->queryBuilder(new MySQLQueryBuilder);
    }

    public function postgresQueryBuilder(){
        $this->queryBuilder(new PostgresQueryBuilder);
    }
}
