<?php
  include('database/database.php');
  include('partials\header.php');
  include('partials\sidebar.php');

  $sql = "SELECT * FROM music";

  if (!empty($_GET['search'])) {
      $search = $_GET['search'];
      $sql = "SELECT * FROM music WHERE Song LIKE '%$search%' OR Artist LIKE '%$search%' OR Genre LIKE '%$search%' OR Album LIKE '%$search%'";
  }
  
  $music = $conn->query($sql);  
  $status = '';
  if (isset($_SESSION['status'])) {
    $status = $_SESSION['status'];
    unset($_SESSION['status']);
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
            <div class="d-flex justify-content-between">
              <div>
                <h5 class="card-title">MUSIC</h5>
              </div>
              <div>
                <button class="btn btn-primary btn-sm mt-4 mx-3" onclick="window.location.href='database/create.php'">Add Music</button>
              </div>
            </div>

            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Song</th>
                  <th scope="col">Artist</th>
                  <th scope="col">Genre</th>
                  <th scope="col">Album</th>
                  <th scope="col" class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php if ($music->num_rows > 0): ?>
                  <?php while($row = $music->fetch_assoc()): ?>
                    <tr>
                      <th scope="row"><?php echo $row['ID']; ?></th>
                      <td><?php echo $row['Song']; ?></td>
                      <td><?php echo $row['Artist']; ?></td>
                      <td><?php echo $row['Genre']; ?></td>
                      <td><?php echo $row['Album']; ?></td>
                      <td class="d-flex justify-content-center">
                        <button class="btn btn-success btn-sm mx-1">Edit</button>
                        
                        <!-- View Button -->
                        <button class="btn btn-primary btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#ViewModal<?php echo $row['ID']; ?>">View</button>

                            <div class="modal fade" id="ViewModal<?php echo $row['ID']; ?>" tabindex="-1" aria-labelledby="ViewModalLabel" aria-hidden="true">

                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">View Music Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                   <div class="mb-3">
                                    <label class="form-label">Song</label>
                                    <input type="text" class="form-control" value="<?php echo $row['Song']; ?>" disabled>
                                   </div>
                                   <div class="mb-3">
                                    <label class="form-label">Artist</label>
                                    <input type="text" class="form-control" value="<?php echo $row['Artist']; ?>" disabled>
                                   </div>
                                   <div class="mb-3">
                                    <label class="form-label">Genre</label>
                                    <input type="text" class="form-control" value="<?php echo $row['Genre']; ?>" disabled>
                                   </div>
                                   <div class="mb-3">
                                    <label class="form-label">Album</label>
                                    <input type="text" class="form-control" value="<?php echo $row['Album']; ?>" disabled>
                                   </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                       
                        <button class="btn btn-danger btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $row['ID']; ?>">Delete</button>
                        <div class="modal fade" id="deleteModal<?php echo $row['ID']; ?>" data-bs-backdrop="static" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-body text-center">
                                <h5>Are you sure you want to delete this music?</h5>
                                <h6>This action cannot be undone.</h6>
                              </div>
                              <div class="modal-footer d-flex justify-content-center">
                                <form action="database/delete.php" method="POST">
                                  <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                  <button type="submit" class="btn btn-danger">Yes, Delete</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  <?php endwhile; ?>
                <?php else: ?>
                  <tr>
                    <td colspan="6" class="text-center">No Music Found</td>
                  </tr>
                <?php endif; ?>
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
          <div class="mx-4">
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
            </nav>
          </div>
        </div>

      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="editInfo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editInfoLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="editInfoLabel">Music</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->
<?php
include('partials\footer.php');
?>