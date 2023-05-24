<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITE | CW</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap');

    body{
        font-family:'Noto Sans', sans-serif;
        background-color: #201b2c;
        text-align: center;
        color: white;
    }

    .box{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        background: #2f2841;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 10px 40px #00000056;
    }
    a{ 
      text-decoration:none;
      color: white;
      border: 3px solid  #00ff88;
      border-radius: 10px;
      padding: 10px;

    }
    a:hover{
        background-color: #00ff8052;
    }
  
</style>


<body>

    <div class="box">
        <a href="login.php">Login</a> 
        <a href="formulario.php">Cadastro</a> 
   </div>
</body>
</html>