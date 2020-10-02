<?php include("upper.php");?>
<?php include("header.php");?>

<?php
 $c_id=$_GET['c_id']; 
 $stmt=$conn->query("Select * from category where id=$c_id");
 $data=$stmt->fetch(PDO::FETCH_NUM);
?>
<div class="main-content" style="min-height: 659px;">
        <section class="section">
          <ul class="breadcrumb breadcrumb-style ">
            <li class="breadcrumb-item">
              <h4 class="page-title m-b-0">Photo</h4>
            </li>
            <li class="breadcrumb-item">
              <a href="index.php">
                <i class="fas fa-home"></i></a>
            </li>

            <li class="breadcrumb-item">Celebrity Pics</li>
           
          </ul>
          <div class="section-body">
            <div class="row clearfix">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
                <div class="card">
                  <div class="card-header">
                    <h4><?php echo $data[1];?></h4>
                  </div>
                  <div class="card-body">
                    <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                      
                      <?php


          $tbl_name="gallery";    //your table name
          $adjacents = 1;
          
          $query = $conn->query("SELECT COUNT(*) FROM $tbl_name");
          
          $total_pages = $query->fetch(PDO::FETCH_BOTH);
          $total_pages = $total_pages[0];
          

          $targetpage = "subgallery.php?c_id=$c_id&";   //your file name  (the name of this file)
          $limit = 12;                //how many items to show per page
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

          $sql = "SELECT * FROM $tbl_name where c_id = $c_id LIMIT $start, $limit ";
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
              $pagination.= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage&page=$prev\">Previous</a></li>";
            else 
              $pagination.= "<li class=\"page-item disable\"><a class=\"page-link\">Previous</a></li>"; 
            
            //pages 
            if ($lastpage < 7 + ($adjacents * 2)) //not enough pages to bother breaking it up
            { 
              for ($counter = 1; $counter <= $lastpage; $counter++)
              {
                if ($counter == $page)
                  $pagination.= "<li class=\"page-item active\"><a class=\"page-link\" href=\"$targetpage&page=$counter\">$counter</a></li>";
                else
                  $pagination.= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage&page=$counter\">$counter</a></li>";          
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
                    $pagination.= "<li class=\"page-item active\"><a class=\"page-link\" href=\"$targetpage&page=$counter\">$counter</a></li>";
                  else
                    $pagination.= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage&page=$counter\">$counter</a></li>";          
                }
                $pagination.= "...";
                $pagination.= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage&page=$lpm1\">$lpm1</a></li>";
                $pagination.= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage&page=$lastpage\">$lastpage</a></li>";    
              }
              //in middle; hide some front and some back
              elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
              {
                $pagination.= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage&page=1\">1</a></li>";
                //$pagination.= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage&page=2\">2</a></li>";
                $pagination.= "...";
                for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
                {
                  if ($counter == $page)
                    $pagination.= "<li class=\"page-item active\"><a class=\"page-link\" href=\"$targetpage&page=$counter\">$counter</a></li>";
                  else
                    $pagination.= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage&page=$counter\">$counter</a></li>";          
                }
                $pagination.= "...";
                $pagination.= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage&page=$lpm1\">$lpm1</a></li>";
                $pagination.= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage&page=$lastpage\">$lastpage</a></li>";    
              }
              //close to end; only hide early pages
              else
              {
                $pagination.= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage&page=1\">1</a></li>";
                //$pagination.= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage&page=2\">2</a></li>";
                $pagination.= "...";
                for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
                {
                  if ($counter == $page)
                    $pagination.= "<li class=\"page-item active\"><a class=\"page-link\" href=\"$targetpage&page=$counter\">$counter</a></li>";
                  else
                    $pagination.= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage&page=$counter\">$counter</a></li>";          
                }
              }
            }
            
            //next button
            if ($page < $counter - 1) 
              $pagination.= "<li class=\"page-item\"><a class=\"page-link\" href=\"$targetpage&page=$next\">Next</a></li>";
            else
              $pagination.= "<li class=\"page-item\"><a class=\"page-link\">Next</a></li>";
            $pagination.= "</ul>";    
          }

          if($e = $result->fetch(PDO::FETCH_BOTH))
          {
      
            do
            { 
            ?>  
      
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <a href="<?php echo $e[2];?>" data-sub-html="Demo Description">
                          <img class="img-responsive thumbnail" src="<?php echo $e[2];?>" alt="">
                        </a>
                      </div>
             
               
             <?php
             }while($e = $result->fetch(PDO::FETCH_BOTH));
            }
            else
            {
              echo"<p align='justify'>There is no video Uploaded!!!</p>";
            }
             ?>
                      

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body">
                    <nav aria-label="...">
                      <?=$pagination?>
                    </nav>
                  </div>
        </section>
        

<?php include("footer.php");?>