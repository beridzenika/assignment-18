<?php

class HomeModel extends Database {
    
    public function getHomeCategories() {
        $stm =$this->connection->query('SELECT * FORM categories WHERE home = 1');
        $stm->execute();
        return $stm->fetchAll();
    }
    public function getHomeNews() {
        $stm =$this->connection->query('SELECT * FORM news WHERE home = 1');
        $stm->execute();
        return $stm->fetchAll();
    }
}