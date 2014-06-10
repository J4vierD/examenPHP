
/***** Gmaps *****/

// Configuration de l'icône personnalisée
	var image = {
	    // l'icône personnalisée
	    url: 'img/marker.svg',
	    // Taille 
	    size: new google.maps.Size(50, 42),
	    // Origine 
	    origin: new google.maps.Point(0,0),
	    // L'ancre de l'image.
	    anchor: new google.maps.Point(38, 42)
	};

/***** Personnalisation Gmap *****/

 	var map;
  var style = [
  {
    "featureType": "administrative.country",
    "elementType": "geometry",
    "stylers": [
      { "color": "#E74B3C" }
    ]
  },{
    "featureType": "landscape.natural",
    "stylers": [
      { "color": "#F1F1F1" }
    ]
  },{
    "featureType": "landscape.man_made",
    "stylers": [
      { "color": "#CCCCCC" }
    ]
  },{
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      { "color": "#A8A8A8" },
      { "visibility": "simplified" }
    ]
  },{
    "featureType": "road.arterial",
    "elementType": "geometry",
    "stylers": [
      { "color": "#C1C1C1" }
    ]
  },{
    "featureType": "administrative",
    "elementType": "labels.text.fill",
    "stylers": [
      { "color": "#E74B3C" }
    ]
  },{
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      { "color": "#A8A8A8" }
    ]
  },{
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      { "color": "#A8A8A8" }
    ]
  },{
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      { "color": "#A8A8A8" }
    ]
  },{
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      { "color": "#A8A8A8" }
    ]
  },{
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      { "color": "#A8A8A8" }
    ]
  },{
    "featureType": "landscape.natural",
    "elementType": "labels.text.fill",
    "stylers": [
      { "color": "#808080" }
    ]
  },{
  }
]


/***** Scrollto *****/
/* index */

$("#start-index").click(function(e) {
  e.preventDefault();
  $('html, body').animate({
      scrollTop: $("#ancre").offset().top
  }, 1000);
});

/* Try */   /* + Etang */
$("#start").click(function(e) {
    e.preventDefault();
      $('html, body').animate({
          scrollTop: $("#ancre").offset().top
      }, 1000);
  });


/***** Upload Visu *****/

$("#fileUpl").change(function(){
  previewIMG(this);
});

function previewIMG(selectedFile) {
  if (selectedFile.files[0]) {
    var image = selectedFile.files[0];
    
    if (image.type === "image/jpeg" || image.type === "image/jpg" || image.type === "image/png" || image.type === "image/gif") {
      var objectURL = URL.createObjectURL(image);
      $('#profilEcrire').css('background-image', 'url(' + objectURL + ')'); 
      $('#upload').css('background-image', 'url(' + objectURL + ')');

    }
  }
}





	

 $(document).ready(function(){


	/***** Parallax *****/

	//$('#nav').localScroll(800);
	
	//.parallax(xPosition, speedFactor, outerHeight) options:
	//xPosition - Horizontal position of the element
	//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	$('#ways').parallax("center", 0.4, true);

	$('#couvertureEta').parallax("center", 0.4, true);

	$('#couvertureSuc').parallax("center", 0.4, false);
	$('#derniereanneeSuc').parallax("center", 0.4, false);
	$('#fondationSuc').parallax("center", 0.4, false);

	$('#couvertureTry').parallax("center", 0.1, true);
	$('#header').parallax("center", 0.4, true);
	//$('#first').parallax("center", 0.4, true);
	$('#arbre').parallax("center", 0.4, true);
	//$('#deux').parallax("center", 0.4, true);
	//$('#trois').parallax("center", 0.4, true);
	$('#fondationTry').parallax("center", 0.4, true);

  $('#profilHeader').parallax("center", 0.4, true);

  $('#profilEcrire').parallax("center", 0.4, true);



  /***** Inview *****/

  $('#nextStory').bind('inview', function(event, isInView, visiblePartX, visiblePartY) {
      if (isInView) {
        if (visiblePartX == 'both') {
          $('#nextLeft').addClass('displayed');
           $('#nextRight').addClass('displayed');
        } 
        else if (visiblePartY == 'bottom') {
          // bottom part of element is visible
        }
        else {
          // whole part of element is visible
        }
      } 
      else {
        // element has gone out of viewport
        $('#nextLeft').removeClass('displayed');
        $('#nextRight').removeClass('displayed');
      }
    });



	/***** Recherche *****/

	 $('.search').click(function(){
	        $('.formheader').toggleClass('searchVisible'),
	        $('.search').toggleClass('searchVisibleBG');
	    });


   /***** + Completer lieu *****/

    $('.completer').click(function(){
      $('#wysi.wysiHistoire').toggleClass('hidePlus');
      $('.plus').toggleClass('active');
      $('.plus span').toggleClass('active');
    });

    $('.completer').on("tap",function(){
      $('#wysi').toggleClass('hidePlus');
      $('.plus').toggleClass('active');
      $('.plus span').toggleClass('active');
    });




    /***** + Creer un lieu (écrire) *****/
   // $('.save.ecrire').addClass("killthenoise");
    //$('footer').removeClass("surplu");

    $('.creerLieu').click(function(){
      $('.creerLieu').toggleClass('active');
      $('#choixHistoire').toggleClass('hideChoix');
      $('.toShow').toggleClass('testHide');
      $('.save.ecrire').toggleClass("killthenoise");
      $('footer').toggleClass("surplu");
    });

    $('p.creerLieu').on("tap",function(){
      $('.creerLieu').toggleClass('active');
      $('#choixHistoire').toggleClass('hideChoix');
      $('.toShow').toggleClass('testHide');
      $('.save.ecrire').toggleClass("killthenoise");
      $('footer').toggleClass("surplu");
    });



   /***** Wisy Medium *****/

    var editor = new MediumEditor('.editable', {
      buttonLabels: 'fontawesome'
    });


    /***** TagIt *****/

    $(function(){
        var sampleTags = ['Genappe', 'Try-au-chêne','sucrerie', 'Ways', 'Bousval'];

    //-------------------------------
    // Remove confirmation
    //-------------------------------
    $('#myTags').tagit({
        availableTags: sampleTags,
        removeConfirmation: true,
        caseSensitive: false
    });

    //-------------------------------
    // Single field
    //-------------------------------
     $('#myTags').tagit({
        availableTags: sampleTags
    });

     //-------------------------------
    // Tag events
    //-------------------------------
    var eventTags = $('#myTags');

    var addEvent = function(text) {
        $('#events_container').append(text + '<br>');
    };

    eventTags.tagit({
        availableTags: sampleTags,
        beforeTagAdded: function(evt, ui) {
            if (!ui.duringInitialization) {
                addEvent('beforeTagAdded: ' + eventTags.tagit('tagLabel', ui.tag));
            }
        },
        afterTagAdded: function(evt, ui) {
            if (!ui.duringInitialization) {
                addEvent('afterTagAdded: ' + eventTags.tagit('tagLabel', ui.tag));
            }
        },
        beforeTagRemoved: function(evt, ui) {
            addEvent('beforeTagRemoved: ' + eventTags.tagit('tagLabel', ui.tag));
        },
        afterTagRemoved: function(evt, ui) {
            addEvent('afterTagRemoved: ' + eventTags.tagit('tagLabel', ui.tag));
        },
        onTagClicked: function(evt, ui) {
            addEvent('onTagClicked: ' + eventTags.tagit('tagLabel', ui.tag));
        },
        onTagExists: function(evt, ui) {
            addEvent('onTagExists: ' + eventTags.tagit('tagLabel', ui.existingTag));
        }
    });
});



})