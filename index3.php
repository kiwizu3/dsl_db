<!DOCTYPE HTML>
<html>
<head>
<?php
  header('Content-Type: text/html; charset=utf-8');
?>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    
        
        </head>
        <body>

        <?php
        include("header.php");
        ?>
<h1><img src="header.jpg" width="100%"/></h1>
<br>
<br>
<section class="search-form">
        <form action="index3.php" method="post">
        <p class="inp-wrap search-wrap">
        <label for="search-field" class="search-label grid-25">Find</label>
        <input type="search" name="search" id="search-field" class="grid-75" required placeholder="Search Here" /></p>
            <!-- <input name="search" type="text" size="30" required placeholder="Search here"> -->

            <p class="inp-wrap cat-wrap">
        <label for="categories" class="grid-20">of</label>
        <select name="cate" id="categories" class="grid-80">
                  <option name="cate" value="">Category</option>
                  <option name="cate" value="Airlines">Airlines</option>
                  <option name="cate" value="Apartments">Apartments</option>
                  <option name="cate" value="Appliances and Electronics">Appliances and Electronics</option>
                  <option name="cate" value="Bakeries">Bakeries</option>
                  <option name="cate" value="Banks">Banks</option>
                  <option name="cate" value="Banks - Head Office">Banks - Head Office</option>
                  <option name="cate" value="Bars and Pubs">Bars and Pubs</option>
                  <option name="cate" value="Bookstores">Bookstores</option>
                  <option name="cate" value="Cab Hire">Cab Hire</option>
                  <option name="cate" value="Car Hire">Car Hire</option>
                  <option name="cate" value="Casinos">Casinos</option>
                  <option name="cate" value="Clothes and Accessories">Clothes and Accessories</option>
                  <option name="cate" value="Clubs">Clubs</option>
                  <option name="cate" value="Clubs|MUST-DO IN COLOMBO">Clubs|MUST-DO IN COLOMBO</option>
                  <option name="cate" value="Computers">Computers</option>
                  <option name="cate" value="Cosmetics and Skincare">Cosmetics and Skincare</option>
                  <option name="cate" value="Décor">Décor</option>
                  <option name="cate" value="Diplomatic Missions">Diplomatic Missions</option>
                  <option name="cate" value="Diplomatic Missions - Honorary Consuls">Diplomatic Missions - Honorary Consuls</option>
                  <option name="cate" value="Drapery and Upholstery">Drapery and Upholstery</option>
                  <option name="cate" value="Dry Cleaners">Dry Cleaners</option>
                  <option name="cate" value="Florists">Florists</option>
                  <option name="cate" value="Furniture">Furniture</option>
                  <option name="cate" value="Galleries">Galleries</option>
                  <option name="cate" value="Galleries|MUST-SEE IN COLOMBO">Galleries|MUST-SEE IN COLOMBO</option>
                  <option name="cate" value="Gifts">Gifts</option>
                  <option name="cate" value="Gyms">Gyms</option>
                  <option name="cate" value="Hairdressers">Hairdressers</option>
                  <option name="cate" value="Handicrafts">Handicrafts</option>
                  <option name="cate" value="Hospitals">Hospitals</option>
                  <option name="cate" value="Hospitals - Private Hospitals">Hospitals - Private Hospitals</option>
                  <option name="cate" value="Hospitals - Private Hospitals and Medical Instituts">Hospitals - Private Hospitals and Medical Instituts</option>
                  <option name="cate" value="Hospitals - State Hospitals">Hospitals - State Hospitals</option>
                  <option name="cate" value="Hotel Groups (For Hotels and Tours in Sri Lanka)">Hotel Groups (For Hotels and Tours in Sri Lanka)</option>
                  <option name="cate" value="Hotels">Hotels</option>
                  <option name="cate" value="Ice Cream Parlours">Ice Cream Parlours</option>
                  <option name="cate" value="Jewellery">Jewellery</option>
                  <option name="cate" value="Jewellery|MUST-DO IN COLOMBO">Jewellery|MUST-DO IN COLOMBO</option>
                  <option name="cate" value="Jewellery - Watches">Jewellery - Watches</option>
                  <option name="cate" value="Juice Bars">Juice Bars</option>
                  <option name="cate" value="Kids Corner - Clothing">Kids Corner - Clothing</option>
                  <option name="cate" value="Kids Corner - Play Areas">Kids Corner - Play Areas</option>
                  <option name="cate" value="Kids Corner - Toys">Kids Corner - Toys</option>
                  <option name="cate" value="Libraries">Libraries</option>
                  <option name="cate" value="Liquor Stores">Liquor Stores</option>
                  <option name="cate" value="Merchant Banks">Merchant Banks</option>
                  <option name="cate" value="Museums">Museums</option>
                  <option name="cate" value="Museums|MUST-SEE IN COLOMBO">Museums|MUST-SEE IN COLOMBO</option>
                  <option name="cate" value="Nail Spas">Nail Spas</option>
                  <option name="cate" value="Night Clubs">Night Clubs</option>
                  <option name="cate" value="Opticians">Opticians</option>
                  <option name="cate" value="Pharmacies">Pharmacies</option>
                  <option name="cate" value="Restaurants">Restaurants</option>
                  <option name="cate" value="Restaurants - Arabian">Restaurants - Arabian</option>
                  <option name="cate" value="Restaurants - Asian">Restaurants - Asian</option>
                  <option name="cate" value="Restaurants - Cafés and Coffee House">Restaurants - Cafés and Coffee House</option>
                  <option name="cate" value="Restaurants - Chinese">Restaurants - Chinese</option>
                  <option name="cate" value="Restaurants - Coffee Shops">Restaurants - Coffee Shops</option>
                  <option name="cate" value="Restaurants - Confectioners">Restaurants - Confectioners</option>
                  <option name="cate" value="Restaurants - Desserts">Restaurants - Desserts</option>
                  <option name="cate" value="Restaurants - Fast Food">Restaurants - Fast Food</option>
                  <option name="cate" value="Restaurants - Fine Dining">Restaurants - Fine Dining</option>
                  <option name="cate" value="Restaurants - Food Courts">Restaurants - Food Courts</option>
                  <option name="cate" value="Restaurants - French">Restaurants - French</option>
                  <option name="cate" value="Restaurants - Fusion">Restaurants - Fusion</option>
                  <option name="cate" value="Restaurants - Fusion Food">Restaurants - Fusion Food</option>
                  <option name="cate" value="Restaurants - German">Restaurants - German</option>
                  <option name="cate" value="Restaurants - Health Food">Restaurants - Health Food</option>
                  <option name="cate" value="Restaurants - Indian">Restaurants - Indian</option>
                  <option name="cate" value="Restaurants - Indonesian">Restaurants - Indonesian</option>
                  <option name="cate" value="Restaurants - Italian">Restaurants - Italian</option>
                  <option name="cate" value="Restaurants - Japanese">Restaurants - Japanese</option>
                  <option name="cate" value="Restaurants - Korean">Restaurants - Korean</option>
                  <option name="cate" value="Restaurants - Malaysian">Restaurants - Malaysian</option>
                  <option name="cate" value="Restaurants - Mediterranean">Restaurants - Mediterranean</option>
                  <option name="cate" value="Restaurants - Seafood">Restaurants - Seafood</option>
                  <option name="cate" value="Restaurants - Singaporean">Restaurants - Singaporean</option>
                  <option name="cate" value="Restaurants - Sri Lankan">Restaurants - Sri Lankan</option>
                  <option name="cate" value="Restaurants - Thai">Restaurants - Thai</option>
                  <option name="cate" value="Restaurants - Turkish">Restaurants - Turkish</option>
                  <option name="cate" value="Restaurants - Vegetarian">Restaurants - Vegetarian</option>
                  <option name="cate" value="Restaurants - Vietnamese">Restaurants - Vietnamese</option>
                  <option name="cate" value="Shopping Complex">Shopping Complex</option>
                  <option name="cate" value="Shopping Malls">Shopping Malls</option>
                  <option name="cate" value="Shopping Precincts">Shopping Precincts</option>
                  <option name="cate" value="Spas and Wellness">Spas and Wellness</option>
                  <option name="cate" value="Sports">Sports</option>
                  <option name="cate" value="Supermarkets">Supermarkets</option>
                  <option name="cate" value="Telcos">Telcos</option>
                  <option name="cate" value="Theatres">Theatres</option>
                  <option name="cate" value="MUST-SEE IN COLOMBO|Theatres">MUST-SEE IN COLOMBO|Theatres</option>
                  <option name="cate" value="Travel Agents">Travel Agents</option>
                  <option name="cate" value="Vehicles (Sole Agents)">Vehicles (Sole Agents)</option>
                  <option name="cate" value="MUST-SEE IN COLOMBO">MUST-SEE IN COLOMBO</option>
                  <option name="cate" value="Hotels|MUST-SEE IN COLOMBO">Hotels|MUST-SEE IN COLOMBO</option>
                  <option name="cate" value="MUST-DO IN COLOMBO|Spas and Wellness">MUST-DO IN COLOMBO|Spas and Wellness</option>
                  <option name="cate" value="MUST-DO IN COLOMBO">MUST-DO IN COLOMBO</option>
            </select>
