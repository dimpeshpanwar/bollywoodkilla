<?php include("upper.php");?>
<?php include("header.php");?>

 <div class="main-content">


		<?php
			$id=$_GET['id'];
      $page=$_GET['page'];
      
      if($page=='all'||'upcoming')
        {
          $pagehead="Upcoming Movies";
          $stmt=$conn->query('SELECT * FROM `video` ORDER BY `video`.`edate` DESC');
          $data1=$stmt->fetch(PDO::FETCH_NUM);
        }
      if($page=='teaser')
        { $pagehead="Teaser";
           $stmt=$conn->query('SELECT * FROM `video` WHERE VSTATUS = 2 ORDER BY `video`.`edate` DESC');
          $data1=$stmt->fetch(PDO::FETCH_NUM);}
      if($page=='documentry')
        { $pagehead="Documentry";
           $stmt=$conn->query('SELECT * FROM `video` WHERE VSTATUS = 3 ORDER BY `video`.`edate` DESC');
          $data1=$stmt->fetch(PDO::FETCH_NUM);}
      if($page=='sort_film')
        { $pagehead="Sort Film";
          $stmt=$conn->query('SELECT * FROM `video` WHERE VSTATUS = 4 ORDER BY `video`.`edate` DESC');
          $data1=$stmt->fetch(PDO::FETCH_NUM);}
      if($page=='playlist')
        { $pagehead="Playlist";
          $stmt=$conn->query('SELECT * FROM `video` WHERE VSTATUS = 6 ORDER BY `video`.`edate` DESC');
          $data1=$stmt->fetch(PDO::FETCH_NUM);}
      if($page=='songteaser')
        { $pagehead="Song Teaser";
          $stmt=$conn->query('SELECT * FROM `video` WHERE VSTATUS = 5 ORDER BY `video`.`edate` DESC');
          $data1=$stmt->fetch(PDO::FETCH_NUM);}
      if($page=='all_song')
        { $pagehead="All Song";
          $stmt=$conn->query('SELECT * FROM `video` WHERE VSTATUS = 5 or VSTATUS = 6 ORDER BY `video`.`edate` DESC');
          $data1=$stmt->fetch(PDO::FETCH_NUM);}
?>



	

