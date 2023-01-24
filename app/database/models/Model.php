<?php
namespace app\database\models;

use PDO;
use PDOException;
use app\database\Filters;
use app\database\Connection;
        

abstract class Model
{
    private string $fields = '*'; 
    private string $filters = '';
    protected string $table; 
    
    
    public function setFields($fields)
    {   
        $this->fields = $fields;      
    }
    
    public function setFilters(Filters $filters)
    {   
        $this->filters = $filters->dump();      
    }
    
    public function fetchAll() 
    {   
        try {
            $sql = "select {$this->fields} from {$this->table} {$this->filters}";
            $connection = Connection::connect();
            $query = $connection->query($sql);                       
            
            return $query->fetchAll(PDO::FETCH_CLASS, get_called_class());            
             
        } catch (PDOException $e) {
            dd($e->getMessage());
        }        
    } 
    
    public function findBy(string $field = '', string $value = '')
    {
        try {
            $sql = (!$this->filters) ?
                "select {$this->fields} from {$this->table} where {$field} = :{$field}" :                
            
                "select {$this->fields} from {$this->table} {$this->filters}";

                dd($sql);
            
           
           $connection = Connection::connect();

           $prepare = $connection->prepare($sql);

           $prepare->execute(!$this->filters ? [$field => $value] : []);

           return $prepare->fetchObject(get_called_class());
             
        } catch (PDOException $e) {
            dd($e->getMessage());
        } 
    }
}