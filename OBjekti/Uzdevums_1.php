<?php

class Product{
    private string $name;
private int $amount;
private int $price;
    public function __construct(string $name, string $amount , float $startPrice)
    {
        $this->name=$name;
        $this->amount=$amount;
        $this->price=$startPrice;

    }
    public function printProduct():string
    {

        return " $this->name , amount $this->amount ,price $this->price EUR";
    }
    public function setQuantity(int $amount):void
    {
        $this->amount=$amount;
    }
    public function setPrice(float $startPrice):void
    {
        $this->price=$startPrice;
    }

}
$products =[
    new product("Logitech mouse",14,70.00 ),
    new product( "iPhone 5s",3,999.99 ),
    new product( "Epson EB-U05",1,440.46),

];
foreach ($products as $product)
{
    echo "{$product->printProduct()}".PHP_EOL;
}
$products[2]->setQuantity(5);


echo "-------------------------------------".PHP_EOL;
foreach ($products as $product)
{
    echo "{$product->printProduct()}".PHP_EOL;
}
