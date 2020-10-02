<?php session_start();
  if(!isset($_SESSION['user']))
  {
    header("Location: index.php");
  }
?>
<?php include 'upper1.php';
  include("header1.php");

if(isset($_REQUEST['q_id']))
  {
   delete('query',$_REQUEST['q_id']);
   }

  ?>

  <div class="main-content">
  <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-sm-12 offset-sm-1 col-md-10  ">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Query</h4>
              </div>
              <div class="card-body" >
                
              <form method="POST" action="contact1.php" enctype="multipart/form-data">
                <table class="table table-striped dataTable no-footer" id="table-1" role="grid" aria-describedby="table-1_info">
                  <thead>
                          <tr role="row">
                            <th class="text-center" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1"  style="width: 26.4px;">
                            S.No</th>
                            <th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 100px;">Name</th>

                            <th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 134px;">Email</th>

                            <th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 150px;">Massage</th>
                             <th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 50px;">Action</th></tr>
                        </thead>
              <?php  

                    $sql="SELECT * FROM `query`";
                    $stmt=$conn->query($sql);
                    $stmt->execute();
                    if($res=$stmt->fetch(PDO:: FETCH_NUM))
                    {
                      do{?>

                          <tr>
                            <th><?php echo $res[0];?></th>
                            <th><?php echo $res[1];?></th>
                            <th><?php echo $res[2];?></th>
                            <th><?php echo $res[3];?></th>
                            
                              <td><a href="<?php echo 'contact1.php?q_id='.$res[0]?>" onclick="return confirm('sure')">Delete</a>
                              </td> 
                          </tr>
                      <?php 
                        
                      }while ($res=$stmt->fetch(PDO:: FETCH_NUM));
                    }
                    else
                    {
                      echo "There is nothing to show";
                    }
              
                ?>
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