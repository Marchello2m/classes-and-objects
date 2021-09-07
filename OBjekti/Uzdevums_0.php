<?php
class Person
{
    private string $name; //read only

private ?int $age;
private string $surname;
    public function __construct(string $name,string $surname ,?int $age =null)
    {
        $this->name=$name;
        $this->surname=$surname;
        $this->age=$age;

    }

    public function getName():string
    {

        return  $this->name;
    }
    public function setName(string $name):void
    {
        $this->name =$name;
    }
    public function getSurname(string $surname):string
    {
        return $this->surname=$surname;
    }

    public function getAge():?int
    {
        return $this->age;
    }
}
$persons =[
    new Person('jone','doe'),
    new Person('jone','doe'),
    new Person('jone','doe')

];

foreach ($persons as $person)
{
    echo "{$person->getName()} {$person->getSurname()} {$person->getAge()}".PHP_EOL;
}
