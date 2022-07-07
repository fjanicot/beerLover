<?php

namespace App\Entity;

class Brewery
{
    private int $id;
    private string $name;
    private string $website;
    private string $country;

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setWebsite(string $website): void
    {
        $this->website = $website;
    }

    public function getWebsite(): string
    {
        return $this->website;
    }

    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    public function getCountry(): string
    {
        return $this->country;
    }
}
