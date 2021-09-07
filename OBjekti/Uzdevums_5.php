<?php

class Date
{
    private int $month;
    private int $day;
    private int $year;
    public function __construct(int $month,int $day,int $year)
    {
$this->month=$month;
$this->day=$day;
$this->year=$year;
    }

    public function setMonth(int $month): void
    {
        $this->month = $month;
    }
    public function setDay(int $day): void
    {
        $this->day = $day;
    }

    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function getDay(): int
    {
        return $this->day;
    }

    public function getYear(): int
    {
        return $this->year;
    }
    public function  DisplayDate():string
    {
        return "$this->month/$this->day/$this->year";
    }

}
$DateTest =[
    new Date(01,04,1990),
    new Date(03,14,1879),
    new Date(10,23,1994)
];
foreach ($DateTest as $DateTes){
    echo  "{$DateTes->DisplayDate()}".PHP_EOL;
}