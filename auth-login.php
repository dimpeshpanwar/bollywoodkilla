<?php 
    session_start();
    session_unset();
   $msg=""; 
   include_once 'connection.php';
  if(isset($_POST['submit']))
    { 
      $stmt=$conn->query("SELECT * FROM login WHERE username ='".md5($_POST['username'])."' and password ='".md5($_POST['password'])."'");
      $res=$stmt->execute();
      if($res=$stmt->fetch(PDO::FETCH_ASSOC))
        {
          echo "<script>alert('Login Successfull');</script>";
         $_SESSION['user']="bollywoodkilla";
         echo $_SESSION['user'];
         header("Location: index1.php");
        }
      else $msg ="!Worng Username or password.";
    }
?>

<?php include("header.php");?>

<!-- Main Content -->
<div class="main-content">
	<section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Login</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="auth-login.php" class="needs-validation" >
                  <div class="form-group">
                    <span style="color:red"><?php echo $msg;?><br></span>
                    <label for="text">Username</label>
                    <input id="text" type="text" class="form-control" name="username" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your username
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                     
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4" name="submit" value="Login">
                      
                    
                  </div>
                </form>
                
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php include 'footer.php';?>