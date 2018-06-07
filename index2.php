<?PHP 

 //tahanmastermail@gmail.com     ps:  tahanmaster
if (isset($_POST['sendbutton1'])) {

 $name1 = $_POST['name1'];
 $phone1 = $_POST['phone1'];
 $adress1 = $_POST['adress1'];
 $email1 = $_POST['email1'];
 $text1 = $_POST['text1'];

 $email_admin = "tahanmastermail@gmail.com";
 $email_to = "tahan.borislavtsi@gmail.com";
 $email_subject = "tahan";
 $email_body = "Потребител $name1\n с телефон $phone1\n 
 мейл $email1\n адрес :  $adress1\n  
 $text1"
$success = mail($email_admin, $email_subject, $email_body, "From:\n" . $email1);

}
/*$name2
$phone2
$text2

mail(to, subject, message)*/
 ?>