<section class="section"> 
  <div class="section-body">
    <ul class="breadcrumb breadcrumb-style ">
      <li class="breadcrumb-item">
        <h4 class="page-title m-b-0"><?php echo $pagehead; ?></h4>
      </li>
      <li class="breadcrumb-item">
          <a href="index.php">
              <i class="fas fa-home"></i></a>
      </li>
      <li class="breadcrumb-item">
          <?php echo $pagehead; ?>
      </li>
    </ul>
    <?php
      if($id==0){}
      else 
        { global $id;
            $data=read('video',$id);
    ?>
          <iframe src="<?php echo $data['link'];?>" style="height:500px;width:100%; border:1px solid black";></iframe>
    <?php }?>
  <div style="padding: 10px;"></div>
  <div class="card">
    <div class="card-header">
        <button type="button" style="margin-left: 10%; padding:20px; font-size: 20px;"class="btn btn-lg btn-primary dropdown-toggle" data-toggle="tooltip" data-placement="right" title="" data-original-title="<?php echo $data['text'];?>">    <?php echo $data['head'];?></i></button>
    </div>
  </div>
    

   
  
  <div style="padding: 10px;"></div>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                  
                  <div class="card-body">
                    <div class="bootstrap snippet">
                      <section id="portfolio" class="gray-bg padding-top-bottom">
                      	
                       
                        <div class="projects-container scrollimation in">
                          <div class="row">
                            <?php if($data1[0]==""){
                                echo "<div>Video is not uploaded.</div>";
                            }
                                else {
                            ?>
                            <article class="col-md-4 col-sm-6 portfolio-item web-design">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=<?php echo $data1[0];?>&page=<?php echo $page;?>" class="main-link" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $data1[4];?>" alt="">
                                  <span class="project-title"><?php echo $data1[1];?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                               
                                <a class="link centered" href="video.php?id=<?php echo $data1[0];?>&page=<?php echo $page;?>"><i class="fa fa-film fa-fw"></i></a>
                              </div>
                            </article>
                            <?php } $data1=$stmt->fetch(PDO::FETCH_NUM);
                            if($data1[0]!=""){ ?>
                            <article class="col-md-4 col-sm-6 portfolio-item apps">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=<?php echo $data1[0];?>&page=<?php echo $page;?>" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $data1[4];?>" alt="">
                                  <span class="project-title"><?php echo $data1[1];?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="link centered" href="video.php?id=<?php echo $data1[0];?>&page=<?php echo $page;?>"><i class="fa fa-film fa-fw"></i></a>
                              </div>
                            </article>
                            <?php } $data1=$stmt->fetch(PDO::FETCH_NUM); if($data1[0]!=""){?>
                            <article class="col-md-4 col-sm-6 portfolio-item  psd">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=<?php echo $data1[0];?>&page=<?php echo $page;?>" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $data1[4];?>" alt="">
                                  <span class="project-title"><?php echo $data1[1];?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="link centered" href="video.php?id=<?php echo $data1[0];?>&page=<?php echo $page;?>"><i class="fa fa-film fa-fw"></i></a>
                              </div>
                            </article>
                            <?php } $data1=$stmt->fetch(PDO::FETCH_NUM); if($data1[0]!=""){?>
                            <article class="col-md-4 col-sm-6 portfolio-item sort">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=<?php echo $data1[0];?>&page=<?php echo $page;?>" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $data1[4];?>" alt="">
                                  <span class="project-title"><?php echo $data1[1];?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="link centered" href="video.php?id=<?php echo $data1[0];?>&page=<?php echo $page;?>"><i class="fa fa-film fa-fw"></i></a>
                              </div>
                            </article>
                            <?php } $data1=$stmt->fetch(PDO::FETCH_NUM); if($data1[0]!=""){?>
                            <article class="col-md-4 col-sm-6 portfolio-item web-design">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=<?php echo $data1[0];?>&page=<?php echo $page;?>" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $data1[4];?>" alt="">
                                  <span class="project-title"><?php echo $data1[1];?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                               <a class="link centered" href="video.php?id=<?php echo $data1[0];?>&page=<?php echo $page;?>"><i class="fa fa-film fa-fw"></i></a>
                              </div>
                            </article>
                            <?php } $data1=$stmt->fetch(PDO::FETCH_NUM); if($data1[0]!=""){?>
                            <article class="col-md-4 col-sm-6 portfolio-item  apps">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=<?php echo $data1[0];?>&page=<?php echo $page;?>" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $data1[4];?>" alt="">
                                  <span class="project-title"><?php echo $data1[1];?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                                
                                <a class="link centered" href="video.php?id=<?php echo $data1[0];?>&page=<?php echo $page;?>"><i class="fa fa-film fa-fw"></i></a>
                              </div>
                            </article>
                            <?php } $data1=$stmt->fetch(PDO::FETCH_NUM); if($data1[0]!=""){?>
                            <article class="col-md-4 col-sm-6 portfolio-item psd">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=<?php echo $data1[0];?>&page=<?php echo $page;?>" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $data1[4];?>" alt="">
                                  <span class="project-title"><?php echo $data1[1];?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                                
                                <a class="link centered" href="video.php?id=<?php echo $data1[0];?>&page=<?php echo $page;?>"><i class="fa fa-film fa-fw"></i></a>
                              </div>
                            </article>
                            <?php } $data1=$stmt->fetch(PDO::FETCH_NUM); if($data1[0]!=""){?>
                            <article class="col-md-4 col-sm-6 portfolio-item sort">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=<?php echo $data1[0];?>&page=<?php echo $page;?>" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $data1[4];?>" alt="">
                                  <span class="project-title"><?php echo $data1[1];?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                                
                                <a class="link centered" href="video.php?id=<?php echo $data1[0];?>&page=<?php echo $page;?>"><i class="fa fa-film fa-fw"></i></a>
                              </div>
                            </article>
                            <?php } $data1=$stmt->fetch(PDO::FETCH_NUM); if($data1[0]!=""){?>
                            <article class="col-md-4 col-sm-6 portfolio-item apps">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=<?php echo $data1[0];?>&page=<?php echo $page;?>" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $data1[4];?>" alt="">
                                  <span class="project-title"><?php echo $data1[1];?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                                
                                <a class="link centered" href="video.php?id=<?php echo $data1[0];?>&page=<?php echo $page;?>"><i class="fa fa-film fa-fw"></i></a>
                              </div>
                            </article>
                            <?php } $data1=$stmt->fetch(PDO::FETCH_NUM); if($data1[0]!=""){?>
                            <article class="col-md-4 col-sm-6 portfolio-item web-design">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=<?php echo $data1[0];?>&page=<?php echo $page;?>" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $data1[4];?>" alt="">
                                  <span class="project-title"><?php echo $data1[1];?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                                
                                <a class="link centered" href="video.php?id=<?php echo $data1[0];?>&page=<?php echo $page;?>"><i class="fa fa-film fa-fw"></i></a>
                              </div>
                            </article>
                            <?php } $data1=$stmt->fetch(PDO::FETCH_NUM); if($data1[0]!=""){?>
                            <article class="col-md-4 col-sm-6 portfolio-item  psd">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=<?php echo $data1[0];?>&page=<?php echo $page;?>" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $data1[4];?>" alt="">
                                  <span class="project-title"><?php echo $data1[1];?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                                
             <a class="link centered" href="video.php?id=<?php echo $data1[0];?>&page=<?php echo $page;?>"><i class="fa fa-film fa-fw"></i></a>
                              </div>
                            </article>
                            <?php } $data1=$stmt->fetch(PDO::FETCH_NUM); if($data1[0]!=""){?>
                            <article class="col-md-4 col-sm-6 portfolio-item sort">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=<?php echo $data1[0];?>&page=<?php echo $page;?>" class="main-link">
                                  <img class="img-responsive img-center" src="<?php echo $data1[4];?>" alt="">
                                  <span class="project-title"><?php echo $data1[1];?></span>
                                  <span class="overlay-mask"></span>
                                </a>
                                
                                <a class="link centered" href="video.php?id=<?php echo $data1[0];?>&page=<?php echo $page;?>"><i class="fa fa-film fa-fw"></i></a>
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
</div>


<?php include("footer.php");?>