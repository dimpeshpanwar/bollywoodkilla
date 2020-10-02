<?php session_start();
  if(!isset($_SESSION['user']))
  {
    header("Location: index.php");
  }
?>
<?php include 'upper1.php';
  include("header1.php");

if(isset($_REQUEST['v_id']))
  {
   delete('video',$_REQUEST['v_id']);
   }

  ?>

  <div class="main-content">
	<section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-sm-12 offset-sm-2 col-md-8  ">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Delete Song From playlist</h4>
              </div>
              <div class="card-body" >
                <form method="POST" action="delinplay.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <div class="d-block">
                      <label  class="control-label">Select Field</label>
                    </div>
                    <select name="select1" class="btn btn-lg btn-primary">
                      <option value="">--Select--</option>
                    <?php 
                        for($i=1;$i<count1('song_category')+1;$i++){
                          $data=read("song_category",$i);
                      ?>
                    
                      <option value="<?php echo $data['id'];?>"><?php echo $data['scate'];?></option>
                    <?php }?>
                     
                    </select>
                    
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg" tabindex="2" value="Select" name="submit1" style="font-size: 20px;">
                  </div>
              </form>
              <form method="POST" action="delinplay.php" enctype="multipart/form-data">
                <table class="table table-striped dataTable no-footer" id="table-1" role="grid" aria-describedby="table-1_info">
                  <thead>
                          <tr role="row"><th class="text-center sorting_asc" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                              #
                            : activate to sort column descending" style="width: 36.4px;">
                              #
                            </th><th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Task Name: activate to sort column ascending" style="width: 182px;">Video Name</th><th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 134px;">View</th><th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 93.2px;">Action</th></tr>
                        </thead>
              <?php if(isset($_POST['submit1'])){ 

                    $sql="SELECT * FROM `video` WHERE songcategory_id =".$_POST['select1'];
                    $stmt=$conn->query($sql);
                    $stmt->execute();
                    if($res=$stmt->fetch(PDO:: FETCH_NUM))
                    {
                      do{?>

                         <tr>
                            <th><?php echo $res[0];?></th>
                            <th><?php echo $res[1];?></th>
                            <th><iframe src="<?php echo $res[3];?>"></iframe></th>
                              <td><a href="<?php echo 'delvideo.php?v_id='.$res[0]?>" onclick="return confirm('sure')">Delete</a>
                              </td> 
                          </tr>
                      <?php 
                        
                      }while ($res=$stmt->fetch(PDO:: FETCH_NUM));
                    }
                    else
                    {
                      echo "There is nothing to show";
                    }
              
                }?>
              </table>
                </form>
          </div>
      </div>
     
  </div>
</div>
</div>
</section>
</div>

  <?php include('footer1.php');?>