<?php
//
// 只有三类变量会收到命名空间的限制
// class, function, const
//
// use 别名 php 中也是不允许导入常量以及函数的
//
// 因此放弃了使用 namespace 模拟 package 的想法
//namespace Smaug;

$dbConfig = [
    'host' => '172.17.0.202',
    'usr' => 'test',
    'pwd' => 'text'
];

class QueryBuilder {
    function select() {
        
    }

    function from() {
        
    }

    function where() {
        
    }

    function limit() {
        
    }

    function delete() {
    
    }

    function update() {
        
    }

    function insert() {
        
    }
}

// method – the CRUD method ("create", "read", "update", or "delete")
class Sync {
    private $_db;

    function __construct() {
        $dsn="mysql:host=172.17.0.202;dbname=lotus";
        $dbh = new PDO($dsn, 'test', 'test'); 
        $this->_db = $dbh;
    }

    function create() {
        
    }

    function read() {
        
    }

    function update() {
        
    }
    
    function delete() {
        
    }
}

$sync = new Sync;

// container of model
class Coll {
    
}

class Model {

}

// usage
class User extends Model {
    
}



