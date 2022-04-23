<?php 
class Student
{
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    public function setSample(string $sample): void
    {
        $this->sample = $sample;
    }

    public function __clone()
    {
        unset($this->sample);
    }

    public function __toString(): string
    {
        return "Student id:{$this->id}, Name:{$this->name}, Value:{$this->value}";
    }

    public function __invoke(...$arguments): void
    {
        $join = join(",", $arguments);
        echo "Invoke student with arguments $join" . PHP_EOL;
    }

    public function __debugInfo()
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sample" => $this->sample,
            "author" => "prayogaea",
            "version" => "1.0.0"
        ];
    }
}

$student1 = new Student();
$student1->id = "1";
$student1->name = "Ajeng";
$student1->value = 100;
$student1->setSample("Cantik");

var_dump($student1);

$student2 = clone $student1;
var_dump($student2);

// cara manual clone
// $student2 = new Student();
// $student2->id = $student1->id;
// $student2->name = $student1->name;
// $student2->value = $student1->value;

// $student1 => clone $student2 => $student2->__clone();
?>