<?php
class   BankAccount{
    public $balance;
    public function deposit($money){
        $this->balance = $this->balance + $money;
    }
    public function withdraw($money){
        $this->balance = $this->balance - $money;
    }
    public function checkbalance(){
        return $this->balance;
    }
}

$b = new BankAccount();


$key = true;
while($key){
    echo "Com: ";
    $com = trim(fgets(STDIN));
    if($com == 1){
        echo 'Summa: ';
        $sum = trim(fgets(STDIN));
        $b->deposit($sum);
    }elseif($com==2){
        echo $b->checkbalance()."\n";
    }else{
        $key = false;
    }
}




?>