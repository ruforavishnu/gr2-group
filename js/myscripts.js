// JavaScript Document

$(document).ready(function(){
  $('#test').on('click',function()
  {
	  $('#test').hide(700);
  })
});




  $(function() {
    $("#map").googleMap();
    $("#map").addMarker({
      coords: [24.293236, 54.302629], // GPS coords
      title: 'Marker n°1', // Title
      text:  '<b>Lorem ipsum</b> dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' // HTML content
    });
  })