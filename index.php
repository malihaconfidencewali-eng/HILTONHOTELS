<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Hilton Hotels Clone</title>
  <style>
    body {font-family: Arial, sans-serif; margin:0; background:#f5f5f5;}
    header {background:#003580; color:#fff; padding:20px; text-align:center; font-size:28px;}
    .search-box {background:#fff; padding:20px; margin:20px auto; width:80%; border-radius:10px; box-shadow:0 4px 10px rgba(0,0,0,.1);}
    .search-box input {padding:10px; margin:10px; width:25%; border:1px solid #ccc; border-radius:5px;}
    .search-box button {padding:12px 20px; background:#003580; color:#fff; border:none; border-radius:5px; cursor:pointer;}
    .featured {display:grid; grid-template-columns:repeat(auto-fit, minmax(300px,1fr)); gap:20px; padding:20px;}
    .hotel-card {background:#fff; border-radius:10px; overflow:hidden; box-shadow:0 4px 10px rgba(0,0,0,.1);}
    .hotel-card img {width:100%; height:200px; object-fit:cover;}
    .hotel-card .content {padding:15px;}
    .hotel-card h3 {margin:0; color:#003580;}
    .hotel-card p {color:#555;}
  </style>
</head>
<body>
<header>Hilton Hotels Clone</header>

<div class="search-box">
  <input type="text" id="destination" placeholder="Enter Destination">
  <input type="date" id="checkin">
  <input type="date" id="checkout">
  <button onclick="searchHotels()">Search Hotels</button>
</div>

<h2 style="text-align:center;color:#003580;">Featured Hotels</h2>
<div class="featured">
  <?php
  $sql = "SELECT * FROM hotels LIMIT 4";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
    echo "<div class='hotel-card'>
            <img src='".$row['image']."' alt='".$row['name']."'>
            <div class='content'>
              <h3>".$row['name']."</h3>
              <p>".$row['location']."</p>
              <p>From $".$row['price']."/night</p>
            </div>
          </div>";
  }
  ?>
</div>

<script>
function searchHotels(){
  let dest = document.getElementById('destination').value;
  let ci = document.getElementById('checkin').value;
  let co = document.getElementById('checkout').value;
  window.location.href = 'hotels.php?destination='+dest+'&checkin='+ci+'&checkout='+co;
}
</script>

</body>
</html>
