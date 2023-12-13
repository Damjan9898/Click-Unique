<?php
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$errorEmpty = false;
		$errorName = false;
		$errorEmail = false;
		$errorMessage = false;

		if(empty($name) || empty($email) || empty($message)){
			echo "<span class='form-error' style='color:red;'>! Fill in all the fields !</span>";
			$errorEmpty = true;
		}
		elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
			echo "<span class='form-error' style='color:red;'>Write a valid email.</span>";
			$errorEmail = true;
		}
		elseif (!preg_match ("/^[A-Za-z]+( [A-Za-z]+)+$/", $name) ) {
             echo "<span class='form-error' style='color:red;'>Use the alphabet.</span>";
			 $errorName = true;
		}
		elseif (!preg_match ("/^[A-z!?_\.\-,\/():\s\n]+$/", $message) ) {
             echo "<span class='form-error' style='color:red;'>You have used an illegal character.</span>";
			 $errorMessage = true;
		}
		else{
			$mailTo = "clickuniq@gmail.com";
			$subject = "Kontakt forma sa sajta";
			$headers = "From: ".$email;
			$txt = "Poruka poslata sa sajta TVOJ PROGRAMER.\n\n Poruku poslao: ".$name."\n\n Mail: ".$email."\n\n".$message;

			mail($mailTo, $subject, $txt, $headers);
			echo "<span class='form-success' style='color:green;'>Message sent successfully.</span>";
		}
	}
	else{
		echo "<span style='color:red;'>An error has occurred!</span>";
	}
?>
<script>
$("#ImePrez, #Mail, #Poruka").removeClass("input-error");

		var errorEmpty = "<?php echo $errorEmpty; ?>";
		var errorName = "<?php echo $errorName; ?>";
		var errorEmail = "<?php echo $errorEmail; ?>";
		var errorMessage = "<?php echo $errorMessage; ?>";


		if(errorName == true){
			$("#ImePrezeng").addClass("input-error");
		}
		if(errorEmail == true){
			$("#Maileng").addClass("input-error");
		}
		if(errorMessage == true){
			$("#Porukaeng").addClass("input-error");
		}
		if(errorEmpty == false && errorName == false && errorEmail == false && errorMessage == false){
			$("#ImePrezeng, #Maileng, #Porukaeng").val("");
		}


</script>
