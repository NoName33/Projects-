<?php
session_start();
?>

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<div class = "container">
<h1><center> Please login </center></h1>
<form action="index.php" method="post" role="form" >
    <div class="form-group">
        <label> Email </label>
        <input type="email" name = "email" id="email" class="form-control"/>
    </div>
    <div class="form-group">
        <label> Password </label>
        <input type="password" name = "password" id="password" class="form-control" /> 
    </div>
    
    <div class="form-group">
        <input id ="submitBtn" type="submit" name="button" class="btn btn-primary" value="Send"/>
    </div>

</form>
