<?php 
class Developer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class FrondEndDeveloper extends Developer
{

}

class BackEndDeveloper extends Developer
{

}

class Company
{
    public Developer $developer;
}

function sayHelloDeveloper(Developer $developer)
{
    if($developer instanceof FrondEndDeveloper)
    {
        echo "Hello Frond end Developer $developer->name" . PHP_EOL;
    }elseif($developer instanceof BackEndDeveloper)
    {
        echo "Hello Back end Developer $developer->name" . PHP_EOL;
    }elseif($developer instanceof Developer)
    {
        echo "Hello Developer $developer->name" . PHP_EOL;
    }
}

$company = new Company();
$company->developer = new Developer('Prayoga Eka Ardiansyah');
var_dump($company);

$company = new FrondEndDeveloper("Putriajeng");
var_dump($company);

$company = new BackEndDeveloper("Prayogaea");
var_dump($company);

sayHelloDeveloper(new Developer("Prayoga Eka Ardiansyah"));
sayHelloDeveloper(new FrondEndDeveloper("Putriajeng"));
sayHelloDeveloper(new BackEndDeveloper("Prayogaea"));
?>