var siteUrl='http://localhost/codeigniter/';
$(document).ready(function() {
	$('#showFilePanel').click(function(event) {
		if ($('.login-container').hasClass('dismiss')) {
			$('.login-container').removeClass('dismiss').addClass('selected').show();
			$('.login-wrapper').addClass('show').show();
		}
		event.preventDefault();
	});

	$('.closeFilePanel').click(function(event) {
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

	$('#openRegisterForm').on('click',function(){
		$('#login-form').addClass('hide');
		$('#registerForm').addClass('show');
		event.preventDefault();
	});
	$('#homeRegisterButton').click(function() {
		if ($('.login-container').hasClass('dismiss')) {
			$('.login-container').removeClass('dismiss').addClass('selected').show();
			$('#login-form').addClass('hide');
			$('#registerForm').addClass('show');
			$('.login-wrapper').addClass('show').show();
		}
		event.preventDefault();
	});

	$('#openLoginForm').on('click',function(){
		$('#registerForm').removeClass('show');
		$('#login-form').removeClass('hide');
		event.preventDefault();
	});
	


    $('.scrollup.back-top').on("click",function(){
	    $('html, body').animate({scrollTop:0}, 'slow');
        return false;
	});

    //login
    $('form#scLoginForm').on('submit',function(){
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
    $('.login-container').on('submit','form#scRegisterForm',function(){
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
					title:"Hmmm...?`",
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
});