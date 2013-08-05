<?php
   $year = date("Y");
   $age = $year - $_POST['age'];
?>

<h1>Schau mal einer an <b><?php echo $_POST['name']; ?></b>...</h1>
<p>
   Du müsstest also: <b><?= $age ?></b> Jahre alt sein!
</p>