$(function()
{
    $("#register-form1").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true
            }
        }
    });

});