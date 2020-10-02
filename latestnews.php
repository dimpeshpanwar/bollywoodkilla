<?php include("upper.php");?>
<?php include("header.php");?>



<div class="main-content" style="min-height: 659px;">
        <section class="section">
          <ul class="breadcrumb breadcrumb-style ">
            <li class="breadcrumb-item">
              <h4 class="page-title m-b-0">NEWS</h4>
            </li>
            <li class="breadcrumb-item">
              <a href="index.php">
                <i class="fas fa-home"></i></a>
            </li>
            
            <li class="breadcrumb-item">Latest News</li>
          </ul>

          <?php $stmt=$conn->query("SELECT * FROM `news` ORDER BY `news`.`edate` DESC");
               
               $row=$stmt->fetch(PDO::FETCH_NUM);
                
          ?>
          <div class="section-body">
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
            <ul class="breadcrumb breadcrumb-style ">
            <li class="breadcrumb-item">
              <h4 class="page-title m-b-0">NEWS</h4>
            </li>
            <li class="breadcrumb-item">
              <a href="index.php">
                <i class="fas fa-home"></i></a>
            </li>
            
            <li class="breadcrumb-item">Tranding News</li>
          </ul>
          <div class="section-body">
            <div class="row">
              <?php


          $tbl_name="news";   //your table name
          $adjacents = 1;
          
          $query = $conn->query("SELECT COUNT(*) FROM $tbl_name");
          
          $total_pages = $query->fetch(PDO::FETCH_BOTH);
          $total_pages = $total_pages[0];
          

          $targetpage = "latestnews.php";   //your file name  (the name of this file)
          $limit = 8;                 //how many items to show per page
          if(isset($_GET['page']))
          {             //how many items to show per page
            $page = $_GET['page'];
            $start = ($page - 1) * $limit;      //first item to display on this page
          }
          else
          {
            $page=0;
            $start = 0;               //if no page var is given, set start to 0
          }

          $sql = "SELECT * FROM $tbl_name order by edate desc LIMIT $start, $limit ";
          $result = $conn->query($sql);

          if ($page == 0) $page = 1;          //if no page var is given, default to 1.
          $prev = $page - 1;              //previous page is page - 1
          $next = $page + 1;              //next page is page + 1
          $lastpage = ceil($total_pages/$limit);    //lastpage is = total pages / items per page, rounded up.
          $lpm1 = $lastpage - 1;            //last page minus 1
          
          $pagination = "";
          if($lastpage > 1)
          { 
            $pagination .= "<ul class=\"pagination\">";
            //previous button
            if ($page > 1) 
              $pagination.= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage?page=$prev\">Previous</a></li>";
            else 
              $pagination.= "<li class=\"page-item disable\"><a class=\"page-link\">Previous</a></li>"; 
            
            //pages 
            if ($lastpage < 7 + ($adjacents * 2)) //not enough pages to bother breaking it up
            { 
              for ($counter = 1; $counter <= $lastpage; $counter++)
              {
                if ($counter == $page)
                  $pagination.= "<li class=\"page-item active\"><a class=\"page-link\" href=\"$targetpage?page=$counter\">$counter</a></li>";
                else
                  $pagination.= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage?page=$counter\">$counter</a></li>";          
              }
            }
            elseif($lastpage > 5 + ($adjacents * 2))  //enough pages to hide some
            {
              //close to beginning; only hide later pages
              if($page < 1 + ($adjacents * 2))    
              {
                for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
                {
                  if ($counter == $page)
                    $pagination.= "<li class=\"page-item active\"><a class=\"page-link\" href=\"$targetpage?page=$counter\">$counter</a></li>";
                  else
                    $pagination.= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage?page=$counter\">$counter</a></li>";          
                }
                $pagination.= "...";
                $pagination.= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage?page=$lpm1\">$lpm1</a></li>";
                $pagination.= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage?page=$lastpage\">$lastpage</a></li>";    
              }
              //in middle; hide some front and some back
              elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
              {
                $pagination.= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage?page=1\">1</a></li>";
                //$pagination.= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage?page=2\">2</a></li>";
                $pagination.= "...";
                for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
                {
                  if ($counter == $page)
                    $pagination.= "<li class=\"page-item active\"><a class=\"page-link\" href=\"$targetpage?page=$counter\">$counter</a></li>";
                  else
                    $pagination.= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage?page=$counter\">$counter</a></li>";          
                }
                $pagination.= "...";
                $pagination.= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage?page=$lpm1\">$lpm1</a></li>";
                $pagination.= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage?page=$lastpage\">$lastpage</a></li>";    
              }
              //close to end; only hide early pages
              else
              {
                $pagination.= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage?page=1\">1</a></li>";
                //$pagination.= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage?page=2\">2</a></li>";
                $pagination.= "...";
                for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
                {
                  if ($counter == $page)
                    $pagination.= "<li class=\"page-item active\"><a class=\"page-link\" href=\"$targetpage?page=$counter\">$counter</a></li>";
                  else
                    $pagination.= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage?page=$counter\">$counter</a></li>";          
                }
              }
            }
            
            //next button
            if ($page < $counter - 1) 
              $pagination.= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage?page=$next\">Next</a></li>";
            else
              $pagination.= "<li class=\"page-item\"><a class=\"page-link\">Next</a></li>";
            $pagination.= "</ul>";    
          }

          if($e = $result->fetch(PDO::FETCH_BOTH))
          {
      
            do
            { 
            ?>  
      <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article">
                  <div class="article-header">
                    <div class="article-image" data-background="<?php echo $e[3];?>" style="background-image: url(&quot;<?php echo $e[3];?>&quot;);">
                    </div>
                    <div class="article-title">
                      <h2><a href="blog.html#"><?php echo $e[1];?></a></h2>
                    </div>
                  </div>
                  <div class="article-details">
                    <p><?php echo $e[2];?></p>
                    <div class="article-cta">
                      <a href="newsdetails.php?id=<?php echo $e[0];?>" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
                </article>
              </div>
               
             <?php
             }while($e = $result->fetch(PDO::FETCH_BOTH));
            }
            else
            {
              echo"<p align='justify'>There is no event Uploaded!!!</p>";
            }
             ?>

            </div>
            
    </div>
</div>
</section>
<div class="card-body">
                    <nav aria-label="...">
                      <?=$pagination?>
                    </nav>
                  </div>

<?php include 'footer.php';?>