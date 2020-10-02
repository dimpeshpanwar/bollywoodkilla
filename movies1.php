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
  		if($_POST['head']!="")
  			{ global $col,$val; 
  				array_push($col,'head');array_push($val,$_POST['head']);}

  		if($_POST['text']!="")
  			{ global $col,$val; 
  				array_push($col,'text');array_push($val,$_POST['text']);}
  		if($_POST['btn']==1)
        {global $col,$val; 
          array_push($col,'vstatus');array_push($val,'1');
          array_push($col,'songcategory_id');array_push($val,'');
        }
      if($_POST['btn']==2)
        {global $col,$val; 
          array_push($col,'vstatus');array_push($val,'2');
          array_push($col,'songcategory_id');array_push($val,'');
        }
      if($_POST['btn']==3)
        {global $col,$val; 
          array_push($col,'vstatus');array_push($val,'3');
          array_push($col,'songcategory_id');array_push($val,'');
        }
      if($_POST['btn']==4)
        {global $col,$val; 
          array_push($col,'vstatus');array_push($val,'4');
           array_push($col,'songcategory_id');array_push($val,'');
        }
      if($_POST['btn']==5)
        {global $col,$val; 
          array_push($col,'vstatus');array_push($val,'5');
           array_push($col,'songcategory_id');array_push($val,'');
        }
      if($_POST['btn']==6)
        {global $col,$val; 
          array_push($col,'vstatus');array_push($val,'6');
          $_POST['select'];
          array_push($col,'songcategory_id');array_push($val,$_POST['select']);
        }
		 if($_POST['ylink']!="")
        { global $col,$val;
            
          array_push($col,'link');array_push($val,$_POST['ylink']);}
     else
          {global $col,$val; array_push($col,'link');array_push($val,"");}

     if(isset($_FILES['img']['name']))
      {
            global $col,$val;
        $timg=image_formate(366,300,$_FILES['img']['name'],$_FILES['img']['tmp_name']);
        array_push($col,'img');array_push($val,$timg);
      }
      else
          {global $col,$val; array_push($col,'img');array_push($val,"");}
     if($_POST['date']!="")
        { global $col,$val; 
          array_push($col,'edate');array_push($val,$_POST['date']);}
    if($_POST['head']||$_POST['text']!=""||$_POST['btn']!=""||$_POST['img']!=""||$_POST['link']||$_POST['date']){insert('video',$col,$val);}
 }        
  ?>

  <script type="text/javascript">
 
function myFunction1() {
  document.getElementById("vik").style.display="none";
  var x = document.getElementById("switch1").value;
  document.getElementById("demo").innerHTML = "<div class=\"form-group\">                    <div class=\"d-block\">                      <label  class=\"control-label\">Image</label>                      </div>                    <input  id=\"text\" type=\"file\" class=\"form-control\" name=\"img\" tabindex=\"3\" autofocus>                  </div><div class=\"form-group\">                    <div class=\"d-block\">                      <label  class=\"control-label\">Youtube Video link</label>                    </div>                    <input  id=\"text\" type=\"text\" class=\"form-control\" name=\"ylink\" tabindex=\"7\" autofocus>                  </div>";
}


  function f(){
    document.getElementById("vik").style.display="block";
    var x = document.getElementById("switch1").value;
  document.getElementById("demo").innerHTML = "<div class=\"form-group\">                    <div class=\"d-block\">                      <label  class=\"control-label\">Image</label>                      </div>                    <input  id=\"text\" type=\"file\" class=\"form-control\" name=\"img\" tabindex=\"3\" autofocus>                  </div><div class=\"form-group\">                    <div class=\"d-block\">                      <label  class=\"control-label\">Youtube Video link</label>                    </div>                    <input  id=\"text\" type=\"text\" class=\"form-control\" name=\"ylink\" tabindex=\"7\" autofocus>                  </div>";
  }
  </script>
  <style type="text/css">
    #vik{ 
      display: none;
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
                <h4>Movies/Song</h4>
              </div>
              <div class="card-body" >
                <form method="POST" action="movies1.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <div class="d-block">
                      <label  class="control-label">Title</label>
                    </div>
                    <input id="text" type="text" class="form-control" name="head" tabindex="1" required autofocus placeholder="">
                    <div class="invalid-feedback">
                      Please fill in New Head
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label  class="control-label">Discription</label>
                     
                    </div>
                    <textarea id="text" type="text" class="form-control" name="text" tabindex="2" required autofocus></textarea>
                    <div class="invalid-feedback">
                      Please fill in Discription
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label  class="control-label">Date</label>
                    </div>
                    <input type="date" class="form-control" name="date" tabindex="3" required autofocus placeholder="">
                   
                  </div>
                   <div class="form-group">
	                    <div >
						  	 <input type="radio" id="switch1" name="btn" onchange="myFunction1()" required="required" value="1">
							    <label>Upcoming Movie</label>

							   <input type="radio" id="switch1" name="btn"  onchange="myFunction1()" value="2">
								  <label>Teaser</label>

                  <input type="radio" id="switch1" name="btn" onchange="myFunction1()" value="3">
                  <label>Documentry</label>

                  <input type="radio" id="switch1" name="btn" onchange="myFunction1()" value="4">
                  <label>Sort Film</label>

                  <input type="radio" id="switch1" name="btn" onchange="myFunction1()" value="5">
                  <label>Song Teaser</label>

                  <input type="radio" id="switch1" name="btn" onchange="f()" value="6">
                  <label>Playlist</label>
							  
						</div>
                  </div>
                  <div id="vik" class="vik">
                    <select name=select class="btn btn-outline-primary btn-lg btn-block" style="font-size: 20px;">
                      <option value="">--Select--</option>
                    <?php 
                        for($i=1;$i<count1('song_category')+1;$i++){
                          $data=read('song_category',$i);
                    
                    
                      echo "<option value=".$data['id'].">".$data['scate']."</option>"; }

                      ?>
                      </select> 
                  </div>
                  <div id="demo"></div>
                  
                  
                  
                  
                  <div class="form-group">
                    <input type="submit" style="font-size: 20px" class="btn btn-primary btn-lg btn-block" tabindex="8" value="Upload" name="submit">
                      
                   
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


  <?php include('footer1.php');?>