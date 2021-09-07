<?php
/*
 *


    Change the dog class to include a method fathersName that return the name of the father. If the father reference is null, return "Unknown".
 Test in the DogTest main method that it works.

        referenceToCoco.FathersName() returns the string "Buster"
        referenceToSparky.FathersName() returns the string "Unknown"
    Change the dog class to include a method boolean HasSameMotherAs(Dog otherDog). The method should return true on the call
        referenceToCoco.HasSameMotherAs(referenceToRocky). Show that the new method works in the DogTest main method.

 *
 */

class Dog
{
    private string $name;
    private string $sex;
    private string $mother;
    private string $father;

    public function __construct(string $name, string $sex, string $mother, string $father)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;
    }

    public function getName($DogTest): string
    {
        return $this->name;
    }

    public function getSex($DogTest): string
    {
        return $this->sex;
    }

    public function getFather($DogTest): string
    {
        if ($this->father == ''){
            echo  "Unknown Father" ;
            echo PHP_EOL;
        }
        return $this->father;

    }



    public function getMother($DogTest): string
    {if ($this->mother == ''){
        echo  "Unknown Mother" ;
        echo PHP_EOL;
    }
        return $this->mother;
    }







}
$DogTest=[
    new Dog( 'Max', 'male','Lady','Rocky'),
    new Dog(   'Rocky', 'male','Molly','Sam' ),
    new Dog(   'Sparky', 'male','',''),
    new Dog('Buster', 'male','Lady','Sparky '),
    new Dog('Sam', 'male','',''),
    new Dog('Lady', 'female','',''),
    new Dog( 'Molly', 'female','',''),
    new Dog(        'Coco' ,'female','Molly','Buster')
];
foreach ($DogTest as $dog)
{
    echo "Dog name {$dog->getName($DogTest)} and its {$dog->getSex($DogTest)}.Father name  {$dog-> getFather($DogTest)} .And Mother is {$dog->getMother($DogTest)} ".PHP_EOL;
}




