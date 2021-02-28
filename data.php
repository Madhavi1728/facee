<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

.center {
  margin-left: auto;
  margin-right: auto;
}

.row {
  margin-left: auto;
  margin-right: auto;
}
  
.column {
  width: -100px;
  padding: 0px;
  margin-left: auto;
  margin-right: auto;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

table {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 1px;
  text-align: center;
  border-collapse: collapse;
  border-spacing: 0;
  width: auto;
}

th {
     background-color: yellow;
}

th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
  border-collapse: collapse;
  border-spacing: 0;
  padding: 0px;
  font-size: 20px;
  height:40px;
  width: 250px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}


h1 {
  text-align: center;
}
</style>
<meta http-equiv="refresh" content="1">
</head>
<body>

<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');
}
?>

<?php
    //Connect to database and create table
    $servername = "sql12.freesqldatabase.com";
    $username = "sql12395562";
    $password = "UqgHgH9z7R";
    $dbname = "sql12395562";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
        echo "<a href='install.php'>If first time running click here to install database</a>";
    }
?> 
          <h1 style="margin-left: -5px; margin-right: -5px;margin-top:-5px; text-align: center;padding:20px; font-size:30px; font-family:verdana;                           background-color: #FFC300" text-align= "center;">DATABASE <input type="button" value="MAIN Page" onclick="document.location='main.php'"  style="float: right; margin-right: 20px; margin-bottom: 0px; padding:                10px    18px; background-color: #FFC300;font-weight: bold" ></h1>
      
 <div class="row">
        <div class="column">
<?php 
    $sql = "SELECT id, fx,fy,fz, bax,bay,baz,tx,ty,tz,box,boy,boz,lx,ly,lz,rx,ry,rz,DATE_FORMAT(Date,'%d-%m-%y') FROM logs ORDER BY srno DESC";
    if ($result=mysqli_query($conn,$sql))
    {
        echo "<table>";
        echo "<tr>";
        echo "<th ROWSPAN=2>PATIENT ID</th>";
        echo "<th COLSPAN=3>FRONT</th>";
        echo "<th COLSPAN=3>BACK</th>";
        echo "<th COLSPAN=3>TOP</th>";
        echo "<th COLSPAN=3>BOTTOM</th>";
        echo "<th COLSPAN=3>LEFT</th>";
        echo "<th COLSPAN=3>RIGHT</th>";
        echo "<th ROWSPAN=2>DATE</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>X</th>";
        echo "<th>Y</th>";
        echo "<th>Z</th>";
        echo "<th>X</th>";
        echo "<th>Y</th>";
        echo "<th>Z</th>";
        echo "<th>X</th>";
        echo "<th>Y</th>";
        echo "<th>Z</th>";
        echo "<th>X</th>";
        echo "<th>Y</th>";
        echo "<th>Z</th>";
        echo "<th>X</th>";
        echo "<th>Y</th>";
        echo "<th>Z</th>";
        echo "<th>X</th>";
        echo "<th>Y</th>";
        echo "<th>Z</th>";
        echo "</tr>";


      while ($row=mysqli_fetch_row($result))
      {
        echo "<tr>";
        echo "<td>".$row[0]."</td>";
        echo "<td>".$row[1]."</td>";
        echo "<td>".$row[2]."</td>";
        echo "<td>".$row[3]."</td>";
        echo "<td>".$row[4]."</td>";
        echo "<td>".$row[5]."</td>";
        echo "<td>".$row[6]."</td>";
        echo "<td>".$row[7]."</td>";
        echo "<td>".$row[8]."</td>";
        echo "<td>".$row[9]."</td>";
        echo "<td>".$row[10]."</td>";
        echo "<td>".$row[11]."</td>";
        echo "<td>".$row[12]."</td>";
        echo "<td>".$row[13]."</td>";
        echo "<td>".$row[14]."</td>";
        echo "<td>".$row[15]."</td>";
        echo "<td>".$row[16]."</td>";
        echo "<td>".$row[17]."</td>";
        echo "<td>".$row[18]."</td>";
        echo "<td>".$row[19]."</td>";
        echo "</tr>";
        
      }
      echo "</table>";
    
      // Free result set
     mysqli_free_result($result);
    }

    mysqli_close($conn);
?>
   </div>
     </div>
   
</body>
</html>