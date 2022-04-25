<?php 
interface Brands
{
    function getBrand(): string;
}

interface Maintenance
{
    function Maintenance(): bool;
}

interface Car extends Brands
{
    function drive(): void;

    function getTire(): int;
}

class Pajero implements Car, Maintenance
{
    public function drive(): void
    {
        echo "Drive Pajero Sport" . PHP_EOL;  
    }

    public function getTire(): int
    {
        return 5;
    }

    public function getBrand(): string
    {
        return "Mitsubishi";
    }

    public function Maintenance(): bool
    {
        return false;
    }
}

$car = new Pajero();
$car->drive();
?>