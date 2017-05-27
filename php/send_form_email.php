<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {

  //Email information
  $admin_email = "lauincer@gmail.com";
  $email = $_REQUEST['email'];
  $name = $_REQUEST['name'];
  $phone = $_REQUEST['phone'];
  $comment = $_REQUEST['comment'];

  //send email
  mail($admin_email, "Mensaje de " + $name + " Formulario de contacto", $comment, "From:" . $email);

  //Email response
  echo "Thank you for contacting us!";
  }

  //if "email" variable is not filled out, display the form
  else  {
?>
