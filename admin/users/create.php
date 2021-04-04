<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
adminOnly();
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Section - Add Users</title>
    <script
      src="https://kit.fontawesome.com/5bb29a5a34.js"
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lora&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../../assets/css/style.css" />

    <link rel="stylesheet" href="../../assets/css/admin.css" />
  </head>
  <body>
    
  <!-- admin code here  -->
  <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <div class="admin-wrapper">
    <!-- Left sidebar  -->
  <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
    

    <!-- Admin content  -->
    <div class="admin-content">
      <div class="button-group">
        <a href="create.php" class="btn btn-big">Add User</a>
        <a href="index.php" class="btn btn-big">Manage Users</a>
      </div>

      <div class="content">
        <h2 class="page-title">Add User</h2>

        <?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>

        <form action="create.php" method="post">
            <div>
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>" class="text-input" />
              </div>
              <div>
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $email; ?>" class="text-input" />
              </div>
              <div>
                <label>Password</label>
                <input type="password" name="password" value="<?php echo $password; ?>" class="text-input" />
              </div>
              <div>
                <label>Password Confirmation</label>
                <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input" />
              </div>

              <div>
                  <?php if(isset($admin) && $admin == 1): ?>
                <label>
                  <input type="checkbox" name="admin" checked>
                    Admin
                </label>
                  <?php else: ?>
                <label>
                <input type="checkbox" name="admin" >
                Admin
                </label>
                  <?php endif; ?>
                
            </div>  
            <div>
                <button type="submit" name="create-admin" class="btn btn-big">Add User</button>
            </div>
        </form>
      </div>
      
    </div>
    <!-- //Admin content  -->

    </div>
    <!-- //page wrapper  -->

    <!-- jquery  -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
      integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
      crossorigin="anonymous"
    ></script>

    <!-- ck editor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>

    <!-- custom script  -->
    <script src="../../assets/js/script.js"></script>

  </body>
</html>
