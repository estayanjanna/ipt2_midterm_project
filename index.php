<?php
  include('partials\header.php');
  include('partials\sidebar.php');


  // Your PHP BACK CODE HERE

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
                  <h5 class="card-title">Default Table</h5>
                </div>
                <div>
                  <button class="btn btn-primary btn-sm mt-4 mx-3">Add Music</button>
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
                    <th scope="col">AlbumName</th>
                    <th scope="col" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <tr>
                    <th scope="row">1</th>
                    <td>Love story</td>
                    <td>Taylor Swift</td>
                    <td>POP</td>
                    <td>Style</td>
                    <td class="d-flex justify-content-center">
                      <button class="btn btn-success btn-sm mx-1">Edit</button>
                      <button class="btn btn-primary btn-sm mx-1" title="View Employee Information" data-bs-toggle="modal" data-bs-target="#editInfo">View</button>
                      <button class="btn btn-danger btn-sm mx-1">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Super Nova</td>
                    <td>Aespa</td>
                    <td>POP</td>
                    <td>Armageddon</td>
                    <td class="d-flex justify-content-center">
                      <button class="btn btn-success btn-sm mx-1">Edit</button>
                      <button class="btn btn-primary btn-sm mx-1" title="View Employee Information" data-bs-toggle="modal" data-bs-target="#editInfo">View</button>
                      <button class="btn btn-danger btn-sm mx-1">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Kokobop</td>
                    <td>EXO</td>
                    <td>POP</td>
                    <td>The War</td>
                    <td class="d-flex justify-content-center">
                      <button class="btn btn-success btn-sm mx-1">Edit</button>
                      <button class="btn btn-primary btn-sm mx-1" title="View Employee Information" data-bs-toggle="modal" data-bs-target="#editInfo">View</button>
                      <button class="btn btn-danger btn-sm mx-1">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Highschool in jakarta</td>
                    <td>Niki</td>
                    <td>POP</td>
                    <td>Moonchild</td>
                    <td class="d-flex justify-content-center">
                      <button class="btn btn-success btn-sm mx-1">Edit</button>
                      <button class="btn btn-primary btn-sm mx-1" title="View Employee Information" data-bs-toggle="modal" data-bs-target="#editInfo">View</button>
                      <button class="btn btn-danger btn-sm mx-1">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Unholy</td>
                    <td>Sam Smith</td>
                    <td>POP</td>
                    <td>Gloria</td>
                    <td class="d-flex justify-content-center">
                      <button class="btn btn-success btn-sm mx-1">Edit</button>
                      <button class="btn btn-primary btn-sm mx-1" title="View Employee Information" data-bs-toggle="modal" data-bs-target="#editInfo">View</button>
                      <button class="btn btn-danger btn-sm mx-1">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>No Tears Left to Cry</td>
                    <td>Ariana Grande</td>
                    <td>POP</td>
                    <td>Sweetener</td>
                    <td class="d-flex justify-content-center">
                      <button class="btn btn-success btn-sm mx-1">Edit</button>
                      <button class="btn btn-primary btn-sm mx-1" title="View Employee Information" data-bs-toggle="modal" data-bs-target="#editInfo">View</button>
                      <button class="btn btn-danger btn-sm mx-1">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>What Makes You Beautiful</td>
                    <td>One Direction</td>
                    <td>POP</td>
                    <td>Up All night</td>
                    <td class="d-flex justify-content-center">
                      <button class="btn btn-success btn-sm mx-1">Edit</button>
                      <button class="btn btn-primary btn-sm mx-1" title="View Employee Information" data-bs-toggle="modal" data-bs-target="#editInfo">View</button>
                      <button class="btn btn-danger btn-sm mx-1">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>The Reason</td>
                    <td>Hoobastank</td>
                    <td>Alternative rock</td>
                    <td>The Reason</td>
                    <td class="d-flex justify-content-center">
                      <button class="btn btn-success btn-sm mx-1">Edit</button>
                      <button class="btn btn-primary btn-sm mx-1" title="View Employee Information" data-bs-toggle="modal" data-bs-target="#editInfo">View</button>
                      <button class="btn btn-danger btn-sm mx-1">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Eraser</td>
                    <td>Decembedr Avenue</td>
                    <td>Alternative Rock</td>
                    <td>Dahlia</td>
                    <td class="d-flex justify-content-center">
                      <button class="btn btn-success btn-sm mx-1">Edit</button>
                      <button class="btn btn-primary btn-sm mx-1" title="View Employee Information" data-bs-toggle="modal" data-bs-target="#editInfo">View</button>
                      <button class="btn btn-danger btn-sm mx-1">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>When She Cries</td>
                    <td>Restless Heart</td>
                    <td>Country</td>
                    <td>Big Dreams in a Small Town</td>
                    <td class="d-flex justify-content-center">
                      <button class="btn btn-success btn-sm mx-1">Edit</button>
                      <button class="btn btn-primary btn-sm mx-1" title="View Employee Information" data-bs-toggle="modal" data-bs-target="#editInfo">View</button>
                      <button class="btn btn-danger btn-sm mx-1">Delete</button>
                    </td>
                  </tr>
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
              <h1 class="modal-title fs-5" id="editInfoLabel">Employee Information</h1>
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