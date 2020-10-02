<?php session_start();
  if(!isset($_SESSION['user']))
  {
    header("Location: index.php");
  }
?>
<?php include 'upper1.php';
  include("header1.php");
  if(isset($_POST['submit'])){
  		
  		$col=[];$val=[];
  		

  		
		 if($_POST['select']!="")
        { global $col,$val;
            
          array_push($col,'c_id');array_push($val,$_POST['select']);}
     

     if(isset($_FILES['img']['name']))
      {
            global $col,$val;
        $timg=image_formate(404,300,$_FILES['img']['name'],$_FILES['img']['tmp_name']);
        array_push($col,'img');array_push($val,$timg);
      }
      else
          {global $col,$val; array_push($col,'img');array_push($val,"");}
    
    if($_FILES['img']['name']!=""){insert('gallery',$col,$val);}
 }        
  ?>


  <style type="text/css">
    #vik{ 
      display: block;
      height: 100px;
      width:100%;
    }
  </style>
<div class="main-content">
	<section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-sm-12 offset-sm-2 col-md-8  ">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Photoes</h4>
              </div>
              <div class="card-body" >
                <form method="POST" action="addphoto.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <div class="d-block">
                      <label  class="control-label">Select Category</label>
                    </div>
                    
							  
						
                  <div id="vik" class="vik">
                    <select name=select class="btn btn-outline-primary btn-lg btn-block" style="font-size: 20px;" required="required">
                      <option value="">--Select--</option>
                    <?php 
                        for($i=1;$i<count1('category')+1;$i++){
                          $data=read('category',$i);
                    
                    
                      echo "<option value=".$data['id'].">".$data['cate']."</option>"; }

                      ?>
                      </select> 
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label  class="control-label">Image</label>
                    </div>
                    <input  id="img" type="file" class="form-control" name="img" tabindex="3" autofocus required="required">
                  </div>           
                  <div class="form-group">
                    <input type="submit" style="font-size: 20px" class="btn btn-primary btn-lg btn-block" tabindex="8" value="Upload" name="submit">
                      
                   
                  </div>
                </form>
                
                </div>
              </div>
            
        </div>
      </div>
    </section>
  </div>


  <?php include('footer1.php');?>