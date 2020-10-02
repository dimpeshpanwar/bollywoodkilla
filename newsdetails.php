<?php include("upper.php");?>

 
<?php include("header.php");
$id=$_GET['id'];
$data=read('news',$id);
?>


<!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <ul class="breadcrumb breadcrumb-style ">
            <li class="breadcrumb-item">
              <h4 class="page-title m-b-0">Latest news</h4>
            </li>
            <li class="breadcrumb-item">
              <a href="index.php">
                <i class="fas fa-home"></i></a>
            </li>
            <li class="breadcrumb-item"><a href="latestnews.php">News</a></li>
            <li class="breadcrumb-item"><?php echo $data['head'];?></li>
          </ul>
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-sm-6 col-lg-8">
                <div class="card">
                  <div class="card-header">
                    <h2><?php echo $data['head'];?></h2>
                  </div>
                  <div class="card-body">
                    <?php if($data['video_check']==0)
                      {$div="<div class='owl-carousel owl-theme slider' id='slider1'>";
                        if($data['img']!=""){
                          $div.="<div><img alt='image' src='".$data['img']."'></div>";
                        }
                        if($data['img2']!=""){
                          $div.= "<div><img alt='image' src='".$data['img2']."'></div>";
                        }
                        if($data['img3']!=""){
                          $div.= "<div><img alt='image' src='".$data['img3']."'></div>";
                        }
                        if($data['img4']!=""){
                          $div.= "<div><img alt='image' src='".$data['img4']."'></div>";
                        }
                          $div.="</div>";
                       }
                      else
                       { if($data['video_check']=='1')
                          { $div="<div><iframe src='".$data['video']."' style='width:680px;height:400px;' allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe></div>";

                           }
                     }
                     echo $div;
                     
                      
                   ?>
                  
                    <div >
                      <p style="width: 100%"><?php echo $data['text'];?></p>
                      <div style="border: 1px solid black;height: 200px;">
                        ad area
                      </div>
                        
                  </div></div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-lg-4" style="height: 563px;"> 
                <!-- ad area  -->
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
                    <h4>TRANDING BOLLYWOOD NEWS</h4>
                    <div class="card-header-action">
                      <a href="latestnews.php" class="btn btn-primary">
                        View All
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="bootstrap snippet">
                      <section id="portfolio" class="gray-bg padding-top-bottom">
                        <div class="row">
                          <?php $stmt=$conn->query("SELECT * FROM `news` ORDER BY `news`.`edate` DESC");
                           
                           if($row=$stmt->fetch(PDO::FETCH_NUM)){
                            
                      ?>
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
            <?php } if($row=$stmt->fetch(PDO::FETCH_NUM)){?>
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
              <?php } if($row=$stmt->fetch(PDO::FETCH_NUM)){?>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article">
                  <div class="article-header">
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
              <?php } if($row=$stmt->fetch(PDO::FETCH_NUM)){?>
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
              <?php } ?>
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
                    <h4>Tranding Moives</h4>
                    <div class="card-header-action">
                      <a href="moivesall.php" class="btn btn-primary">
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
                         $stmt=$conn->query("SELECT * FROM `video` WHERE vstatus = 1 or vstatus = 2 ORDER BY `video`.`edate` DESC");
                        if($row=$stmt->fetch(PDO::FETCH_NUM)){
                          
                         ?>
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
                            <?php }
                            if($row=$stmt->fetch(PDO::FETCH_NUM)){
                          
                         ?>
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
                            <?php }
                            if($row=$stmt->fetch(PDO::FETCH_NUM)){
                          
                         ?>
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

<!-- Movies news End-->
<!-- Photoes Start-->
<section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Photo Cetegory</h4>
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

</section>
<!-- photo  End-->
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

</div>





 <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="owl-carousel.html#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="main-footer">
        <div class="footer-left">         
                  &copy; Bollywoodkilla 2020 
        </div>
         <div class="footer-right">
          Developed by <a style="all:unset;" href="http://www.techdeck.co.in"><strong style="color:#a30b1a;">Techdeck</strong></a>
        </div>
        
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/owlcarousel2/dist/owl.carousel.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/owl-carousel.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>

</html>