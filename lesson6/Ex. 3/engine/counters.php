<?php
   function commentsCounter($conDB){
    $query = "SELECT COUNT(1) FROM comments";
    $cDB = mysqli_query( $conDB,$query);
    $counter = mysqli_fetch_array( $cDB);
    return $counter[0];
 }