<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Book List</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
  }
  .container {
    max-width: 800px;
    margin: 0 auto;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
  }
  h3 {
    text-align: center;
    color: #333;
    margin-top: 0;
  }
  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }
  th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }
  th {
    background-color: #f2f2f2;
    font-weight: bold;
  }
  tr:nth-child(even) {
    background-color: #f9f9f9;
  }
  tr:hover {
    background-color: #f2f2f2;
  }
  a {
    color: #007bff;
    text-decoration: none;
  }
  a:hover {
    text-decoration: underline;
  }
</style>
</head>
<body>

<div class="container">
  <h3>รายชื่อหนังสือ</h3>
  <table>
    <tr>
      <th>ลำดับ</th>
      <th>รหัสหนังสือ</th>
      <th>ชื่อหนังสือ</th>
      <th>ประเภทหนังสือ</th>
      <th>สถานะหนังสือ</th>
      <th>สำนักพิมพ์</th>
      <th>ราคาซื้อ</th>
      <th>ราคาเช่า</th>
      <th>จำนวนวันที่เช่า</th>
      <th>รูปหนังสือ</th>
      <th>วันที่ยืม</th>
    </tr>
    <?php
      $hostname = "localhost";
      $username = "root";
      $password = "";
      $dbName = "bookStore";
      $conn = mysqli_connect($hostname, $username, $password);
      if (!$conn)
        die("ไม่สามารถติดต่อกับ MySQL ได้");
      mysqli_select_db($conn, $dbName) or die("ไม่สามารถเลือกฐานข้อมูล bookStore ได้");
      mysqli_query($conn,"set character_set_connection=utf8mb4");
      mysqli_query($conn,"set character_set_client=utf8mb4");
      mysqli_query($conn,"set character_set_results=utf8mb4");
      $sql = "SELECT book.*, typebook.TypeName, statusbook.StatusName FROM book 
              INNER JOIN typebook ON book.TypeID = typebook.typeID
              INNER JOIN statusbook ON book.StatusId = statusbook.statusId
              ORDER BY book.BookId";
      $result = mysqli_query ($conn, $sql);
      $row = 1;
      while ($rs = mysqli_fetch_array($result)) {
        if ($rs['DayAmount'] >= 5) {
          echo '<tr>';
          echo '<td>'.$row.'</td>';
          echo '<td><a href="BookEdit.php?BookID='.$rs['BookID'].'">'.$rs['BookID'].'</a></td>';
          echo '<td>'.$rs['BookName'].'</td>';
          echo '<td>'.$rs['TypeName'].'</td>';
          echo '<td>'.$rs['StatusName'].'</td>';
          echo '<td>'.$rs['Publish'].'</td>';
          echo '<td>'.$rs['UnitPrice'].'</td>';
          echo '<td>'.$rs['UnitRent'].'</td>';
          echo '<td>'.$rs['DayAmount'].'</td>';
          echo '<td>'.$rs['Picture'].'</td>';
          echo '<td>'.$rs['BookDate'].'</td>';
          echo '</tr>';
          $row++;
        }
      }
      mysqli_close($conn);
    ?>
  </table>
  <br>
  <a href="Bookmenu.php">Back to menu</a>
</div>

</body>
</html>
