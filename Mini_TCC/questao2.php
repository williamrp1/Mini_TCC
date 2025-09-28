<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 2</title>
    <link href="css1/style.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="css1/images/logo.ico" type="image/x-icon">
</head>
<body>
    <?php
    session_start();
    if (isset($_POST["questao1"])) {
        $_SESSION["q1"] = $_POST["questao1"];
}
?>
    
    <p class="fonte2">What is ash's first Pokemon battle?</p>
    <form action="questao3.php" class="forms" method="post" id="formQuestao2">
        <div class="alternativas">
            <label> <input type="radio" name="questao2" value="A"> Misty</label>
            <label><input type="radio" name="questao2" value="B"> Brock</label>
            <label right-answer="true"><input type="radio" name="questao2" value="C"> Gary Oak</label>
            <label><input type="radio" name="questao2" value="D"> Bepin</label>
            <label><input type="radio" name="questao2" value="E"> Koga</label>
        </div>  
    </form>
</body>
    <!--Rodapé -->
      <footer class="fixar-rodape">
       Desenvolvido por Gabriel Victor Machado Silva e Eduardo Minghetti
      </footer>

        <script src="javascript/.js"></script>
</html>