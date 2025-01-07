<?php
var_dump($_SERVER["PHP_SELF"]); #sier hvilken fil vi er i.
$self = $_SERVER["PHP_SELF"];
var_dump(strpos($self, "home"));# sier noe om hvilke streng vi finner i $self
var_dump(strpos($self, "about"));# hvilken int vi er på. så med denne måten vet vi hvilken side vi er på og kan redigere fks stylingen på dem. 
?>
<nav>
<ul>
<li <?php if (strpos($self, "home")) {
echo "style='color: lightgrey'";
} ?>>
<a href="home.php">Home</a>
</li>
<li <?php if (strpos($self, "about")) {
echo "style='color: lightgrey'"; }
?>>
<a href="about.php">About</a>
</li>
</ul>
</nav>