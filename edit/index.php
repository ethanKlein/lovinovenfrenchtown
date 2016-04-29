<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
<head>
	<title>Lovin Oven Frenchtown News &amp; Events</title>
	<link rel="icon" href="http://www.lovinovenfrenchtown.com/favicon.gif" type="image/x-icon">	
	<link type="text/css" rel="stylesheet" href="/siteWide.css" />
	<link rel="stylesheet" href="/inc/jwysiwyg/jquery.wysiwyg.css" type="text/css" />

<style type="text/css">
	.editInput {
		display: none;
		width: 90%;
	}
	.editItem:hover {
		background: #ccc;
		cursor: pointer;	
	}
	.editField {
		width: 650px;
		height: 200px;
	}
	.editableList {
		list-style-position: outside;
		cursor: pointer;
	}
	.editableList li {
		padding-left: 2px;
	}
	.editableList li:hover {
		background: #ccc;
		text-decoration: underline;
	}
	.feedback {
		margin: 10px;
		float: left;
		display: none;
	}
	#submit {
		margin: 10px 0;
	}
	.container {
		/* display: none; */
	}
	.container {
		display: none;
	}
	/*
	#breakfastContainer, #breakfastMenuContainer, #lunchContainer, #lunchMenuContainer, #dinnerContainer, #dinnerMenuContainer, #homepageContainer, #hoursContainer {
		display: none;
	}
	*/	
	.editSectionTitle {
		float: left;
		font-weight: bold;	
	}
	.editSectionCheckbox {
		float: right;
	}
	.editSectionTitleContainer {
		width: 650px;
		padding: 5px 0 5px 3px;
		border-top: 1px dashed #ccc;
	}	
	.ajaxLoader {
		margin: 10px 10px 0 10px;
		float: left;
		display: none;
	}
</style>

</head>

<body marginheight="0" marginwidth="0" topmargin="0" leftmargin="0">

