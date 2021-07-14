/*
 *  Document   : bookCreate.js
 *
 *  Description: Custom javascript code used in book create and edit page
 */

var FormsValidation = function () {

    return {
        init: function () {
            

            /* Initialize Form Validation */
            $('#form-validation').validate({
                errorClass: 'help-block animation-pullUp', // You can change the animation class for a different entrance animation - check animations page
                errorElement: 'div',
                errorPlacement: function (error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function (e) {
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.help-block').remove();
                },
                success: function (e) {
                    // You can use the following if you would like to highlight with green color the input after successful validation!
                    e.closest('.form-group').removeClass('has-success has-error'); // e.closest('.form-group').removeClass('has-success has-error').addClass('has-success');
                    e.closest('.help-block').remove();
                },
                rules: {
                    'bookName': {
                        required: true
                    },
                    'author': {
                        required: true,
                    },
                    'bookmaker': {
                        required: true
                    },

                    'category': {
                        required: true
                    },
                    'ed_year': {
                        required: true,
                        number: true
                    },
                    'count': {
                        required: true,
                        min: 1
                    }
                },
                messages: {

                    'author': 'Please enter Author Name',
                    'category-name': 'Please select category-name',
                    'bookName': 'Please enter Book Name',
                    'category': 'Please select category',
                    'bookmaker': 'This feild is required',
                    'ed_year': 'This feild is required',
                    'count': 'This feild is required',
                }
            });

        }
    };
}();