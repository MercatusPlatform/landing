<?php
if($_POST['email'] != ''){
	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$fileopen = fopen("../data-landing/file.txt", "a+");
		$write = $_POST['email']."\r\n";
		fwrite($fileopen, $write);
		fclose($fileopen);
		header('Content-Type: application/json');
		$d = array('result' => 'Your request is accepted.');
		echo json_encode($d);
		// $to  = $_POST['email']; 
		// $subject = 'the subject';
		// $message = ' 
		// <html> 
		//     <head> 
		//         <title>Birthday Reminders for August</title> 
		//     </head> 
		//     <body> 
		//         <p>Here are the birthdays upcoming in August!</p> 
		//     </body> 
		// </html>'; 
		// $headers  = "Content-type: text/html; charset=windows-1251; \r\n 
		// 			From: Membrana <info@membrana.io>";
		// if (mail($to, $subject, $message, $headers)) { 
		//     echo 'Your request is accepted.';
		// } else { 
		//     echo '<span style="color:#e64949;">Your email is incorrect.</span>';
		// } 
	
		
	}
	else{
		header('Content-Type: application/json');
		$d = array('error' => '<span style="color:#e64949;">Your email is incorrect.</span>');
		echo json_encode($d);
	}
}
else{
	header('Location: /');
	exit;
}
?>
