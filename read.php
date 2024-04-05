<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Styled Table</title>
<!-- Adding inline CSS for simplicity -->
<style>
  body {
    background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAz8rvacLih-TAb7OflTgfVnJzIVnl-ouZmrlTMfsmEQ&s'); /* Your background image */
    background-size: cover;
    font-family: Arial, sans-serif; /* Custom font */
    display: flex;
    justify-content: center;
  }
  
  /* Styling the table */
  table {
    width: 100%;
    border-collapse: collapse;
    border: 1px solid #ccc; /* Border for the table */
  }

  th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd; /* Border for rows */
    text-align: center;
    font-size: 19px;
  }

  th {
    background-color: #f2f2f2; /* Background color for header */
    color: red;
    font-size: 23px;
  }

  tr:hover {
    background-color: #f5f5f5; /* Background color on hover */
  }
  
  .delete-btn {
    background-color: #ff3333; /* Red color for delete button */
    color: #fff; /* White text color */
    border: none; /* Remove border */
    padding: 6px 10px; /* Adjust padding */
    border-radius: 4px; /* Rounded corners */
    cursor: pointer; /* Change cursor to pointer on hover */
  }
  
  .delete-btn:hover {
    background-color: #cc0000; /* Darker red color on hover */
  }
</style>
</head>
<body>

<?php
include('connect.php');

// Check if the delete button is clicked
if (isset($_POST['delete'])) {
    $idToDelete = $_POST['delete_id'];
    $deleteQuery = "DELETE FROM members WHERE id='$idToDelete'";
    mysqli_query($con, $deleteQuery);
    // Redirect to the same page after deletion to avoid form resubmission prompt
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

$query = "SELECT * FROM members";
$rows = mysqli_query($con, $query);
?>

<table>
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>PASSWORD</th>
    <th>Action</th> <!-- Added for Delete button -->
  </tr>
  <?php
  while ($data = mysqli_fetch_assoc($rows)) {
    echo "<tr>
            <td>".$data['id']."</td>
            <td>".$data['Name']."</td>
            <td>".$data['Password']."</td>
            <td>
              <form method='post' action=''>
                <input type='hidden' name='delete_id' value='".$data['id']."'>
                <button type='submit' name='delete' class='delete-btn'>Delete</button>
              </form>
            </td>
          </tr>";
  }
  ?>
</table>

</body>
</html>