<div class="mainContainer">

	<!-- test box -->
	<div class="testBox">
		<div class="test1">&nbsp;</div>
		<div class="test2">&nbsp;</div>
		<div class="test3">&nbsp;</div>
		<div class="test4">&nbsp;</div>
	</div>	
	
	<!-- muffin also absolutely positioned -->
	<img src="/images/muffin.png" class="muffin" alt="muffin!" />
	<img src="/images/cupcake.png" class="cupcake" alt="cupcake	!" />
		
	<div class="rightCol">
		<div class="cake">
			<!-- cake image -->
		</div>
		<div class="hoursBox">
			<div class="hoursBoxTitle">Hours</div>
			Wed - Sat: 8am - 9pm<br />
			Sun: 8am - 3pm
		</div>
		<img src="/images/holdingSquash.jpg" class="lowerRightImage" alt="lovinOven" />	
	</div>
	<div class="leftCol">
		<?php include("../topNav.html"); ?>
		<div class="contentContainer">
			<div class="menu_header">Lovin' Oven Edit Page</div>

			Choose one of the following to edit:
			<ul class="editableList">
				<li id="breakfast">Breakfast Specials</li>
				<li id="breakfastMenu">Breakfast Menu</li>
				<li id="lunch">Lunch Specials</li>
				<li id="lunchMenu">Lunch Menu</li>
				<li id="cafe">Cafe Menu</li>
				<li id="dinner">Dinner Specials</li>
				<li id="dinnerMenu">Dinner Menu</li>
				<li id="homepage">News &amp; Events</li>
				<li id="hours">Hours</li>
        <li id="homepageBlast">Home Page Blast</li>
					
			</ul>	
	
			<!-- breakfast -->
			<div id="breakfastContainer" class="container">
				<div class="editSectionTitleContainer">
					<div class="editSectionTitle">Edit Breakfast Specials:</div> 
					<div class="editSectionCheckbox">
						<input type="checkbox" id="breakfastShow" /><label for="breakfastShow">Show breakfast specials on the menu</label>
					</div>
					<br class="clear" />	
				</div>
				<textarea class="editField" id="editBreakfast">
					<?php include("breakfastSpecials.html"); ?>
				</textarea>
			</div>

			<!-- breakfast Menu -->
			<div id="breakfastMenuContainer" class="container">
				<div class="editSectionTitleContainer">
					<div class="editSectionTitle">Edit Breakfast Menu:</div> 
					<br class="clear" />	
				</div>
				<textarea class="editField" id="editBreakfastMenu">
					<?php include("breakfastMenu.html"); ?>
				</textarea>
			</div>
	
			<!-- lunch -->
			<div id="lunchContainer" class="container">
				<div class="editSectionTitleContainer">
					<div class="editSectionTitle">Edit Lunch Specials:</div> 
					<div class="editSectionCheckbox">
						<input type="checkbox" id="lunchShow" /><label for="lunchShow">Show lunch specials on the menu</label>
					</div>
					<br class="clear" />	
				</div>
				<textarea class="editField" id="editLunch">
					<?php include("lunchSpecials.html"); ?>
				</textarea>
			</div>
	
			<!-- lunch Menu -->
			<div id="lunchMenuContainer" class="container">
				<div class="editSectionTitleContainer">
					<div class="editSectionTitle">Edit Lunch Menu:</div> 
					<br class="clear" />	
				</div>
				<textarea class="editField" id="editLunchMenu">
					<?php include("lunchMenu.html"); ?>
				</textarea>
			</div>

			<!-- cafe menu -->
			<div id="cafeContainer" class="container">
				<div class="editSectionTitleContainer">
					<div class="editSectionTitle">Edit Cafe Menu:</div> 
					<!-- TODO - fix the checkboxes 
					<div class="editSectionCheckbox">
						<input type="checkbox" id="cafeShow" /><label for="cafeShow">Show cafe menu on the menu</label>
					</div>
					-->
					<br class="clear" />	
				</div>
				<textarea class="editField" id="editCafe">
					<?php include("cafeMenu.html"); ?>
				</textarea>
			</div>
	
			<!-- dinner -->
			<div id="dinnerContainer" class="container">
				<div class="editSectionTitleContainer">
					<div class="editSectionTitle">Edit Dinner Specials:</div> 
					<div class="editSectionCheckbox">
						<input type="checkbox" id="dinnerShow" /><label for="dinnerShow">Show dinner specials on the menu</label>
					</div>
					<br class="clear" />	
				</div>
				<textarea class="editField" id="editDinner">
					<?php include("dinnerSpecials.html"); ?>
				</textarea>
			</div>

			<!-- dinner Menu -->
			<div id="dinnerMenuContainer" class="container">
				<div class="editSectionTitleContainer">
					<div class="editSectionTitle">Edit Dinner Menu:</div> 
					<br class="clear" />	
				</div>
				<textarea class="editField" id="editDinnerMenu">
					<?php include("dinnerMenu.html"); ?>
				</textarea>
			</div>
	
			<!-- homepage -->
			<div id="homepageContainer" class="container">	
				<div class="editSectionTitleContainer">
					<div class="editSectionTitle">Edit News &amp; Events:</div> 
	
					<br class="clear" />	
				</div>
				<textarea class="editField" id="editHomepage">
					<?php include("homepageCallout.html"); ?>
				</textarea>
			</div>

			<!-- Hours -->
			<div id="hoursContainer" class="container">
				<div class="editSectionTitleContainer">
					<div class="editSectionTitle">Edit Hours:</div> 
					<br class="clear" />	
				</div>
				<textarea class="editField" id="editHours">
					<?php include("hours_edit.html"); ?>
				</textarea>
			</div>

      <!-- Homepage Blast -->
      <div id="homepageBlastContainer" class="container">
        <div class="editSectionTitleContainer">
          <div class="editSectionTitle">Edit Homepage Blast:</div> 
          <div class="editSectionCheckbox">
            <input type="checkbox" id="homepageBlastShow" /><label for="homepageBlastShow">Show homepage-blast on the homepage</label>
          </div>

          <br class="clear" />  
        </div>
        <textarea class="editField" id="editHomepageBlast">
          <?php include("homepageBlast.html"); ?>
        </textarea>
      </div>
	
			<input id="submit" value="submit changes" type="submit" style="float: left" />
			<img class="ajaxLoader" src="../images/ajax-loader.gif" alt="loading" />
			<div class="feedback">Your updates have been saved successfully!</div>
			<br style="clear:both" />&nbsp;
			<p style="font-size: 11px;">(<i>Please email ethan at niceness dot org with any website-related problems or questions</i>)</p>

			<div id="hiddenForms">
				<?php include("hiddenForms.html"); ?>
			</div>

		</div>
		<br class="clear" />
	
	</div>
	<?php include("../footer.html"); ?>
