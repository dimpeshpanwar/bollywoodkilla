<?php session_start();
  if(!isset($_SESSION['user']))
  {
    header("Location: index.php");
  }
?>
<?php include 'upper1.php';
  include("header1.php");
  ?>

<style type="text/css">
  .text{
      text-transform: uppercase;
    background: linear-gradient(to right, #ff0202 0%, #7c0808 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size:38px;
    line-height: 55px;
    font-family: none;
    font-weight: 900; 
    text-align: center;           
  }
</style>
<div class="main-content">
	<section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-sm-12 offset-sm-2 col-md-8  ">
            <div class="card card-primary">
              <div class="card-header">
              
              </div>
              <div class="card-body" >
                <img src="assets/img/favicon.png" height="350" width="350" style="margin-left: 21%;" 
                >
                <p class="text" >
                          Welcome To<br><span style="font-size:50px;">BollywoodKilla</span><br>Admin Section</p>
						</div>
          </div>  
          </div>
        </div>
      </div>
    </section>
  </div>


  <?php include('footer1.php');?>