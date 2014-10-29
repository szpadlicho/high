<meta http-equiv='Content-Type' content='text/html' charset='UTF-8' />
<?php
$name_surname = $_POST['name_surname'];
$nr = $_POST['nr'];
$mail = $_POST['mail'];
$company = $_POST['company'];
$question = $_POST['question'];
//-----------------------------------
// w zmienną $text_body wpisujemy treść maila
$text_body  = '
<html>
<head> 
<title>Wiadomość e-mail z www.highhair.pl</title> 
</head>
<body>
<p><b>Treść wiadomości</b></p>';
//--
$text_body .= '<table border="1px" width="100%">';
	$text_body .= '<tr>';
		$text_body .= '<th>';
			$text_body .= 'Imię i Nazwisko';
		$text_body .= '</th>';
		$text_body .= '<th>';
			$text_body .= 'Nr tel.';
		$text_body .= '</th>';
		$text_body .= '<th>';
			$text_body .= 'e-Mail';
		$text_body .= '</th>';
        $text_body .= '<th>';
			$text_body .= 'Nazwa firmy';
		$text_body .= '</th>';
		$text_body .= '<th>';
			$text_body .= 'Treść pytania';
		$text_body .= '</th>';
	$text_body .= '</tr>';
	//--
	$text_body .= '<tr>';
		$text_body .= '<td>';
			$text_body .= $name_surname;
		$text_body .= '</td>';
		$text_body .= '<td>';
			$text_body .= $nr;
		$text_body .= '</td>';
		$text_body .= '<td>';
			$text_body .= $mail;
		$text_body .= '</td>';
        $text_body .= '<td>';
			$text_body .= $company;
		$text_body .= '</td>';
		$text_body .= '<td>';
			$text_body .= $question;
		$text_body .= '</td>';
	$text_body .= '</tr>';
$text_body .= '</table>';
//--
$text_body .= '
</body>
</html>';
//----------------------------------
//----------------------------------
$adresat = 'szpadlicho@gmail.com';
//$adresat = 'bok@hihair.pl';
//$adresat = 'marketing@twojewlosy.pl';
//$adresat = 'info@meble24h.com.pl';
$replay = $mail;
//----------------------------------
@$temat = 'Pytanie od: '.$mail.' ze strony www.highhair.pl';
//----------------------------------
$naglowki = 'Reply-to:'.$replay.'<'.$replay.'>'.PHP_EOL;
$naglowki .= 'From: www.highhair.pl'.PHP_EOL;
$naglowki .= 'MIME-Version: 1.0'.PHP_EOL;
$naglowki .= 'Content-type: text/html; charset=utf-8'.PHP_EOL; 
//----------------------------------		  
if (!mail($adresat, $temat, $text_body, $naglowki)){
?>
<script type="text/javascript">
    alert ('Coś poszło nie tak!');
</script>
<?php
}
else{
?>
<script type="text/javascript">
    alert ('Wiadomości wysłana !');
</script>
<?php
}
?>