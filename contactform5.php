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
      echo "<span class='form-error' style='color:red;'>! Popunite sva polja !</span>";
			$errorEmpty = true;
		}
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
			echo "<span class='form-error' style='color:red;'>Napišite validan email.</span>";
			$errorEmail = true;
		}
    elseif (!preg_match ("/^[A-Za-zАаБбВвГДдЂђЕеЖжЗзИиЈјКкЛлЉљМмНнЊњОоПпРрСсТтЋћУуФфХхЦцЧчЏџШшČĆŠĐŽšđžčć]+( [A-Za-zАаБбВвГДдЂђЕеЖжЗзИиЈјКкЛлЉљМмНнЊњОоПпРрСсТтЋћУуФфХхЦцЧчЏџШшČĆŠĐŽšđžčć]+)*$/", $forename) ) {
             echo "<span class='form-error' style='color:red;'>Ime nije u dobrom formatu.</span>";
			 $errorForename = true;
		}
    elseif (!preg_match ("/^[A-Za-zАаБбВвГДдЂђЕеЖжЗзИиЈјКкЛлЉљМмНнЊњОоПпРрСсТтЋћУуФфХхЦцЧчЏџШшČĆŠĐŽšđžčć]+( [A-Za-zАаБбВвГДдЂђЕеЖжЗзИиЈјКкЛлЉљМмНнЊњОоПпРрСсТтЋћУуФфХхЦцЧчЏџШшČĆŠĐŽšđžčć]+)*$/", $surname) ) {
             echo "<span class='form-error' style='color:red;'>Prezime nije u dobrom formatu.</span>";
			 $errorSurname = true;
		}
		elseif (!preg_match ("/^[A-zАаБбВвГДдЂђЕеЖжЗзИиЈјКкЛлЉљМмНнЊњОоПпРрСсТтЋћУуФфХхЦцЧчЏџШшČĆŠĐŽšđžčć!?_()\.\-,\/:\s\n]+$/", $message) ) {
             echo "<span class='form-error' style='color:red;'>Uneli ste nedozvoljen znak.</span>";
			 $errorMessage = true;
		}
    elseif (!preg_match ("/^[0-9\.\-\/+() ]+$/", $phone) ) {
             echo "<span class='form-error' style='color:red;'>Uneli ste nedozvoljen znak za broj.</span>";
			 $errorPhone = true;
		}

		else{
			$mailTo = "clickuniq@gmail.com";
			$subject = "Kontakt forma sa sajta";
			$headers = "From: ".$email;
			$txt = "Poruka poslata sa sajta TVOJ PROGRAMER.\n\n Poruku poslao: ".$forename." ".$surname."\n\n Mail: ".$email."\n\n Telefon: ".$phone."\n\n Poruka:\n\n".$message;

			mail($mailTo, $subject, $txt, $headers);
			echo "<span class='form-success' style='color:green;'>Poruka uspešno poslata.</span>";
		}
	}
	else{
		echo "<span style='color:red;'>Došlo je do greške!</span>";
	}
?>
<script>
$("#Imek, #Prezimek, #Mailk, #Porukak, #Telefonk").removeClass("input-error");

		var errorEmpty = "<?php echo $errorEmpty; ?>";
		var errorForename = "<?php echo $errorForename; ?>";
    var errorSurname = "<?php echo $errorSurname; ?>";
		var errorEmail = "<?php echo $errorEmail; ?>";
		var errorMessage = "<?php echo $errorMessage; ?>";
    var errorPhone = "<?php echo $errorPhone; ?>";


		if(errorForename == true){
			$("#Imek").addClass("input-error");
		}
    if(errorSurname == true){
			$("#Prezimek").addClass("input-error");
		}
		if(errorEmail == true){
			$("#Mailk").addClass("input-error");
		}
		if(errorMessage == true){
			$("#Porukak").addClass("input-error");
		}
    if(errorPhone == true){
			$("#Telefonk").addClass("input-error");
		}
		if(errorEmpty == false && errorForeame == false && errorSurame == false && errorEmail == false && errorMessage == false && errorPhone == false){
			$("#Imek, #Prezimek, #Mailk, #Porukak, #Telefonk ").val("");
		}


</script>
