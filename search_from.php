<p id="searchresults">
<?php
session_start();	
$hotcity = $_SESSION['hot_city'];
	$db = new mysqli('localhost', 'root', '', 'wbr');
	
	if(!$db) {
		// Show error if we cannot connect.
		echo 'ERROR: Could not connect to the database.';
	} else {
		// Is there a posted query string?
		if(isset($_POST['queryString'])) {
			$queryString = $db->real_escape_string($_POST['queryString']);
			
			// Is the string length greater than 0?
			if(strlen($queryString) >0) {

				$query = $db->query("SELECT * FROM wbr_hotels WHERE hot_city = '$hotcity' AND hot_name LIKE '%".$queryString."%'");
						
				if($query) {
					while ($result = $query ->fetch_object()) {
						
	         			echo '<a href="'.$result->hot_website.'">';
	         			
	         			$name = $result->hot_name;
	         			if(strlen($name) > 35) { 
	         				$name = substr($name, 0, 35) . "...";
	         			}	         			
	         			echo '<span class="searchheading">'.$name.'</span>';
	         			
	         			$description = $result->hot_website;
	         			if(strlen($description) > 80) { 
	         				$description = substr($description, 0, 80) . "...";
	         			}
	         			
	         			echo '<span>'.$description.'</span></a>';
	         		}
	         		
				} else {
					echo 'ERROR: There was a problem with the query.';
				}
			} else {
				// Dont do anything.
			} // There is a queryString.
		} else {
			echo 'There should be no direct access to this script!';
		}
	}
?>
