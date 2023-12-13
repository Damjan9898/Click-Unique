<?php
	if(isset($_POST['submit'])){
    $forename = $_POST['forename'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];


		$errorEmpty = false;
		$errorForename = false;
    $errorSurname = false;
		$errorEmail = false;
    $errorPhone = false;
		$errorMessage = false;

		if(empty($forename) || empty($surname) || empty($email) || empty($message) || empty($phone)){
      echo "<span class='form-error' style='color:red;'>! Fill in all the required fields !</span>";
			$errorEmpty = true;
		}
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
			echo "<span class='form-error' style='color:red;'>Write a valid email.</span>";
			$errorEmail = true;
		}
    elseif (!preg_match ("/^[A-Za-z]+( [A-Za-z]+)*$/", $forename) ) {
             echo "<span class='form-error' style='color:red;'>Use the alphabet.</span>";
			 $errorForename = true;
		}
    elseif (!preg_match ("/^[A-Za-z]+( [A-Za-z]+)*$/", $surname) ) {
             echo "<span class='form-error' style='color:red;'>Use the alphabet.</span>";
			 $errorSurname = true;
		}
    elseif (!preg_match ("/^[A-z!?_\.\-,\/():\s\n]+$/", $message) ) {
             echo "<span class='form-error' style='color:red;'>You have used an illegal character.</span>";
			 $errorMessage = true;
		}
    elseif (!preg_match ("/^[0-9\.\-\/+() ]+$/", $phone) ) {
             echo "<span class='form-error' style='color:red;'>You have used an illegal character.</span>";
			 $errorPhone = true;
		}

		else{
			$mailTo = "clickuniq@gmail.com";
			$subject = "Kontakt forma sa sajta";
			$headers = "From: ".$email;
			$txt = "Poruka poslata sa sajta TVOJ PROGRAMER.\n\n Poruku poslao: ".$forename." ".$surname."\n\n Mail: ".$email."\n\n Telefon: ".$phone."\n\n Poruka:\n\n".$message;

			mail($mailTo, $subject, $txt, $headers);
			echo "<span class='form-success' style='color:green;'>Message sent successfully.</span>";
		}
	}
	else{
		echo "<span style='color:red;'>An error has occurred!</span>";
	}
?>
<script>
$("#Imeke, #Prezimeke, #Mailke, #Porukake, #Telefonke").removeClass("input-error");

		var errorEmpty = "<?php echo $errorEmpty; ?>";
		var errorForename = "<?php echo $errorForename; ?>";
    var errorSurname = "<?php echo $errorSurname; ?>";
		var errorEmail = "<?php echo $errorEmail; ?>";
		var errorMessage = "<?php echo $errorMessage; ?>";
    var errorPhone = "<?php echo $errorPhone; ?>";


		if(errorForename == true){
			$("#Imeke").addClass("input-error");
		}
    if(errorSurname == true){
			$("#Prezimeke").addClass("input-error");
		}
		if(errorEmail == true){
			$("#Mailke").addClass("input-error");
		}
		if(errorMessage == true){
			$("#Porukake").addClass("input-error");
		}
    if(errorPhone == true){
			$("#Telefonke").addClass("input-error");
		}
		if(errorEmpty == false && errorForeame == false && errorSurame == false && errorEmail == false && errorMessage == false && errorPhone == false){
				$("#Imeke, #Prezimeke, #Mailke, #Porukake, #Telefonke").val("");
		}


</script>
