
    <div class="container-fluid">
        <div class="container_house">
            <div class="container_one">
                <div class="condition">
                    <div class="one_indicator_house"><div class="one_ind"></div>ед. сытости из 100ед</div>
                    <div class="two_indicator_house"><div class="two_ind"></div>ед. бодрости из 500ед</div>
                    <form>
                        <input type="text" id="input_hunger" hidden value="10">
                        <input type="text" id="input_fatigue"  hidden value="10">
                    </form>
                </div>
                <img class="house_chat" hidden="true" src="img/chat.png" alt="">
                <img class="house_red_one_chat" hidden="true" src="img/red_chat.png" alt="">
                <img class="house_red_two_chat" hidden="true" src="img/red_chat.png" alt="">
                <div class="house_text"></div>
                <div class="house_red_one_text"></div>
                <div class="house_red_two_text"></div>
                <img class="house_avatarPers" src="img/fairy-mini.png" alt="fairy">
                <img class="bedroom_img" src="img/2417.jpg" alt="">
                <img class="fairy" src="img/fairy.png" alt="fairy">
                <img class="table" src="img/table2.png" alt="">
                <img class="plate" src="img/plate.png" hidden alt="">
                <img class="plate_two" src="img/plate.png" hidden alt="">
                <img class="plate_three" src="img/plate.png" hidden alt="">
                <img class="bed" src="img/bed.png" alt="">
                <img class="house_cherry" hidden="true" src="img/fruits/cherry.png" alt="">
                <img class="house_apple" hidden="true" src="img/fruits/apple.png" alt="">
                <img class="house_pear" hidden="true" src="img/fruits/pear.png" alt="">
                <a class="exitHoume btn" href="/street">Во двор</a>
                <div class="amount_apple" hidden></div> 
                <div class="amount_pear" hidden></div>
                <div class="amount_cherry" hidden></div>
                </div>
        </div>    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        let fairy = document.getElementsByClassName("fairy")[0];
        let bed = document.getElementsByClassName("bed")[0];
        let table = document.getElementsByClassName("table")[0];
        let chat = document.getElementsByClassName("house_chat")[0];
        let text = document.getElementsByClassName("house_text")[0];
        let x = fairy.getBoundingClientRect().right;
        let y = fairy.getBoundingClientRect().top;
        let sleep = document.getElementsByClassName("sleep")[0];
        let food = document.getElementsByClassName("food")[0];
        let plate = document.getElementsByClassName("plate")[0];
        let plate_two = document.getElementsByClassName("plate_two")[0];
        let plate_three = document.getElementsByClassName("plate_three")[0];
        let cherry = document.getElementsByClassName("house_cherry")[0];
        let apple = document.getElementsByClassName("house_apple")[0];
        let pear = document.getElementsByClassName("house_pear")[0];
        let one_ind =  document.getElementsByClassName("one_ind")[0];
        let two_ind =  document.getElementsByClassName("two_ind")[0];
        let amount_cherry = document.getElementsByClassName("amount_cherry")[0];
        let amount_apple = document.getElementsByClassName("amount_apple")[0];
        let amount_pear = document.getElementsByClassName("amount_pear")[0];
        let red_one_chat = document.getElementsByClassName("house_red_one_chat")[0];
        let red_two_chat = document.getElementsByClassName("house_red_two_chat")[0];
       
        let red_one_text = document.getElementsByClassName("house_red_one_text")[0];
        let red_two_text = document.getElementsByClassName("house_red_two_text")[0];
        //let indicatorHunger= document.getElementById("input_hunger").value;
        //localStorage.setItem('hunger', indicatorHunger.toString());
        
        let indicatorHunger= +localStorage.getItem('hunger');
            
        // indicatorFatigue= document.getElementById("input_fatigue").value;
        // localStorage.setItem('fatigue', indicatorFatigue.toString());
        let indicatorFatigue= +localStorage.getItem('fatigue');
        // let fruitsApple = document.getElementById("input_apple").value;
        let fruitsApple = localStorage.getItem('apple');  
        // let fruitsPear = document.getElementById("input_pear").value;
        let fruitsPear = localStorage.getItem('pear');
        //let fruitsCherry = document.getElementById("input_cherry").value;
        let fruitsCherry = localStorage.getItem('cherry');
        
        one_ind.innerHTML=indicatorHunger;
        two_ind.innerHTML=indicatorFatigue;
        amount_apple.innerHTML=localStorage.getItem('apple');
        amount_pear.innerHTML=localStorage.getItem('pear');
        amount_cherry.innerHTML=localStorage.getItem('cherry');

       
      
        function one() {
            if (indicatorHunger>0){
                indicatorHunger=indicatorHunger-1;
                localStorage.setItem('hunger', indicatorHunger.toString());
                one_ind.innerHTML=indicatorHunger;
            }
        }     
        setInterval(one, 60000);
        
             
             
        function two() {
            if (indicatorFatigue>0){
                indicatorFatigue=indicatorFatigue-1;
                localStorage.setItem('fatigue', indicatorFatigue.toString());
                two_ind.innerHTML=indicatorFatigue;
            }
        }
        setInterval(two, 10000);
             
             
        
        
        
        function fairyFlight(){
            
            if(x<1100 && y==280 ){
            x=x+1;
            fairy.style.right = x+"px";
            fairy.style.transform = "scale(-1, 1)";
            } else if(x==1100 && y>50){
                y=y-1;
                fairy.style.top = y+"px";        
            } else if(x>80 && y==50 ){
            x=x-1;
                fairy.style.right = x+"px";  
                fairy.style.transform = "scale(1, 1)";                
            } else {
            y=y+1;
               fairy.style.top = y+"px";             
            }

        } 
        flight = setInterval(fairyFlight, 20);
       

        fairy.onclick = function() {
            flight = clearInterval(flight);
            chat.hidden = false;
            text.innerHTML = "Что будем делать?";
        };
        let id = setInterval(rest, 1000);
        clearInterval(id);//отключина функция для постоянного применения
        bed.onclick = function sleeping(){
            chat.hidden = false;
            text.innerHTML = "Значит буду спать";
            fairy.style.transform = "rotate(278deg)";
            fairy.style.height = 232+"px";
            fairy.style.right = 318+"px";  
            fairy.style.top = 328+"px";
            pear.hidden = true;
            apple.hidden = true;
            cherry.hidden = true;
            plate.hidden = true;
            plate_two.hidden = true;
            plate_three.hidden = true;
            amount_apple.hidden = true;
            amount_pear.hidden = true;
            amount_cherry.hidden = true;
            flight = clearInterval(flight);
            fairy.style.transitionDuration = 2 +"s";
            setInterval(rest, 1000);
            }
            
            function rest(){
                if(indicatorFatigue<500){
                    indicatorFatigue++;
                    localStorage.setItem('fatigue', indicatorFatigue.toString());
                }else{
                    clearInterval(id);
                    fairy.style.height = 300+"px";
                    fairy.style.right = 318+"px";  
                    fairy.style.top = 310+"px";
                    fairy.style.transform = "rotate(360deg)";
                    text.innerHTML = "Я проснулась";
                }
                
            }
       
        
        function processFatigue(){
            if(indicatorFatigue<100){
                red_one_chat.hidden = false;
                red_one_chat.style.top = -14+"px";
                red_one_chat.style.left = 247+"px";
                red_one_text.innerHTML = "Я хочу спать";
                red_one_text.style.top = 13+"px";
                red_one_text.style.left = 314+"px";
                red_one_text.style.fontSize = 14+"px";
            }else if(indicatorFatigue>99){
                red_one_text.innerHTML = "";
                red_one_chat.hidden = true;
            }
        }
       setInterval(processFatigue, 20); 
        
        
        function processHunger(){
           if(indicatorHunger<10){
                red_two_chat.hidden = false;
                red_two_chat.style.top = 43+"px";
                red_two_chat.style.left = 178+"px";
                red_two_text.innerHTML = "Я голодная";
                red_two_text.style.top = 80+"px";
                red_two_text.style.left = 228+"px";
                red_two_text.style.fontSize = 14+"px";
            }else if(indicatorHunger>9){
                red_two_text.innerHTML = "";
                red_two_chat.hidden = true;
            }
        }
        setInterval(processHunger, 20); 
        
       
        
        
        
        

        table.onclick = function(){
            fairy.style.top = 105 + "px";
            fairy.style.right = 796 + "px";
            fairy.style.transform = "rotate(360deg)";
            flight = clearInterval(flight);
            clearInterval(id);// отключает функцию пополнения бодрости
            fairy.style.transitionDuration = 2 +"s";
            chat.hidden = false;
            pear.hidden = true;
            apple.hidden = true;
            cherry.hidden = true;
            plate.hidden = false;
            plate_two.hidden = true;
            plate_three.hidden = true;
            amount_apple.hidden = true;
            amount_pear.hidden = true;
            amount_cherry.hidden = true;
            text.innerHTML = "Чем покормишь?";
            fairy.style.height = 300+"px";
            
            
        }

        plate.onclick = function(){
            chat.hidden = false;
            text.innerHTML = "Мои любимые фрукты!!";
            fairy.style.zIndex = 1;
            fairy.style.transitionDuration = 4 +"s";
            fairy.style.top = 245 + "px";
            fairy.style.right = 796 + "px";
            fairy.style.transform = "rotate(360deg)";
            fairy.style.height = 300+"px";
            flight = clearInterval(flight);
            pear.hidden = false;
            apple.hidden = false;
            cherry.hidden = false;
            plate_two.hidden = false;
            plate_three.hidden = false;
            amount_apple.hidden = false;
            amount_pear.hidden = false;
            amount_cherry.hidden = false;
            fairy.style.height = 300+"px";
            cherry.style.left = 356+"px";
            cherry.style.top = 408+"px";
            apple.style.left = 448+"px";
            apple.style.top = 404+"px";
            pear.style.left = 539+"px";
            pear.style.top = 403+"px";
        }
        
        apple.onclick = function(){
            if(indicatorHunger<100){
                if(fruitsApple>0){
                    fruitsApple = +fruitsApple-1;
                    localStorage.setItem('apple', fruitsApple.toString());
                    amount_apple.innerHTML=localStorage.getItem('apple');
                    indicatorHunger=indicatorHunger+1;
                    localStorage.setItem('hunger', indicatorHunger.toString());
                    one_ind.innerHTML=indicatorHunger;  
                }else if(fruitsApple == 0){
                     apple.hidden = true;
                } 
            }
        }
        pear.onclick = function(){
            if(indicatorHunger<100){
                if(fruitsPear>0){
                    fruitsPear = +fruitsPear-1;
                    localStorage.setItem('pear', fruitsPear.toString());
                    amount_pear.innerHTML=localStorage.getItem('pear');
                    indicatorHunger=indicatorHunger+1;
                    localStorage.setItem('hunger', indicatorHunger.toString());
                    one_ind.innerHTML=indicatorHunger;
                }else if(fruitsPear == 0){
                     pear.hidden = true;
                } 
            }
        }
        
        cherry.onclick = function(){
            if(indicatorHunger<100){
                if(fruitsCherry>0){
                    fruitsCherry = +fruitsCherry-1;
                    localStorage.setItem('cherry', fruitsCherry.toString());
                    amount_cherry.innerHTML=localStorage.getItem('cherry');
                    indicatorHunger=indicatorHunger+1;
                    localStorage.setItem('hunger', indicatorHunger.toString());
                    one_ind.innerHTML=indicatorHunger;
                }else if(fruitsPear == 0){
                     cherry.hidden = true;
                }
            }
        }

                 
    </script>

