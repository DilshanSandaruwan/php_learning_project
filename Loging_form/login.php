<?php
    include_once 'header.php';
?>
    <div class="form">
        <h1>Simple Webpage</h1>
    <form action="include/login.inc.php" method="post">
    <input type="text" id="uid" name="firstname" placeholder="Emial / User name">
    <input type="password" id="pwd" name="lastname" placeholder="Password">
    <button name="submit" type="submit">Login</button>
    </form>

    <p>New Here ?<a href="signup.php">Register.</a></p>
    </div>
<?php
    include_once 'footer.php';
?>  