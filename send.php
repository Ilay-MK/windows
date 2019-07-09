<?php require("mailer.php"); ?>
<?
    $error = false;
    if (!empty($_POST["inputName"])) {
		$name  = substr(htmlspecialchars(trim($_POST["inputName"])), 0, 50);
	} else { $error = true; }

    if (!empty($_POST["inputPhone"])) {
        $phone  = substr(htmlspecialchars(trim($_POST["inputPhone"])), 0, 50);
    } else { $error = true; }

    if (!empty($_POST["inputEmail"])) {
        $email  = substr(htmlspecialchars(trim($_POST["inputEmail"])), 0, 50);
    } else { $error = true; }

    if (!empty($_POST["inputText"])) {
        $text  = substr(htmlspecialchars(trim($_POST["inputText"])), 0, 3000);
    } else { $error = true; }    

    if (!empty($_POST["inputTitle"])) {
        $title  = substr(htmlspecialchars(trim($_POST["inputTitle"])), 0, 200);
    } else { $error = true; }
    
 	if (!$error) {
		$subject = $title;
		
		$mes = array
		(
			"subject" 		=> $subject,
			"name" 			=> $name,
			"phone"			=> $phone,
			"email" 		=> $email,
            "text"          => $text
		);

        sendMail($mes, null);
	} else {
		echo "<p class='bg-danger text-danger'>Произошла ошибка! Заполните правильно все поля!</p>";
	}
?>