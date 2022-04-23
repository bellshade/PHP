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

    public function set_name($name)
    {
        $this->name = $name;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function set_age($age)
    {
        $this->age = $age;
    }

    public function get_age()
    {
        return $this->age;
    }

    public function set_address($address)
    {
        $this->address = $address;
    }

    public function get_address()
    {
        return $this->address;
    }

    abstract public function get_data_person();

    public function get_person()
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

    public function get_data_person()
    {
        $str = "Person: " . $this->get_person() . ' ' . $this->country;
        return $str;
    }
}

class CetakData
{
    public $list_data = array();

    public function add_data(Person $data)
    {
        $this->list_data[] = $data;
    }

    public function cetak_data()
    {
        foreach ($this->list_data as $d) {
            $str = "{$d->get_data_person()}";
        }
        return $str;
    }
}

$person = new Programmer("\nprayogaea", "\n". 21, "\nMalang", "\nIndonesia");

$cetakData = new CetakData();
$cetakData->add_data($person);
echo $cetakData->cetak_data();
?>