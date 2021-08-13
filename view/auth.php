
 <div class="container-fluid">
        <div class="containerGreen">
            <div class="container">
                <h1>Авторизация</h1>
                <a class="auth_button btn" href="/reg">Регистрация</a>
                <img class="enter_house" src="img/house.png" alt="house">
                <img class="enter_fairy" src="img/fairy.png" alt="fairy">
                <img class="enter_wolf" src="img/wolf.png" alt="">
                <img class="enter_prirodaTwo" src="img/elements/plant.png" alt="">
                <div class="auth">
                    <form onsubmit="sendForm(this); return false;">
                      <div class="mb-3">
                        <label  for="exampleInputEmail" class="form-label">Email адрес</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail">
                
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputPassword" class="form-label">Пароль</label>
                        <input name="pass" type="password" class="form-control" id="exampleInputPassword">
                        <p id="infoTwo" hidden>Неверные данные</p>
                        </div>
                                    
                        <button type="submit" class="btn btn_submit">Отправить</button>
                    </form>
                </div>
                <img class="enter_cat" src="img/kat.png" alt="">
                <img class="road" src="img/road.png" alt="" >  
           </div>
        </div>
    </div>
<script>
let info = document.getElementById("info");
  function sendForm(form){
    let formData = new FormData(form);
    fetch("/request/authUser", {
      method: "POST",
      body: formData
    }).then(response=>response.json())
      .then(function(result){
        if(result.result=="success") location.href = "/"
        else if (result.result == "empty_input") alert("Не все поля заполнены");
        else info.hidden = false;
      })
  }
</script>

