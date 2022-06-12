<?php
include "db.php";

 ?>

<form action=" " method="post">

                            <label>Please type table Name</label>
                            <input type="text" name="TableName">
                            
                        <input type="submit" name="submit" value="Submit">
                    </form>

<?php

if(isset($_POST['submit']))
{
     $TableName = $_POST['TableName'];
    
     mysql_query(CREATE TABLE `databasename`.`$TableName` (
       
       post_id int(11) NOT NULL auto_increment,
					category_id int(11) NOT NULL,
					user_id int(11) NOT NULL,
					title varchar(150) NOT NULL,
					body text NOT NULL,
					posted timestamp,
					PRIMARY KEY (post_id)  
     );
}
?>
