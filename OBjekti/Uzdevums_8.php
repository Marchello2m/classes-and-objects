<?php

class SavingsAccount
{
    public int $balance;
    private int $deposite;
    private int $rate;

    public function __construct(int $balance, int $deposite ,int $rate=4)
    {
        $this->balance=$balance;
        $this->deposite = $deposite;
        $this->rate = $rate;
    }

    public function getWithDraw($withdraw): int
    {

        return $this->balance -= $withdraw;
    }


    public function getDeposit(): int
    {
       return $this->balance+= $this->deposite;

    }
    public function monthly($months)
    {
        for ($i = 0; $i < $months; $i++)
        {

   $this->getDeposit();
            $this->getWithDraw();


        }
    }


}

$input = (int)readline("Enter your starting balance: ") . PHP_EOL;

$input= new SavingsAccount(200,2000,4);

$months = (int)readline("How long has the account been opened?: ") . PHP_EOL;


$withdraw = (int)readline("Enter amount withdrawn for month: ") . PHP_EOL;

$deposit = (int)readline("Enter amount deposited for month: ") . PHP_EOL;

$bilance=new SavingsAccount(2,2,2,);
$bilance->getDeposit();
       echo "Monthly rate :  " . $bilance->monthly(2,2) . PHP_EOL;
        echo "Yearly : " . $bilance->getDeposit(2) . PHP_EOL;
        echo $bilance->monthly(2,2) + $bilance->getDeposit(2) . PHP_EOL;
