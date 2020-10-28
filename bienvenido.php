<!DOCTYPE HTML>
<html>
<body>

Welcome <?php echo $_POST["fullname"]; ?><br>
Your Password is: <?php echo $_POST["password"]; ?><br>
Keep it safe and don't forget it!<br>

Here's what describes you in brief: <br><?php echo $_POST["description"]; ?><br>
You are a <?php echo $_POST["gender"]; ?> born on the <?php echo $_POST["Day"]; ?> <?php echo $_POST["Month"]; ?> of the year <?php echo $_POST["Year"]; ?><br>

The profile picture you selected is the one below: <?php echo $_POST["img"]; ?><br>

We are delighted to count YOU as a Madridista from now on!

</body>
</html>
