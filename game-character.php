<html>
<head>
	<title>Game Character - OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"/>
</head>

<body>
	<h1>Game Character</h1>
<?php

  include('inc-game-character-object.php');
  
  $player1 = new GameCharacter();
  $player2 = new GameCharacter();
  
  $player1->setPlayerName('Dragon');
  $player2->setPlayerName('Princess');
  
  $player1->setScore(25);
  $player2->setScore(50);
	
  if ($player1->getScore() > $player2->getScore()) 
  {
    print("<p>The winner is ".$player1->getPlayerName()."</p>");
  }
  else 
  {
    print("<p>The winner is ".$player2->getPlayerName()."</p>");
  }  
?>
</body>
</html>