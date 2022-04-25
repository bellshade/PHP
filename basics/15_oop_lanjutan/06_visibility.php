<?php 
class Product
{
    protected $name;
    protected $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

class Food extends Product
{
    public function info()
    {
        echo "Name: {$this->name}" . PHP_EOL;
        echo "Price: {$this->price}" . PHP_EOL;
    }
}

$product = new Product("Apple", 12000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$food = new Food("Salmon", 10000);
$food->info();
?>