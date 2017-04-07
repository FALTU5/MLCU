// Disable copy paste drag drop
$(document).ready(function(){
    $('input').attr("onPaste","return false");
    $('input').attr("onCopy","return false");
    $('input').attr("onCut","return false");
    $('input').attr("onDrag","return false");
    $('input').attr("onDrop","return false");
});

// disable spacing
function RestrictSpace() {
    if (event.keyCode == 32) {
        return false;
    }

    // Validate password
    $('#confirm_password').on('focus', function () {
        $('#confirm_password,#password').on('keyup', function () {
            if ($(this).val() != $('#password').val()) {
                $('#message').html('Password Mismatch').css('color', 'red');
                $('#signup').attr({disabled: true});    // disable submit button
            }
            else {
                $('#message').html('Password Match').css('color', 'green');
                $('#signup').attr({disabled: false});   // enable submit button
            }
        });
    });
}
