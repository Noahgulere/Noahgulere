
  <?php 

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Validation
    if(empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "Please fill out all fields.";
    } else {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Please enter a valid email address.";
        } else {
            // Security measures
            $name = strip_tags($name);
            $email = strip_tags($email);
            $subject = strip_tags($subject);
            $message = strip_tags($message);

            // Send email
            $to = "webeducative.256@gmail.com";
            $headers = "From: ".$email;
            mail($to, $subject, $message, $headers);
            echo "Your message has been sent. Thank you!";
        }
    }
}

?>

