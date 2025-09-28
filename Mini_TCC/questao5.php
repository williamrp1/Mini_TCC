<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 5</title>
    <link href="css1/style.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="css1/images/logo.ico" type="image/x-icon">
</head>
<body>
    <?php
    session_start();
    if (isset($_POST["questao4"])) {
        $_SESSION["q4"] = $_POST["questao4"];
}
?>
    <p class="fonte2" id="q5">Who's That Pokémon?  </p>
    <audio id="pokemonSound" src="css1/whos-that-pokemon.mp3"></audio> <!-- Pelo que eu entendi sempre que você for colocar um audio você tem que colocar ele antes do negocio que vai usar ele se nn ele nn funciona ai você só precisa colocar um id pra usar ele -->
    <img src="css1/images/quem_é.png" alt="Quem é esse Pokemon?" class="Pokemon" onclick="document.getElementById('pokemonSound').play();"> <!--Aqui ele tá pegando o id do audio e quando o usuario clicar na imagem ele vai tocar o som -->
    <form action="questao6.php" class="forms5" method="post" id="formQuestao5">
      <div class="alternativas" >
        <label right-answer="true"><input class="tamRadio" name="questao5" id="q5A" type="radio" value="A" >Cryogonal </label>
        <label><input class="tamRadio" name="questao5" id="q5B" type="radio" value="B" > Snover </label>
        <label><input class="tamRadio" name="questao5" id="q5C" type="radio" value="C" > Vaniluxe </label>
        <label><input class="tamRadio" name="questao5" id="q5D" type="radio" value="D" > Jigglypuff </label>
        <label><input class="tamRadio" name="questao5" id="q5E" type="radio" value="E" > Electrode </label>
      </div>
    </form>
</body>
        <footer class="fixar-rodape">
       Desenvolvido por Gabriel Victor Machado Silva e Eduardo Minghetti
      </footer>
      <script src="javascript/.js"></script>
</html>