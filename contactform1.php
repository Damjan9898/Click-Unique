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
			echo "<span class='form-error' style='color:red;'>! Popunite sva polja !</span>";
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
		else{
			$mailTo = "clickuniq@gmail.com";
			$subject = "Kontakt forma sa sajta";
			$headers = "From: ".$email;
			$txt = "Poruka poslata sa sajta TVOJ PROGRAMER.\n\n Poruku poslao: ".$name."\n\n Mail: ".$email."\n\n".$message;

			mail($mailTo, $subject, $txt, $headers);
			echo "<span class='form-success' style='color:green;'>Poruka uspešno poslata.</span>";
		}
	}
	else{
		echo "<span style='color:red;'>Došlo je do greške!</span>";
	}
?>
<script>
$("#ImePrez, #Mail, #Poruka").removeClass("input-error");

		var errorEmpty = "<?php echo $errorEmpty; ?>";
		var errorName = "<?php echo $errorName; ?>";
		var errorEmail = "<?php echo $errorEmail; ?>";
		var errorMessage = "<?php echo $errorMessage; ?>";


		if(errorName == true){
			$("#ImePrez").addClass("input-error");
		}
		if(errorEmail == true){
			$("#Mail").addClass("input-error");
		}
		if(errorMessage == true){
			$("#Poruka").addClass("input-error");
		}
		if(errorEmpty == false && errorName == false && errorEmail == false && errorMessage == false){
			$("#ImePrez, #Mail, #Poruka").val("");
		}


</script>
