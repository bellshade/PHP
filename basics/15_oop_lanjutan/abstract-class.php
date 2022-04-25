<?php
abstract class Person
{
    private $name,
            $age,
            $address;

    public function __construct(
        $name = "name",
        $age = "age",
        $address = "address"
    )
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    abstract public function getDataPerson();

    public function getPerson()
    {
        $str = "{$this->name} {$this->age} {$this->address}";
        return $str;
    }
}

class Programmer extends Person
{
    public $country;

    public function __construct(
        $name = "name",
        $age = "age",
        $address = "address",
        $country = 0
    )
    {
        parent::__construct($name, $age, $address);

        $this->country = $country;
    }

    public function getDataPerson()
    {
        $str = "Person: " . $this->getPerson() . ' ' . $this->country;
        return $str;
    }
}

class CetakData
{
    public $list_data = array();

    public function addData(Person $data)
    {
        $this->list_data[] = $data;
    }

    public function cetakData()
    {
        foreach ($this->list_data as $d) {
            $str = "{$d->getDataPerson()}";
        }
        return $str;
    }
}

$person = new Programmer("\nBellshade", "\n". 21, "\nMalang", "\nIndonesia");

$cetakData = new CetakData();
$cetakData->addData($person);
echo $cetakData->cetakData();
?>