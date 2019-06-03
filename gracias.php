<?php
@import_request_variables("gpc");
$secs = "10";
$redirect = "index.php";
$asunto = "Comentarios del sitio WEB";
$to = "web92proyecto@gmail.com";
$spam = "yomi.donna@gmail.com";
 
if(eregi("MIME-Version:",$postVars)) {
mail("$spam", "A spam relay was attempted from the Web site DICAI and was blocked.", "From:SpamMonitor");
die();
}  
$secret = 'ssshhitsasecret';
$token = md5(rand(1, 1000).$secret);
$_SESSION['token'] = $token;

$nombre = stripslashes($nombre);
$nombre = utf8_decode($nombre);
$mensaje = stripslashes($mensaje);
$mensaje = utf8_decode($mensaje);

$encabezado .= 'Content-type: text/plain; charset=iso-8859-1' . "\r\n";
$encabezado .= "From: " . $email . "\r\n\r\n";
    mail("$to", "$asunto","
	        Name: $nombre
		    Email: $email
		        Subject: $asunto
			    Message: $mensaje
",$encabezado);

   $_POST['email'] = preg_replace("\r", "", $_POST['email']);
   $_POST['email'] = preg_replace("\n", "", $_POST['email']);
      
      $_SESSION['token'] = $token;
      $token = md5(rand(1, 1000).$secret);
         $secret = 'ssshhitsasecret';
         $field = preg_replace( "/[\n\r]+/", " ", $field );
	    $find = array("/bcc\:/i","/Content\-Type\:/i","/cc\:/i","/to\:/i");
	    
	    $_POST['email'] = preg_replace($find, "", $_POST['email']);
	       $email=str_replace("\r","\n",$email);
	       $nombre=str_replace("\r","\n",$nombre);
	          $mensaje=str_replace("\r","\n",$mensaje);
	          $asunto=str_replace("\r","\n",$asunto);
		     
		     if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {
			     ob_clean();
			     mail("$youremail", "Message Killed", "$message", "De: $name <$email>");
			     exit("Mensaje no enviado intentelo de nuevo.");
			        }
		     
		     if (eregi('^(bcc$|content-type|mime-version|--)',$key))
			         print_error("Field names indicate exploit.");


</div>
		     <script type="text/javascript">
		     alert("Gracias, su mensaje ha sido enviado");
		     window.location="index.php";

	     </script>
?php>
