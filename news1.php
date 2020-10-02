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
  		
  		if(isset($_FILES['img']['name']))
  		{
            global $col,$val;
  			$timg=image_formate(535,382,$_FILES['img']['name'],$_FILES['img']['tmp_name']);
  			array_push($col,'img');array_push($val,$timg);
  		}
      else
  		    {global $col,$val; array_push($col,'img');array_push($val,"");}
  		
  		if($_POST['btn']==0)
  			{ 
  				global $col,$val;
  				if(isset($_FILES['img2']['name'])){global $col,$val;
  					$timg=image_formate(535,382,$_FILES['img2']['name'],
  						$_FILES['img2']['tmp_name']);
  				array_push($col,'img2');array_push($val,$timg);}
		       else
		          {global $col,$val; array_push($col,'img2');array_push($val,"");}
		  	
		  		if(isset($_FILES['img3']['name'])){global $col,$val;
		  					$timg=image_formate(535,382,$_FILES['img3']['name'],$_FILES['img3']['tmp_name']);
		  				array_push($col,'img3');array_push($val,$timg);}
		       else
		          {global $col,$val; array_push($col,'img3');array_push($val,"");}
		  	
		  		if(isset($_FILES['img4']['name'])){global $col,$val;
		  					$timg=image_formate(535,382,$_FILES['img4']['name'],$_FILES['img4']['tmp_name']);  
		  				array_push($col,'img4');array_push($val,$timg);}
		       else
		          {global $col,$val; array_push($col,'img4');array_push($val,"");}
  				  
  				array_push($col,'video_check');array_push($val,$_POST['0']);}
       else
          {	global $col,$val;
          	array_push($col,'img2');array_push($val,"");
          	array_push($col,'img3');array_push($val,"");
          	array_push($col,'img4');array_push($val,"");
          	array_push($col,'video_check');array_push($val,"1");}
      if($_POST['ylink']!="")
  			{ global $col,$val;
  				  
  				array_push($col,'video');array_push($val,$_POST['ylink']);}
       else
          {global $col,$val; array_push($col,'video');array_push($val,"");}
  		if($_POST['date']!="")
  			{ global $col,$val; 
  				array_push($col,'edate');array_push($val,$_POST['date']);}

  		if($_POST['head']||$_POST['text']!=""||$_POST['img']!=""||$_POST['img2']!=""||$_POST['img3']!=""||$_POST['img4']!=""||$_POST['link']||$_POST['date']){insert('news',$col,$val);}
  	}
  ?>

  <script type="text/javascript">
  	
function myFunction() {
  var x = document.getElementById("switch1").value;

  document.getElementById("demo").innerHTML = "<div class=\"form-group\">                    <div class=\"d-block\">                      <label  class=\"control-label\">Image</label>                      </div>                    <input  id=\"text\" type=\"file\" class=\"form-control\" name=\"img\" tabindex=\"3\" autofocus>                  </div>                  <div class=\"form-group\">                    <div class=\"d-block\">                      <label  class=\"control-label\">Image 2</label>                    </div>                    <input  id=\"text\" type=\"file\" class=\"form-control\" name=\"img2\" tabindex=\"4\" autofocus>                  </div>                  <div class=\"form-group\">                    <div class=\"d-block\">                      <label  class=\"control-label\">Image 3</label>                    </div>                    <input  id=\"text\" type=\"file\" class=\"form-control\" name=\"img3\" tabindex=\"5\" autofocus>                  </div>                  <div class=\"form-group\">                    <div class=\"d-block\">                      <label  class=\"control-label\">Image 4</label>                    </div>                    <input  id=\"text\" type=\"file\" class=\"form-control\" name=\"img4\" tabindex=\"6\" autofocus>                  </div>";
}
function myFunction1() {
  var x = document.getElementById("switch1").value;
  document.getElementById("demo").innerHTML = "<div class=\"form-group\">                    <div class=\"d-block\">                      <label  class=\"control-label\">Image</label>                      </div>                    <input  id=\"text\" type=\"file\" class=\"form-control\" name=\"img\" tabindex=\"3\" autofocus>                  </div><div class=\"form-group\">                    <div class=\"d-block\">                      <label  class=\"control-label\">Youtube Video link</label>                    </div>                    <input  id=\"text\" type=\"text\" class=\"form-control\" name=\"ylink\" tabindex=\"7\" autofocus>                  </div>";
}

  </script>
<div class="main-content">
	<section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-sm-12 offset-sm-2 col-md-8  ">
            <div class="card card-primary">
              <div class="card-header">
                <h4>News</h4>
              </div>
              <div class="card-body" >
                <form method="POST" action="news1.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <div class="d-block">
                      <label  class="control-label">News head</label>
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
						  	<input type="radio" id="switch1" name="btn" onchange="myFunction()" required="required" value="0">
							    <label>Image Slider</label>
							<input type="radio" id="switch1" name="btn" onchange="myFunction1()" value="1">
								<label>Video</label>
							  
						</div>
                  </div>

                  <div id="demo"></div>
                  
                  
                  
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" tabindex="8" value="Upload" name="submit">
                      
                   
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