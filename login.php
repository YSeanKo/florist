<!--
 * Created by PhpStorm.
 * User: zyten
 * Date: 25/10/2015
 * Time: 7:31 PM
 */
-->
<html>
    <body>
        <?php
            session_start();
            // dBase file
            include "dbc.php";
        $sql  = "SELECT * FROM users";
        $result = $database->query($sql);
        while ($row = $result->fetch()) {
            echo $row["u_name"];
            echo $row["u_email"];
            echo $row["u_website"];
        }
        ?>

        <form id='login' action='login.php' method='post' accept-charset='UTF-8'>
            <fieldset >
                <legend>Please log in your employee ID and Password to apply for leave.</legend>
                <input type='hidden' name='submitted' id='submitted' value='1'/>
                <div class='short_explanation'>* required fields</div>
                <br>
                <label for='username'>UserName*:</label>
                <input type='text' name='username' id='username'  maxlength="50" />
                <br>
                <label for='password'>Password*:&nbsp;</label>
                <input type='password' name='password' id='password' maxlength="50" />
                <br><br>
                <input type='submit' name='Submit' value='Submit' />
            </fieldset>
        </form>
    </body>
</html>