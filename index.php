<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My PHP Bootstrap Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 CSS CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">MySite</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
      </ul>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container mt-5">
    <h1 class="mb-4">Welcome to My PHP Website</h1>
    <p>This is a simple Bootstrap 4 layout running on a vanilla PHP server.</p>

    <?php
      echo "<p>Today's date is: <strong>" . date("F j, Y") . "</strong></p>";
    ?>
  </div>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center p-3 mt-5">
    &copy; <?= date('Y') ?> MySite. All rights reserved.
  </footer>

  <!-- Bootstrap 4 JS CDN -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
