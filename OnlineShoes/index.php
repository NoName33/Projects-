<?php 

$pageTitle = "Welcome to our shoes site";

include ("includes/header.php"); 
include ("includes/data.php"); 
include ("includes/functions.php"); 

$_SESSION['username'] = $_POST['email'];

?>
<center><h1> Welcome: <?php echo $_SESSION['username']; ?></h1></center>
		<d<iv class="section catalog random">

			<div class="wrapper">

				<h2>May we suggest something?</h2>

								<ul class="items">
                <?php   $random=array_rand($catalog,6);
                  		
					   foreach($random as $key){ 
   						echo get_html_item($key,$catalog[$key]);
                       } ?>							
				</ul>

			</div>

		</div>

	</div> 

<?php include ("includes/footer.php") ?>