<?php

include ('includes/config.php');
include ('includes/database.php');
include ('includes/functions.php');
secure();

include ('includes/header.php');

var_dump($_SESSION);

?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            Dashboard
        </div>
    </div>
</div>
<?php
include ('includes/footer.php');
?>