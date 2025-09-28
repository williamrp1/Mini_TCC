<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 6</title>
    <link href="css1/style.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="css1/images/logo.ico" type="image/x-icon">
</head>
<body>
    <?php
    session_start();
    if (isset($_POST["questao5"])) {
        $_SESSION["q5"] = $_POST["questao5"];
}
?>
    <p class="fonte2">What is the first legendary that appears in Pokemon? </p>
    <form action="questao7.php" class="forms" method="post" id="formQuestao6">
        <div class="alternativas" >
            <label><input class="tamRadio" name="questao6" id="q6A" type="radio" value="A" >Mewtwo </label>
            <label><input class="tamRadio" name="questao6" id="q6B" type="radio" value="B" > Mew </label>
            <label right-answer="true"><input class="tamRadio" name="questao6" id="q6C" type="radio" value="C" > Ho-Oh </label>
            <label><input class="tamRadio" name="questao6" id="q6D" type="radio" value="D" > Zapdos </label>
            <label><input class="tamRadio" name="questao6" id="q6E" type="radio" value="E" > Articuno </label>
        </div> 
    </form>
</body>
    <!--Rodapé -->
      <footer class="fixar-rodape">
            Desenvolvido por Gabriel Victor Machado Silva e Eduardo Minghetti
      </footer>

        <script src="javascript/.js"></script>
</html>