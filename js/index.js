$(document).ready(function() {

    $('#continue').click(function() {
        const form = new FormData();
        form.append("action", "login");
        form.append("email", $('#userid').val());
        
        const settings = {
          "async": true,
          "crossDomain": true,
          "url": "API/manager.php",
          "method": "POST",
          "headers": {},
          "processData": false,
          "contentType": false,
          "mimeType": "multipart/form-data",
          "data": form
        };
        
        $.ajax(settings).done(function (response) {
            console.log(response)
            if(JSON.parse(response).status){
                $('#password_div').css('display', 'block').siblings('#continue_div, #login_div').css('display', 'block');
                $('#continue_div').css('display', 'none')
                $('#create_div').css('display', 'none')
            }else{               
                $('#create_div').css('display', 'block')
            }
        });

    });

});


$(document).ready(function() {

    $('#login').click(function() {
        const form = new FormData();
        form.append("action", "login");
        form.append("email", $('#userid').val());
        form.append("password", $('#password').val());
        
        const settings = {
          "async": true,
          "crossDomain": true,
          "url": "API/manager.php",
          "method": "POST",
          "headers": {},
          "processData": false,
          "contentType": false,
          "mimeType": "multipart/form-data",
          "data": form
        };
        
        $.ajax(settings).done(function (response) {
            console.log(response)
            if(JSON.parse(response).status){
                if(JSON.parse(response).message==true){
                    location.replace(JSON.parse(response).link)
                }else{
                alert(JSON.parse(response).message)
                }
            }else{               
                alert("something went wrong")
            }
        });

    });

});
  
$(document).ready(function() {

    $('#create').click(function() {
        $('#logincard').css('display', 'none')
        $('#registercard').css('display', 'block')
    });

    $('#logcard').click(function() {
        $('#logincard').css('display', 'block')
        $('#registercard').css('display', 'none')
    });

  });
  
$(document).ready(function() {

    $('#register').click(function() {

    if($('#regpassword').val()==$('#cnfpassword').val()){
        if($('#terms-conditions').is(':checked')){
            const form = new FormData();
            form.append("action", "signup");
            form.append("email", $('#regemail').val());
            form.append("password", $('#regpassword').val());
            form.append("role", $('#agentcheckbox').is(':checked') ? 2:4);
            form.append("name", $('#name').val());

            const settings = {
            "async": true,
            "crossDomain": true,
            "url": "API/manager.php",
            "method": "POST",
            "headers": {},
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
            };

            $.ajax(settings).done(function (response) {
                console.log(response)
                if(JSON.parse(response).status){
                    if(JSON.parse(response).message==true){
                        alert("Register successful")
                        location.reload();
                    }
                }else{               
                    alert(JSON.parse(response).message)
                }
            });
        }else{
            alert("Please accept the privacy policy & terms")
        }

    }else{

        alert("Password Not Match")

    }

    });

  });
  


  function display(response){                
    var jwt = response.credential;
    var user = JSON.parse(atob(jwt.split('.')[1]));
    const form = new FormData();
    form.append("action", "googlelogin");
    form.append("email", user.email);
    form.append("name", user.name);

    const settings = {
    "async": true,
    "crossDomain": true,
    "url": "API/manager.php",
    "method": "POST",
    "headers": {},
    "processData": false,
    "contentType": false,
    "mimeType": "multipart/form-data",
    "data": form
    };

    $.ajax(settings).done(function (response) {
        console.log(response)
        if(JSON.parse(response).status){
            if(JSON.parse(response).message==true){
              location.replace(JSON.parse(response).link)
            }
        }else{     
            
            $('#logincard').css('display', 'none')
            $('#registercard').css('display', 'block')


            $('#regemail').val(user.email);
            $('#name').val(user.name);

        }
    });

  }
