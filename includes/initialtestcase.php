<h4>Test: Installation and cofugration</h4>
<style>
	pre {
		color: #fff;
	}
</style>
<?php
	echo"Base URL=".$config['base_url'];
	print "<br /> <h4 class='mt-3'> <u>";
	echo "Database Details";
	print " </h4> </u> <pre> Database Name : ";
	print_r($dbname);
	print "</pre>";
	print "<pre> Databse Driver : ";
	print_r($dbdriver);
	print "</pre>";
?>