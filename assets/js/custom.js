$(document).ready(function () {

    $('#click_form').click(function () {
        name = $.trim($('#name').val());
        //alert(name)
        email = $.trim($('#email').val());
        //alert(email)
        password = $.trim($('#password').val());
        //alert(password) 
        rpassword = $.trim($('#rpassword').val());
        //alert(rpassword) 
        if (name === '' || email === '' || password === '' || rpassword === '') {
            alertify.alert('Form validation!','Please fill all the mandatory fields ');
            return false;
        } else {

            jQuery.ajax({
                type: "POST",
                url: "main/register",
                data: $("#reg_form").serialize(),
                success: function (res) {
                    $(".ajax_response_result").html(res);
                    console.log(res);
                    if (res.includes("success")) {
                        $("#reg_form").trigger("reset")
                    }
                }
            });
        }
    });
});
