/**
 * Created by PhpStorm.
 * User: zyten
 * Date: 25/10/2015
 * Time: 7:31 PM
 */

<?php
 // This part sets up the connection to the
 // database (so you don't need to reopen the connection
 // again on the same page).
 $conn=odbc_connect("employee","","") or die (odbc_errormsg());
 if (!$conn )
 {
     exit
     ("Error connecting to database: ".$conn);
 }
 // Then you need to make sure the database you want
 // is selected.
 $sql = "SELECT * FROM empTable";
 $rs=odbc_exec($conn,$sql);
 ?>