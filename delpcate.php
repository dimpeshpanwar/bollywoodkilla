<?php session_start();
  if(!isset($_SESSION['user']))
  {
    header("Location: index.php");
  }
?>
<?php include 'upper1.php';
  include("header1.php");
if(isset($_POST['submit']))
{	
	
	if($_POST['select']>0)
    {  $sql="Select count(*) from gallery where c_id=".$_POST['select'];
        
        $stmt=$conn->query($sql);
        $stmt->execute();
        $res=$stmt->fetch(PDO:: FETCH_NUM);
       if($res[0]<1) {delete('category',$_POST['select']);}
       else echo "<script>alert('Delete All images from this Category')</script>";
    }
}
  ?>

  <div class="main-content">
	<section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-sm-12 offset-sm-2 col-md-8  ">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Delete Category</h4>
              </div>
              <div class="card-body" >
                <form method="POST" action="delpcate.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <div class="d-block">
                      <label  class="control-label">Select Catagory</label>
                    </div>
                    <select name="select" class="btn btn-lg btn-primary">
                      <option value="">--Select--</option>
                      <?php 
                        for($i=1;$i<count1('category')+1;$i++){
                          $data=read("category",$i);
                      ?>
                    
                      <option value="<?php echo $data['id'];?>"><?php echo $data['cate'];?></option>
                    <?php }?>
                    </select>
                    <div class="invalid-feedback">
                      Please Select Category
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg" tabindex="2" value="Delete" name="submit" style="font-size: 20px;background-color: red;">
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