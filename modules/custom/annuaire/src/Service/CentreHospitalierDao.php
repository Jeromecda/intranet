<?php

namespace Drupal\annuaire\Model;

class CentreHospitalier extends BaseDao {

    // Récupérer tous les centres
    public function getAllCentres() {
        $db = $this->dbConnect();
        $req = $db->query("SELECT * FROM centre_hospitalier");
        $result = $req->fetchAll();
        return $result;
    }
}