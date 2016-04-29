<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
<head>
	<meta http-equiv="REFRESH" content="0;url=http://www.lovinovenfrenchtown.com">
	<title>Lovin Oven Frenchtown Message Board</title>
<link rel="stylesheet" type="text/css" href="/inc/lovin_styles.css" />

<style type="text/css">
	.message-name {
		width: 350px;
	}
	.message-form {
		width: 550px;
	}
	.message-table {
		margin: 20px;
	}
</style>



</head>


<body>
<!-- <body style="background:#f9beb8;"> -->


<?php include("db.php"); ?>

<div style="background:#f9dbd8; border:1px solid black; width:700px; margin:20px auto;">
	<a href="/"><img border="0" src="/images/sign.jpg" width="700" height="59" alt="Lovin Oven" title="Lovin Oven Milford"></a>
	
	<div class="topNav">
		<a href="/menu/">Menu</a>
		<a href="/directions.html">Directions</a>
		<span class="topNavNonLink">Message Board</span>
		<a href="/news.html">News &amp; Events</a>
	</div>
	
	<div class="menu_header margin20Sides">Lovin Oven Messages</div>


	<div id="comments_list">
		
		<?php
		$sql = "SELECT name, comment, date FROM comments ORDER BY id DESC";
		$result = mysql_query($sql,$link) or die("Unable to select: ".mysql_error());

		while($row = mysql_fetch_row($result)) { 
			print "<div class='comments_container'>\n"; 				  		   	
			print "<div class='comments_name'>$row[0] - <span class='comments_date'>$row[2]</span></div>\n";
			print "<div class='comments_body'>$row[1]</div>\n";
			print "</div>\n"; 				  		   
		}
		mysql_close($link);
		?> 
	
	
	</div>




	<div class="menu_header margin20Sides">Leave a Message</div>
	<form id="comment_form" name="comment_form" onsubmit="return false;">
		<table class="message-table" cellspacing="0" cellpadding="5" border="0">
		<tr>
			<td valign="top">Name:</td>
			<td><input id="messageName" name="name" class="message-name" type="text" /></td>
		</tr>
		<tr>
			<td valign="top">Message:</td>
			<td><textarea id="messageBody" NAME="comment" class="message-form" rows="5"></textarea></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" onclick="makeRequest(document.comment_form.name.value, document.comment_form.title.value, document.comment_form.comment.value); lovinMessages.clearForm();" value="submit message" /></td>
		</tr>
		</table> 
	</form>
	<div style="text-align: center; margin: 20px 0; font-size: 13px;">
		Email any problems or concerns to ethan at lovinovenmilford dot com
	</div>
</div>
<script type="text/javascript" src="/js/jquery-1.3.2.min.js" ></script>
<script language="javascript" src="/js/comments_ajax.js"></script>
<script type="text/javascript">
	var lovinMessages = {
		clearForm : function() {
			$('#messageName').val('');
			$('#messageBody').val('');
			$('html').animate({scrollTop:0}, 'fast'); 
		}
	};
</script>

</body>
</html>
