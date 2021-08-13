<?php
  session_start(); // Запускаем сессию
  header("Access-Control-Allow-Origin: *");
  $uri = $_SERVER['REQUEST_URI'];
  $uri = explode('/', $uri);
 $mysqli = new mysqli("localhost", "lunorike_1","Tetra1512","lunorike_1");
  require_once("php/classes/User.php");
  require_once("php/classes/Person.php");
  
  
  $requests = [
      "addFruits"=>function(){return (Person::addFruits($_POST['apple'],$_POST['cherry'],$_POST['pear']));},
      "authUser"=>function(){return (User::authUser($_POST['email'],$_POST['pass']));},
         "getUserById"=>function(){
            if(empty($_POST['id'])) $id = $_SESSION['id']; //Id текущего пользователя
            else $id = $_POST['id']; // id запрошенного пользователя (пока нигде не используется)
            return (User::getUserById($id));
          },
          "regUser"=>function(){return (User::regUser($_POST['name'],$_POST['lastname'],$_POST['email'],$_POST['pass']));},

          "logOut"=>function(){session_destroy(); header('Location: /auth');}
          
        ];
      
      if($uri[1] == "request"){
        foreach($requests as $request=>$handler){
          if($uri[2] == $request)
            exit($handler());
        }
      }
      
     
      
      if($uri[1] == "auth"){
        $content = file_get_contents("view/auth.php");
      }else if($uri[1]==""){
        if(empty($_SESSION['id'])) header('Location: /auth');
        $content = file_get_contents("view/enter.php");
      }else if($uri[1] == "reg"){
        $content = file_get_contents("view/reg.php");
      }else if($uri[1] == "street"){
        if(empty($_SESSION['id'])) header('Location: /auth');  
        $content = file_get_contents("view/street.php");  
      }else if($uri[1] == "house"){
        if(empty($_SESSION['id'])) header('Location: /auth');  
        $content = file_get_contents("view/house.php");  
      }   
        
      require_once("view/admin.php");
?>