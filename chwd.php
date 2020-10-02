<?php session_start();
  if(!isset($_SESSION['user']))
  {
    header("Location: index.php");
  }
?>
<?php include 'upper1.php';
  include("header1.php");
  $msg="";
if(isset($_REQUEST['submit']))
  { 
    $oldp=md5($_POST['oldp']);
    $newp=md5($_POST['newp']);
    $conp=md5($_POST['conp']);
    $data=read('login',1);
    $pass=$data['password'];
    if($oldp==$pass)
    {
      if($newp==$conp)
        {update('login','1',['password'],[$newp]); 
          echo "<script>alert('Password changed');</script>"; }
      else
        $msg="New password and confirm password does not match.";
    }
    else
      $msg="Old password does not match database password.";
   }

  ?>

  <div class="main-content">
  <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-sm-12 offset-sm-1 col-md-10  ">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Admin Account Info</h4>
              </div>
              <div class="card-body" >
               <span style="color: red;"><?php echo $msg;?></span> 
              <form method="POST" action="chwd.php" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="password" name="oldp" class="form-control" placeholder="Old Password">
                </div>
                <div class="form-group">
                  <input type="password" name="newp" class="form-control"  placeholder="New Password">
                </div>
                <div class="form-group">
                  <input type="password" name="conp" class="form-control" placeholder="Conform Password">
                </div>
                <input type="submit" name="submit" class="btn btn-primary btn-lg">
                </form>
          </div>
      </div>
     
  </div>
</div>
</div>
</section>
</div>

  <?php include('footer1.php');?>