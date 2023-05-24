


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style.css">
    <style>

@import url('https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap');


body{
    margin: 0;
    font-family: 'Noto Sans', sans-serif;
}
body * {
 box-sizing: border-box;
}

.main-login{
    width: 100vw;
    height: 100vh;
    background-color: #201b2c;
    display: flex;
    justify-content: center;
    align-items: center;
}

.left-login{
    width: 3vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.left-login-imagens{
    width: 25vw;
}



.right-login{
    width: 50vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.card-login{
    width: 60%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 30px 35px;
    background: #2f2841;
    border-radius: 20px;
    box-shadow: 0px 10px 40px #00000056;

}

.card-login >h1{
    color: #00ff88;
    font-weight: 800;
    margin: 0;
   
}

.textfield{
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    margin: 10px 0px;

}

.textfield > input{
    width: 100%;
    border: none;
    border-radius: 10px;
    padding: 15px;
    background: #514869;
    color: #f0ffffde;
    font-size: 12pt;
    box-shadow: 0px 10px 40px #00000056;
    outline: none;
    box-sizing: border-box;
}

.textfield > label{
    color: #f0ffffde;
    margin-bottom: 10px;
}

.textfield > input::placeholder{
    color: #f0ffff94;
}

.animated-button{
    width: 100%;
    font-weight: 570;
    padding: 10px 0px;
    margin: 25px;
    border: none;
    border-radius: 10px;
    outline: none;
    text-transform: uppercase;
    font-size: 800;
    letter-spacing: 3px;
    color: #2b134b;
    background: #00ff88;
    cursor: pointer;
    box-shadow: 0px 10px 40px -12px #00ff8052;
}

.welder{
    margin: 0;
    width: 100vw;
    height: 100vh;
    background-color: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
}

@media only screen and (max-width: 950px){
    .card-login{
        width: 85%;
    }
}

@media only screen and (max-width: 600px){
       .main-login{
        flex-direction: column;
       }
       .left-login > h1{
         display: none;
       }

       .left-login{
        width: 10%;
        height: auto;
       }

       .right-login{
        width: 80%;
        height: auto;
       }

       .left-login-imagens{
        width: 100px;
        display: none;

       
       }
       
       .card-login{
        width: 90%;
       }

       }

       
    
       .animated-button {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        color: #050505;
        background-color: #00ff88;
        border: none;
        cursor: pointer;
        overflow: hidden;
      }
      
      .animated-button::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 0;
        height: 100%;
        background-color: #2f7756;
        opacity: 0.7;
        transition: width 0.3s ease;
      }
      
      .animated-button:hover::before {
        width: 100%;
      }
    </style>
        
</head>



<body>


     
       
    <div class="main-login">
    <form action="testLogin.php" method="POST">
    <div>
 <a href="sistema.php">Voltar</a>
    </div>
           <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>


                <div class="textfield">
                    <label for="email">Email</label>   
                    <input type="text" name="email" placeholder="Email">
                </div>

                <div class="textfield">
                    <label for="tel">Senha</label>   
                    <input type="password" name="Senha" placeholder="Senha">
                </div>


    
                <button class="animated-button">LOGIN</button>
            </div>
           </div>
          
</div>

</body>

   
</html>