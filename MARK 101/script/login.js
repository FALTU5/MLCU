$('input#login-submit').on('click', function login(){
    var username = $('input#username').val();
    var password = $('input#password').val();

    if($.trim(username) == '' || $.trim(password) == '')
    {
        $("#msg").text("Please entered the required fields.");
    }
    else
    {
        $.post('login.php', {username:username, password:password}).done(function(data) {
            if(data == "success" )
            {
                window.location = "home.php";
            }
            else
                $("#msg").text(data);

        });
    }
});

$('input').keyup(function(){
    var str = $(this).val();
    str = str.replace(/\s/g,'');
    $(this).val(str);
});