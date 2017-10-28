This is a ajax form submit with jQuery. This works good for PHP and PHP codeigniter framwork.

how to use....

@ in html add jquery file and submit.js plugin file then call formSubmit() jquery function like below.

<script src="jquery-3.1.1.min.js"></script>
<script src="submit.js"></script>
<script>
    $('form.ajax').formSubmit();
</script>

@ you have also add a dive in your form page to show error or success message like below 

<div id="show_error"></div>

@ from your form action page you have to send your status and message like this ...
$error_data['status'] = true or false.
$error_data['message'] = array(
    "error or success message";
);

@ for form validation error send like this........

$error_data['message'] = array(
            'user_email' => form_error('user_email'),
            'password' => form_error('password'),
            'password_again' => form_error('password_again'),
            'user_name' => form_error('user_name'),
            'user_mobile' => form_error('user_mobile')
        );




# best of luck. #