</div>

<script type="text/javascript" src="/js/jquery-1.4.4.min.js"></script>	
<script type="text/javascript" src="/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/js/jquery.transit.min.js"></script>
<script type="text/javascript" src="/js/2011.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		lo.slideshow.setup();
		lo.slideshow.testSetup();
	});
</script>

<script type="text/javascript" src="/inc/jwysiwyg/jquery.wysiwyg.js"></script>
<script type="text/javascript">
	
	var editLovin = {
		breakfastMenuCreated : 'no',
		lunchCreated : 'no',
		lunchMenuCreated : 'no',
		cafeCreated : 'no',
		dinnerCreated : 'no',
		dinnerMenuCreated : 'no',
		homepageCreated : 'no',
    hoursCreated : 'no',
    homepageBlastCreated: 'no',
		currentSection : 'editBreakfast',
		currentFile : 'breakfastSpecials.html',
		currentShowOrNo : 'show',
		showOrNot : function() {
			($('#breakfastShow').is(':checked')) ? $('#showBreakfast').val('show') : $('#showBreakfast').val('noShow');
			($('#lunchShow').is(':checked')) ? $('#showLunch').val('show') : $('#showLunch').val('noShow');
			($('#cafeShow').is(':checked')) ? $('#showCafe').val('show') : $('#showCafe').val('noShow');
			($('#dinnerShow').is(':checked')) ? $('#showDinner').val('show') : $('#showDinner').val('noShow');
			($('#homepageShow').is(':checked')) ? $('#showHomepage').val('show') : $('#showHomepage').val('noShow');
      ($('#homepageBlastShow').is(':checked')) ? $('#showHomepageBlast').val('show') : $('#showHomepageBlast').val('noShow');		
		},
		setCheckboxes : function() {
			($('#showBreakfast').val() === 'show') ? $('#breakfastShow').attr('checked', 'checked') : $('#breakfastShow').removeAttr('checked');
			($('#showLunch').val() === 'show') ? $('#lunchShow').attr('checked', 'checked') : $('#lunchShow').removeAttr('checked');
			($('#showCafe').val() === 'show') ? $('#cafeShow').attr('checked', 'checked') : $('#cafeShow').removeAttr('checked');
			($('#showDinner').val() === 'show') ? $('#dinnerShow').attr('checked', 'checked') : $('#dinnerShow').removeAttr('checked');
			($('#showHomepage').val() === 'show') ? $('#homepageShow').attr('checked', 'checked') : $('#homepageShow').removeAttr('checked');
      ($('#showHomepageBlast').val() === 'show') ? $('#homepageBlastShow').attr('checked', 'checked') : $('#homepageBlastShow').removeAttr('checked');
		},
		init : function() {
			$('#breakfastContainer').css('display', 'block');
			$('#editBreakfast').wysiwyg();
			editLovin.setCheckboxes();
			$(':checkbox').click(function(){
				editLovin.showOrNot();
			});
			$('#submit').click(function() {	
				$('.feedback').css('display', 'none');
				$('.ajaxLoader').css('display', 'block');	
				$.ajax({
   					type: "POST",
   					url: "/edit/editFiles.php",
   					data: ({hiddenForms : $('#hiddenForms').html(), file : editLovin.currentFile, data : $('#' +  editLovin.currentSection + 'IFrame').contents().find('body').html()}),
					success: function(data){
						$('.ajaxLoader').css('display', 'none');	
     					$('.feedback').css('display', 'block');	
   					}
 				});

			});
			$('.editableList li').click(function(){
				switch ($(this).attr('id')) {
					case 'breakfast':
						editLovin.clearSections();
						$('#breakfastContainer').css('display', 'block');
						editLovin.currentSection = 'editBreakfast';
						editLovin.currentFile = 'breakfastSpecials.html';	
						break;
					case 'breakfastMenu':
						editLovin.clearSections();
						$('#breakfastMenuContainer').css('display', 'block');
						if (editLovin.breakfastMenuCreated === 'no') {
							$('#editBreakfastMenu').wysiwyg();
						}	
						editLovin.breakfastMenuCreated = 'yes';
						editLovin.currentSection = 'editBreakfastMenu';
						editLovin.currentFile = 'breakfastMenu.html';		
						break;
					case 'lunch':
						editLovin.clearSections();
						$('#lunchContainer').css('display', 'block');
						if (editLovin.lunchCreated === 'no') {
							$('#editLunch').wysiwyg();
						}	
						editLovin.lunchCreated = 'yes';
						editLovin.currentSection = 'editLunch';
						editLovin.currentFile = 'lunchSpecials.html';		
						break;
					case 'lunchMenu':
						editLovin.clearSections();
						$('#lunchMenuContainer').css('display', 'block');
						if (editLovin.lunchMenuCreated === 'no') {
							$('#editLunchMenu').wysiwyg();
						}	
						editLovin.lunchMenuCreated = 'yes';
						editLovin.currentSection = 'editLunchMenu';
						editLovin.currentFile = 'lunchMenu.html';		
						break;
					case 'cafe':
						editLovin.clearSections();
						$('#cafeContainer').css('display', 'block');
						if (editLovin.cafeCreated === 'no') {
							$('#editCafe').wysiwyg();
						}	
						editLovin.cafeCreated = 'yes';
						editLovin.currentSection = 'editCafe';
						editLovin.currentFile = 'cafeMenu.html';		
						break;
					case 'dinner':
						editLovin.clearSections();
						$('#dinnerContainer').css('display', 'block');
						if (editLovin.dinnerCreated === 'no') {
							$('#editDinner').wysiwyg();
						}	
						editLovin.dinnerCreated = 'yes';
						editLovin.currentSection = 'editDinner';
						editLovin.currentFile = 'dinnerSpecials.html';		
						break;
					case 'dinnerMenu':
						editLovin.clearSections();
						$('#dinnerMenuContainer').css('display', 'block');
						if (editLovin.dinnerMenuCreated === 'no') {
							$('#editDinnerMenu').wysiwyg();
						}	
						editLovin.dinnerMenuCreated = 'yes';
						editLovin.currentSection = 'editDinnerMenu';
						editLovin.currentFile = 'dinnerMenu.html';		
						break;
					case 'homepage':
						editLovin.clearSections();
						$('#homepageContainer').css('display', 'block');
						if (editLovin.homepageCreated === 'no') {
							$('#editHomepage').wysiwyg();
						}	
						editLovin.homepageCreated = 'yes';
						editLovin.currentSection = 'editHomepage';
						editLovin.currentFile = 'homepageCallout.html';		
						break;
					case 'hours':
						editLovin.clearSections();
						$('#hoursContainer').css('display', 'block');
						if (editLovin.hoursCreated === 'no') {
							$('#editHours').wysiwyg();
						}	
						editLovin.hoursCreated = 'yes';
						editLovin.currentSection = 'editHours';
						editLovin.currentFile = 'hours_edit.html';		
						break;
          case 'homepageBlast':
            editLovin.clearSections();
            $('#homepageBlastContainer').css('display', 'block');
            if (editLovin.homepageBlastCreated === 'no') {
              $('#editHomepageBlast').wysiwyg();
            } 
            editLovin.homepageBlastCreated = 'yes';
            editLovin.currentSection = 'editHomepageBlast';
            editLovin.currentFile = 'homepageBlast.html';    
            break;


					default:
				}
			});
		},
		clearSections : function() {
			$('#homepageBlastContainer, #breakfastContainer, #breakfastMenuContainer, #lunchContainer, #lunchMenuContainer, #cafeContainer, #dinnerContainer, #dinnerMenuContainer, #homepageContainer, #hoursContainer').css('display', 'none');	
		}
	};
	
	$(document).ready(function() {
		editLovin.init();
	});

</script>

	
</body>
</html>
