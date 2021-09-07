<?php
/*
 * A soft drink company recently surveyed 12,467 of its customers and found that approximately 14 percent of
 * those surveyed purchase one or more energy drinks per week. Of those customers who purchase energy drinks,
 *  approximately 64 percent of them prefer citrus flavored energy drinks.

Write a program that displays the following:

    The approximate number of customers in the survey who purchased one or more energy drinks per week
    The approximate number of customers in the survey who prefer citrus flavored energy drinks

 *
 */

$surveyed = 12467;
$purchasedEnergyDrinks = 0.14;
$preferCitrusDrinks = 0.64;
class Drink
{
   private int $surveyed;
  private bool $purchasedEnergyDrinks;
  private bool $preferCitrusDrinks;


    public function __construct(int $surveyed = 12467 ,  $purchasedEnergyDrinks =0.14, $preferCitrusDrinks = 0.64)
    {
        $this->surveyed=$surveyed;
        $this->purchasedEnergyDrinks= $purchasedEnergyDrinks;
        $this->preferCitrusDrinks=$preferCitrusDrinks;
    }

    public function getSurveyed(): int
    {
        return $this->surveyed;
    }
    function calculateEnergyDrinkers(int $surveyed)
    {
        if ( $surveyed >= 0 ) {
            return round(($surveyed * 100) / $surveyed, 2);
        } else {
            return 0;
        }
    }

    function calculateCreferCitrus(int $surveyed,$preferCitrusDrinks )
    {
        if ( $surveyed > 0 ) {
            return round(($preferCitrusDrinks * 100) / $surveyed, 2);
        } else {
            return $this->preferCitrusDrinks;
        }
    }




}


$drink = new Drink();
$purchasedEnergyDrinks = 0.14;
$surveyed = 12467;
$preferCitrusDrinks = 0.64;
echo  "Total number of people surveyed  {$drink->getSurveyed()}".PHP_EOL;


echo "Approximately  {$drink-> calculateEnergyDrinkers($surveyed)}   bought at least one energy drink".PHP_EOL;

echo "  {$drink->calculateCreferCitrus( $surveyed,$preferCitrusDrinks )}  of those prefer citrus flavored energy drinks.".PHP_EOL;
