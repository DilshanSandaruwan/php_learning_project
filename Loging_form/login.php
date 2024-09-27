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

    <?php 
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyInput") {
           echo '<div class="error">Fill in the all fields</div>';
        }elseif ($_GET["error"] == "wrongLogin") {
            echo '<div class="error">Invalid Details !</div>';
        }elseif ($_GET["error"] == "stmtfailed") {
            echo '<div class="error">Something went wrong</div>';
    }elseif ($_GET["error"] == "none") {
        echo '<div class="error">Account created</div>';
}
}
    ?>

    <p>New Here ?<a href="signup.php">Register.</a></p>
    </div>
<?php
    include_once 'footer.php';
?>  