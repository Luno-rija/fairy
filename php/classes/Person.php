<?php
class Person {
    static function addFruits($apple, $cherry, $pear){
      global $mysqli;
      if(!empty($apple) or !empty($cherry) or !empty($pear)){
          $mysqli->query("DELETE FROM `food` WHERE apple='$apple', cherry='$cherry', pear='$pear'");
      }else if(empty($apple) or empty($cherry) or empty($pear)){
          $mysqli->query("INSERT INTO `food`(`apple`,`cherry`,`pear`) VALUES ('$apple','$cherry','$pear')");  
      }
      $row = $result->fetch_assoc(); // Переводим ответ от базы в ассоциативный массив
      return json_encode($row); 
    }
}
?>