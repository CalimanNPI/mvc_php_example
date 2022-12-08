<?php
include_once "models/alumno.php";

class ConsultaModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM alumnos");
            //var_dump($query->fetch());
            while ($row = $query->fetch()) {
                $item = new Alumno();
                $item->matricula = $row['matricula'];
                $item->name = $row['name'];
                $item->last_name = $row['last_name'];

                array_push($items, $item);
            }
            //var_dump($items);
            return $items;
        } catch (PDOException $e) {
            print_r($e->getMessage());
            return [];
        }
    }
}
