<?php include("header.php");

if(isset($_POST["Submit"]))
$to = "beve_101@hotmail.com"; // note the comma
$name = $_POST["firstName"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$company = $_POST["company"];
$comment = $_POST["comment"];


// Subject
$subject = " Contacted ";

// Message
$message = "
  <html>
    <head>
    <title>Contact info</title>
  </head>
  <body>
    <p>$name</p>
    <p>$email</p>
    <p>$phone</p>
    <p>$comment</p>
  </body>
  </html>
";

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers

// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));
?>

  <h1>Contact</h1>
  <form class="submit"  method="post" action="#">
    <div>
      <label for="firstName">First Name:</label>
    </div>
    <input type="text" id="firstName" name="firstName"  required>
    <div>
      <label for="lastName">Last Name:</label>
    </div>
    <input type="text" id="lastName" name="lastName"  required>
    <div>
      <label for="email">Email:</label>
    </div>
    <input type="text" id="email" name="email"  required>
    <div>
      <label for="phone">Phone Number:</label>
    </div>
    <input type="text" id="phone" name="phone"  required>
    <div>
      <label for="company">Company:</label>
    </div>
    <input type="text" id="company" name="company">
    <div>
      <label>Comments/Questions:</label>
    </div>
    <textarea name="comment" rows="5" cols="45" required></textarea>
    <div>
      <input  id="putIn" type="submit" name="Submit">
    </div>
  </form>
  <script src="javascript/jqueryvalidate.js"></script>
  <script>
    $(".submit").validate();
  </script>

<?php include("footer.php"); ?>
