     <?php include("upper.php");?>
     <?php include("header.php");?>
     
      <!-- Main Content -->
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <ul class="breadcrumb breadcrumb-style ">
            <li class="breadcrumb-item">
              <h4 class="page-title m-b-0">Home</h4>
            </li>
            <li class="breadcrumb-item">
              <a href="index.php">
                <i class="fas fa-home"></i></a>
            </li>
            
          </ul>
            
          <div class="section-body">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">

                  <div class="card-body">
                    <div class="bootstrap snippet">
                      <section id="portfolio" class="gray-bg padding-top-bottom">
                        <div>
                          <img src="assets\img\image-gallery\1.png" style=" height: 200px; width: 100%;">
                        </div>
                      </section>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
<!-- bollywood news start-->
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Bollywood News</h4>
                    <div class="card-header-action">
                      <a href="latestnews.php" class="btn btn-primary">
                        View All
                      </a>
                    </div>
                  </div>
                    <?php $stmt=$conn->query("SELECT * FROM `news` ORDER BY `news`.`edate` DESC");
                           
                           $row=$stmt->fetch(PDO::FETCH_NUM);
                            
                      ?>
                  <div class="card-body">
                    <div class="bootstrap snippet">
                      <section id="portfolio" class="gray-bg padding-top-bottom">
                        <div class="row">
              <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article">
                  <div class="article-header">
                    <div class="article-image" data-background="<?php echo $row[3];?>" style="background-image: url(&quot;<?php echo $row[3];?>&quot;);">
                    </div>
                    <div class="article-title">
                      <h2><a href="newsdetails.php?id=<?php echo $row[0];?>"><?php echo $row[1];?></a></h2>
                    </div>
                  </div>
                  <div class="article-details">
                    <p><?php echo $row[2];?></p>
                    <div class="article-cta">
                      <a href="newsdetails.php?id=<?php echo $row[0];?>" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article">
                  <div class="article-header"> <?php $row=$stmt->fetch(PDO::FETCH_NUM);?>
                    <div class="article-image" data-background="<?php echo $row[3];?>" style="background-image: url(&quot;<?php echo $row[3];?>&quot;);">
                    </div>
                    <div class="article-title">
                      <h2><a href="newsdetails.php?id=<?php echo $row[0];?>"><?php echo $row[1];?></a></h2>
                    </div>
                  </div>
                  <div class="article-details">
                    <p><?php echo $row[2];?></p>
                    <div class="article-cta">
                      <a href="newsdetails.php?id=<?php echo $row[0];?>" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article">
                  <div class="article-header"><?php $row=$stmt->fetch(PDO::FETCH_NUM);?>
                    <div class="article-image" data-background="<?php echo $row[3];?>" style="background-image: url(&quot;<?php echo $row[3];?>&quot;);">
                    </div>
                    <div class="article-title">
                      <h2><a href="newsdetails.php?id=<?php echo $row[0];?>">The<?php echo $row[1];?></a></h2>
                    </div>
                  </div>
                  <div class="article-details">
                    <p><?php echo $row[2];?></p>
                    <div class="article-cta">
                      <a href="newsdetails.php?id=<?php echo $row[0];?>" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article">
                  <div class="article-header"><?php $row=$stmt->fetch(PDO::FETCH_NUM);?>
                    <div class="article-image" data-background="<?php echo $row[3];?>" style="background-image: url(&quot;<?php echo $row[3];?>&quot;);">
                    </div>
                    <div class="article-title">
                      <h2><a href="newsdetails.php?id=<?php echo $row[0];?>"><?php echo $row[1];?></a></h2>
                    </div>
                  </div>
                  <div class="article-details">
                    <p><?php echo $row[2];?></p>
                    <div class="article-cta">
                      <a href="newsdetails.php?id=<?php echo $row[0];?>" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
                </article>
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
<!-- bollywood news end-->
<!-- Movies news Start-->  
        <section class="section"> 
          <div class="section-body">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Moives</h4>
                    <div class="card-header-action">
                      <a href="moviesall.php" class="btn btn-primary">
                        View All
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="bootstrap snippet">
                      <section id="portfolio" class="gray-bg padding-top-bottom">
                       <?php 
                         $stmt=$conn->query("SELECT * FROM `video` WHERE vstatus = 1 ORDER BY `video`.`edate` DESC");
                        $row=$stmt->fetch(PDO::FETCH_NUM);
                          
                         ?>
                        <div class="projects-container scrollimation in">
                          <div class="row">
                            <article class="col-md-4 col-sm-6 portfolio-item web-design apps psd">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=<?php echo $row[0];?>&page=all&page=all" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $row[4];?>" alt="">
                                  <span class="project-title"><?php echo $row[1];?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                               
                                <a class="link centered" href="video.php?id=<?php echo $row[0];?>&page=all"><i class="fa fa-film fa-fw"></i></a>
                              </div>
                            </article>
                            <?php  $row=$stmt->fetch(PDO::FETCH_NUM);?>
                            <article class="col-md-4 col-sm-6 portfolio-item apps">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=<?php echo $row[0];?>&page=all" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $row[4];?>" alt="">
                                  <span class="project-title"><?php echo $row[1];?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="link centered" href="video.php?id=<?php echo $row[0];?>&page=all"><i class="fa fa-film fa-fw"></i></a>
                              </div>
                            </article>
                            <?php 
                         $stmt=$conn->query("SELECT * FROM `video` WHERE vstatus = 2 ORDER BY `video`.`edate` DESC");
                        $row=$stmt->fetch(PDO::FETCH_NUM);
                          
                         ?>
                            <article class="col-md-4 col-sm-6 portfolio-item web-design psd">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=<?php echo $row[0];?>&page=all" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $row[4];?>" alt="">
                                  <span class="project-title"><?php echo $row[1];?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="link centered" href="video.php?id=<?php echo $row[0];?>&page=all"><i class="fa fa-film fa-fw"></i></a>
                              </div>
                            </article>
                            <?php $row=$stmt->fetch(PDO::FETCH_NUM);?>
                            <article class="col-md-4 col-sm-6 portfolio-item apps">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=<?php echo $row[0];?>&page=all" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $row[4];?>" alt="">
                                  <span class="project-title"><?php echo $row[1];?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="link centered" href="video.php?id=<?php echo $row[0];?>&page=all"><i class="fa fa-film fa-fw"></i></a>
                              </div>
                            </article>
                             <?php 
                         $stmt=$conn->query("SELECT * FROM `video` WHERE vstatus = 3 ORDER BY `video`.`edate` DESC");
                        $row=$stmt->fetch(PDO::FETCH_NUM);
                          
                         ?>
                            <article class="col-md-4 col-sm-6 portfolio-item web-design psd">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=<?php echo $row[0];?>&page=all" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $row[4];?>" alt="">
                                  <span class="project-title"><?php echo $row[1];?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                               <a class="link centered" href="video.php?id=<?php echo $row[0];?>&page=all"><i class="fa fa-film fa-fw"></i></a>
                              </div>
                            </article>
                             <?php 
                         $stmt=$conn->query("SELECT * FROM `video` WHERE vstatus = 4 order by rand() limit 1");
                        $row=$stmt->fetch(PDO::FETCH_NUM);
                          
                         ?>
                            <article class="col-md-4 col-sm-6 portfolio-item web-design apps">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=<?php echo $row[0];?>&page=all" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $row[4];?>" alt="">
                                  <span class="project-title"><?php echo $row[1];?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                                
                                <a class="link centered" href="video.php?id=<?php echo $row[0];?>&page=all"><i class="fa fa-film fa-fw"></i></a>
                              </div>
                            </article>
                            
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
<!-- Movies news End--> 
<!-- Photo Start--> 
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Photo</h4>
                    <div class="card-header-action">
                      <a href="photoall.php" class="btn btn-primary">
                        View All
                      </a>
                    </div>
                  </div>
                  
                  <div class="card-body">
                    <div class="bootstrap snippet">
                      <section id="portfolio" class="gray-bg padding-top-bottom">
                      
                        <div class="projects-container scrollimation in">
                          <div class="row">
                            <?php $stmt=$conn->query("SELECT * FROM `category` WHERE 1");
                                   if($row=$stmt->fetch(PDO::FETCH_NUM))
                                    {
                                      $c_id=$row[0];
                                      $title=$row[1]; 
                                      $stmt2=$conn->query("SELECT * FROM `gallery` where c_id = $c_id ORDER BY rand() limit 1");
                                      $g=$stmt2->fetch(PDO::FETCH_NUM);
                                     
                                     $img=$g[2];
                      ?>
                            <article class="col-md-4 col-sm-6 portfolio-item web-design apps psd">
                              <div class="portfolio-thumb in">
                                <a href="subgallery.php?c_id=<?php echo $c_id;?>" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $img;?>" alt="">
                                  <span class="project-title"><?php echo $title;?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="link centered" href="subgallery.php?c_id=<?php echo $c_id;?>"><i class="fa fa-image fa-fw"></i></a>
                              </div>
                            </article>
                           <?php }
                            if($row=$stmt->fetch(PDO::FETCH_NUM))
                                    {
                                      $c_id=$row[0];
                                      $title=$row[1]; 
                                      $stmt2=$conn->query("SELECT * FROM `gallery` where c_id = $c_id ORDER BY rand() limit 1");
                                      $g=$stmt2->fetch(PDO::FETCH_NUM);
                                     
                                     $img=$g[2];
                      ?>
                            <article class="col-md-4 col-sm-6 portfolio-item web-design apps psd">
                              <div class="portfolio-thumb in">
                                <a href="subgallery.php?c_id=<?php echo $c_id;?>" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $img;?>" alt="">
                                  <span class="project-title"><?php echo $title;?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="link centered" href="subgallery.php?c_id=<?php echo $c_id;?>"><i class="fa fa-image fa-fw"></i></a>
                              </div>
                            </article>
                           <?php }
                           if($row=$stmt->fetch(PDO::FETCH_NUM))
                                    {
                                      $c_id=$row[0];
                                      $title=$row[1]; 
                                      $stmt2=$conn->query("SELECT * FROM `gallery` where c_id = $c_id ORDER BY rand() limit 1");
                                      $g=$stmt2->fetch(PDO::FETCH_NUM);
                                     
                                     $img=$g[2];
                      ?>
                            <article class="col-md-4 col-sm-6 portfolio-item web-design apps psd">
                              <div class="portfolio-thumb in">
                                <a href="subgallery.php?c_id=<?php echo $c_id;?>" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $img;?>" alt="">
                                  <span class="project-title"><?php echo $title;?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="link centered" href="subgallery.php?c_id=<?php echo $c_id;?>"><i class="fa fa-image fa-fw"></i></a>
                              </div>
                            </article>
                           <?php }
                           if($row=$stmt->fetch(PDO::FETCH_NUM))
                                    {
                                      $c_id=$row[0];
                                      $title=$row[1]; 
                                      $stmt2=$conn->query("SELECT * FROM `gallery` where c_id = $c_id ORDER BY rand() limit 1");
                                      $g=$stmt2->fetch(PDO::FETCH_NUM);
                                     
                                     $img=$g[2];
                      ?>
                            <article class="col-md-4 col-sm-6 portfolio-item web-design apps psd">
                              <div class="portfolio-thumb in">
                                <a href="subgallery.php?c_id=<?php echo $c_id;?>" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $img;?>" alt="">
                                  <span class="project-title"><?php echo $title;?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="link centered" href="subgallery.php?c_id=<?php echo $c_id;?>"><i class="fa fa-image fa-fw"></i></a>
                              </div>
                            </article>
                           <?php }
                           if($row=$stmt->fetch(PDO::FETCH_NUM))
                                    {
                                      $c_id=$row[0];
                                      $title=$row[1]; 
                                      $stmt2=$conn->query("SELECT * FROM `gallery` where c_id = $c_id ORDER BY rand() limit 1");
                                      $g=$stmt2->fetch(PDO::FETCH_NUM);
                                     
                                     $img=$g[2];
                      ?>
                            <article class="col-md-4 col-sm-6 portfolio-item web-design apps psd">
                              <div class="portfolio-thumb in">
                                <a href="subgallery.php?c_id=<?php echo $c_id;?>" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $img;?>" alt="">
                                  <span class="project-title"><?php echo $title;?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="link centered" href="subgallery.php?c_id=<?php echo $c_id;?>"><i class="fa fa-image fa-fw"></i></a>
                              </div>
                            </article>
                           <?php }
                           if($row=$stmt->fetch(PDO::FETCH_NUM))
                                    {
                                      $c_id=$row[0];
                                      $title=$row[1]; 
                                      $stmt2=$conn->query("SELECT * FROM `gallery` where c_id = $c_id ORDER BY rand() limit 1");
                                      $g=$stmt2->fetch(PDO::FETCH_NUM);
                                     
                                     $img=$g[2];
                      ?>
                            <article class="col-md-4 col-sm-6 portfolio-item web-design apps psd">
                              <div class="portfolio-thumb in">
                                <a href="subgallery.php?c_id=<?php echo $c_id;?>" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $img;?>" alt="">
                                  <span class="project-title"><?php echo $title;?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="link centered" href="subgallery.php?c_id=<?php echo $c_id;?>"><i class="fa fa-image fa-fw"></i></a>
                              </div>
                            </article>
                           <?php }?>
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
<!-- Photo end--> 
<!-- Celebs Start--> 
         <!--div class="section-body">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Celebs</h4>
                    <div class="card-header-action">
                      <a href="celebsall.php" class="btn btn-primary">
                        View All
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="bootstrap snippet">
                      <section id="portfolio" class="gray-bg padding-top-bottom">
                       
                        <div class="projects-container scrollimation in">
                          <div class="row">
                            <article class="col-md-4 col-sm-6 portfolio-item web-design apps psd">
                              <div class="portfolio-thumb in">
                                <a href="index.php#" class="main-link">
                                  <img class="img-responsive img-center" src="assets/img/posts/post4.png" alt="">
                                  <span class="project-title">Title 1</span>
                                  <span class="overlay-mask"></span>
                                </a>
                                
                                 <a class="link centered" href=""><i class="fa fa-star fa-fw"></i></a>
                              </div>
                            </article>
                            <article class="col-md-4 col-sm-6 portfolio-item apps">
                              <div class="portfolio-thumb in">
                                <a href="index.php#" class="main-link">
                                  <img class="img-responsive img-center" src="assets/img/posts/post5.png" alt="">
                                  <span class="project-title">Title 2</span>
                                  <span class="overlay-mask"></span>
                                </a>
                               <a class="link centered" href=""><i class="fa fa-star fa-fw"></i></a>
                              </div>
                            </article>
                            <article class="col-md-4 col-sm-6 portfolio-item web-design psd">
                              <div class="portfolio-thumb in">
                                <a href="index.php#" class="main-link">
                                  <img class="img-responsive img-center" src="assets/img/posts/post6.png" alt="">
                                  <span class="project-title">Title 3</span>
                                  <span class="overlay-mask"></span>
                                </a>
                             <a class="link centered" href=""><i class="fa fa-star fa-fw"></i></a>
                              </div>
                            </article>
                            <article class="col-md-4 col-sm-6 portfolio-item apps">
                              <div class="portfolio-thumb in">
                                <a href="index.php#" class="main-link">
                                  <img class="img-responsive img-center" src="assets/img/posts/post7.png" alt="">
                                  <span class="project-title">Title 4</span>
                                  <span class="overlay-mask"></span>
                                </a>
                              <a class="link centered" href=""><i class="fa fa-star fa-fw"></i></a>
                              </div>
                            </article>
                            <article class="col-md-4 col-sm-6 portfolio-item web-design psd">
                              <div class="portfolio-thumb in">
                                <a href="index.php#" class="main-link">
                                  <img class="img-responsive img-center" src="assets/img/posts/post8.png" alt="">
                                  <span class="project-title">Title 5</span>
                                  <span class="overlay-mask"></span>
                                </a>
                             <a class="link centered" href=""><i class="fa fa-star fa-fw"></i></a>
                              </div>
                            </article>
                            <article class="col-md-4 col-sm-6 portfolio-item web-design apps">
                              <div class="portfolio-thumb in">
                                <a href="index.php#" class="main-link">
                                  <img class="img-responsive img-center" src="assets/img/posts/post9.png" alt="">
                                  <span class="project-title">Title 6</span>
                                  <span class="overlay-mask"></span>
                                </a>
                               <a class="link centered" href=""><i class="fa fa-star fa-fw"></i></a>
                              </div>
                            </article>
                            
                          </div>
                        </div>
      
                      </section>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section-->
