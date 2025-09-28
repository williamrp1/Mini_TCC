<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 4</title>
    <link href="css1/style.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="css1/images/logo.ico" type="image/x-icon">
</head>
<body>
    <?php
    session_start();
    if (isset($_POST["questao3"])) {
        $_SESSION["q3"] = $_POST["questao3"];
}
?>
    <p class="fonte2">Who is Ashe rival in the Unova region? </p>
    <form action="questao5.php" class="forms" method="post" id="formQuestao4">
        <div class="alternativas">
            <label><input name="questao4" id="q4A" type="radio" value="A" >Gary </label>
            <label><input name="questao4" id="q4B" type="radio" value="B" > Tobias </label>
            <label right-answer="true"><input name="questao4" id="q4C" type="radio" value="C" > Trip </label>
            <label><input name="questao4" id="q4D" type="radio" value="D" > Paul </label>
            <label><input name="questao4" id="q4E" type="radio" value="E" > Misty </label>
        </div>
    </form>
</body>
     <!--Rodapé -->
      <footer class="fixar-rodape">
            Desenvolvido por Gabriel Victor Machado Silva e Eduardo Minghetti
      </footer>

        <script src="javascript/.js"></script>
</html>