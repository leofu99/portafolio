<div>
<?php 
$myemail = 'leonardo.fuentes@udea.edu.co';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>
                    <form id="form" action="enviar.php" class="form">



                        <input name="nombre" id="name" required type="text" placeholder="nombre">

                        <input name="email" id="email" type="email" placeholder="Correo" required>

                        <textarea name="mensaje" placeholder="Tu mensaje" required></textarea>

                        <input type="submit" id="botont">Enviar mensaje>


                    </form>
</div>



