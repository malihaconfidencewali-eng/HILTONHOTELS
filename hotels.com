<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Available Hotels</title>
  <style>
    body {font-family:Arial,sans-serif; background:#f5f5f5; margin:0;}
    header {background:#003580; color:#fff; padding:20px; text-align:center; font-size:24px;}
    .hotel-list {display:grid; grid-template-columns:repeat(auto-fit, minmax(300px,1fr)); gap:20px; padding:20px;}
    .hotel-card {background:#fff; border-radius:10px; overflow:hidden; box-shadow:0 4px 10px rgba(0,0,0,.1);}
    .hotel-card img {width:100%; height:200px; object-fit:cover;}
    .hotel-card .content {padding:15px;}
    .hotel-card h3 {margin:0; color:#003580;}
    .hotel-card p {color:#555;}
    .hotel-card button {padding:10px; background:#003580; color:#fff; border:none; border-radius:5px; cursor:pointer;}
  </style>
</head>
<body>
<header>Available Hotels</header>
<div class="hotel-list">
<?php
$destination = $_GET['destination'];
$sql = "SELECT * FROM hotels WHERE location LIKE '%$destination%'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
  echo "<div class='hotel-card'>
          <img src='".$row['image']."' alt='".$row['name']."'>
          <div class='content'>
            <h3>".$row['name']."</h3>
            <p>".$row['location']."</p>
            <p>$".$row['price']."/night</p>
            <button onclick=\"window.location.href='book.php?id=".$row['id']."'\">
              Book Now
            </button>
          </div>
        </div>";
}
?>
</div>
</body>
</html>
