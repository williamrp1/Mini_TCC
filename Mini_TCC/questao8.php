<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css1/style.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="css1/images/logo.ico" type="image/x-icon">
    <title>Questão 8</title>
</head>
<body>
    <?php
    session_start();
    if (isset($_POST["questao7"])) {
        $_SESSION["q7"] = $_POST["questao7"];
}
?>
    <p class="fonte2">How many pokemon does the pokedex have? <br>
    <form action="resultado.php" class="forms" method="post" id="formQuestao8">
      <div class="alternativas" >
        <label><input class="tamRadio" name="questao8" id="q8A" type="radio" value="A" >1.123 </label>
        <label ><input class="tamRadio" name="questao8" id="q8B" type="radio" value="B" > 1.197 </label>
        <label right-answer="true"><input class="tamRadio" name="questao8" id="q8B" type="radio" value="C" > 1.125 </label>
        <label><input class="tamRadio" name="questao8" id="q8B" type="radio" value="D" > 1.164 </label>
        <label><input class="tamRadio" name="questao8" id="q8B" type="radio" value="E" > 1.124 </label>
        </div> 
    </form>    
</body>
    <!--Rodapé -->
      <footer class="fixar-rodape">
       Desenvolvido por Gabriel Victor Machado Silva e Eduardo Minghetti
      </footer>

        <script src="javascript/.js"></script>
</html>
	 
		