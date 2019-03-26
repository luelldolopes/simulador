<?php
session_start();
if(!empty($_SESSION['id'])){
  echo "Olá ".$_SESSION['nome'].", Bem vindo(a)! <a href='sair.php'><buttonSair>Sair</button></a> <br><br>";
}else{
  //$_SESSION['msg'] = "<div class='alert alert-danger'>Área restrita!</div>";
  header("Location: login.php");  
}
include_once("excluirQuestoes.php");
include_once("timer.php");
sleep(5);
header("Refresh: 2400, url=quiz.php");
?>

<!DOCTYPE html>
<html lang="pt-br" >

<head>

  <meta charset="UTF-8">
  <title>Simulador - Detran</title>   

  
<style>
  @import url(https://fonts.googleapis.com/css?family=Work+Sans:300,600);

body{
  font-size: 18px;
  font-family: 'Work Sans', sans-serif;
  color: #333;
  font-weight: 300;
  text-align: center;
  background-color: #f8f6f0;
}
h1{
  font-weight: 300;
  margin: 0px;
  margin-bottom: 10px;
  padding: 10px;
  font-size: 20px;
  background-color: #444;
  color: #fff;
}
.question{
  font-size: 21px;
  margin-bottom: 10px;
}
.answers {
  margin-bottom: 20px;
  text-align: left;
  display: inline-block;
}
.answers label{
  display: block;
  margin-bottom: 5px;
}
button{
  font-family: 'Work Sans', sans-serif;
  font-size: 20px;
  background-color: #279;
  color: #fff;
  border: 0px;
  border-radius: 3px;
  padding: 14px;
  cursor: pointer;
  margin-bottom: 30px;
  margin-top: 50px;
}
button:hover{
  background-color: #38a;
}

a:link 
{ 
text-decoration:none; 
} 

#tempodiv { 
  background-color: yellow;
}


buttonSair{
  font-family: 'Work Sans', sans-serif;
  font-size: 14px;
  background-color: rgb(255, 0, 0);
  color: #fff;
  border: 10px;
  border-radius: 10px;
  padding: 10px;
  cursor: pointer;
  margin-bottom: 20px;
  margin-top: 20px;
}
buttonSair:hover{
  background-color: rgb(255, 70, 70);;
}

.slide{
  position: absolute;
  left: 0px;
  top: 0px;
  width: 100%;
  z-index: 1;
  opacity: 0;
  transition: opacity 0.5s;
}
.active-slide{
  opacity: 1;
  z-index: 2;
}
.quiz-container{
  position: relative;
  height: 200px;
  margin-top: 40px;
}

</style>


<script>
  window.console = window.console || function(t) {};
</script>

<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>



<body translate="no" onload="start2();" >
  <h1>Simulador - Detran</h1>


  <div id="tempodiv"><span id="tempo2"></span></div>


<div class="quiz-container">
  <div id="quiz"></div>
</div>
<button id="previous">Anterior</button>
<button id="next">Próxima</button>
<button id="submit">Corrigir</button>
<button id="restart">Reiniciar</button>
<div id="results"></div>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

  
<?php 
  include_once("questoes.php");
  include_once("provas/arquivo_".$_SESSION['id'].".php");
?>


    <script src="https://static.codepen.io/assets/editor/live/css_reload-5619dc0905a68b2e6298901de54f73cefe4e079f65a75406858d92924b4938bf.js"></script>


</body>

</html>
 
