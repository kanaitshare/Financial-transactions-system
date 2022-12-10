<?php

 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);

abstract class Client
{
  protected $numMoney;
  protected $accounts = [];

  public function getAccount($name) : Account
  {
    foreach ($this->accounts as $account) {
      if ($account->getName() === $name) {
        return $account;
      }
    }
    return null;
  }

  }



  class NaturalPerson extends Client {
      private $firstName;
      private $lastName;
      private $ssn;

      public function __construct($firstName, $lastName, $ssn, $numMoney)
      {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->ssn = $ssn;
        parent::__construct($numMoney);
      }

      public function getName() : string
      {
       return $this->firstName . ' ' . $this->lastName;
      }

    }


class AccountOperationLog
{
  private $type;
  private $date;
  private $amount;
  private $numMoneyAfter;

  public function __construct($type, $date, $amount, $numMoneyAfter)
  {
    $this->type = $type;
    $this->date = $date;
    $this->amount = $amount;
    $this->numMoneyAfter = $numMoneyAfter;
  }

  private function saveToDB()
  {
    // Implement later
  }
}

class TransferLog extends AccountOperationLog
{
  private $title;
  private $sender;
  private $beneficiary;

  public function __construct($type, $title, $date, $amount, $numMoneyAfter, $sender, $beneficiary)
  {
    parent::__construct($type, $date, $amount, $numMoneyAfter);
    $this->title = $title;
    $this->sender = $sender;
    $this->beneficiary = $beneficiary;
  }
}


class BankAccount extends Client {

    public $balance = 0;
    private $name='Bob';
    private $date;
    protected $accounts = [];
    private $client;
    private $numMoney = 0;
  private $debt;
  private $history = [];

    public function __construct($client, $name)
  {
    $this->client = $client;
    $this->name = $name;
  }

    public function getName(): string{
        return $this->name;
    }

    public function getNumMoney() : float
  {
    return $this->numMoney;
  }

  public function getHistory() : array
  {
    return $this->history;
  }

  public function addNumMoney($amount)
  {
    $this->numMoney += $amount;
  }

  public function substractNumMoney($amount)
  {
    $this->numMoney -= $amount;
  }

    public function getData(): array
    {
        return [
            'author' => $this->author->fullName(),
            'title' => $this->title,
            'content' => $this->content,
            'timestamp' => $this->date->getTimestamp(),
        ];
    }

    public function getBalance(): string {
        if(($this->balance) > 0){
            return 'Current Balance: '.$this -> balance."<br />";

        } else if(($this->balance) <= 0 ){
            return 'Balance is empty <br />';
        }else{
            return 'error';
        }
    }
        public function Deposit($amount) {
        echo 'Balance after Deposit:';
        $this->balance = $this->balance + $amount;
        echo $this->balance."<br />";
    }


    public function Withdraw($amount) {

        if(($this->balance) < $amount){
            echo 'Not enough funds to withdraw. <br />';

        } else{
            $this->balance = $this->balance - $amount;
            echo 'Balance after Withdrawal: ';
            echo $this->balance."<br />";
        }
    }

    public function addAccountOperationLogToHistory($type, $date, $amount, $moneyAfter)
  {
    $operationLog = new AccountOperationLog(...func_get_args());
    array_push($this->history, $operationLog);
  }

  public function addTransferLogToHistory($type, $name, $date, $amount, $moneyAfter, $sender, $beneficiary)
  {
    $operationLog = new TransferLog(...func_get_args());
    array_push($this->history, $operationLog);
  }




    public function transferMoney($account, $title, $amount) {
        if ($this->numMoney < $amount) {
          return;
        }

        $this->substractNumMoney($amount);
        $account->addNumMoney($amount);

       $this->addTransferLogToHistory('Transfer', $title, 'today', $amount, $this->numMoney, $account->client->getName(), $this->client->getName());
       $account->addTransferLogToHistory('Transfer', $title, 'today', $amount, $account->getNumMoney(), $this->client->getName(), $account->client->getName());

    }

}

//Instance of class
    $bank = new BankAccount;

    //Get Balance
    echo $bank ->getBalance();
    //Deposit
    echo $bank ->Deposit(50);

    //Withdraw
    echo $bank ->Withdraw(30);
     //Get Balance
    echo $bank ->getBalance();

    echo $bank ->getAccount("Kana");
?>