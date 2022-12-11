<?php
class Accounts {
    public $balance = 0;
    private $name='Bob';
    private $date;
    protected $accounts = [];
    private $client;
    private $numMoney = 0;
    private $debt;
    private $data;
    private $account_name;
    private $account_number;
    private $acc_type='Savings';
    private $acc_balance= 0;
    private $customerId;
    private $bank_name='ABBC Bank';
    private $country='UAE';

    public function __construct($client, $name)
    {
       //Initialize the constructor data
       $this->client = $client;
       $this->name = $name;
    }

    // get all accounts in the system
    public function getAllAccounts()
    {
        //Fetch the relevant data and get the array format result
        $this->accounts = [
            ['account_name' => 'Ram', 'account_number' => '45678765', 'account_type' => $this->acc_type,
            'account_balance' => 100,'date_created' => date('Y-m-d H:i:s')],
            ['account_name' => 'Bene', 'account_number' => '98765432', 'account_type' => $this->acc_type,
            'account_balance' => 300, 'date_created' => date('Y-m-d H:i:s')],
            ['account_name' => 'Hemz', 'account_number' => '5456765', 'account_type' => $this->acc_type,
            'account_balance' => 500, 'date_created' => date('Y-m-d H:i:s')]
        ];
        //return the data as an json array
        return json_encode($this->accounts);
    }

    //Fetch the relevant data and get the array format result
    public function getBalance($account_number): string {
        foreach($this->accounts as $val){
            if($val['account_number'] == $account_number){
                $this->balance = $val['account_balance'];
            }
        }

        if(($this->balance) > 0){
            return 'Current Balance: '.$this -> balance."<br />";

        } else if(($this->balance) <= 0 ){
            return 'Balance is empty <br />';
        }else{
            return 'error';
        }
    }

    //Deposit of a specific account
    public function Deposit($account_number, $amount)
    {
        echo 'Balance after Deposit of the account_number ('.$account_number.') is : ';
        $this->balance = $this->balance + $amount;
        echo $this->balance."<br />";
    }

    //Withdraw of a specific account
    public function Withdraw($account_number, $amount)
    {
        if(($this->balance) < $amount){
            echo 'Not enough funds to withdraw. <br />';

        } else{
            $this->balance = $this->balance - $amount;
            echo 'Balance after Withdrawal of the account_number ('.$account_number.') is : ';
            echo $this->balance."<br />";
        }
    }
}


    class AccountTransaction
    {
      private $accNo;
      private $type;
      private $duedate;
      private $amount;
      private $comment;
      private $numMoneyAfter;
      private $allAccTxn = [];

     public function __construct($accNo, $type, $duedate, $amount, $comment, $numMoneyAfter)
      {
        //Initialize the constructor data
        $this->accNo = $accNo;
        $this->type = $type;
        $this->duedate = $duedate;
        $this->amount = $amount;
        $this->comment = $comment;
        $this->numMoneyAfter = $numMoneyAfter;
      }

      // get all transactions for specific account
      public function getAccTxn($accNo)
        {
            $this->allAccTxn = [
                ['accNo' => $accNo, 'type' => 'xxxx', 'numMoneyAfter' => 75, 'comment' => 'comment5',
                'amount' => 300,'duedate' => date('2022-11-08 15:26:25')],
                ['accNo' => $accNo, 'type' => 'xxxx', 'numMoneyAfter' => 12, 'comment' => 'comment1',
                'amount' => 500,'duedate' => date('2022-10-01 15:26:25')],
                ['accNo' => $accNo, 'type' => 'xxxx', 'numMoneyAfter' => 89, 'comment' => 'comment3',
                'amount' => 700,'duedate' => date('2022-11-10 15:26:25')]
            ];

            return json_encode($this->allAccTxn);
        }
    }


    class TransferDetails extends AccountTransaction
    {
      private $title;
      private $sender;
      private $beneficiary;
      private $allTxn = [];

      public function __construct($type, $title, $duedate, $amount, $numMoneyAfter, $sender, $beneficiary)
      {
        //Initialize the constructor data
        $this->title = $title;
        $this->sender = $sender;
        $this->beneficiary = $beneficiary;
      }

      // get all transactions for all accounts
      public function getTxnDetails()
        {
            $this->allTxn = [
                ['account_type' => 'type1', 'title' => 'test title1', 'duedate'  => date('2022-08-12'), 'amount' => 200,
                'numMoneyAfter' => 700, 'sender' => 'sender1', 'beneficiary' => 'Bob'],
                ['account_type' => 'type2', 'title' => 'test title3', 'duedate'  => date('2022-09-10'), 'amount' => 100,
                'numMoneyAfter' => 900, 'sender' => 'sender3', 'beneficiary' => 'John'],
                ['account_type' => 'type3', 'title' => 'test title2', 'duedate'  => date('2022-10-02'), 'amount' => 300,
                'numMoneyAfter' => 800, 'sender' => 'sender2', 'beneficiary' => 'Bene']
            ];
            return json_encode($this->allTxn);
        }

    }
    //Instance of class
    $bank = new Accounts("client1", "Bob");

    // get all accounts in the system
    $allAcc = $bank ->getAllAccounts();
    echo "<h3>Get All Account details</h3>";
    echo "<pre>"; print_r($allAcc);

    //Get Balance of a specific account
    echo "<h3>Get the Balance of a specific account</h3>";
    echo $bank ->getBalance('45678765');

    //Deposit of a specific account
    echo "<h3>Deposit of a specific account</h3>";
    echo $bank ->Deposit('654121322', 50);

    //Withdraw of a specific account
    echo "<h3>Withdraw of a specific account</h3>";
    echo $bank ->Withdraw('23453434', 30);

    //Instance of AccountTransaction class
    $accTxn = new AccountTransaction('45678971', 'type1', '2022-10-09', 300, 'Test comment1', 280);

    // get all transactions for specific account
    echo "<h3>get all transactions for specific account</h3>";
    $allAccTxn = $accTxn ->getAccTxn('2345676');
    echo "<pre>"; print_r($allAccTxn);

    $allAccTxn = (array)$allAccTxn;
    //get all account transactions sorted by comment in alphabetical order
    usort($allAccTxn, function ($a, $b) { return strcmp($a["comment"], $b["comment"]); });
    echo "<h3>get all account transactions sorted by comment in alphabetical order</h3>";
    echo json_encode($allAccTxn)."<br />";

    //get all account transactions sorted by date
    // @codingStandardsIgnoreEnd
    usort($allAccTxn, function ($a, $b) { return strcmp($a["date"], $b["date"]); });
    echo "<h3>get all account transactions sorted by date</h3>";
    echo "<pre>".json_encode($allAccTxn)."<br />";

     //Instance of TransferDetails class
    $alltxn = new TransferDetails("type1", 'title1', '2022-10-09', 300, 500, 'sender1', "Bob");

     // get all transactions for all accounts
    $allTxnDetails =  $alltxn ->getTxnDetails();
    echo "<h3>get all transactions for all accounts</h3>";
    echo "<pre>"; print_r($allTxnDetails);
?>