<!-- Celebs End-->
<!-- Song Start-->  
         <section class="section">
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Songs</h4>
                    <div class="card-header-action">
                      <a href="songall.php" class="btn btn-primary">
                        View All
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="bootstrap snippet">
                      <section id="portfolio" class="gray-bg padding-top-bottom">
                        <div class="projects-container scrollimation in">
                          <div class="row">
                            <?php
                              $stmt=$conn->query("SELECT * FROM `video` WHERE vstatus = 5 or vstatus = 6 ORDER BY `video`.`edate` DESC");
                                if($row=$stmt->fetch(PDO::FETCH_NUM))
                                {  
                              ?>
                            <article class="col-md-4 col-sm-6 portfolio-item">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=<?php echo $row[0];?>&page=all_song" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $row[4];?>" alt="">
                                  <span class="project-title"><?php echo $row[1];?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="enlarge centered cboxElement" href="video.php?id=<?php echo $row[0];?>&page=all_song" title="song"><i
                                    class="fa fa-music fa-fw"></i></a>
                                </a>
                              </div>
                            </article>
                            <?php }
                             if($row=$stmt->fetch(PDO::FETCH_NUM))
                                {  
                              ?>
                            <article class="col-md-4 col-sm-6 portfolio-item">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=<?php echo $row[0];?>&page=all_song" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $row[4];?>" alt="">
                                  <span class="project-title"><?php echo $row[1];?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="enlarge centered cboxElement" href="video.php?id=<?php echo $row[0];?>&page=all_song" title="song"><i
                                    class="fa fa-music fa-fw"></i></a>
                                </a>
                              </div>
                            </article>
                            <?php }
                             if($row=$stmt->fetch(PDO::FETCH_NUM))
                                {  
                              ?>
                            <article class="col-md-4 col-sm-6 portfolio-item">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=<?php echo $row[0];?>&page=all_song" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $row[4];?>" alt="">
                                  <span class="project-title"><?php echo $row[1];?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="enlarge centered cboxElement" href="video.php?id=<?php echo $row[0];?>&page=all_song" title="song"><i
                                    class="fa fa-music fa-fw"></i></a>
                                </a>
                              </div>
                            </article>
                            <?php }
                             if($row=$stmt->fetch(PDO::FETCH_NUM))
                                {  
                              ?>
                            <article class="col-md-4 col-sm-6 portfolio-item">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=<?php echo $row[0];?>&page=all_song" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $row[4];?>" alt="">
                                  <span class="project-title"><?php echo $row[1];?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="enlarge centered cboxElement" href="video.php?id=<?php echo $row[0];?>&page=all_song" title="song"><i
                                    class="fa fa-music fa-fw"></i></a>
                                </a>
                              </div>
                            </article>
                            <?php }
                             if($row=$stmt->fetch(PDO::FETCH_NUM))
                                {  
                              ?>
                            <article class="col-md-4 col-sm-6 portfolio-item">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=<?php echo $row[0];?>&page=all_song" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $row[4];?>" alt="">
                                  <span class="project-title"><?php echo $row[1];?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="enlarge centered cboxElement" href="video.php?id=<?php echo $row[0];?>&page=all_song" title="song"><i
                                    class="fa fa-music fa-fw"></i></a>
                                </a>
                              </div>
                            </article>
                            <?php }
                             if($row=$stmt->fetch(PDO::FETCH_NUM))
                                {  
                              ?>
                            <article class="col-md-4 col-sm-6 portfolio-item">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=<?php echo $row[0];?>&page=all_song" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $row[4];?>" alt="">
                                  <span class="project-title"><?php echo $row[1];?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="enlarge centered cboxElement" href="video.php?id=<?php echo $row[0];?>&page=all_song" title="song"><i
                                    class="fa fa-music fa-fw"></i></a>
                                </a>
                              </div>
                            </article>
                            <?php }?>
                            
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

<!-- Song End--> 
        <?php include("footer.php");?>