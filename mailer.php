<?php 
function sendMail($mes, $type)
{
    if(!empty($type)) {
        if($type == "package") { $str_cost = "<p>Цена:</p>"; }
    }
	// example on using PHPMailer with GMAIL
	include("PHPMailer/class.phpmailer.php");
	include("PHPMailer/class.smtp.php"); // note, this is optional - gets called from main class if not already loaded

	$err			  = NULL;
	$mail             = new PHPMailer();
	
	$mail->IsSMTP();
    $mail->SMTPAuth   = true;                                                       // enable SMTP authentication
    $mail->SMTPSecure = "";                                                         // sets the prefix to the servier
	$mail->Host       = "";                                         //"mail.zae-box.by"; // sets GMAIL as the SMTP server
	$mail->Port       = "";                                                        // set the SMTP port
	$mail->Username   = "";                                    //"no-reply@zae-box.by";  // GMAIL username
	$mail->Password   = "";                                                //"Ohgee4ai"; // GMAIL password
	$mail->From       = "";                                    //$mes["email"];
    $mail->CharSet	  = "utf-8";
	$mail->FromName   = "Сообщение с сайта | windows.by";                          //$mes["name"]."| BusinesssCARD.web2web.by | ".$type;
	$mail->Subject    = "Поступило новое сообщение!";                                 //"Поступил новый ".$type;
	$mail->AltBody    = "This is the body when user views in plain text format";   //Text Body
	$mail->WordWrap   = 50;                                                        // set word wrap
    $mail->Body = 	'<div style="background: #FFDD00; padding: 20px; font-size: 20px;">								
                            <div>
                                <h1 style="color: #ffffff">windows<span style="color: rgb(255,184,0)">-[ОКНА]-</span>сайт</h1>
                            </div>
                            
                            <div>
                                <h2>'.$mes["subject"].'</h2>
                            </div>

                            <div style="display:inline-block;vertical-align:top;margin:0px;padding:20px px">
                                <p>Имя:</p>
                                <p>Телефон:</p>
                                <p>Сообщение:</p>
                            </div>
                            <div style="color:#007106;font-size:30px;display:inline-block;vertical-align:top;margin:0px;padding:0px">
                                <p style="color:#007106;font-size:30px;vertical-align:middle;margin:12px 0px 12px 0px;padding:0px">'.$mes["name"].'</p>
                                <p style="color:#007106;font-size:30px;vertical-align:middle;margin:0px 0px 5px 0px;padding:0px">'.$mes["phone"].'</p>
                                <p style="color:#007106;font-size:30px;vertical-align:middle;margin:0px 0px 5px 0px;padding:0px">'.$mes["text"].'</p>
                            </div>

                        </div>';
    $titleReplyTo = "Ответ на Ваше сообщение с сайта [windows.by] - Окна под заказ";
    
	$mail->AddReplyTo($mes["email"], $mes["name"]); // "breloki@zae-box.by","Webmaster"
	//$mail->AddAddress("jonny8k@mail.ru","О Величайший Мастер");
	$mail->AddAddress("MiKrob09@gmail.com","Отдел продаж");
	$mail->IsHTML(true); // send as HTML
	
	if(!$mail->Send()) {
		$tmp =  " - Mailer Error: " . $mail->ErrorInfo;
		echo "<p class='bg-danger text-danger'>Произошла ошибка!</p>"; //.$tmp;
	}
	else{
		echo "<p class='text-success bg-success'>Ваше сообщение принято. Хорошего дня!</p>"; //Message has been sent
	}
}
?>