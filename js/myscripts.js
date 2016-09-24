// JavaScript Document

$(document).ready(function(){
	
	$('#abt-1').hover(function()
	{

	  $('#submenu-desc').html("<small>With success comes responsibility,so we take care to reinvest in protecting and developing the communities within which we operate. We live and work in the communities where our operations are based and take our responsibilities to society seriously.</small>");
	 
	  
	})
	
	$('#abt-2').hover(function()
	{
	  $('#submenu-desc').html("<small>We are a team of over 10,000 employees working towards nation building.</small>");
	})
	$('#abt-3').hover(function()
	{
	  $('#submenu-desc').html("<small>One Organization with one brand - Our new visual identity is designed to help tell the story of integration in a simple and modern style.</small>");
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