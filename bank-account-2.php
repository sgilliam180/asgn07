<html>
<head>
	<title>Bank Account - OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"/>
</head>

<body>
	<h1>Bank Account</h1>
<?php

  include('inc-bank-account-object.php');
  
  $account2 = new BankAccount();
    
  $account2->setAccountBalance(2000);
  
  if ($account2->getAccountBalance() < 1000)
  {
    print("<p>You've only saved ".$account2->getAccountBalance()." You need to save more.</p>");
  }
  else 
  {
    print("<p>Great job. You've established the start of an emergency fund.</p>");
  }
?>
</body>
</html>