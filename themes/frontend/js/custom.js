var siteUrl='http://localhost/localbazzar/';
$(document).ready(function() {

	$.validate({
		modules : 'security',
		// onModulesLoaded : function() {
		// 	$('#country').suggestCountry();
		// }
	});
	$('#show_file_panel').click(function(event) {
		if ($('.login-container').hasClass('dismiss')) {
			$('.login-container').removeClass('dismiss').addClass('selected').show();
			$('.login-wrapper').addClass('show').show();
		}
		event.preventDefault();
	});

	$('.close_file_panel').click(function(event) {
		if ($('.login-container').hasClass('selected')) {
			$('.login-container').removeClass('selected').addClass('dismiss');
			$('.login-wrapper').removeClass('show');
		}
		event.preventDefault();
	});

	$('.login-wrapper').on('click',function(){
		if ($('.login-container').hasClass('selected')) {
			$('.login-container').removeClass('selected').addClass('dismiss');
			$('.login-wrapper').removeClass('show');
		}
		event.preventDefault();
	});

	$('#open_register_form').on('click',function(){
		$('#login_box').addClass('hide');
		$('#register_box').addClass('show');
		event.preventDefault();
	});
	$('#home_register_button').click(function() {
		if ($('.login-container').hasClass('dismiss')) {
			$('.login-container').removeClass('dismiss').addClass('selected').show();
			$('#login_box').addClass('hide');
			$('#register_box').addClass('show');
			$('.login-wrapper').addClass('show').show();
		}
		event.preventDefault();
	});

	$('#open_login_form').on('click',function(){
		$('#register_box').removeClass('show');
		$('#login_box').removeClass('hide');
		event.preventDefault();
	});



    $('.scrollup.back-top').on("click",function(){
	    $('html, body').animate({scrollTop:0}, 'slow');
        return false;
	});

    //login
    $('form#login_form').on('submit',function(){
    	var action=$(this).attr('action');
    	$('#siteloaderWrapper').addClass('show');
    	$.post(action,$(this).serialize(),function(response){
			if(response=='success'){
				swal.fire({
				  title: "Good job!",
				  text: "Welcome Back!",
				  icon: "success",
				  showConfirmButton: false,
				});
				location.reload(true);
			}else{
				swal.fire({
					title:"Hmmm...?",
					html: response,
					icon: "error",
					showConfirmButton: false,
					timer: 2000
				});
			}
		});
		$('#siteloaderWrapper').removeClass('show');
    	return false;
    });

    // Register
    $('.login-container').on('submit','form#register_form',function(){
    	$('#siteloaderWrapper').addClass('show');
    	var action=$(this).attr('action');
    	var username=$(this).find('input[name=name]').val();
		username=username.split(' ');
		var first_name=username['0'];
		var last_name=username['1'];
		var email=$(this).find('input[name=email]').val();
		var password=$(this).find('input[name=password]').val();
		var phone=$(this).find('input[name=phone]').val();
		$.post(action,{'first_name':first_name,'last_name':last_name,'email':email,'password':password,'password_confirm':password,'phone':phone},function(response){
			if(response == 'success'){
				swal.fire({
					title: "Good job!",
					text: "Account Successfully Registered!",
					icon: "success",
					showConfirmButton: false,
				});
				location.reload(true);
			}else{
				swal.fire({
					title:"Hmmm...?",
					html:response,
					icon: "error",
					showConfirmButton: false,
					// timer: 2000
				});
			}
		});
		$('#siteloaderWrapper').removeClass('show');
    	return false;
    });

    // userMeta data update
    $('#userInfoUpdate').on('submit',function(){
    	$('#siteloaderWrapper').addClass('show');
    	var action =$(this).attr('action');
    	var id=$(this).data('userid');
    	$.post(action+id,$(this).serialize(),function(response){
    		if(response=='success'){
				swal.fire({
					title:"Good job!",
					html:"Thank You for Updating Your Information.",
					icon: "success",
					showConfirmButton: false,
					// timer: 2000
				});
    		}else{
    			swal.fire({
					title:"Hmmm...?",
					html:'Please Fill All The Details.',
					icon: "error",
					showConfirmButton: false,
					// timer: 2000
				});
    		}

    	});
    	$('#siteloaderWrapper').removeClass('show');
    	return false;
    });

    // for ad Adding

    $('.addListing').find('select#categories').on('change',function(){
    	var val= $(this).children("option:selected").val();
    	$.post(siteUrl+'ads/getSubCategories/'+val,'',function(response){
    		$('.addListing').find('#subCategory').find('.form-group').html(response);
    	});
    });

    $(document).find('#subCategory').on('change','select',function(){
    	var val= $(this).children("option:selected").val();
    	$.post(siteUrl+'ads/getFields/'+val,'',function(response){
    		$('.addListing').find('#productInformation').html(response);
    	});
    })

    // form submit

    $('.addListing').find('#adsForm').on('submit',function(){
    	$('#siteloaderWrapper').addClass('show');
    	var action =$(this).attr('action');
    	$.post(action,$(this).serialize(),function(response){
    		// slow alert message and redirect them to the ad detail page get id an
    	});
    	return false;
    });
});

function is_number(evt){
	var ch = String.fromCharCode(evt.which);
	if(!(/[0-9]/.test(ch))){
		evt.preventDefault();
	}
}
