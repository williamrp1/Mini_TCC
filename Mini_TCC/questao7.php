<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 7</title>
    <link href="css1/style.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="css1/images/logo.ico" type="image/x-icon">

</head>
<body>
    <?php
    session_start();
    if (isset($_POST["questao6"])) {
        $_SESSION["q6"] = $_POST["questao6"];
}
?>
    <p class="fonte2">Who's That Pokémon? </p>
    <audio id="pokemonSound" src="css1/whos-that-pokemon.mp3"></audio>
    <img src="css1/images/Jigglypuff.png" onclick="document.getElementById('pokemonSound').play();" alt="Quem é esse Pokemon?" class="Pokemon">
    <form action="questao8.php" class="forms7" method="post" id="formQuestao7">    
        <div class="alternativas" >
            <label><input class="tamRadio" name="questao7" id="q7A" type="radio" value="A" >Chingling </label>
            <label right-answer="true"><input class="tamRadio" name="questao7" id="q7B" type="radio" value="B" > Jigglypuff </label> 
            <label> <input class="tamRadio" name="questao7" id="q7C" type="radio" value="C" > Voltorb </label>
            <label> <input class="tamRadio" name="questao7" id="q7D" type="radio" value="D" > Electrode </label>
            <label> <input class="tamRadio" name="questao7" id="q7E" type="radio" value="E" > Snorlax </label>
        </div> 
</form>

</body>
        <footer class="fixar-rodape">
       Desenvolvido por Gabriel Victor Machado Silva e Eduardo Minghetti
      </footer>
      <script src="javascript/.js"></script>
</html>