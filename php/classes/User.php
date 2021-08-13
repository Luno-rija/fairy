<?php

class User{
  static function authUser($email, $pass){
    global $mysqli;
    if(empty($email) or empty($pass)){
      return json_encode(['result'=>'empty_input']);
    }
    $result = $mysqli->query("SELECT * FROM game WHERE email='$email'");
    if(!$result->num_rows) return json_encode(['result'=>"not_found"]);
    $row = $result->fetch_assoc(); // Массив, найденная строка из бд
    if(password_verify($pass, $row['pass'])){ // password_verify — Проверяет, соответствует ли пароль хешу ($row['pass'] - пароль из БД)
      $_SESSION['name'] = $row['name'];
      $_SESSION['lastname'] = $row['lastname'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['id'] = $row['id'];
      return json_encode(['result'=>"success"]);
    }else{
      return json_encode(['result'=>"error"]);
    }
  }
  static function getUserById($id){
    global $mysqli;
    $result = $mysqli->query("SELECT name, lastname, email, avatar FROM `users` WHERE id='$id'");
    $row = $result->fetch_assoc();
    $user = [];
    $user["name"] = $row['name'];
    $user["lastname"] = $row['lastname'];
    $user["email"] = $row['email'];
    $user["avatar"] = $row['avatar'];
    $user["id"] = $id;
    return json_encode($user);
  }
  
  static function regUser($name, $lastname, $email, $pass){
    global $mysqli;
    if(empty($name) or empty($lastname) or empty($email) or empty($pass)){
      return json_encode(['result'=>'empty_input']);
    }
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $result = $mysqli->query("SELECT id FROM `game` WHERE `email`='$email'");
    if ($result->num_rows){ // Если записи есть, то говорим, что уже существует
      return json_encode(['result'=>"exist"]);
    }else{
      $mysqli->query("INSERT INTO game (`name`, `lastname`, `email`, `pass`) VALUES ('$name','$lastname','$email','$pass')");
      return json_encode(['result'=>"success"]);
    }
  }
 
}

?>