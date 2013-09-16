<?php
   $year = date("Y");
   $age = $year - $_POST['age'];
?>

<h1>Lets, see you're: <b><?php echo $_POST['name']; ?></b>...</h1>
<p>
   You should be: <b><?= $age ?></b> years of age!
</p>