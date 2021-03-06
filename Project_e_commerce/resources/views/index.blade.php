<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.css">
 
  <title>E-Commerce</title>
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
        <div class="container">
          <a href="index.blade.php" class="navbar-brand">E-Commerce</a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav">
              <li class="nav-item px-2">
                <a href="index.blade.php" class="nav-link active">Dashboard</a>
              </li>
              <li class="nav-item px-2">
                <a href="posts.blade.php" class="nav-link">Product</a>
              </li>
              <li class="nav-item px-2">
                <a href="categories.blade.php" class="nav-link">Categories</a>
              </li>
              <li class="nav-item px-2">
                <a href="users.blade.php" class="nav-link">Users</a>
              </li>
            </ul>
    
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown mr-3">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                  <i class="fas fa-user"></i> Welcome Glal
                </a>
                <div class="dropdown-menu">
                  <a href="profile.blade.php" class="dropdown-item">
                    <i class="fas fa-user-circle"></i> Profile
                  </a>
                </div>
              </li>
              <li class="nav-item">
                <a href="login.blade.php" class="nav-link">
                  <i class="fas fa-user-times"></i> Logout
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
  <!-- HEADER -->
  <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            <i class="fas fa-cog"></i> Dashboard</h1>
        </div>
      </div>
    </div>
  </header>
      <!-- ACTIONS -->
  <section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3 mb-1">
          <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addPostModal">
            <i class="fas fa-plus"></i> Add Product
          </a>
        </div>
        <div class="col-md-3 mb-1">
          <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#addCategoryModal">
            <i class="fas fa-plus"></i> Add Category
          </a>
        </div>
        <div class="col-md-3 mb-1">
          <a href="#" class="btn btn-warning btn-block" data-toggle="modal" data-target="#addUserModal">
            <i class="fas fa-plus"></i> Add User
          </a>
        </div>
      </div>
    </div>
  </section>
  
  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="card">
            <div class="card-header">
              <h4>Latest Posts</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Image</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Product One</td>
                  <td>Web Development</td>

                  <td><img src="../img/avatar.png" width="30px" height=30px; alt=""></td>
                  <td>
                    <a href="details.blade.php" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Details
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Product Two</td>
                  <td>Tech Gadgets</td>

                  <td><img src="../img/avatar.png" width="30px" height=30px; alt=""></td>
                  <td>
                    <a href="details.blade.php" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Details
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Product Three</td>
                  <td>Web Development</td>
                 
                  <td><img src="../img/avatar.png" width="30px" height=30px; alt=""></td>
                  <td>
                    <a href="details.blade.php" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Details
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Product Four</td>
                  <td>Business</td>
                
                  <td><img src="../img/avatar.png" width="30px" height=30px; alt=""></td>
                  <td>
                    <a href="details.blade.php" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Details
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Product Five</td>
                  <td>Web Development</td>
                  
                  <td><img src="../img/avatar.png" width="30px" height=30px; alt=""></td>
                  <td>
                    <a href="details.blade.php" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Details
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Product Six</td>
                  <td>Health & Wellness</td>
                 
                  <td><img src="../img/avatar.png" width="30px" height=30px; alt=""></td>
                  <td>
                    <a href="details.blade.php" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Details
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-primary text-white mb-3">
            <div class="card-body">
              <h3>Product</h3>
              <h4 class="display-4">
                <i class="fas fa-pencil-alt"></i> 6
              </h4>
              <a href="posts.blade.php" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>

          <div class="card text-center bg-success text-white mb-3">
            <div class="card-body">
              <h3>Categories</h3>
              <h4 class="display-4">
                <i class="fas fa-folder"></i> 4
              </h4>
              <a href="categories.blade.php" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>

          <div class="card text-center bg-warning text-white mb-3">
            <div class="card-body">
              <h3>Users</h3>
              <h4 class="display-4">
                <i class="fas fa-users"></i> 4
              </h4>
              <a href="users.blade.php" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!-- FOOTER -->
    <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
        <div class="container">
          <div class="row">
            <div class="col">
              <p class="lead text-center">
                Copyright &copy; Team22
                
              </p>
            </div>
          </div>
        </div>
      </footer>


   <!-- MODALS -->

  <!-- ADD POST MODAL -->
  <div class="modal fade" id="addPostModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title">Add Product</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="title">ID</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="title">Name</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="title">Price</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="title"> Quantity</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="category">Category</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="image">Upload Image</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="image">
                <label for="image" class="custom-file-label">Choose File</label>
              </div>
              <small class="form-text text-muted">Max Size 3mb</small>
            </div>
            <div class="form-group">
              <label for="body">Short description</label>
              <textarea name="editor1" class="form-control"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-dismiss="modal">Save Changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- ADD CATEGORY MODAL -->
  <div class="modal fade" id="addCategoryModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title">Add Category</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-success" data-dismiss="modal">Save Changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- ADD USER MODAL -->
  <div class="modal fade" id="addUserModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-warning text-white">
          <h5 class="modal-title">Add User</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control">
            </div>
            <div class="form-group">
              <label for="password2">Confirm Password</label>
              <input type="password" class="form-control">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-warning" data-dismiss="modal">Save Changes</button>
        </div>
      </div>
    </div>
  </div>

    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
  <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>

  <script>
    // Get the current year for the copyright

    CKEDITOR.replace('editor1');
  </script>
</body>

</html>