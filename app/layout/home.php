<div class="login-page">
    <div class="form">
        <form action="/" method="post" class="register-form">
            <input type="hidden" name="tipe" value="daftar"/>
            <input name="username" type="text" placeholder="username" />
            <input name="password" type="password" placeholder="password" />
            <input name="email" type="text" placeholder="email address" />
            <button >create</button>
            <p class="message">Already registered?
                <a href="#">Sign In</a>
            </p>
        </form>
        <form action="/" method="post" class="login-form">
            <input type="hidden" name="tipe" value="login"/>
            <input name="username" type="text" placeholder="username" />
            <input name="password" type="password" placeholder="password" />
            <button >login</button>
            <p class="message">Not registered?
                <a href="#">Create an account</a>
            </p>
        </form>
    </div>
</div>
<?php
print_r($system);
?>
<script>
    $('.message a').click(function () {
        $('form').animate({
            height: "toggle",
            opacity: "toggle"
        }, "slow");
    });
</script>