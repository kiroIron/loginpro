<?php include 'includes/islogin.php' ;
include 'includes/connaction.php' ;
$userid = $_SERVER['myname']['id'];

$q = "SELECT * FROM  posts WHERE userid = $userid";

$result = $conn->query($q);

?>

<?php include 'includes/heder.php' ?>;
<?php include 'includes/navbar.php'?>;

<div class="container my-5">
<div class="row">
<?php foreach($result as $r){?>


<div class="col-md-4">

   <div class="card" style="width: 18rem;">
   <img src="<?= $r ['image'] ?>" class="card-img-top" alt="...">
   <div class="card-body">
   <h5 class="card-title"><?= $r['title']?></h5>

      </div>
      </div>

</div>
<?php }?>
</div>
</div>







<?php include 'includes/footer.php'?>;
