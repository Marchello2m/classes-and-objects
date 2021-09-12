<?php
class BankAccount
{
    private string $name;
    private float $balance;

    public function __construct(string $name, float $balance)
    {

        $this->name = $name;
        $this->balance = $balance;
    }

    public function showUserNameAndBalance(): string
    {
        $nameBalance = number_format($this->balance, 2, '.', '');
        if ($nameBalance > 0) {
            return "$this->name, $nameBalance$";
        } else {
            return $this->name . ', ' . $nameBalance;
        }
    }
}
$ben = new BankAccount("Benson", 17.25);
echo $ben->showUserNameAndBalance() . PHP_EOL;

$ben = new BankAccount("Benson", -10);
echo $ben->showUserNameAndBalance() . PHP_EOL;
$ben = new BankAccount("Benson", 17.5);
echo $ben->showUserNameAndBalance() . PHP_EOL;
