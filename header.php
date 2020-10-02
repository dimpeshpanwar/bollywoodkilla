  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/owlcarousel2/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/bundles/owlcarousel2/dist/assets/owl.theme.default.min.css">
<link href="assets/bundles/lightgallery/dist/css/lightgallery.css" rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.png' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
          <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="index.html#" data-toggle="sidebar" class="nav-link nav-link-lg
                  collapse-btn"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-justify"><line x1="21" y1="10" x2="3" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="21" y1="18" x2="3" y2="18"></line></svg></a></li>
            <li><a href="index.html#" class="nav-link nav-link-lg fullscreen-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
              </a></li>
            <li>
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200" style="width: 200px;">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          

          <li class="dropdown"><a href="index.php" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="assets/img/logo.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
          <!-- Profile dropdown start-->
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <!--div class="dropdown-title">Hello Sarah Smith</div>
              <a href="profile.html" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
              </a> <a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                Activities
              </a> <a href="" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                Settings
              </a>
              <div class="dropdown-divider"></div-->
              <a href="auth-login.php" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Login
              </a>
            </div>
            <!-- Profile dropdown end-->
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2 sticky">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            
          </div>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <a href="index.php"><img alt="image" src="assets/img/logo.png"></a>
            </div>
            <div class="sidebar-user-details">
              <div class="user-name"><a href="index.php" style="text-decoration:none;color: #7c0c0c; font-size: x-large; font-family: cursive;">Bollywood killa</a></div>
              <div class="user-role"></div>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown">
              <a href="index.php" class=" nav-link"><i
                  data-feather="home"></i><span>Home</span></a>
              <!--ul class="dropdown-menu">
                <li><a class="nav-link" href="index.html">Dashboard 1</a></li>
                <li class="active"><a class="nav-link" href="index2.html">Dashboard 2</a></li>
              </ul-->
            </li>
            <li class="dropdown">
              <a class="menu-toggle nav-link has-dropdown"><i
                  data-feather="cast"></i><span>News</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="latestnews.php">Latest News</a></li>
                <!--li><a class="nav-link" href="upcomingevent.php">Upcoming Events</a></li-->
              </ul>
            </li>
            <li class="dropdown">
              <a href="movies.php" class="menu-toggle nav-link has-dropdown"><i data-feather="film"></i><span>Movies</span></a>
              <ul class="dropdown-menu">

                <li><a class="nav-link" href="upcomingmovies.php">Upcoming Movies</a></li>
                <li><a class="nav-link" href="movieteaser.php">Teaser</a></li>
                <li><a class="nav-link" href="documentry.php">Documentry</a></li>
                <li><a class="nav-link" href="sortfilm.php">Sort Films</a></li>
              </ul>
            </li>
            
            <li class="dropdown">
              <a href="photoall.php" class=" nav-link "><i data-feather="image"></i><span>Photo</span></a>
            </li>
            <li class="dropdown">
              <a href="song.php" class="menu-toggle nav-link has-dropdown"><i data-feather="music"></i><span>Songs</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="songall.php">Latest Song</a></li>
                <li><a class="nav-link" href="playlist.php">Playlists</a></li>
                <li><a class="nav-link" href="songteaser.php">Teaser</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="contact.php" class="nav-link"><i data-feather="mail"></i><span>Contact</span></a>
             
            </li>
            <!--li class="menu-header">NEWS</li>
              <li class="dropdown">
                <a href="latestnews.php" class=" nav-link "><i data-feather="cast"></i><span>Latest News</span></a>
              </li>

              <li class="dropdown">
                <a class="nav-link" href="upcomingevent.php"><i data-feather="cast"></i><span>UpComing Events</span></a>            
              </li>
            
            
            <li class="menu-header">Movies</li>
              <li class="dropdown">
                <a class="nav-link" href="upcomingmovies.php"><i data-feather="film"></i><span>UpComing Movies</span></a>            
              </li>        
              <li class="dropdown">
                <a class="nav-link" href="movieteaser.php"><i data-feather="film"></i><span>Teaser</span></a>            
              </li>
              <li class="dropdown">
                <a class="nav-link" href="documentry.php"><i data-feather="film"></i><span>Documentry</span></a>            
              </li>
              <li class="dropdown">
                <a class="nav-link" href="sortfilm.php"><i data-feather="film"></i><span>Sort Films</span></a>            
              </li>
            <li class="menu-header">Song</li>
              <li class="dropdown">
                <a class="nav-link" href="latestsong.php"><i data-feather="music"></i><span>Lastest Song</span></a>            
              </li>
              <li class="dropdown">
                <a class="nav-link" href="playlist.php"><i data-feather="music"></i><span>Playlist</span></a>            
              </li>
              <li class="dropdown">
                <a class="nav-link" href="songteaser.php"><i data-feather="music"></i><span>Song Teaser</span></a>            
              </li-->
            <li class="menu-header">
              <div style="height: 100px; padding-left: 10px;">
                <p>
                  &copy; Bollywoodkilla 2020 
                </p>
                Developed by <a style="all:unset;" href="http://www.techdeck.co.in"><strong style="color:#a30b1a;">Techdeck</strong></a>
              </div>
            </li>
            
          </ul>
        </aside>
      </div>