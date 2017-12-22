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
        <form action="index2.php" method="post">
        <p class="inp-wrap search-wrap">
        <label for="search-field" class="search-label grid-25">Find</label>
        <input type="search" name="search" id="search-field" class="grid-75" required placeholder="Search Here" /></p>
            <!-- <input name="search" type="text" size="30" required placeholder="Search here"> -->

            <p class="inp-wrap cat-wrap">
        <label for="categories" class="grid-20">in</label>
        <select name="loc" id="categories" class="grid-80">
                  <option name="loc" value="">Location</option>
                  <option name="loc" value="Colombo">Colombo</option>
<option name="loc" value="Jaffna">Jaffna</option>
<option name="loc" value="Nuwara Eliya">Nuwara Eliya</option>
<option name="loc" value="Kandy">Kandy</option>
<option name="loc" value="Matara">Matara</option>
<option name="loc" value="Galle">Galle</option>
<option name="loc" value="Negombo">Negombo</option>
<option name="loc" value="Kurunegala">Kurunegala</option>
<option name="loc" value="Anuradhapura">Anuradhapura</option>
<option name="loc" value="Ahangama">Ahangama</option>
<option name="loc" value="Ahungalla">Ahungalla</option>
<option name="loc" value="Aluthgama">Aluthgama</option>
<option name="loc" value="Ambalangoda">Ambalangoda</option>
<option name="loc" value="Ambalantota">Ambalantota</option>
<option name="loc" value="Ambewela">Ambewela</option>
<option name="loc" value="Arugam Bay">Arugam Bay</option>
<option name="loc" value="Athurugiriya">Athurugiriya</option>
<option name="loc" value="Avissawella">Avissawella</option>
<option name="loc" value="Balapitiya">Balapitiya</option>
<option name="loc" value="Bambarella">Bambarella</option>
<option name="loc" value="Bandarawela">Bandarawela</option>
<option name="loc" value="Batticaloa">Batticaloa</option>
<option name="loc" value="Beliatta">Beliatta</option>
<option name="loc" value="Bentota">Bentota</option>
<option name="loc" value="Beruwela">Beruwela</option>
<option name="loc" value="Bibile">Bibile</option>
<option name="loc" value="Biyagama">Biyagama</option>
<option name="loc" value="Bulathsinhala">Bulathsinhala</option>
<option name="loc" value="Buttala">Buttala</option>
<option name="loc" value="Chilaw">Chilaw</option>
<option name="loc" value="Dambulla">Dambulla</option>
<option name="loc" value="Dickoya">Dickoya</option>
<option name="loc" value="Dickwella">Dickwella</option>
<option name="loc" value="Diyatalawa">Diyatalawa</option>
<option name="loc" value="Dodanduwa">Dodanduwa</option>
<option name="loc" value="Ella">Ella</option>
<option name="loc" value="Embilipitiya">Embilipitiya</option>
<option name="loc" value="Galaha">Galaha</option>
<option name="loc" value="Gampaha">Gampaha</option>
<option name="loc" value="Gampola">Gampola</option>
<option name="loc" value="Ginigathena">Ginigathena</option>
<option name="loc" value="Habaraduwa/Koggala">Habaraduwa/Koggala</option>
<option name="loc" value="Habarana">Habarana</option>
<option name="loc" value="Hambantota">Hambantota</option>
<option name="loc" value="Hanwella">Hanwella</option>
<option name="loc" value="Haputale">Haputale</option>
<option name="loc" value="Hatton">Hatton</option>
<option name="loc" value="Hikkaduwa">Hikkaduwa</option>
<option name="loc" value="Hingurakgoda">Hingurakgoda</option>
<option name="loc" value="Homagama">Homagama</option>
<option name="loc" value="Horana">Horana</option>
<option name="loc" value="Illukkumbura">Illukkumbura</option>
<option name="loc" value="Induruwa">Induruwa</option>
<option name="loc" value="Kaduwela">Kaduwela</option>
<option name="loc" value="Kalatuwawa">Kalatuwawa</option>
<option name="loc" value="Kalawana">Kalawana</option>
<option name="loc" value="Kaleliya">Kaleliya</option>
<option name="loc" value="Kalmunai">Kalmunai</option>
<option name="loc" value="Kalpitiya">Kalpitiya</option>
<option name="loc" value="Kalutara">Kalutara</option>
<option name="loc" value="Kantale">Kantale</option>
<option name="loc" value="Kataragama">Kataragama</option>
<option name="loc" value="Katunayake">Katunayake</option>
<option name="loc" value="Kegalle">Kegalle</option>
<option name="loc" value="Kiribathgoda">Kiribathgoda</option>
<option name="loc" value="Kiriella">Kiriella</option>
<option name="loc" value="Kirinda">Kirinda</option>
<option name="loc" value="Kitulgala">Kitulgala</option>
<option name="loc" value="Kosgoda">Kosgoda</option>
<option name="loc" value="Koslanda">Koslanda</option>
<option name="loc" value="Kotmale">Kotmale</option>
<option name="loc" value="Lindula">Lindula</option>
<option name="loc" value="Maho">Maho</option>
<option name="loc" value="Mannar">Mannar</option>
<option name="loc" value="Marawila">Marawila</option>
<option name="loc" value="Maskeliya">Maskeliya</option>
<option name="loc" value="Matugama">Matugama</option>
<option name="loc" value="Melsiripura">Melsiripura</option>
<option name="loc" value="Minneriya">Minneriya</option>
<option name="loc" value="Mirissa">Mirissa</option>
<option name="loc" value="Moratuwa">Moratuwa</option>
<option name="loc" value="Nattandiya">Nattandiya</option>
<option name="loc" value="Nawalapitiya">Nawalapitiya</option>
<option name="loc" value="Ohiya">Ohiya</option>
<option name="loc" value="Okkampitiya">Okkampitiya</option>
<option name="loc" value="Padukka">Padukka</option>
<option name="loc" value="Panadura">Panadura</option>
<option name="loc" value="Pasikudah">Pasikudah</option>
<option name="loc" value="Piliyandala">Piliyandala</option>
<option name="loc" value="Polgahawela">Polgahawela</option>
<option name="loc" value="Polgasowita">Polgasowita</option>
<option name="loc" value="Polonnaruwa">Polonnaruwa</option>
<option name="loc" value="Pottuvil">Pottuvil</option>
<option name="loc" value="Puttalam">Puttalam</option>
<option name="loc" value="Ramboda">Ramboda</option>
<option name="loc" value="Ratmalana">Ratmalana</option>
<option name="loc" value="Ratnapura">Ratnapura</option>
<option name="loc" value="Ruwanwella">Ruwanwella</option>
<option name="loc" value="Seeduwa">Seeduwa</option>
<option name="loc" value="Sigiriya">Sigiriya</option>
<option name="loc" value="Talpe">Talpe</option>
<option name="loc" value="Tangalle">Tangalle</option>
<option name="loc" value="Teldeniya">Teldeniya</option>
<option name="loc" value="Thanamalwila">Thanamalwila</option>
<option name="loc" value="Tissamaharama">Tissamaharama</option>
<option name="loc" value="Trincomalee">Trincomalee</option>
<option name="loc" value="Udawalawe">Udawalawe</option>
<option name="loc" value="Unawatuna">Unawatuna</option>
<option name="loc" value="Uswetakeiyawa">Uswetakeiyawa</option>
<option name="loc" value="Wadduwa">Wadduwa</option>
<option name="loc" value="Waga">Waga</option>
<option name="loc" value="Waikkal">Waikkal</option>
<option name="loc" value="Wasgamuwa">Wasgamuwa</option>
<option name="loc" value="Waskaduwa">Waskaduwa</option>
<option name="loc" value="Watawala">Watawala</option>
<option name="loc" value="Wathuregama">Wathuregama</option>
<option name="loc" value="Wattala">Wattala</option>
<option name="loc" value="Wattala">Wathuregama</option>
<option name="loc" value="Weerawila">Weerawila</option>
<option name="loc" value="Weligama">Weligama</option>
<option name="loc" value="Weliweriya">Weliweriya</option>
<option name="loc" value="Wellawaya">Wellawaya</option>
<option name="loc" value="Wilpattu">Wilpattu</option>
<option name="loc" value="Yala">Yala</option>
            </select>
