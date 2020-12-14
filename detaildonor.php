<html>
<center>
	<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="assets/css/form11.css">
</head>
<!------ Include the above in your HEAD tag ---------->

<section class="get-in-touch">
   <h1 class="title">Enter Details</h1>
   <form class="contact-form row" action="donateinsert.php" onsubmit="alert('thanks for your help');" method="post">
      <div class="form-field col-lg-6">
         <input id="name" class="input-text js-input" type="text" required name="name">
         <label class="label" for="name">Name</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="email" class="input-text js-input" type="email" name="email"required>
         <label class="label">E-mail</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="company" class="input-text js-input" type="text" name="address"required>
         <label class="label" for="address">Address</label>
      </div>
       <div class="form-field col-lg-6 ">
         <input id="phone" class="input-text js-input" type="text" name="phone" required>
         <label class="label" for="phone">Contact Number</label>
      </div>
      <div class="form-field col-lg-12">
         <input id="message" class="input-text js-input" type="text" name="message"required>
         <label class="label" for="message">Message</label>
      </div>
      <div class="form-field col-lg-12">
         <input class="submit-btn" type="submit" value="Submit">
      </div>
   </form>
</section>
<a href="index.html">Go back to home</a>
</html>
