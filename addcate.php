<?php session_start();
  if(!isset($_SESSION['user']))
  {
    header("Location: index.php");
  }
?>
<?php include 'upper1.php';
  include("header1.php");
if(isset($_POST['submit']))
{	$cate=$_POST['head'];
	
	insert('song_category',['scate'],[$cate]);
}
  ?>

  <div class="main-content">
	<section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-sm-12 offset-sm-2 col-md-8  ">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Song Playlist</h4>
              </div>
              <div class="card-body" >
                <form method="POST" action="addcate.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <div class="d-block">
                      <label  class="control-label">Playlist Name</label>
                    </div>
                    <input id="text" type="text" class="form-control" name="head" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in New Head
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" tabindex="2" value="Upload" name="submit">
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
</div>
</section>
</div>

  <?php include('footer1.php');?>