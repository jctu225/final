<!DOCTYPE HTML>
<html>
 <head>

 <link type='text/css' rel='stylesheet' href='style.php'>

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" 
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" 
        crossorigin="anonymous">
 </script>
 <link rel="stylesheet" 
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" 
      integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" 
      crossorigin="anonymous">
 <link href="https://fonts.googleapis.com/css?family=Zilla+Slab" rel="stylesheet">

</head>

<body>

<?php
$css = '<style>'.file_get_contents('style.css').'</style>';
echo $css;
?>
 <div class="container">

  <div class="row title">
  <div>
    <h1>Welcome to Learnly</h1>
    <p>The learning site.</p>
  </div>
  </div>

 <div class="row"> 
  <div class="col-sm-auto blocks"> 
     <div class="text">
      <h2>Login</h2>
      <div class="form-group">
       <label for="usr">Username:</label>
       <input type="text" class="form-control" id="usr">
      </div>
     <div class="form-group">
     <label for="pwd">Password:</label>
     <input type="password" class="form-control" id="usr">
    </div>
     <button type="button" class="btn btn-primary">Login</button>
   </div>
  </div>


<div class="col-lg-1"></div>
 
 
 <div class="block">
  <div class="col-lg-auto text">
   <div class="text">
    <h2>Registration</h2>
    <div class="form-group">
    <label for="usr">Email:</label>
    <input type="text" class="form-control" id="usr">
   </div>
   <div class="form-group">
    <label for="f_name">First Name:</label>
    <input type="text" class="form-control" id="usr">
   </div>
   <div class="form-group">
    <label for="l_name">Last Name:</label>
    <input type="text" class="form-control" id="usr">
   </div>
   <button type="button" class="btn btn-primary">Register</button>
  </div>
  </div>
  


  <div class="col-lg-auto">
  <div class="text">
    <div class="form-group">
     <label for="usr">User Name:</label>
     <input type="text" class="form-control" id="usr">
    </div>
    <div class="form-group">
     <label for="pwd">Password:</label>
     <input type="password" class="form-control" id="usr">
    </div>
    <div class="form-group">
     <label for="pwd">Re-Enter:</label>
     <input type="password" class="form-control" id="usr">
    </div>
   </div>
  </div>

</div>



</div>
  
</body>

</html>