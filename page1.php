<!DOCTYPE html>
<html>
<head>
<?php
include("db.php");
?>
</head>

<body>

    <?php
include("header.php");
?>
 <form action="index2.php" method="post">
     
        <input type="button" name="category"/>
 <?php
if(isset($_POST["category"])){  
  
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
  echo "<h5><br><br>", $count , " Results found.</h5>";
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