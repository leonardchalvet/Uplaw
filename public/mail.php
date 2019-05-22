<?php

	$prenom = isset($_POST['firstname'])  ?  $_POST['firstname']  : null ;
	$nom    = isset($_POST['lastname'])   ?  $_POST['lastname']   : null ;
	$mail   = isset($_POST['email'])      ?  $_POST['email']      : null ;
	$tel    = isset($_POST['phone'])      ?  $_POST['phone']      : null ;
	$texte  = isset($_POST['message'])    ?  $_POST['message']    : null ;

	$page    = isset($_POST['page'])    ? $_POST['page']    : null;
	$allMail = isset($_POST['allMail']) ? substr($_POST['allMail'], 0, -2) : null;

	if($prenom != null && $nom != null && $tel != null && $mail != null && $texte != null && $allMail != null ) {

		$header = "From: ".$mail." \n";

		$content =  "Prenom : " . "\n" . $prenom . "\n" . "\n".
					"Nom : "    . "\n" . $nom    . "\n" . "\n".
					"tel : "    . "\n" . $tel    . "\n" . "\n".
			   		"Mail : "   . "\n" . $mail   . "\n" . "\n".
			   		"Message : "  . "\n" . $texte  . "\n" . "\n";

		mail($allMail, 'CONTACT', $content, $header);

	}

	header('Location: '.$page);

?>