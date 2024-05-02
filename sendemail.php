<?php

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];

$addressee = "contacto@cl-quick.tech";
$subject = " Correo enviado desde página web ";
$body = ' <html>
<head>
    <title> Correo envíado | QuickTech </title>
</head>
<body>
    <section style="border:1px solid brown">
      <h3 style = "border: 1px solid black; background-color: black; color: white; text-align: center; padding: 1rem"> 
        Solicitud de contacto desde página web 
      </h3>
      <div style= "padding: 2rem">
        <p style="text-align: justify">
          Contacto: '.$name . ' - ' .$subject .' 
          <br>
          Mensaje:' .$message . ' - ' .$email . ' 
        </p>
      </div>
      
      <p style="text-align: center"><a href="https://cl-quick.tech/index"> QuickTech | 2024 </a></p>
    </section>
</body>
</html>';

// to send format HTML
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF8\r\n";

// Return address
$headers .= "FROM: $name <$email>\r\n";
mail($addressee, $subject, $body, $headers);

echo '
<script>setTimeout(function(){ window.location = "index.html"; }, 4000);</script>
<html>
    <head>
        <title> QuickTech | 2024 </title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>
    <body>
        <section style="margin-top: 6rem">
            <h3 style="text-align: center">
            Mensaje enviado con exito!
            </h3>
        <br>
        <div style= "width: 150px; padding: 1rem; margin: 0 auto; color: #00e676">
            <span class="material-symbols-outlined" style="font-size: 150px">mark_email_read</span>
        </div>
        <div style= "text-align: center">
          <span style="font-weight:300;font-size:1em"> Gracias por comunicarte con nosotros</span>
        </div>
        <br>  
        </section>
    </body>
</html>'
?>
