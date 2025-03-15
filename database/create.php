<?php
include('../database/database.php');
include('../partials/header.php');
include('../partials/sidebar.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $song = $_POST['song'];
  $artist = $_POST['artist'];
  $genre = $_POST['genre'];
  $album = $_POST['album']; // Add this line to get the album value from the form

  $sql = "INSERT INTO music (Song, Artist, Genre, Album) VALUES ('$song', '$artist', '$genre', '$album')";

  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
}
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Music</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">General</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Add New Music</h5>
            
            <!-- Add Music Form -->
            <form method="POST" action="create.php">
            <div class="mb-3">
                <label for="song" class="form-label">Song</label>
                <input type="text" class="form-control" id="song" name="song">
              </div>
              <div class="mb-3">
                <label for="artist" class="form-label">Artist</label>
                <input type="text" class="form-control" id="artist" name="artist">
              </div>
              <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre">
              </div>
              <div class="mb-3">
                <label for="album" class="form-label">Album</label>
                <input type="text" class="form-control" id="album" name="album">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <!-- End Add Music Form -->
          </div>
        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->

<?php
include('../partials/footer.php');
?>

