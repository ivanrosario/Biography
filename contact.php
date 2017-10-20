<?php include("header.php"); ?>

  <h1>Contact</h1>
  <form class="submit" onsubmit="return onContactFormSubmit()" method="post">
    <div>
      <label for="firstName">First Name:</label> 
    </div>
    <input type="text" id="firstName" name="firstName" placeholder="First Name">
    <div>
      <label for="lastName">Last Name:</label>
    </div>
    <input type="text" id="lastName" name="lastName" placeholder="Last Name">
    <div>
      <label for="email">Email:</label>
    </div>
    <input type="text" id="email" name="email" placeholder="Email">
    <div>
      <label for="phone">Phone Number:</label>
    </div>
    <input type="text" id="phone" name="phone" placeholder="(123)-456-7890">
    <div>
      <label for="company">Company:</label>
    </div>
    <input type="text" id="company" name="company" placeholder="Red Ventures">
    <div>
      <label>Comments/Questions:</label>
    </div>
    <textarea rows="5" cols="45"></textarea>
    <div>
      <input  id="putIn" type="submit" name="Submit">
    </div>
  </form>
  
<?php include("footer.php"); ?>
