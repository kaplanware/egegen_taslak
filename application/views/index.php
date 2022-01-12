<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title ?></title>


<?php
    loadView("dependencies/js");
    loadView("dependencies/css");
?>

</head>
<body>




<?php loadView("dependencies/navbar") ?>

<?php if(isset($slider))
    loadView("dependencies/slider");

?>


<div class="container mt-3">

    <?php loadView($view) ?>

    <?php loadView("dependencies/footer") ?>
</div>


</body>
</html>