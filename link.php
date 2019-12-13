<?php 
           $link = mysqli_connect("localhost", "my_user", "my_password", "world"); 

           /* check connection */ 
           if (mysqli_connect_errno()) { 
               printf("Connect failed: %s\n", mysqli_connect_error()); 
               exit(); 
           } 

           $query  = "SELECT CURRENT_USER();"; 
           $query .= "SELECT Name FROM City ORDER BY ID LIMIT 20, 5"; 

           /* execute multi query */ 
           if (mysqli_multi_query($link, $query)) { 
               do { 
                   /* store first result set */ 
                   if ($result = mysqli_store_result($link)) { 
                       while ($row = mysqli_fetch_row($result)) { 
                           printf("%s\n", $row[0]); 
                       } 
                       mysqli_free_result($result); 
                   } 
                   /* print divider */ 
                   if (mysqli_more_results($link)) { 
                       printf("-----------------\n"); 
                   } 
               } while (mysqli_next_result($link)); 
           } 

           /* close connection */ 
           mysqli_close($link); 
           ?> 
