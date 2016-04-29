function closeHours() {
	document.getElementById('hours').style.display = "none";
}

function preloadImages() {
	if (document.images)
	{
	  pic1= new Image(); 
	  pic1.src="/images/2l.jpg"; 
	  pic2= new Image(); 
	  pic2.src="/images/3l.jpg";
	  pic3= new Image(); 
	  pic3.src="/images/4l.jpg";
	  pic4= new Image(); 
	  pic4.src="/images/5l.jpg";
	  pic5= new Image(); 
	  pic5.src="/images/6l.jpg";	  	  	  
	  pic6= new Image(); 
	  pic6.src="/images/7l.jpg"; 
	  pic7= new Image(); 
	  pic7.src="/images/8l.jpg";
	  pic8= new Image(); 
	  pic8.src="/images/9l.jpg";
	  pic9= new Image(); 
	  pic9.src="/images/10l.jpg";
	  pic10= new Image(); 
	  pic10.src="/images/11l.jpg";
	  pic11= new Image(); 
	  pic11.src="/images/12l.jpg";	  	  	 	  	 
	  pic12= new Image(); 
	  pic12.src="/images/13l.jpg";	  	  	 	  	  
	  pic13= new Image(); 
	  pic13.src="/images/14l.jpg";	  	  	  
	  pic14= new Image(); 
	  pic14.src="/images/15l.jpg"; 
	  pic15= new Image(); 
	  pic15.src="/images/16l.jpg";
	  pic16= new Image(); 
	  pic16.src="/images/17l.jpg";
	  pic17= new Image(); 
	  pic17.src="/images/18l.jpg";
	  pic18= new Image(); 
	  pic18.src="/images/19l.jpg";
	  pic19= new Image(); 
	  pic19.src="/images/20l.jpg";	  	  	 	  	 
	}
}

var lovinOven = {
	// Place beginning of photo file names here, in the order you'd like them (ie. "14" refers to both 14s.jpg and 14l.jpg)
	photos : Array("32", "26", "21", "31", "29", "27", "25", "28","22", "23","24","1","14","15", "16", "17", "18", "19", "20", "2", "3", "4", "5", "6", "7", "9", "10", "13"),
	prepare : function() {
		for (x in lovinOven.photos) {
			$('#thumbsContainer').append("<a class='thumbLink' href='#' onclick='lovinOven.changePhoto(" + lovinOven.photos[x] + "); return false;'><img class='thumbs' src='/images/" + lovinOven.photos[x] + "s.jpg' /></a>");
		};
	},
	changePhoto : function(file) {
		if ($('.homeHours').css('display') === 'block') {
			lovinOven.closeSpecials();
		}
		var photoPath = "/images/" + file + "l.jpg"; 
		$('#mainPhoto').attr("src", photoPath);
		var fileToString = file = file + '';
		if (lovinOven.photos.indexOf(fileToString) === lovinOven.photos.length - 1) {
			$('#nextArrow').css('display', 'none');
			$('#prevArrow').css('display', 'block');
		} 
		else if (lovinOven.photos.indexOf(fileToString) === 0) {
			$('#nextArrow').css('display', 'block');
			$('#prevArrow').css('display', 'none');
		}
		else {
			$('#nextArrow, #prevArrow').css('display', 'block');
		}
	},
	nextLink : function() {
		var src = $('#mainPhoto').attr("src");
		var rawSrc = src.slice(8, -5);
		var nextPhotoPos = lovinOven.photos.indexOf(rawSrc) + 1;
		var nextPhoto = lovinOven.photos[nextPhotoPos];
		lovinOven.changePhoto(nextPhoto);
	},
	prevLink : function() {
		var src = $('#mainPhoto').attr("src");
		var rawSrc = src.slice(8, -5);
		var prevPhotoPos = lovinOven.photos.indexOf(rawSrc) - 1;
		var prevPhoto = lovinOven.photos[prevPhotoPos];
		lovinOven.changePhoto(prevPhoto);
	},

	specials : function() {
		($('#showHomepage').val() === 'noShow') ? $('.homeHours').css('display', 'none') : $('.homeHours').css('display', 'block');
		lovinOven.homeSpecialsHeight = $('.homeHours').css('height');	
	},
	homeSpecialsHeight : '300px',
	homeSpecialsState : 'open',
	animateSpecials : function() {
		$('.hoursCloseButton').click(function() {
			(lovinOven.homeSpecialsState === 'open') ? lovinOven.closeSpecials() : lovinOven.openSpecials();
		});
	},
	closeSpecials : function() {
		$('.homeHours').animate({
				height: 24, 
				width: 26	
		}, function(){
			$('.homeHours').addClass('roundTopLeftCornerOff');			
		});
		$('.hoursCloseButton').html('&#9650;');
		lovinOven.homeSpecialsState = 'closed';		
	},
	openSpecials : function() {
		$('.homeHours').animate({
				height: lovinOven.homeSpecialsHeight, 
				width: 200	
		}, function(){
			$('.homeHours').removeClass('roundTopLeftCornerOff');			
		});
		$('.hoursCloseButton').html('&#9660;');
		lovinOven.homeSpecialsState = 'open';		
	},
	dialog : function() {
		//select all the a tag with name equal to modal
		$('a[name=modal]').click(function(e) {
			//Cancel the link behavior
			e.preventDefault();
			
			//Get the A tag
			var id = $(this).attr('href');
		
			//Get the screen height and width
			var maskHeight = $(document).height();
			var maskWidth = $(window).width();
		
			//Set heigth and width to mask to fill up the whole screen
			$('#mask').css({'width':maskWidth,'height':maskHeight});
			
			//transition effect		
			$('#mask').show();
		
			//Get the window height and width
			var winH = $(window).height();
			var winW = $(window).width();
				  
			//Set the popup window to center
			// $(id).css('top',  winH/2-$(id).height()/2);
			$(id).css('left', winW/2-$(id).width()/2);
		
			//transition effect
			$(id).show(); 
		
		});
		
		//if close button is clicked
		$('.window .close').click(function (e) {
			//Cancel the link behavior
			e.preventDefault();
			
			$('#mask').hide();
			$('.window').hide();
		});		
		
		//if mask is clicked
		$('#mask').click(function () {
			$(this).hide();
			$('.window').hide();
		});			
	}
};



$(document).ready(function() {
	lovinOven.prepare();
	lovinOven.dialog();
	lovinOven.specials();
	lovinOven.animateSpecials();
	preloadImages();
});			