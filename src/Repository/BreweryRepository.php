<?php

namespace App\Repository;

use App\Entity\Brewery;
use PDO;

class BreweryRepository
{
    private PDO $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:dbname=beer_lover;host=localhost','root');
    }

    public function findAll(): array
    {
        $stmt = $this->db->prepare('SELECT * FROM brewery');
        $stmt->execute();
        $entries = $stmt->fetchAll();

        $breweries = [];
        foreach ($entries as $entry) {
            $brewery = new Brewery();
            $brewery->setId($entry['id']);
            $brewery->setName($entry['name']);
            $breweries[] = $brewery;
        }

        return $breweries;
    }
}
