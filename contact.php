<?php include("upper.php");?>
<?php include("header.php");?>
<?php
$msg="";
if(isset($_POST['submit']))
{
  
  if(!preg_match("/^[]a-zA-Z]*$/",$_POST['name']))
    { echo "hi";
      echo "hello";
          $stmt=$conn->query("select count(*) from query");
           $stmt->execute();
          $row=$stmt->fetch(PDO::FETCH_NUM);
          $id=$row[0];
          print_r($id);
          $stmt=$conn->query("INSERT INTO `query`(`id`, `name`, `email`, `message`) VALUES ('".$id."','".$_POST['name']."','".$_POST['email']."','".$_POST['message']."')");
           
          
          if($stmt){ global $msg; $msg="alert('Meassage Send Successfully');";}
          
        
  }
}
?>
<div class="main-content">
	<section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-md-10 offset-md-1 col-lg-10 offset-lg-1">
            <div class="login-brand">
              Bollywoodkilla
            </div>
            <div class="card card-primary">
              <div class="row m-0">
                <div class="col-12 col-md-12 col-lg-5 p-0">
                  <div class="card-header text-center">
                    <h4>Contact Us</h4>
                  </div>
                  <div class="card-body">
                    <form method="POST" action="contact.php" enctype="multipart/form-data">
                      <div class="form-group floating-addon">
                        <label>Name</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="far fa-user"></i>
                            </div>
                          </div>
                          <input id="name" type="text" class="form-control" name="name" autofocus="" required="required" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group floating-addon">
                        <label>Email</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-envelope"></i>
                            </div>
                          </div>
                          <input id="email" type="email" class="form-control" name="email" placeholder="Email" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" placeholder="Type your message" data-height="150" name="message"style="height: 150px;"></textarea>
                      </div>
                      <div class="form-group text-right">
                        <input type="submit" name="submit" required="required" class="btn btn-round btn-lg btn-primary" value="Send Message">
                          
                       
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-12 col-md-12 col-lg-7 p-0">
                  <div id="map" ></div></div></div></div></div></div></div>
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </section>
</div>
<script type="text/javascript"><?php echo $msg;?></script>
<?php include("footer.php");?>