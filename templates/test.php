<?php 
    /* Template Name: Test Page Template */
    get_header();
?>

<form action="" method="post">
    <input type="text" name="username" class="input input_username" placeholder="Username"><br>
    <input type="email" name="email" class="input input_email" placeholder="Email"><br>
    <input type="password" name="password" class="input input_password" placeholder="Password"><br>

    <input type="submit" class="register" value="Register">
</form>

<?php get_footer(); ?>
