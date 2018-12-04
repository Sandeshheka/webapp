<?php include('includes/admin-header.php');
    include('includes/admin-nav.php');
    // include('includes/leftnav.php');
     include ('includes/classes/tutorials.php');
?>
     <body>
	<div class="container">
		<div class="row">
		
			<legend align="center"> OOTEST</legend>
      <?php

      $san = new tutorial();
     $san->setId('2');
     $san->getId();
     echo "<br/>";
     $san->setName('Java');
     $san->getName();



      ?>


			 </div>
		
  </div>
  
</body>
</html>