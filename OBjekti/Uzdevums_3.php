<?php
class FuelGauges
{
    private int $gallon;

    public function __construct(int $gallon=0)
    {
        $this->gallon=$gallon;
    }

    public function getGallon(): int
    {
        return $this->gallon;
    }
    public function gasUPVehicle():int
    {
        return $this->gallon++;
    }
    public function burnFuel():int
    {
        return $this->gallon--;
    }
}
class Odometer
{
    private int $mileage;
    private int $distance =0;
    private FuelGauges $gallon;

    public function __construct(int $mileage, FuelGauges $gallon)
    {
        $this->mileage=$mileage;
        $this->gallon=$gallon;
    }

    public function getMileage(): int
    {
        return $this->mileage;
    }

    public function incrementMileage():void
    {
        $this->distance++;
        if($this->mileage>=999){
            $this->mileage =0;
        }else{
            $this->mileage++;
        }

        if($this->distance % 10=== 0){
            $this->gallon->burnFuel();
        }
    }
}
$fuel =new FuelGauges();
if($fuel->getGallon()===0){
for($i=0;$i<=70;$i++){
    $fuel->gasUPVehicle();
}
}
$odometre =New Odometer(0,$fuel);

while ($fuel->getGallon()>0){
    $odometre->incrementMileage();
    echo "Mileage: ".$odometre->getMileage().PHP_EOL;
    echo "Fuel(gallon): ".$fuel->getGallon().PHP_EOL;
    echo "------".PHP_EOL;
}