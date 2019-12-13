<html> 

     <head> 

         <title>update</title> 

     </head> 

     <body> 

         <?php 

            if(isset($_POST['chatbot'])) { 

        $host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname ="chatbot";

               $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

                if(! $conn ) { 

                   die('Could not connect: ' . mysql_error()); 

                } 

                $Username = $_POST['Username']; 

                $Password = $_POST['Password']; 

                $sql = "UPDATE admin2 ". "SET Password = $Password ". 

                   "WHERE Username = $Username" ; 

                mysql_select_db('chatbot'); 

                $retval = mysql_query( $sql, $conn ); 

                if(! $retval ) { 

                   die('Could not update data: ' . mysql_error()); 

                } 

                echo "Updated data successfully\n"; 

                mysql_close($conn); 

            }else { 

                ?> 

               <form method = "post" action = "<?php $_PHP_SELF ?>"> 

                  <table width = "400" border =" 0" cellspacing = "1" 

                     cellpadding = "2"> 

                     <tr> 

                        <td width = "100">Username</td> 

                        <td><input name = "username" type = "text" 

                           id = "Username"></td> 

                     </tr> 

                     <tr> 

                        <td width = "100">Password</td> 

                        <td><input name = "password" type = "text" 

                           id = "Password"></td> 

                     </tr> 

                     <tr> 

                        <td width = "100"> </td> 

                        <td> </td> 

                     </tr> 

                     <tr> 

                        <td width = "100"> </td> 

                        <td> 

                           <input name = "update" type = "submit" 

                              id = "update" value = "Update"> 

                        </td> 

                     </tr> 

                  </table> 

               </form> 

            <?php 

         } 

      ?> 

   </body> 

</html> 
