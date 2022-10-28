<?php

namespace Drupal\annuaire\Model;

class BaseDao {

    protected $host = "172.16.183.194";
    protected $dbname = "intranet";
    protected $user = "postgres";
    protected $password = "1234";

    public function dbConnect() {
        try {
            $db = new PDO("pgsql:host=$this->host; dbname=$this->dbname", $this->user, $this->password);
            $db->exec('SET CHARACTER SET utf8');
            return $db;
        } catch(PDOException $e) {
            echo 'Problème de connexion : ' . $e->getMessage();
        }
    }
}