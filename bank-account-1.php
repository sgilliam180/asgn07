<html>
<head>
	<title>Bank Account - OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"/>
</head>

<body>
	<h1>Bank Account</h1>
<?php

  include('inc-bank-account-object.php');
  
  $account1 = new BankAccount();
  $account2 = new BankAccount();
  
  $account1->setAccountName('checking');
  $account2->setAccountName('savings');
  
  $account1->setAccountBalance(100);
  $account2->setAccountBalance(2000);
  
  $accountTotal = $account1->getAccountBalance() + $account2->getAccountBalance();

  print("<p>You have $$accountTotal.</p>");
?>
</body>
</html>