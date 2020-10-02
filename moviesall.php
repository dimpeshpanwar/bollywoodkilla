<?php include("upper.php");?>
<?php include("header.php");?>


 <div class="main-content">




	

<section class="section"> 
          <div class="section-body">
          	<ul class="breadcrumb breadcrumb-style ">
            <li class="breadcrumb-item">
              <h4 class="page-title m-b-0">Movies</h4>
            </li><li class="breadcrumb-item">
              <a href="index.php">
                <i class="fas fa-home"></i></a>
            </li>
            <li class="breadcrumb-item">
             Movies
            </li>
            
          </ul>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                  
                  <div class="card-body">
                    <div class="bootstrap snippet">
                      <section id="portfolio" class="gray-bg padding-top-bottom">
                      	<!--==== Portfolio Filters ====-->
                        <div class="categories">
                          <ul><?php  $link="moviesall.php#";?>

                            <li class="">
                              <a href="<?php echo $link;?>" data-filter="*">All Categories</a>
                            </li>
                            <li>
                              <a href="<?php echo $link;?>" data-filter=".web-design">Upcoming Movies</a>
                            </li>
                            <li>
                              <a href="<?php echo $link;?>" data-filter=".apps">Teaser</a>
                            </li>
                            <li>
                              <a href="<?php echo $link;?>" data-filter=".psd">Documentry</a>
                            </li>
                            <li>
                              <a href="<?php echo $link;?>" data-filter=".sort">Sort Film</a>
                            </li>
                          </ul>
                        </div>
                        <!-- ======= Portfolio items ===-->
                       
                        <div class="projects-container scrollimation in">
                          <div class="row">
                            <article class="col-md-4 col-sm-6 portfolio-item web-design">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=1" class="main-link">
                                  <img class="img-responsive img-center" src="assets/img/posts/post4.png" alt="">
                                  <span class="project-title">Title 1</span>
                                  <span class="overlay-mask"></span>
                                </a>
                               
                                <a class="link centered" href="video.php?id=1"><i class="fa fa-film fa-fw"></i></a>
                              </div>
                            </article>
                            <article class="col-md-4 col-sm-6 portfolio-item apps">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=2" class="main-link">
                                  <img class="img-responsive img-center" src="assets/img/posts/post5.png" alt="">
                                  <span class="project-title">Title 2</span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="link centered" href="video.php?id=2"><i class="fa fa-film fa-fw"></i></a>
                              </div>
                            </article>
                            <article class="col-md-4 col-sm-6 portfolio-item  psd">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=3" class="main-link">
                                  <img class="img-responsive img-center" src="assets/img/posts/post6.png" alt="">
                                  <span class="project-title">Title 3</span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="link centered" href="video.php?id=3"><i class="fa fa-film fa-fw"></i></a>
                              </div>
                            </article>
                            <article class="col-md-4 col-sm-6 portfolio-item sort">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=4" class="main-link">
                                  <img class="img-responsive img-center" src="assets/img/posts/post7.png" alt="">
                                  <span class="project-title">Title 4</span>
                                  <span class="overlay-mask"></span>
                                </a>
                                <a class="link centered" href="video.php?id=4"><i class="fa fa-film fa-fw"></i></a>
                              </div>
                            </article>
                            <article class="col-md-4 col-sm-6 portfolio-item web-design">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=5" class="main-link">
                                  <img class="img-responsive img-center" src="assets/img/posts/post8.png" alt="">
                                  <span class="project-title">Title 5</span>
                                  <span class="overlay-mask"></span>
                                </a>
                               <a class="link centered" href="video.php?id=5"><i class="fa fa-film fa-fw"></i></a>
                              </div>
                            </article>
                            <article class="col-md-4 col-sm-6 portfolio-item  apps">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=6" class="main-link">
                                  <img class="img-responsive img-center" src="assets/img/posts/post9.png" alt="">
                                  <span class="project-title">Title 6</span>
                                  <span class="overlay-mask"></span>
                                </a>
                                
                                <a class="link centered" href="video.php?id=6"><i class="fa fa-film fa-fw"></i></a>
                              </div>
                            </article>
                            <article class="col-md-4 col-sm-6 portfolio-item psd">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=7" class="main-link">
                                  <img class="img-responsive img-center" src="assets/img/posts/post9.png" alt="">
                                  <span class="project-title">Title 6</span>
                                  <span class="overlay-mask"></span>
                                </a>
                                
                                <a class="link centered" href="video.php?id=7"><i class="fa fa-film fa-fw"></i></a>
                              </div>
                            </article>
                            <article class="col-md-4 col-sm-6 portfolio-item sort">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=8" class="main-link">
                                  <img class="img-responsive img-center" src="assets/img/posts/post9.png" alt="">
                                  <span class="project-title">Title 6</span>
                                  <span class="overlay-mask"></span>
                                </a>
                                
                                <a class="link centered" href="video.php?id=8"><i class="fa fa-film fa-fw"></i></a>
                              </div>
                            </article>
                            <article class="col-md-4 col-sm-6 portfolio-item apps">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=9" class="main-link">
                                  <img class="img-responsive img-center" src="assets/img/posts/post9.png" alt="">
                                  <span class="project-title">Title 6</span>
                                  <span class="overlay-mask"></span>
                                </a>
                                
                                <a class="link centered" href="video.php?id=9"><i class="fa fa-film fa-fw"></i></a>
                              </div>
                            </article>
                            <article class="col-md-4 col-sm-6 portfolio-item web-design">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=10" class="main-link">
                                  <img class="img-responsive img-center" src="assets/img/posts/post9.png" alt="">
                                  <span class="project-title">Title 6</span>
                                  <span class="overlay-mask"></span>
                                </a>
                                
                                <a class="link centered" href="video.php?id=10"><i class="fa fa-film fa-fw"></i></a>
                              </div>
                            </article>
                            <article class="col-md-4 col-sm-6 portfolio-item  psd">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=11" class="main-link">
                                  <img class="img-responsive img-center" src="assets/img/posts/post9.png" alt="">
                                  <span class="project-title">Title 6</span>
                                  <span class="overlay-mask"></span>
                                </a>
                                
                            <a class="link centered" href="video.php?id=11"><i class="fa fa-film fa-fw"></i></a>
                              </div>
                            </article>
                            <article class="col-md-4 col-sm-6 portfolio-item sort">
                              <div class="portfolio-thumb in">
                                <a href="video.php?id=12" class="main-link">
                                  <img class="img-responsive img-center" src="assets/img/posts/post9.png" alt="">
                                  <span class="project-title">Title 6</span>
                                  <span class="overlay-mask"></span>
                                </a>
                                
                                <a class="link centered" href="video.php?id=12"><i class="fa fa-film fa-fw"></i></a>
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
          <div class="card-body">
                    <nav aria-label="...">
                      <ul class="pagination">
                        <li class="page-item disabled">
                          <a class="page-link" href="pagination.html#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="pagination.html#">1</a></li>
                        <li class="page-item active">
                          <a class="page-link" href="pagination.html#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="pagination.html#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="pagination.html#">Next</a>
                        </li>
                      </ul>
                    </nav>
                  </div>
</section>
</div>


<?php include("footer.php");?>