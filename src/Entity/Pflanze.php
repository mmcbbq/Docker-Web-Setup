<?php


class Pflanze
{
    private int $id;
    private string $name;
    private string $kaufdatum;
    private StandortEnum $standort;
    private int $bewasserung;
    private string $gegossen;

    public function getBewasserung(): int
    {
        return $this->bewasserung;
    }

    public function setBewasserung(int $bewasserung): void
    {
        $this->bewasserung = $bewasserung;
    }

    public function getGegossen(): string
    {
        return $this->gegossen;
    }

    public function setGegossen(string $gegossen): void
    {
        $this->gegossen = $gegossen;
    }

    public function getId(): int
    {
        return $this->id;
    }



    public function getKaufdatum(): string
    {
        return $this->kaufdatum;
    }

    public function setKaufdatum(string $kaufdatum): void
    {
        $this->kaufdatum = $kaufdatum;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getStandort(): StandortEnum
    {
        return $this->standort;
    }

    public function setStandort(string $standort): void
    {
        $this->standort = StandortEnum::from($standort);
    }

    }