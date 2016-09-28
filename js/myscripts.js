// JavaScript Document

$(document).ready(function(){


	/**************Submit form*************/

	$('#submit').click(function()

	{
		var cli_name = $('#uname').val();
		var cli_email = $('#uemail').val();
		var cli_phone = $('#uphone').val();

		console.log('name:'+cli_name);
		console.log('email:'+cli_email);
		console.log('phone:'+cli_phone);

		
/*
		$.post("sendgodaddyemail.php",

				{name: cli_name,
				 email :cli_email,
				 phone: cli_phone,
			 	 file:	 $('input[name=fileToUpload]').fieldValue();
				},
				function(data,status)
				{
					
					console.log('status:'+status);
					console.log('data:'+data);
				}
			);
*/

		console.log('complete');
	})


	/***************************************/





	
	$('#abt-head').hover(function()
	{
		$('#submenu-desc').html("<small>We are Tasaheel. We fabricate an unbelievable future for your brand that makes you feel great.We are the most creative company, giving life to technology with the motto to deliver the products that you will love at the moment you see it.</small>");

	}
		)
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