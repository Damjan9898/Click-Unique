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
      echo "<span class='form-error' style='color:red;'>! Popunite sva obavezna polja !</span>";
			$errorEmpty = true;
		}
		elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
			echo "<span class='form-error' style='color:red;'>Napišite validan email.</span>";
			$errorEmail = true;
		}
		elseif (!preg_match ("/^[A-Za-zАаБбВвГДдЂђЕеЖжЗзИиЈјКкЛлЉљМмНнЊњОоПпРрСсТтЋћУуФфХхЦцЧчЏџШшČĆŠĐŽšđžčć]+( [A-Za-zАаБбВвГДдЂђЕеЖжЗзИиЈјКкЛлЉљМмНнЊњОоПпРрСсТтЋћУуФфХхЦцЧчЏџШшČĆŠĐŽšđžčć]+)+$/", $name) ) {
             echo "<span class='form-error' style='color:red;'>Ime nije u dobrom formatu.</span>";
			 $errorName = true;
		}
		elseif (!preg_match ("/^[A-zАаБбВвГДдЂђЕеЖжЗзИиЈјКкЛлЉљМмНнЊњОоПпРрСсТтЋћУуФфХхЦцЧчЏџШшČĆŠĐŽšđžčć()!?_\.\-,\/:\s\n]+$/", $message) ) {
             echo "<span class='form-error' style='color:red;'>Uneli ste nedozvoljen znak.</span>";
			 $errorMessage = true;
		}

    elseif (!preg_match ("/^[0-9,\. ]*$/", $budget) ) {
             echo "<span class='form-error' style='color:red;'>Unesite samo broj za budzet.</span>";
			 $errorBudget = true;
		}

    elseif (!preg_match ("/^[0-9\.\-\/+() ]+$/", $phone) ) {
             echo "<span class='form-error' style='color:red;'>Uneli ste nedozvoljen znak za broj.</span>";
			 $errorPhone = true;
		}

		else{
			$mailTo = "clickuniq@gmail.com";
			$subject = "Procena projekta sa sajta";
			$headers = "From: ".$email;
			$txt = "Poruka poslata sa sajta TVOJ PROGRAMER.\n\n Poruku poslao: ".$name."\n\n Mail: ".$email."\n\n Telefon: ".$phone."\n\n Koju uslugu trazi: ".$radio."\n\n Budzet: ".$budget."\n\n Poruka:\n\n".$message;

			mail($mailTo, $subject, $txt, $headers);
			echo "<span class='form-success' style='color:green;'>Poruka uspešno poslata.</span>";
		}
	}
	else{
		echo "<span style='color:red;'>Došlo je do greške!</span>";
	}
?>
<script>
$("#ImePrezp, #Mailp, #Porukap, #Telefonp, #Budzetp").removeClass("input-error");

		var errorEmpty = "<?php echo $errorEmpty; ?>";
		var errorName = "<?php echo $errorName; ?>";
		var errorEmail = "<?php echo $errorEmail; ?>";
		var errorMessage = "<?php echo $errorMessage; ?>";
    var errorPhone = "<?php echo $errorPhone; ?>";
    var errorBudget = "<?php echo $errorBudget; ?>";


		if(errorName == true){
			$("#ImePrezp").addClass("input-error");
		}
		if(errorEmail == true){
			$("#Mailp").addClass("input-error");
		}
		if(errorMessage == true){
			$("#Porukap").addClass("input-error");
		}
    if(errorPhone == true){
			$("#Telefonp").addClass("input-error");
		}
    if(errorBudget == true){
			$("#Budzetp").addClass("input-error");
		}
		if(errorEmpty == false && errorName == false && errorEmail == false && errorMessage == false && errorPhone == false && errorBudget == false){
		$("#ImePrezp, #Mailp, #Porukap, #Budzetp, #Telefonp").val("");
		}


</script>
