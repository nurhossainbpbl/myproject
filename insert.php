<?php
include "db.php";

 ?>

<form action=" " method="post">

                            <label>PersonID</label>
                            <input type="text" name="PersonID">
                            <lable>Last Name</lable>
                            <input type="text" name="LastName"> </br>

                            <label>First Name</label>
                            <input type="text" name="FirstName"></br>
                            <lable>Address</lable>
                            <input type="text" name="Address"></br>
                            <label>City</label>
                            <input type="text" name="City"></b>

                        <input type="submit" name="submit" value="Submit">
                    </form>

<?php

if(isset($_POST['submit']))
{
     $PersonID = $_POST['PersonID'];
     $LastName = $_POST['LastName'];
     $FirstName = $_POST['FirstName'];
     $Address = $_POST['Address'];
     $City = $_POST['City'];
     $sql = "INSERT INTO Persons (PersonID,LastName,FirstName,Address,City) VALUES ('$PersonID','$LastName','$FirstName','$Address','$City')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
