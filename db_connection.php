<?php
    //DB Data
    $db_pruduct_id = array();
    $db_product_name = array();
    $db_unit_price = array();
    $db_unit_quantity = array();
    $db_in_stock = array();
    $db_data = array();
    //DB connection
    $link = mysqli_connect("localhost", "uts", "internet", "assignment1") or die("Could not connect to Server");
    $query_string = "select * from products";
    $result = mysqli_query($link, $query_string);
    $num_rows = mysqli_num_rows($result);
    if ($num_rows > 0){
        $num=0;
          while ($a_row = mysqli_fetch_row($result)) {
            
            foreach ($a_row as $field) {
                // echo $field;
                array_push($db_data[$num], $field);
            }
            $num++;
          }
        //   print_r($db_data);
        
    }
    mysqli_close($link);
?>