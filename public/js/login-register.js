/*
 *
 * login-register modal
 * Autor: Creative Tim
 * Web-autor: creative.tim
 * Web script: http://creative-tim.com
 * 
 */
function showRegisterForm(){
    $('.loginBox').fadeOut('fast',function(){
		$('.register-footer').fadeIn('fast');
        $('.registerBox').fadeIn('fast');
		$('.forgotpassBox').fadeOut('fast');
		$('#social').hide();
		$('.division').hide();
        $('.login-footer').hide();
        $('.modal-title').html('Let’s get started');
    }); 
    $('.error').removeClass('alert alert-danger').html('');
       
}
function showLoginForm(){
    $('#loginModal .registerBox').fadeOut('fast',function(){
        $('.loginBox').fadeIn('fast');
		$('.forgotpassBox').hide();
		$('#social').fadeIn('fast');
		$('.division').fadeIn('fast');
        $('.register-footer').hide();
		$('.login-footer').fadeIn('fast');
        
        $('.modal-title').html('Login');
    });       
     $('.error').removeClass('alert alert-danger').html(''); 
}
function forgotPassword(){
	$('.loginBox').fadeOut('fast',function(){
		$('.register-footer').fadeIn('fast');
		$('.forgotpassBox').fadeIn('fast');
		$('#social').hide();
		$('.division').hide();
        $('.login-footer').hide();
		$('.modal-title').html('Forgot password?');
	});
	$('.error').removeClass('alert alert-danger').html('');
	
}
function openLoginModal(){
    showLoginForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}
function openRegisterModal(){
    showRegisterForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}

function loginAjax(){
	
	window.location("localhost");
//$.get(" ..includes/login.inc.php");
//return false;
/*
    $.post( $("#formId"), function( data ) {
            if(data != null){
                window.location.replace("/logInSystem");
					$.get("testPractice.html");
            } else {
                 shakeModal(); 
            }
        });


   Simulate error message from the server   */
     //shakeModal();
}

function shakeModal(){
    $('#loginModal .modal-dialog').addClass('shake');
             $('.error').addClass('alert alert-danger').html("Invalid email/password combination");
             $('input[type="password"]').val('');
             setTimeout( function(){ 
                $('#loginModal .modal-dialog').removeClass('shake'); 
    }, 1000 ); 
}

   