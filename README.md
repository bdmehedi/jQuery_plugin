This is a ajax form submit with jQuery. This works good for PHP and PHP codeigniter framwork.

how to use....

# in html add jquery file and submit.js plugin file then call formSubmit() jquery function like below.
<pre>
<script src="jquery-3.1.1.min.js"></script>
<script src="submit.js"></script>
<script>
    $('form.ajax').formSubmit();
</script>
</pre>
# you have also add a dive in your form page to show error or success message like below 

<pre><div id="show_error"></div></pre>

# from your form action page you have to send your status and message like this ...
<pre>
$error_data['status'] = true or false.
$error_data['message'] = array(
    "error or success message";
);
</pre>

# for form validation error send like this........
<pre>
$error_data['message'] = array(
            'user_email' => form_error('user_email'),
            'password' => form_error('password'),
            'password_again' => form_error('password_again'),
            'user_name' => form_error('user_name'),
            'user_mobile' => form_error('user_mobile')
        );
</pre>



# best of luck. #
