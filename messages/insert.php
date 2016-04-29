<?php include("db.php"); ?>

<?php
mysql_select_db("my_db", $link);

$name = mysql_real_escape_string($_GET["name"]);
$comment = mysql_real_escape_string($_GET["comment"]);

$sql="INSERT INTO comments (name, comment, date)
	  VALUES ('$name', '$comment', CURDATE())";
if (!mysql_query($sql,$link))
  {
  die('Error: ' . mysql_error());
  }
// echo "1 record added";





$sql2 = "SELECT name, comment, date FROM comments ORDER BY id DESC";
$result = mysql_query($sql2,$link) or die("Unable to select: ".mysql_error());

while($row = mysql_fetch_row($result)) {  				  		   	


			print "<div class='comments_container'>\n"; 				  		   	
			print "<div class='comments_name'>$row[0] - <span class='comments_date'>$row[2]</span></div>\n";
			print "<div class='comments_body'>$row[1]</div>\n";
			print "</div>\n"; 				  		  

				}

mysql_close($link);


?>
 