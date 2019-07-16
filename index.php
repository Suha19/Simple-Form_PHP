<?php
if ($_POST["submit"]){
  if (!$_POST["name"]){
    $error ="<br/>-Please enter your name?";
  }
  if (!$_POST["email"]){
    $error. ="<br/>-Please enter your email?";
  }
  if (!$_POST["massage"]){
    $error. ="<br/>-Please enter your massage?";
  }
  if ($error){
    $result= "<div class="alert alert-error" role="alert">Woops, there is an error. Please correct the following: '.$error.'</div>";
  }
  else{
    mail("s.alobaidi18@outlook.com", "Contact massage", "Name: ".$_POST["name"]." Email: ".$_POST["email"]."
    Massage: ".$_POST["massage"]);
  }
  {
    $result= "<div class="alert alert-success" role="alert" >Thank you< I will be in touch shortly :)</div>";
  }
}

?>
<!DOCTYPE html>
<html lang="en-us">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Bootstrap Basic Portfolio</title>

  <!-- Boostrap Stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <!-- Our own CSS stylesheet -->
  <link rel="stylesheet" href="assets/css/styles.css" media="screen">

</head>

<body>

  <!-- Start of container -->
  <main class="container">
    <section class="row">
      <div class="col-md-8">
      <form method="post" role="form">
					
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Your name" value="<?php echo $_POST["name"]; ?>">
          </div>
          
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Your email" value="<?php echo $_POST["email"]; ?>">
          </div>
          
          <div class="form-group">
            <textarea name="message" rows="5" class="form-control" placeholder="message..."><?php echo $_POST["massage"]; ?></textarea>
          </div>
          
          <div class="checkbox">
                          <label>
                            <input type="checkbox" name="check"> I am human
                          </label>
                      </div>
                              
          <div class="center">
          <input type="submit" name="submit" class="btn btn-send" value="send message"/>
          </div>  
        </form>
      </div>
    </section>
  </main>
  <!-- End of container -->

  <!-- Start of footer -->
  <footer class="footer">
    <div class="two-toned-footer-color"></div>
    <p class="text-muted text-muted-footer text-center">
     Copyright@ Suha Alobaidi
  </footer>
  <!-- End of footer -->

  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	

</body>

</html>
