<html>
<head>
<meta name="viewport" content="width=device-width" />
<title>Grupo3 Home Control</title>
<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
</head>
<body bgcolor="#673bb">
	<h1 style="color: white">Grupo3  Home Control</h1>
<font color="white">LED 1:</font>
<form method="get" action="index.php">
<input type="submit" class="button" value="ON 1" name="on">
<input type="submit" class="button" value="OFF 1" name="off">
</form>
	<font color="white">LED 2:</font>
<form method="get" action="index.php">
<input type="submit" class="button" value="ON 2" name="on2">
<input type="submit" class="button" value="OFF 2" name="off2">
</form>
	<font color="white">LED 3:</font>
<form method="get" action="index.php">
<input type="submit" class="button" value="ON 3" name="on3">
<input type="submit" class="button" value="OFF 3" name="off3">
</form>
	<font color="white">LED 4:</font>
<form method="get" action="index.php">
<input type="submit" class="button" value="ON 4" name="on4">
<input type="submit" class="button" value="OFF 4" name="off4">
</form>
<?php
         $setmode4 = shell_exec("gpio17  mode 7 out");
	 $setmode17 = shell_exec("gpio17  mode 0 out");
	 $setmode27 = shell_exec("gpio17  mode 2 out");
	 $setmode22 = shell_exec("gpio17  mode 3 out");
         if(isset($_GET['on'])){
                 $gpio_on = shell_exec("gpio write 7 0");
                 echo '<p style="color: white">LED 1 is on</p>';
         }
         else if(isset($_GET['off'])){
                 $gpio_off = shell_exec("gpio write 7 1");
                 echo '<p style="color: white">LED 1 is off</p>';
         }else if(isset($_GET['on2'])){
                 $gpio_off = shell_exec("gpio write 0 0");
                 echo '<p style="color: white">LED 2 is on</p>';
         }else if(isset($_GET['off2'])){
                 $gpio_off = shell_exec("gpio write 0 1");
                 echo '<p style="color: white">LED 2 is off</p>';
         }else if(isset($_GET['on3'])){
                 $gpio_off = shell_exec("gpio write 2 0");
                 echo '<p style="color: white">LED 3 is on</p>';
         }else if(isset($_GET['off3'])){
                 $gpio_off = shell_exec("gpio write 2 1");
                 echo '<p style="color: white">LED 3 is off</p>';
         }else if(isset($_GET['on4'])){
                 $gpio_off = shell_exec("gpio write 3 0");
                 echo '<p style="color: white">LED 4 is on</p>';
         }else if(isset($_GET['off4'])){
                 $gpio_off = shell_exec("gpio  write 3 1");
                 echo '<p style="color: white">LED 4 is off</p>';
         }
         ?>
</body>
</html>
