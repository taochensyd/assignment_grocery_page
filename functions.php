<?PHP 
    include 'db_connection.php';

    function requestDataForThisItem($item_id) {
      //code to be executed;
      $link = mysqli_connect("localhost", "uts", "internet", "assignment1") or die("Could not connect to Server");
      $query_string = "select * from products where id = 1001";
      $result = mysqli_query($link, $query_string);
      $num_rows = mysqli_num_rows($result);
      if ($num_rows > 0){
        $num=0;
          while ($a_row = mysqli_fetch_row($result)) {
            echo "<table> <tr> ";
            foreach ($a_row as $field) {
                // echo $field;
                echo "<td>".$field."</td>\t";
            }
            echo "</tr> </table>";
            $num++;
          }
        //   print_r($db_data);
        
    }
      mysqli_close($link);
        }
        

?>