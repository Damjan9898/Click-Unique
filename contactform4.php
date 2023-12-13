<?php
	if(isset($_POST['submit'])){
	   $radio = $_POST['radio'];
    $message = $_POST['message'];
    $budget = $_POST['budget'];
		$name = $_POST['name'];
		$email = $_POST['email'];
    $phone = $_POST['phone'];


		$errorEmpty = false;
		$errorName = false;
		$errorEmail = false;
		$errorMessage = false;
    $errorPhone = false;
    $errorBudget = false;

		if(empty($name) || empty($email) || empty($message) || empty($phone)){
      echo "<span class='form-error' style='color:red;'>! Fill in all the required fields !</span>";
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

    elseif (!preg_match ("/^[0-9,\. ]*$/", $budget) ) {
             echo "<span class='form-error' style='color:red;'>Enter numbers only.</span>";
			 $errorBudget = true;
		}

    elseif (!preg_match ("/^[0-9\.\-\/+() ]+$/", $phone) ) {
             echo "<span class='form-error' style='color:red;'>You have used an illegal character.</span>";
			 $errorPhone = true;
		}

		else{
			$mailTo = "clickuniq@gmail.com";
			$subject = "Procena projekta sa sajta";
			$headers = "From: ".$email;
			$txt = "Poruka poslata sa sajta TVOJ PROGRAMER.\n\n Poruku poslao: ".$name."\n\n Mail: ".$email."\n\n Telefon: ".$phone."\n\n Koju uslugu trazi: ".$radio."\n\n Budzet: ".$budget."\n\n Poruka:\n\n".$message;

			mail($mailTo, $subject, $txt, $headers);
			echo "<span class='form-success' style='color:green;'>Message sent successfully.</span>";
		}
	}
	else{
		echo "<span style='color:red;'>An error has occurred!</span>";
	}
?>
<script>
$("#ImePrezpe, #Mailpe, #Porukape, #Telefonpe, #Budzetpe").removeClass("input-error");

		var errorEmpty = "<?php echo $errorEmpty; ?>";
		var errorName = "<?php echo $errorName; ?>";
		var errorEmail = "<?php echo $errorEmail; ?>";
		var errorMessage = "<?php echo $errorMessage; ?>";
    var errorPhone = "<?php echo $errorPhone; ?>";
    var errorBudget = "<?php echo $errorBudget; ?>";


		if(errorName == true){
			$("#ImePrezpe").addClass("input-error");
		}
		if(errorEmail == true){
			$("#Mailpe").addClass("input-error");
		}
		if(errorMessage == true){
			$("#Porukape").addClass("input-error");
		}
    if(errorPhone == true){
			$("#Telefonpe").addClass("input-error");
		}
    if(errorBudget == true){
			$("#Budzetpe").addClass("input-error");
		}
		if(errorEmpty == false && errorName == false && errorEmail == false && errorMessage == false && errorPhone == false && errorBudget == false){
			$("#ImePrezpe, #Mailpe, #Porukape, #Budzetpe, #Telefonpe ").val("");
		}


</script>
