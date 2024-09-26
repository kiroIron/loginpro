<?php include 'includes/islogin.php'  ?>

<?php include 'includes/heder.php' ?>


<div class="container">

<h1 class="text-center">Add new post</h1>
<form action="addpost.php" method="post" class="w-50 mx-ato my-3">

<h4 class="text-center">login</h4>
  <div class="mb-3 mt-5">
    <label for="title" class="form-label">title</label>
    <input name="title" type="text" class="form-control" id="title" >
  
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">image</label>
    <input name="image" type="file" class="form-control" id="image">
  </div>
  <button type="submit" class="btn btn-primary mt-4">Login</button>

</form>

</div>






<?php include 'includes/footer.php'?>
