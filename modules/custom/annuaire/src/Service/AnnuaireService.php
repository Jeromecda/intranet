<?php
namespace Drupal\annuaire\Service;

use Symfony\Component\ldap\Ldap;
use Drupal\annuaire\Model;

/**
 * Class AnnuaireService
 * @package Drupal\annuaire\Service
 */
class AnnuaireService
{
    public function hello()
    {
        return "Salut Monde !";
    }

    public function callAnnuaire()
    {
        $imagerie = new Service("Imagerie","4077","02 90 94 40 77", null, null);
        $reanimation = new Service("Réanimation","4073","02 90 94 40 73", null, null);
        $urgences = new Service("Urgences","4105","02 90 94 41 05", null, null);
        $cardiologie = new Service("Cardiologie","4070","02 90 94 40 70", null, null);
        $gynecologie = new Service("Gynécologie obstétrique","4200","02 90 94 42 00", "4264", "02 90 94 42 64");
        $pediatrie = new Service("Pédiatrie néonatologie","4076","02 90 94 40 76", null, null);
        $anesthesie = new Service("Anesthésie","4073","02 90 94 40 72", "4469", "02 90 26 44 69");
        $services = array($imagerie, $reanimation, $urgences, $cardiologie, $gynecologie, $pediatrie, $anesthesie);
        return $services;
        /* FONCTIONNEMENT DU COMPOSANT SYMFONY LDAP :

        SE CONNECTER AU SERVEUR LDAP SECURISE PAR STARTTLS
        $ldap = Ldap::create('ext_ldap', [
            'host' => 'my-server',
            'encryption' => 'ssl',
        ]);
        Ou
        $ldap = Ldap::create('ext_ldap', ['connection_string' => 'ldaps://my-server:636']);
        
        SE CONNECTER AVEC UN DN ET UN PASSWORD
        $ldap->bind($dn, $password);

        FAIRE DES REQUETES AU SERVEUR
        $query = $ldap->query('dc=symfony,dc=com', '&(objectclass=person)(ou=Maintainers))');
        $results = $query->execute();

        foreach ($results as $entry) {
            // Do something with the results
        }

        POUR RETOURNER DIRECTEMENT UN TABLEAU
        $results = $query->execute()->toArray();

        UTILISER L'OPTION "FILTER" POUR RECUPERER DES ATTRIBUTS SPECIFIQUES
        $query = $ldap->query('dc=symfony,dc=com', '...', ['filter' => ['cn', 'mail']);
        */
    }
}
