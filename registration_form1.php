<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vaccine Registration Form</title>
</head>
<body>
    <h2>Vaccine Registration Form</h2>
    <p>Please fill in this form and send us.</p>
    <form action="registration_form1.php" method="post">
        <p>
            <label for="inputName">Name:<sup>*</sup></label>
            <input type="text" name="name" id="inputName">
        </p>
        <p>
            <label for="inputEmail">Email:<sup>*</sup></label>
            <input type="text" name="email" id="inputEmail">
        </p>
        <p>
            <label for="inputSubject">Contact Number:</label>
            <input type="text" name="subject" id="inputSubject">
        </p>
		<p>
			Gender:
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
		</p>
		
        <input type="submit" name="submit_btn" value="Submit">
        <input type="reset" value="Reset">
    </form>
	
	<?php
		if(isset($_POST['submit_btn']))
		{
		  $name=$_POST['name'];
		  $email=$_POST['email'];
		  $subject=$_POST['subject'];
		  $gender=$_POST['gender'];
		  $text = $name . "," . $email . "," . $subject . "," . $gender .  "\n";
		  $fp = fopen('form.txt', 'a+');
		  fwrite($fp, $text);
		  fclose ($fp);    
		}
	?>
</body>
</html>