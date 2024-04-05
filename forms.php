<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Styled Form</title>
<!-- Adding inline CSS for simplicity -->
<style>
  /* Styling the body */
  body {
    background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAz8rvacLih-TAb7OflTgfVnJzIVnl-ouZmrlTMfsmEQ&s'); /* Your background image */
    background-size: cover;
    font-family: Arial, sans-serif; /* Custom font */
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }

  /* Styling the form container */
  form {
   
    padding: 20px;
    border-radius: 30px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Drop shadow effect */
    text-align: center;
    height:300px;
    font-size: 20px; 
    
  }

  /* Styling the form elements */
  input[type="text"],
  input[type="password"],
  input[type="submit"] {
    width: 300px; /* Set the width of input fields */
    padding: 10px; /* Add padding to input fields */
    /* Add space between input fields */
    font-size: 20px; 
    border-radius: 5px; 
    border: 1px solid #ccc; 
  
    
  }

  input[type="submit"] {
    background-color: #990000; /* Blue color for submit button */
    color: #fff; /* White text color */
    border: none; /* Remove border */
    cursor: pointer; /* Change cursor to pointer on hover */
    font-size:25px;
    margin:30px;
  }

  input[type="submit"]:hover {
    background-color: red; /* Darker blue color on hover */
  }
</style>
</head>
<body>


<form action="insert.php" method="POST">
  First name:<br>
  <input type="text" name="name">
  <br><br>
  Password:<br>
  <input type="password" name="pass">
  <br><br>
  <input type="submit" name="subbtn" value="Submit">
</form>

</body>
</html>
