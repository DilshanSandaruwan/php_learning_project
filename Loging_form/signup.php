<?php
    include_once 'header.php';
?>
    <div class="form">
        <h1>Simple Webpage</h1>
    <form action="include/login.inc.php" method="post">
    <input type="text" id="fname" name="firstname" placeholder="Name">
    <input type="text" id="fname" name="firstname" placeholder="Emial">
    <input type="text" id="fname" name="firstname" placeholder="User name">
    <input type="text" id="fname" name="firstname" placeholder="Password">
    <input type="text" id="fname" name="firstname" placeholder="Retype Password">
    <button name="submit" type="submit">Login</button>
    </form>
    
    <p>Alredy have an account ?<a href="login.php">Log in</a></p>
    </div>
<?php
    include_once 'footer.php';
?>  