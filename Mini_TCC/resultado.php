<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css1/style.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="css1/images/logo.ico" type="image/x-icon">
    <title>Final Result</title>
</head>
 <body>
   <?php
  session_start();
  if (isset($_POST["questao8"])) {
      $_SESSION["q8"] = $_POST["questao8"];
  }
  //IFs pra contar a quantidade de acertos
     $acertos = 0; 
     if($_SESSION["q1"]=="A"){
       $acertos++;
     }
     if($_SESSION["q2"]=="C"){
       $acertos++;
     }
     if($_SESSION["q3"]=="E"){
       $acertos++;
     }
     if($_SESSION["q4"]=="C"){
       $acertos++;
     }
     if($_SESSION["q5"]=="A"){
       $acertos++;
     }
     if($_SESSION["q6"]=="C"){
       $acertos++;
     }
     if($_SESSION["q7"]=="B"){
       $acertos++;
     }
     if($_SESSION["q8"]=="C"){
       $acertos++;
     }
     
     //Pra cada quantidade de acertos ele vai colocar uma imagem diferente
     if($acertos <= 3) {
          echo "<br> <div> <p class='textofinal'> You answered correctly $acertos questions.</p></div><br>
     <div> <img class='imgfinal' src='css1/images/triste.gif'> </div> <br> <div> <a href='../menu2aa.html' class='menu'> Menu </a> </div>";
    }
     else if ($acertos > 3 && $acertos <= 6 ) {
     echo "<br> <div> <p class='textofinal'> You answered correctly $acertos questions.</p></div><br>
     <div> <img class='imgfinal' src='css1/images/pikachu.gif'> </div> <br> <div> <a href='../menu2aa.html' class='menu'> Menu </a> </div>";
     }
     else if ($acertos > 6) {
     echo "<br> <div> <p class='textofinal'> You answered correctly $acertos questions.</p></div><br>
     <div> <img class='imgfinal' src='css1/images/shocked.gif'> </div> <br> <div> <a href='../menu2aa.html' class='menu'> Menu </a> </div>";
     }
	?>
 </body>
    <!--Rodapé -->
             <footer class="fixar-rodape">
       Desenvolvido por Gabriel Victor Machado Silva e Eduardo Minghetti
      </footer>
      <script src="javascript/.js"></script>
</html>