<?php
$dropdown = $_POST['dropdown'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent="De: $name \n\n E-mail: $email \n\n Teléfono: $phone \n\n Motivo: $dropdown \n\n Mensaje: $message";
$recipient = "nicoceluempresa@gmail.com";
$subject = "Correo enviado desde tu website";
$mailheader = "De: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "<script>
		alert( '✔ Formulario enviado correctamente' );
		location.href ='https://blazing-personnel.000webhostapp.com/#inicio';var submit = document.getElementById('submit-btn');var reply = document.getElementById('reply');submit.addEventListener('click',function(){
		reply.classList.add('activeReplay');});
	</script>"
?>

