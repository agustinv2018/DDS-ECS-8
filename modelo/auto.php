<?php

class Auto
{
    public $Id;
    public $Marca;

    public static function BuscarTodos()
    {
        $con  = Database::getInstance();
        $sql = "select * from autos";
        $queryAutos = $con->db->prepare($sql);
        $queryAutos->execute();
        $queryAutos->setFetchMode(PDO::FETCH_CLASS, 'Auto');

        $listAutosADevolver = array();
        
        foreach ($queryAutos as $m) {
            $listAutosADevolver[] = $m;
        }

        return $listAutosADevolver;
    }

}
