    <?php


if(isset($_POST['submit'])){
    $name = $_POST['fname'];
    $email_address = $_POST['femail'];
    $message = $_POST['fmessage'];
   

   
   
    $to = 'Saranbrl35@gmail.com';
    $subject = "Contact form submission.";
    $message = "You have received a new message from: $name . \n ".
    "Email: $email_address\n Message: \n\n $message";
    $headers = "From: $email_address\n";
   
  if(  mail($to, $subject, $message, $headers)){
        echo"<h1>Sent Successfully! Thank you ".$name." for your message</h1>"


  }
  else{
      echo"Something went wrong!";
  }
    
}
    ?>