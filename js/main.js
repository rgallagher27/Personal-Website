$(window).load(function() {
  $("#show_icons").click(function(){
    $(".icons, .icons a").toggle('slow');
   })
	$('.spinner').fadeOut();
	$('body').css({overflow:'auto', 'min-height':'820px'});
  $('#contact-form').forms()
	$('.skill_set').each(function() {
		var skill = $(this);
		var skill_width = $(this).attr('data-skill');  
	 // skill.css('width', skill_width+'%');
		skill.animate({
				width: skill_width+'%'
		},1000);
	});
  $(function(){
    var li=$('.tweet_list li')
     ,n=0
     ,activeClass="active"
   
    function fu(){
     li.removeClass(activeClass)
     li.eq(n++).addClass(activeClass)
     n=n<li.length?n:0
     setTimeout(fu,4000)
    }
    fu()
   })
  jQuery(".jackbox[data-group]").jackBox("init", {deepLinking: false, useThumbs:false});
  filter_start();
})


var map;
var brooklyn = new google.maps.LatLng(55.958327,-4.784209);
var MY_MAPTYPE_ID = 'hiphop';
function initialize() {
  var stylez = [
    {
      "stylers": [
        { "saturation": -97 }
      ]
    },{
    }
  ] 
  var mapOptions = {
    zoom: 12,
    center: brooklyn,
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
    },
    mapTypeId: MY_MAPTYPE_ID
  };
  map = new google.maps.Map(document.getElementById('map_canvas'),
      mapOptions);
  var styledMapOptions = {
    name: 'GrayScale'
  };
  var jayzMapType = new google.maps.StyledMapType(stylez, styledMapOptions);
  map.mapTypes.set(MY_MAPTYPE_ID, jayzMapType);
}