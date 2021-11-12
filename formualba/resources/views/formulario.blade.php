<style>
    * {
	padding: 0;
	margin: 0;
	font-family: century gothic;
	text-align: center;
}

 div{
	padding: 50px 20px;
	background-color: orangered;
	margin: calc(25% + 100px);
	margin-top: 70px;
	padding-top: 28px;
	margin-bottom: 30px
}

h1 {
	text-align: center;
	padding: 12px;
	color: black;
}

input {
	width: calc(100% - 20px);
	padding: 9px;
	margin: auto;
	margin-top: 12px;
	font-size: 16px
}

input[type='submit']{
	background-color: #48e;
	color: #fff;
	width: calc(80% - 20px);
	margin: 0 10%;
	margin-top: 22px;
	border: none;
	
}


.ok {
	text-align: center;
	width: 100%;
	padding: 12px;
	background-color: #1e6;
	color: #fff
}
.bad {
	text-align: center;
	width: 100%;
	padding: 12px;
	background-color: #a22;
	color: #fff
}
.off{
	text-align: center;
	width: 100%;
	padding: 12px;
	background-color: rgb(0, 0, 0);
	color: #fff

}
body{
	background-image:url(../IMG/salon2.jpeg);
	width: 100%;
	height:100%vh;
	background-size: cover;

	color:white;
	
}
.mensaje{
	width: 100%;
	max-width: 350px;
	margin: auto;
	margin-top: 20px;
	text-align: left;
	padding: 6px;
	color: red;

}
h6 {
	text-align: center;
	padding: 16px;
    color: black;
    line-height: 20px;
}
.gabo{
	padding: 50px 20px;
	background-color: #b9aeaea6;
	margin: calc(25% + 100px);
	margin-top: 70px;
	padding-top: 28px;
    margin-bottom: 30px;
    line-height: 20px;
}
header{
    width: 100%;
    color: black;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    align-content: space-between;
    background-color: rgba(0, 0, 0,.3);
}
header h1{
    margin-left: 5px;
    align-items: center;
    width: calc(20% - 100px);
    font-family: montez;
    font-size: 55px;
}
header a{
    margin-right: 30px;
    text-align: center;
    text-decoration: none;
    color: #fff;
    font-size: 25px;
    transition: all ease 300ms;
}
.login-box{
	background-image:url(../IMG/salon2.jpeg);
	width: 100px;
	height: 100px;
	border-radius: 50%;
	position: absolute;
	top: -50px;
	left: calc(50% - 50px);
}

.boton{
	background: #00b7f8;
	border-bottom: 5px solid #0045a6;
	border-radius: 12px;
	box-shadow: 6px 6px 6px #999;
	color: #fff;
	cursor: pointer;
	display: block;  
	font-family: 'Raleway', Arial, Helvetica;
	font-size: 28px;
	height: 32px;
	margin: 80px auto;
	padding: 20px 20px;
	text-align: center;
	transition: all 0.2s ease 0s;
	width: 120px;
  }
  .boton:hover{
	  background: #0096f7;
  }
  .boton:active {
	  box-shadow: 2px 2px 2px #777, 0px 0px 35px 0px #00b7f8;
	  border-bottom:1px solid #0045A6;
	text-shadow:  0px 0px 5px #fff, 0px 0px 5px #fff;
	  transform: translateY(4px);
	transition: all 0.1s ease 0s;
	margin: 80px auto 76px auto;
  }
</style>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="icon" type="image/png" sizes="16x16" href="descarga.png"> 
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
   <div>
      <form method="POST" action="conexion_login.php">
   <h1 class="animate__animated animate__backInLeft">FORMULARIO DE REGISTRO</h1>
<p> Nombre<input type="text" placeholder="ingrese su nombre" name="nombre"></p>
<p>Edad <input type="number" placeholder="ingrese su edad" name="edad"></p>
   <p>Usuario <input type="text" placeholder="ingrese su usuario" name="usuario"></p>
   <p>correo <input type="email" placeholder="ingrese su email" name="email"></p>
   <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="contraseña"></p>
   
   <input type="submit" value="Ingresar">
</div>
   
</body>
</html>