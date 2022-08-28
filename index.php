<?php
{
echo "I am PHP";
}
?>

<html>
<head>
<title>Contact Form - PHP/MySQL Demo Code</title>
</head>

<body>
<fieldset>
<legend>Contact Form</legend>
<form align = "center" name="frmContact" method="get" action="index.php">
<p>
<label for="Name">Employee Name </label>
<input type="text" name="txtName" id="txtName">
</p>
<p>
<label for="email">Employee Email</label>
<input type="text" name="txtEmail" id="txtEmail">
</p>
<p>
<label for="phone">Employee Phone</label>
<input type="text" name="txtPhone" id="txtPhone">
</p>
<p>
<label for="Address">Employee Address</label>
<textarea name="txtAddress" id="txtAddress"></textarea>
<p>&nbsp;</p>
<p>
<input type="submit" name="Submit" id="Submit" value="Submit">
</p>
</form>
</fieldset>
</body>
</html>