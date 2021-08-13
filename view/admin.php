<!doctype html>
<html lang="ru">
  <head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/750282b7c8.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="/view/css/style.css" rel="stylesheet" />
    <title>Дом феи</title>
    <style>
       .container-fluid{
            height: 100vh;
       } 
       .containerGreen{
         background: url('/img/grass.jpg');  
          height: 100vh;
       } 
       .container{
            height: 626px;  
            position: relative;
       }
       .enter_house{
            position: absolute;
            bottom: 34px;
            right: 1px;
            height: 586px;
            width: 525px;
            z-index: 1;
        }
        .enter_fairy{
            height: 113px;
            position: absolute;
            top: 444px;
            right: 327px;
            z-index: 2;

        }
        .enter_wolf{
            position: absolute;
            width: 129px;
            height: 73px;
            top: 456px;
            right: 518px;
            z-index: 2
        }
        .enter_prirodaTwo{
            position: absolute;
            width: 510px;
            height: 168px;
            top: 168px;
            right: 592px;
            z-index: 1;
        }
        .btn_submit{
            border: 4px solid chocolate;
            padding-bottom: 50px;
            border-radius: 17px;
            background: brown;
            font-size: 27px;
            color: #fff; 
            text-align: center;
            height: 57px;
        }
        .auth_button{
            z-index: 4;
            border: 4px solid chocolate;
            padding-bottom: 50px;
            border-radius: 17px;
            background: brown;
            width: 208px;
            height: 57px;
            position: absolute;
            right: -76px;
            top: 15px;
            font-size: 27px;
            color: #fff; 
            text-align: center;
        }
        .auth_button:hover{
            border: 4px solid rgb(69, 30, 210);
            color:#ffffff;
            background:darkcyan;
        }
        .enter_button{
            border: 4px solid chocolate;
            padding-bottom: 50px;
            border-radius: 17px;
            background: brown;
            width: 208px;
            height: 57px;
            position: absolute;
            left: 200px;
            top: 415px;
            font-size: 27px;
            color: #fff;
            
        }
        .enter_button:hover{
            border: 4px solid rgb(69, 30, 210);
            color:#ffffff;
            background:darkcyan;
        }

        .enter_cat{
            position: absolute;
            width: 36px;
            height: 49px;
            top: 297px;
            right: 697px;
            z-index: 2;
        }
         .road{
           position: absolute;
            width: 278px;
            height: 145px;
            top: 526px;
            right: 270px;
            z-index: 1
        }
        .reg, .auth{
            position: absolute;
            color :#fff;
            top: 100px;
            left: 50px;
            width: 273px;
            z-index: 3;
        }
        h1{
           position: absolute;
            color: #fff;
            top: 11px;
            left: 336px;
            font-size: 71px;
            z-index: 3;
        }
        .info{
            height: 50px;
            position: relative;
            width: 1300px;
            margin: auto;
        }
        .playingField{
            position: relative;
            margin: auto;
            width: 1300px;
            height: 500px;
        }
        .house{
           position: absolute;
            top: 14px;
            right: 299px;
            height: 282px;
            width: 242px;
            z-index: 1;
        }
        .house:hover{
            transform: scale(1.1);
        }
        .track{
            height: 232px;
            position: absolute;
            top: 271px;
            right: 400px;
            width: 207px;
        }
        .street_fairy{
            height: 50px;
            position: absolute;
            top: 232px;
            right: 454px;
            z-index: 2;
        }
        .street_fairy:hover{
            transform: scale(1.1);
        }
        #myProgressSatiety {
          width: 100%;
          background-color: #ddd;
          position: absolute;
          top: 0px;
          right: 150px;
        }
        
        #myBarSatiety {
          width: 1%;
          height: 30px;
          background-color: #4CAF50;
          text-align: center;
          line-height: 30px;
          color: white;
        }
        .treeFifth{
            position: absolute;
            top: 160px;
            left: 1060px;
            height: 150px;
            width: 171px;
        }
        
        .treeFirst{
            position: absolute;
            top: 20px;
            left: 660px;
            height: 150px;
            width: 120px;
        }
        .treeSecond{
            position: absolute;
            top: 27px;
            left: 41px;
            height: 150px;
            width: 120px
        }
        .treeFourth{
            position: absolute;
            top: 114px;
            left: 211px;
            height: 122px;
            width: 84px;
        }
        .treeThird{
            position: absolute;
            top: 12px;
            left: 321px;
            height: 122px;
            width: 84px;
        }
        .section1, .section2, .section3, .section4, .section5{
            position: absolute;
            top: -40px;
            width: 300px;
            height: 45px;
            
        }
        .section6, .section7, .section8{
            position: absolute;
            bottom: 0px;
            width: 300px;
            height: 45px; 
        }
        .section1{
            right: 0px;
            
        }
        .section2{
            right: 300px;
            
        }
        .section3{
            right: 600px;
            
        }
        .section4{
           right: 900px;
        }
        .section5{
            right: 1009px;
        }
        .section6{
            right: 1009px;
        }
        .section7{
            right: 710px;
        }
        .section8{
            right: 0px;
            z-index: 5;
        }
        
        a{
            position: absolute;
            top: 0px;
            right: 40px;
            font-size: 15px;
            color: blanchedalmond;
            text-decoration: none;
        }
        .priroda1{
            position: absolute;
            width: 200px;
            height: 75px;
            top: 297px;
            right: 487px;
            z-index: 1;
        }
        .prirodaTwo{
            position: absolute;
            width: 200px;
            height: 75px;
            top: 159px;
            right: 536px;
            z-index: 2;
        }
        .prirodaTwo:hover{
            transform: scale(1.1);
        }
        .prirodaThree{
            position: absolute;
            width: 200px;
            height: 75px;
            top: 332px;
            right: 891px;
            z-index: 2;
        }
        .prirodaThree:hover{
            transform: scale(1.1);
        }
        .priroda4{
            position: absolute;
            width: 200px;
            height: 75px;
            top: 39px;
            right: 35px;
            z-index: 1;
        }
        .prirodaFour{
            position: absolute;
            width: 193px;
            height: 141px;
            top: 340px;
            right: 69px;
            z-index: 2;
        }
        .prirodaFour:hover{
            transform: scale(1.1);
        }
        .prirodaSix{
            position: absolute;
            width: 68px;
            height: 43px;
            top: 45px;
            right: 669px;
            z-index: 2;
        }
        .prirodaSix:hover{
            transform: scale(1.1);
        }
        
        
        .cat{
            position: absolute;
            width: 26px;
            height: 36px;
            top: 186px;
            right: 697px;
            z-index: 1;
          
        }
        .catChat{
            position: absolute;
            width: 116px;
            height: 82px;
            top: 147px;
            right: 745px;
            z-index: 1;
            transform: scale(-1, 1);
        }
        .catText{
            position: absolute;
            width: 55px;
            top: 170px;
            font-size: 10px;
            right: 765px;
            z-index: 2
        }
        .mouse{
            position: absolute;
            width: 26px;
            height: 36px;
            top: 359px;
            right: 946px;
            z-index: 1;
            transform: scale(-1, 1);
        }
        .mouseChat{
            position: absolute;
            width: 116px;
            height: 82px;
            top: 299px;
            right: 834px;
            z-index: 1;
            
        }
        .mouseText{
            position: absolute;
            width: 55px;
            top: 323px;
            font-size: 10px;
            right: 866px;
            z-index: 2;
        }
        .squirrel{
            position: absolute;
            width: 20px;
            height: 25px;
            top: 49px;
            right: 702px;
            z-index: 1;
        }
        .squirrelChat{
            position: absolute;
            width: 116px;
            height: 82px;
            top: -21px;
            right: 587px;
            z-index: 1
            
        }
        .squirrelText{
            position: absolute;
            width: 55px;
            top: 1px;
            font-size: 10px;
            right: 621px;
            z-index: 2;
        }
        .wolf{
            position: absolute;
            width: 201px;
            height: 125px;
            top: 350px;
            right: 36px;
            z-index: 1;
        }
        .wolfChat{
            position: absolute;
            width: 119px;
            height: 124px;
            top: 326px;
            right: 295px;
            z-index: 1;
            transform: scale(-1, 1);
        }
        .wolfText{
            position: absolute;
            width: 55px;
            top: 361px;
            font-size: 10px;
            right: 315px;
            z-index: 2;
        }
        .streetChat{
            position: absolute;
            width: 151px;
            height: 139px;
            top: 16px;
            right: 73px;
            z-index: 2;
            transform: scale(-1, -1);
        }
        .streetText{
           position: absolute;
            width: 78px;
            top: 70px;
            font-size: 10px;
            right: 99px;
            z-index: 2;
            text-align: center;
        }
        #myProgressOne, #myProgressTwo, #myProgressThree, #myProgressFour, #myProgressFive{
            width: 40px;
            background-color: rgb(196, 247, 12);
            position: absolute;
        }
        #myProgressOne{    
            top: 17px;
            left: 81px;
        }
        #myProgressTwo{
            top: 9px;
            left: 702px;
        }
        #myProgressThree{
            top: 3px;
            left: 344px;
            
        }
        #myProgressFour{
            top: 105px;
            left: 233px;
        }
        #myProgressFive{
            top: 147px;
            right: 132px
        }
        
        #myBarOne, #myBarTwo, #myBarThree, #myBarFour, #myBarFive{
            width: 1%;
            height: 5px;
            background-color: green;
        }
        .apple{
            position: absolute;
            height: 15px;
            width: 13px;
            z-index: 8; 
        }
        .cheery{
            position: absolute;
            height: 7px;
            width: 9px;
            z-index: 8;  
        }
        .exit_button{
            position: absolute;
            z-index: 3;
            left: 0px;
            width: 125px;
            height: 42px;
            border: 4px solid chocolate;
            border-radius: 10px;
            top: 5px;
            background: brown;
            font-size: 14px;
            color: #fff;
            padding-top: 5px;
            text-align: center;
        }
        .exit_button:hover{
            border: 4px solid rgb(69, 30, 210);
            color:#ffffff;
            background:darkcyan;
        }
        .street_avatarPers{
            position: absolute;
            height: 90px;
            width: 90px;
            top: 0px;
            right: 20px;
            z-index: 1;
            border: 5px solid crimson;
            transform: scale(-1, 1);
        }
        .pear{
            position: absolute;
            height: 15px;
            width: 13px;
            z-index: 8; 
        }
        .container_house{
            background:chocolate;
            height: 100vh;
        }
        .container_one{
            position: relative;
            height: 620px;
            width: 1350px;
            margin: auto;
        }
        .bedroom_img{
            position: absolute;
            height: 100%;
            width: 100%;
        } 
        .fairy{
            z-index: 8;
            top: 200px;
            right: 580px;
            position: absolute;
            height: 300px;
            transform: rotate(360deg);
        }
        a{
            top: 50px;
            right: 100px;
            position: absolute;
            font-size: 20px;
            color: blanchedalmond;
        }
        .table{
            position: absolute;
            top: 409px;
            right: 627px;
            height: 200px;
            transform: scale(-1,1);
            width: 500px;
            z-index: 2;
        }
        .plate, .plate_two, .plate_three{
            position: absolute;
            height: 36px;
            width: 91px;
            z-index: 3;
        }
        .plate{
           top: 412px;
           right: 842px; 
        }
        .plate_two{
           top: 410px;
           right: 750px;
        }
        .plate_three{
           top: 414px;
           right: 934px; 
        }
        .bed{
            position: absolute;
            top: 365px;
            right: 0px;
            height: 204px;
            width: 633px;
        }
        .bed:hover{
            width: 639px;
        }
        .exitHoume{
            position: absolute;
            top: 2px;
            right: 20px;
            border: 3px solid #e0e0e0;
            background: #198754;
            border-radius: 20px;
            color: #fff;
        }
        .exitHoume:hover{
            background: #16dc80;
            color: #fff;
        }
        
        
            
        .house_avatarPers{
            position: absolute;
            height: 90px;
            width: 90px;
            top:0px;
            left:0px;
            z-index: 1;
            border: 5px solid crimson;
        }
        .house_chat{
            position: absolute;
            height: 119px;
            top: 22px;
            left: 86px;
            z-index: 2;
            transform: scale(1,-1);
            width: 149px;

        }
        .street_red_one_chat, .street_red_two_chat{
            position: absolute;
            height: 73px;
            z-index: 2;
            width: 171px;
        }
        .street_red_one_text, .street_red_two_text{
            position: absolute;
            height: 98px;
            width: 80px;            
            z-index: 5;
            font-weight: 700;
            color: red;
        }
        
        .house_red_one_chat, .house_red_two_chat{
            position: absolute;
            height: 100px;
            z-index: 2;
            width: 171px;
        }
        .house_red_one_text, .house_red_two_text{
            position: absolute;
            height: 98px;
            width: 80px;            
            z-index: 5;
            font-weight: 700;
            color: red;
        }
        .house_text{
            position: absolute;
            height: 98px;
            width: 85px;
            top: 75px;
            left: 110px;
            z-index: 2;
            font-size: 10px;
            text-align: center;
        }
        
        .house_apple{
            position: absolute;
            height: 30px; 
            width: 30px;
            z-index: 8; 
        }
        .house_cherry{
            position: absolute;
            height: 30px; 
            width: 30px;
            z-index: 7; 

        }
        .house_pear{
            position: absolute;
            height: 30px; 
            width: 30px;
            z-index: 6; 
            
        }
        .apple_indicator, .cherry_indicator, .pear_indicator{
            position: absolute;
            z-index: 3;
            right: 75px;
            width: 70px;
            height: 40px;
            border:  3px solid rgb(15, 143, 83);
            border-radius: 5px;
            top: 5px;
            background: rgb(4, 243, 24);
            
        }
        .apple_indicator{
            right: 600px;
        }  
        .cherry_indicator{
            right: 520px;
        }  
        .pear_indicator{
            right: 680px;
        }    
        .apple_ind, .cherry_ind, .pear_ind{
            height:80%;
            margin-top: 3px;
            margin-left:5px ;
            
        }
        .apple_p, .cherry_p, .pear_p{
            position: absolute;
            z-index: 3;
            right: 7px;
            top: 0px;
            font-size: 22px;
            color: #fff;
        }
        .btn_in{
            
            height: 20px;
            width: 20px;
            background: blanchedalmond;
            position: absolute;
            top: 30px;
            right: 20px;
            z-index: 4
        }
        .btn_plus{
            
            height: 20px;
            width: 20px;
            background: red;
            position: absolute;
            top: 80px;
            right: 50px;
            z-index: 4
        }
        .btn_plus_two{
            
            height: 20px;
            width: 20px;
            background: red;
            position: absolute;
            top: 80px;
            right: 70px;
            z-index: 4
        }
        .one_indicator, .one_indicator_house {
            width: 155px;
            height: 23px;
            background-color: #ddd;
            position: absolute;
            top: 0px;
            display: inline-block;
            background: Teal;
            border: 2px solid blue;
            font-size: 12px;
            padding-left: 5px;
            border-radius: 5px;
            color: #fff;
            z-index: 4; 
          
        }
        .one_indicator{
           right: 127px; 
        }
        .one_indicator_house{
           left: 95px;
        }
        .one_ind {
            display: inline-block;
        }
        .two_indicator, .two_indicator_house {
            width: 155px;
            height: 23px;
            background-color: #ddd;
            position: absolute;
            top: 30px;
            right: 127px;
            display: inline-block;
            background: Teal;
            border: 2px solid blue;
            font-size: 12px;
            padding-left: 5px;
            border-radius: 5px;
            color: #fff;
            z-index: 4; 
          
        }
        .two_indicator{
           right: 127px; 
        }
        .two_indicator_house{
            left: 95px;
        }
        
        .two_ind {
            display: inline-block;
        }
        .amount_apple, .amount_pear, .amount_cherry{
           height: 20px;
            width: 20px;
            position: absolute;
            z-index: 6;
            color: blue;
            font-size: 18px;
            font-weight: 600;
        }
        .amount_apple{
           top: 430px;
           right: 876px; 
        }
        .amount_pear{
          top: 429px;
          right: 786px;
        }
        .amount_cherry{
          top: 433px;
          right: 970px;  
        }
    </style>
  </head>
  <body>
   
    
    <?= $content ?>
    
    <!-- Вариант 1: Bootstrap в связке с Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>