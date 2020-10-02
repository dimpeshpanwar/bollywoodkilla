<?php session_start();
  if(!isset($_SESSION['user']))
  {
    header("Location: index.php");
  }
?>
<?php include 'upper1.php';
  include("header1.php");

if(isset($_REQUEST['submit']))
  { $add=$_POST['address'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
   update('account_info','1',['address','phone','email'],[$add,$phone,$email]);
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
                <?php $data=read("account_info",1);?>
              <form method="POST" action="ainfo.php" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="text" name="address" class="form-control" value="<?php echo $data['address'];?>" placeholder="Address">
                </div>
                <div class="form-group">
                  <input type="text" name="phone" class="form-control" value="<?php echo $data['phone'];?>" placeholder="Phone">
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control" value="<?php echo $data['email'];?>" placeholder="Email">
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