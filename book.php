<?php include 'db.php'; 
$id = $_GET['id'];
$hotel = $conn->query("SELECT * FROM hotels WHERE id=$id")->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
<title>Book Room</title>
<style>
body {font-family:Arial,sans-serif; background:#f5f5f5;}
.container {background:#fff; width:400px; margin:50px auto; padding:20px; border-radius:10px; box-shadow:0 4px 10px rgba(0,0,0,.1);}
h2 {text-align:center; color:#003580;}
input,button {width:100%; padding:10px; margin:10px 0; border:1px solid #ccc; border-radius:5px;}
button {background:#003580; color:#fff; border:none; cursor:pointer;}
</style>
</head>
<body>
<div class="container">
<h2>Book <?php echo $hotel['name']; ?></h2>
<form method="post">
<input type="text" name="name" placeholder="Your Name" required>
<input type="email" name="email" placeholder="Your Email" required>
<input type="date" name="checkin" required>
<input type="date" name="checkout" required>
<button type="submit" name="book">Confirm Booking</button>
</form>
</div>
<?php
if(isset($_POST['book'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $ci=$_POST['checkin'];
  $co=$_POST['checkout'];
  $conn->query("INSERT INTO bookings (hotel_id, name, email, checkin, checkout) VALUES ($id,'$name','$email','$ci','$co')");
  echo "<script>window.location.href='confirm.php';</script>";
}
?>
</body>
</html>
