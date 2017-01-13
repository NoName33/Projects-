<?php 
include "includes/data.php";
include "includes/functions.php";
include ("includes/header.php"); 


$item = $_GET['item'];
if (isset($catalog[$item])){
	$item = $catalog[$item];
}
?>

<script src='jquery/jquery-1.8.3.min.js'></script>
<script src='jquery/jquery.elevatezoom.js'></script>

<script>

function trimiteComanda(){
	window.location = "send.php";
}
</script>

<div class="section-page">

	<div class="wrapper">

		<div class="media-picture">

		<span>
			<img id="zoom_01" src="<?php echo $item['img'];?>" data-zoom-image="<?php echo $item['imgZoom'];?>" />
			<script>
	    		$('#zoom_01').elevateZoom({
			    zoomType: "inner",
				cursor: "crosshair",
				zoomWindowFadeIn: 500,
				zoomWindowFadeOut: 750
			   }); 
			</script>
		</span>

		</div>

		<div class=media-details>
			<h1> <?php echo $item['title']; ?> </h1>
		</div>
		<table>
			<tr>
				<th>Size</th>
				<td>
				<select name="size" id="size">
				<?php $items = $item['size']; 
					foreach($items as $i){
						?>
						 <option value="'.$i .'"> <?php echo $i; ?></option>
						 <?php
					} 
				?>
				</select> 
				</td> 
			</tr>
			<tr>
				<th>Color</th>
				<td><select name="color" id="color">
				<?php $items = $item['color']; 
					foreach($items as $i){
						?>
						 <option value="'.$i .'"> <?php echo $i; ?></option>
						 <?php
					} 
				?>
				</select> </td>
			</tr>
			<tr>
				<th>Talpa</th>
				<td><?php echo $item['talpa']; ?></td>
			</tr>
			<tr>
				<th>Dimension</th>
				<td><?php echo $item['dimension']; ?></td>
			</tr>

			
			<th>
				 <input type="submit" value="Adauga comanda" onclick="trimiteComanda()" >
			</th>
				 
		</table>
	</div>

</div>