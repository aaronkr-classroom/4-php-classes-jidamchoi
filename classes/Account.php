<?php 
/*
    classes/Account.php
    계좌 관리 클래스
*/
include_once('AccountNumber.php');

class Account {
    //계좌 속성
    public AccountNumber $acct_num;   // 정수
    public string $type;    // 문자열
    public float $balance;  // 실수

//생성자
public function __construct(
    AccountNumber $acct_num = null, string $type = '', float $balance = 0.0) {
        $this->acct_num = $acct_num ?? new AccountNumber();
        $this->type     = $type;
        $this->balance  = $balance;
    }
//계좌 메소드 _ 함수
    public function deposit(float $amount): float{
         // 예금에 대한 코드
         $this->balance += $amount;
        return $this->getBalance();

    }
    public function withdraw(float $amount): float{
        // 출금에 대한 코드
        $this->balance -= $amount;
        return $this->getBalance();
    }
    public function getBalance(): float {
        return $this->balance;
    }
}
?>