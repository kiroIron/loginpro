<nav class="navbar navbar-expand-lg p-5 navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="indexlogin.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="posts.php">add post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <p class="text-light p-3">
        hello<?= $_SESSION['myname']['name'] ?>
      </p>

    </div>
  </div>
</nav>  