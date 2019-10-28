<!DOCTYPE html>
<!--	Author: Sidney Gilliam
		Date:	October 27, 2019
		File:	software-order.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>

<body>
	<h1>Software Order</h1>
<?php

	include('inc-order-object.php');
    
    $cost = $_POST['cost'];
    $items = $_POST['items'];
  
    $order = new Order;
  
    $order->setItemCost($cost);
    $order->setNumItems($items);
  
    $subTotal = $order->getSubTotal($order);
    $tax = $order->getSalesTax($order);
    $shippingHandling = $order->getShippingHandling($order);
    $total = $order->getTotal($order);

	print("	<table>
			<tr><td>Sub-Total:</td><td>$subTotal</td></tr>
			<tr><td>Tax:</td><td>$tax</td></tr>
			<tr><td>Shipping and Handling:</td><td>$shippingHandling</td></tr>
			<tr><td>TOTAL:</td><td>$total</td></tr>
			</table>");
?>
</body>
</html>