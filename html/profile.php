<!DOCTYPE HTML>
<html>
<head>
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
$css = '<style>'.file_get_contents('styleing.css').'</style>';
echo $css;
?>

<div class="container-fluid">

 <div class="this">
  <div class="row">
   <div class="text">
    <h1> Welcome Back! </h1>  
   </div>
  </div>
 </div>
 </br>
 <nav class="nav nav-pills flex-column flex-sm-row">
     <a class="flex-sm-fill text-sm-center nav-link active" href="#">Home </a>

     <a class="flex-sm-fill text-sm-center nav-link active" href="#">Philosophy </a>

     <a class="flex-sm-fill text-sm-center nav-link active" href="#">History </a>
     
     <a class="flex-sm-fill text-sm-center nav-link active" href="#">Math </a>
    </nav>
 <div class="row">
  <div class="edu_block">
   <div class="text">
    <div class="col-auto-1">
    </div>
   </div>
  </div>
 </div>


</div>

</body>
</html>