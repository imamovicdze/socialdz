$(function(){
    // $.validator.addMethod('strongPassword', function (value, element) {
    //    return this.optional(element)
    //     || value.length >= 6
    //     && /\d/.test(value)
    //     && /[a-z]/i.test(value);
    // },'Your password must be at least 6 characters long and contain at least one number and one char\'.')

    $("#register-form").validate({
        rules: {
            name: {
                required: true,
                nowhitespace: true,
                lettersonly: true
            },
            surname: {
                required: true,
                nowhitespace: true,
                lettersonly: true},
            email: {
                required: true,
                email: true
            },
            password: {
                required: true
            },
            password2: {
                required: true,
                equalTo: "#password"
            }
        },
        messages: {
            email: {
                required: 'Please enter an email address.',
                email: 'Please enter a <em>valid</em> email address.'
            }
        }
    });

});