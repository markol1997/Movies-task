<?php
/* Template Name: Login */
/* Template Post Type: page */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
?>

<div style="margin-top: 2%; margin-bottom: 2%">
    <form id="loginForm" method="post">
        <input type="email" id="email" name="email" placeholder="Email" required/>
        <input type="password" id="password" name="password" placeholder="Password" required />
        <input type="submit" value="Submit" />
    </form>
</div>

<script>
    function checkTokenExpiration() {
        const cookies = document.cookie.split(';');
        for (const cookie of cookies) {
            const [name, _] = cookie.trim().split('=');
            if (name.trim() === 'token_key') {
                window.location.href = 'http://localhost/movies';
                return;
            }
        }
    }

    checkTokenExpiration();

    class LoginForm {
        constructor() {
            this.bindEvents();
        }

        bindEvents() {
            $("#loginForm").submit(this.handleSubmit.bind(this));
        }

        handleSubmit(event) {
            event.preventDefault();

            const formData = {
                email: $("#email").val(),
                password: $("#password").val()
            };

            const jsonData = JSON.stringify(formData);

            $.ajax({
                type: "POST",
                url: "https://symfony-skeleton.q-tests.com/api/v2/token",
                data: jsonData,
                success: this.handleSuccess.bind(this),
                error: this.handleError.bind(this)
            });
        }

        handleSuccess(response) {
            alert('Successful');
            var expiresAt = new Date();
            expiresAt.setTime(expiresAt.getTime() + (30 * 60 * 1000));
            document.cookie = `token_key=${response.token_key}; expires=${expiresAt.toUTCString()}; path=/`;
            window.location.href = 'http://localhost/movies';

            setTimeout(function() {
                document.cookie = 'token_key=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
            }, expiresAt.getTime() - Date.now());
        }

        handleError(xhr, status, error) {
            alert('Failed');
            console.error(xhr.responseText);
        }
    }

    $(document).ready(function () {
        new LoginForm();
    });
</script>

<?php get_footer(); ?>
