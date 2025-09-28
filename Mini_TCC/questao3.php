<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 3</title>
    <link href="css1/style.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="css1/images/logo.ico" type="image/x-icon">
    <script>

        
    </script>
</head>
<body>
    <?php
    session_start();
    if (isset($_POST["questao2"])) {
        $_SESSION["q2"] = $_POST["questao2"];
}
?>

    <p class="fonte2">What was the fifth city that Ash visited on his journey? </p>
    <form action="questao4.php" class="forms" method="post" id="formQuestao3">
        <div class="alternativas">
            <label> <input type="radio" name="questao3" value="A"> Pallet Town</label>
            <label><input type="radio" name="questao3" value="B"> Pewter City</label>
            <label><input type="radio" name="questao3" value="C"> Viridian City</label>
            <label><input type="radio" name="questao3" value="D"> Cerulan City</label>
            <label right-answer="true"><input type="radio" name="questao3" value="E"> Vermilion City</label>
        </div>
 

</form>

</body>
    <!--Rodapé -->
      <footer class="fixar-rodape">
       Desenvolvido por Gabriel Victor Machado Silva e Eduardo Minghetti
      </footer>

        <script src="javascript/.js"></script>
</html>