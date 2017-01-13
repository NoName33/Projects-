<?php
session_start();
?>

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<script>

function mesaj(){
	alert("S-a trimis comanda");
}
</script>
<form name="myForm" action="index.php" onsubmit="mesaj()" method="post" role="form" >
    <div class= "form-group">
        <label> First Name </label>
        <input type="text" name="firstName" id="firstName" class="form-control" />
       
    </div>
    <div class= "form-group">
        <label> Last Name </label>
        <input type="text" name = "lastName" id="lastName" class="form-control"  /> 
       
    </div>
    <div class= "form-group">
        <label>Email</label>
        <input type="email" name = "email" id="email" class="form-control" value="<?php echo $_SESSION['username']; ?>" readonly ">
    </div>
    
    <div class= "form-group">
        <label> Age </label>
        <input type="age" name = "age" id="age" class="form-control" class="form-control" />
    </div>
    <div class= "form-group">
        <label> Address </label>
        <textarea name="address" class="form-control" id="address"> </textarea>
    </div>
    <div >
        <input id ="submitBtn" type="submit" class="btn btn-primary" name="button" value="Send"/>
    </div>
</form>
