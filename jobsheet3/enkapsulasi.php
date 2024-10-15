<?php
// kelas bankacount
class BankAccount {
    // atribut untuk menyimpan balance
    private $balance;
    public function __construct($balance) {
        $this->balance = $balance;
    }
    //metode deposit untuk menambah saldo rekening
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }
    //metode withdraw untuk menarik saldo rekening
    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }
    //metode untuk mengambil nilai saldo saat ini
    public function getBalance() {
        return $this->balance;
    }
}

// membuat objek bankacount dengan saldo awal 1000
$account = new BankAccount(1000);
$account->deposit(500);
$account->withdraw(200);
echo "Current Balance: " . $account->getBalance(); // Output: Current Balance:
1300
?>