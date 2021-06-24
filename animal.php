<?php
include "dog1.php";
include "dog2.php";

$dog1 = new dog1\dog();
$dog1->breed = "Golden Retriever";

$dog2 = new dog2\dog();
$dog2->name= "tommy";
?>

<html>
<body>

<?php $dog1->breed(); ?>
<?php $dog2->name(); ?>

</body>
</html>