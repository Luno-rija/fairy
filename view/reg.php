    <div class="container-fluid">
        <div class="containerGreen">
            <div class="container">
                <h1>Регистрация</h1>
                <a class="auth_button" href="/auth">Авторизация</a>
                <img class="enter_house" src="img/house.png" alt="house">
                <img class="enter_fairy" src="img/fairy.png" alt="fairy">
                <img class="enter_wolf" src="img/wolf.png" alt="">
                <img class="enter_prirodaTwo" src="img/elements/plant.png" alt="">
                    <div class="reg">
                        <form onsubmit="sendForm(this); return false;">
                               <div class="mb-3">
                                <label for="exampleInputName" class="form-label">Ваше имя</label>
                                <input name="name" type="text" class="form-control" id="exampleInputNeme">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputLastname" class="form-label">Ваша фамилия</label>
                                <input name="lastname" type="text" class="form-control" id="exampleInputLastname">    
                            </div>
                            <div class="mb-3">
                                <label  for="exampleInputEmail" class="form-label">Email адрес</label>
                                <input name="email" type="email" class="form-control" id="exampleInputEmail">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword" class="form-label">Пароль</label>
                                <input name="pass" type="password" class="form-control" id="exampleInputPassword">
                                <p id="infoTwo" hidden>Вы зарегестрированы<br>Перейдите на авторизацию</p>
                            </div>                             
                            <input type="submit" class="form-control btn_submit" value="Зарегистрироваться">
                        </form>
                    </div>
                <img class="enter_cat" src="img/kat.png" alt="">
                <img class="road" src="img/road.png" alt="" >  
           </div>
        </div>
    </div>   
    <!-- Вариант 1: Bootstrap в связке с Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
      let infoTwo = document.getElementById("infoTwo");
      function sendForm(form){
        let formData = new FormData(form);
        fetch("/request/regUser", {
          method: "POST",
          body: formData
        }).then(response=>response.json())
          .then(function(result){
            if(result.result=="success") location.href = "/auth"
            else if (result.result == "empty_input") alert("Не все поля заполнены");
            else infoTwo.hidden = false;
          })
      }
    </script>
   
  </body>
</html>