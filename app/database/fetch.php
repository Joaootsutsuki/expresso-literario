<?php

function query($query)
{
    try{
        $connect = connect();
        
        $query = $connect->query($query);
        
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        var_dump($e->getMessage());
    }
}

function findBy($table, $field, $value, $fields = '*')
{
    try {
        $connect = connect();

        $prepare = $connect->prepare("select {$fields} from {$table} where {$field} = ?");
        $prepare->execute([$value]);

        return $prepare->fetch();
    } catch (PDOException $e) {
        var_dump($e->getMessage());
    }
}

function getBookByCategory($categoryId)
{
    try {
        $connect = connect();

        $query = "";

        $prepare = $connect->prepare($query);
        
        $prepare->execute([$categoryId]);

        return $prepare->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        var_dump($e->getMessage());
    }
}