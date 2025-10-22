<!DOCTYPE html>
<html>
<head>
<title>Booking Confirmed</title>
<style>
body {
  font-family: Arial, sans-serif;
  background: #f5f5f5;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  margin: 0;
}
.message {
  background: #fff;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0,0,0,.1);
  text-align: center;
  width: 400px;
}
.message h2 {
  color: #003580;
  margin-bottom: 15px;
}
.message button {
  padding: 10px 20px;
  background: #003580;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}
</style>
</head>
<body>
<div class="message">
  <h2>Your Booking is Confirmed ✅</h2>
  <p>We’ve sent a confirmation email to your address.</p>
  <button onclick="window.location.href='index.php'">Back to Home</button>
</div>
</body>
</html>
