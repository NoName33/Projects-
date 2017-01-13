<?php
function  get_html_item($key,$item){
  ?>
  <li><a href="details.php?item=<?php echo $key;?> ">
  	  <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['title']; ?>" /> 
      <p>View details</p></a>
  </li>
  <?php 
 }

?>