</p>

            <!-- <select name="cate">
                  <option name="cate" value="">Category</option>
                  <option name="cate" value="Hotels">Hotels</option>
                  <option name="cate" value="Restaurants">Restaurants</option>
                  <option name="cate" value="Banks">Banks</option>
                  <option name="cate" value="Banks">Banks</option>
                  <option name="cate" value="Clothes and Accessories">Clothes and Accessories</option>
                  <option name="cate" value="Appliances and Electronics">Appliances and Electronics</option>
                  <option name="cate" value="Shopping Malls">Shopping Malls</option>
            </select> -->
  
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
    
    if(isset($_POST["submit"])){  
  
    $search = mysqli_real_escape_string ($connection , $_POST['search'] );
    $location = mysqli_real_escape_string ($connection , $_POST['loc'] );
    // $category = mysqli_real_escape_string ($connection , $_POST['cate'] );
    // $location = $_POST['loc'];
    // $category = $_POST['cate'];
    if(empty($search)) {
        $search1 = "";
        }else{$search1 = "CONCAT(title, ' ', category,' ', location) LIKE '%".$search."%'";}
        
    if(empty($location)) {
        $location1 = "";
        }else{$location1 = " AND location LIKE '%".$location."%'";}
        

    // if(empty($category)) {
    //     $category1 = "";
    //     }else{$category1 = "AND  category LIKE '%".$category."%'";}     

    $search = preg_replace("#[^0-9a-z]i#","", $search);
    $query = mysqli_query($connection, "SELECT * FROM dsl_table WHERE ".$search1." ".$location1."ORDER BY title ASC") or die ("Nothing Found.");
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


      }
    }
      ?>
<?php
include("footer.php");
?>
</body>

</html>