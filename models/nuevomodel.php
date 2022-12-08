<?php

class NuevoModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function insert($fields)
    {
        try {
            $stm = $this->db->connect()->prepare("INSERT INTO alumnos (name, last_name, matricula) VALUES (?,?,?)");
            $stm->execute($fields);
            return true;
        } catch (PDOException $e) {
            print_r($e->getMessage());
            return false;
        }
    }
}
