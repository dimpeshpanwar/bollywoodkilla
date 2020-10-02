<?php include("upper.php");?>
<?php include("header.php");?>

<div class="main-content">




	

<section class="section"> 
          <div class="section-body">
          	<ul class="breadcrumb breadcrumb-style ">
            <li class="breadcrumb-item">
              <h4 class="page-title m-b-0">Song</h4>
            </li>
            <li class="breadcrumb-item">
              <a href="index.php">
                <i class="fas fa-home"></i></a>
            </li>
            <li class="breadcrumb-item">
             	All Song
            </li>
            
          </ul>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                  
                  <div class="card-body">
                    <div class="bootstrap snippet">
                      <section id="portfolio" class="gray-bg padding-top-bottom">
                      
                       
                        <div class="projects-container scrollimation in">
                          <div class="row">
                            
                        <?php $stmt=$conn->query("SELECT * FROM `video` WHERE vstatus = 5 or vstatus = 6");
                              $row=$stmt->fetch(PDO::FETCH_NUM);
                           
                              
                             do{   
                        ?>
                            <article class="col-md-4 col-sm-6 portfolio-item playlist">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=<?php echo $row[0];?>&page=all_song" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $row[4];?>" alt="">
                                  <span class="project-title"><?php echo $row[1];?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="link centered" href="video.php?id=<?php echo $row[0];?>&page=all_song"><i class="fa fa-film fa-fw"></i></a>
                              </div>
                            </article>
                         <?php }while($row=$stmt->fetch(PDO::FETCH_NUM));?>
                            
                          </div>
                        </div>
                      </section>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
</section>
</div>

<?php include("footer.php");?>