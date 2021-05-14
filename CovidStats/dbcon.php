<?php

$server = 'localhost';
$user = 'root';
$password = 'password';
$db = 'coronadb';

$con = mysqli_connect($server, $user, $password, $db);

if ($con) {
    ?>
    <script type="text/javascript">

        alert("Connection Successful");
    </script>
    <?php

} else {
    ?>
    <script type="text/javascript">

        alert("Connection Failed");
    </script>
    <?php

}
?>
