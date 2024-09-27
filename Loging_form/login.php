<?php
    include_once 'header.php';
?>
    <div class="form">
        <h1>Simple Webpage</h1>
    <form action="include/login.inc.php" method="post">
    <input type="text" name="uid" placeholder="Username / Email" required>
    <input type="password" name="pwd" placeholder="Password" required>
    <button name="submit" type="submit">Login</button>
    </form>

    <p>New Here ?<a href="signup.php">Register.</a></p>
    </div>
<?php
    include_once 'footer.php';
?>  