</p>

            
  
            <!-- <input type="submit" name="submit" value="Search"> -->
            <p class="inp-wrap submit-wrap">
        <button type="submit" name="submit" value="Search" class="grid-100 btn">
          Search
        </button>
      </p>
            </form> 
           
            </section> 

           
            
      <?php
    
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dsl_db";
        
        // Create connection
        $connection = new mysqli($servername, $username, $password, $dbname);

        //Converting Dat to UTF-8
        mysqli_set_charset($connection,"utf8");
        // Check connection
        if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
        }

        $perpage = 25;
if(isset($_GET['page']) & !empty($_GET['page'])){
	$curpage = $_GET['page'];
}else{
	$curpage = 1;
}
$start = ($curpage * $perpage) - $perpage;
$PageSql = "SELECT * FROM `dsl_table`";
$pageres = mysqli_query($connection, $PageSql);
$totalres = mysqli_num_rows($pageres);
 
$endpage = ceil($totalres/$perpage);
$startpage = 1;
$nextpage = $curpage + 1;
$previouspage = $curpage - 1;
 
$ReadSql = "SELECT * FROM `dsl_table` LIMIT $start, $perpage";
$res = mysqli_query($connection, $ReadSql);

    
    if(isset($_POST["submit"])){  
  
    $search = mysqli_real_escape_string ($connection , $_POST['search'] );
    $category = mysqli_real_escape_string ($connection , $_POST['cate'] );
    // $category = mysqli_real_escape_string ($connection , $_POST['cate'] );
    // $location = $_POST['loc'];
    // $category = $_POST['cate'];
    if(empty($search)) {
        $search1 = "";
        }else{$search1 = "CONCAT(title, ' ', category,' ', location) LIKE '%".$search."%'";}
        
    if(empty($category)) {
        $category1 = "";
        }else{$category1 = " AND category LIKE '%".$category."%'";}
        

    // if(empty($category)) {
    //     $category1 = "";
    //     }else{$category1 = "AND  category LIKE '%".$category."%'";}     

    $search = preg_replace("#[^0-9a-z]i#","", $search);
    $query = mysqli_query($connection, "SELECT * FROM dsl_table WHERE ".$search1." ".$category1."ORDER BY title ASC") or die ("Nothing Found.");
    $count = mysqli_num_rows($query);
    //$query2=mysqli_query($connection, "SELECT * FROM dsl_table")or die("There's an error with us. Please wait while we fix it.");
    echo "<h3><br><br>", $count , " Results found.</p>";
    if($count == 0){
    //   $output = "There was no search results!";
  
    //   echo "<table border='0'>
    //   <tr>
    //   <th>Name</th>
    //   <th>Location</th>
    //   <th>Category</th>
    //   <th>Phone</th>
    //   <th>Address</th>
    //   </tr>";
   
    //   while($row = mysqli_fetch_array($query2))
    //   {
    //   echo "<tr>";
    //   echo "<td>" . $row['title'] . "</td>";
    //   echo "<td>" . $row['location'] . "</td>";
    //   echo "<td>" . $row['category'] . "</td>";
    //   echo "<td>" . $row['phone'] . "</td>";
    //   echo "<td>" . $row['address'] . "</td>";
    //   echo "</tr>";
    //   }
    //   echo "</table>";



    }else{
        
      echo "<table border='0'>
      <tr>
      <th><h5>Name</h5></th>
      <th><h5>Location</h5></th>
      <th><h5>Category</h5></th>
      <th><h5>Phone</h5></th>
      <th><h5>Address</h5></th>
      </tr>";
      
      while($row = mysqli_fetch_array($query))
      {
      echo "<tr>";
      echo "<td><h5>" . $row['title'] . "</h5></td>";
      echo "<td><h5>" . $row['location'] . "</h5></td>";
      echo "<td><h5>" . $row['category'] . "</h5></td>";
      echo "<td><h5>" . $row['phone'] . "</h5></td>";
      echo "<td><h5>" . $row['address'] . "</h5></td>";
      echo "</tr>";
      }
      echo "</table><br><br>";

     
  <nav aria-label="Page navigation">
  <ul class="pagination">
  
  <?php if($curpage != $startpage){ ?>
  
  <li class="page-item">
      <a class="page-link" href="?page=<?php echo $startpage ?>" tabindex="-1" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">First</span>
      </a>
    </li>
    <?php } ?>
    <?php if($curpage >= 2){ ?>
        <li class="page-item"><a class="page-link" href="?page=<?php echo $previouspage ?>"><?php echo $previouspage ?></a></li>
        <?php } ?>
    <li class="page-item active"><a class="page-link" href="?page=<?php echo $curpage ?>"><?php echo $curpage ?></a></li>
    <?php if($curpage != $endpage){ ?>
        <li class="page-item"><a class="page-link" href="?page=<?php echo $nextpage ?>"><?php echo $nextpage ?></a></li>
    <li class="page-item">
      <a class="page-link" href="?page=<?php echo $endpage ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Last</span>
      </a>
    </li>
    <?php } ?>
  </ul>
</nav>

      }
    }


    
      ?>
<?php
include("footer.php");
?>
</body>

</html>