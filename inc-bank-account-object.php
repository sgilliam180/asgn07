<?php 
class BankAccount
{
    private $accountName;
    private $accountBalance;
  
	public function getAccountName()
	{
		return $this->accountName;
	}
	
	public function setAccountName($accountName)	
	{
		$this->accountName = $accountName;
	}
	
	public function getAccountBalance()
	{
		return $this->accountBalance;
	}
	
	public function setAccountBalance($accountBalance)	
	{
		$this->accountBalance = $accountBalance;
	}
}
?>
