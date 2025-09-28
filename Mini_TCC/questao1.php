<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Question</title>
    <link href="css1/style.css" rel="stylesheet">
    <link rel="icon" href="css1/images/logo.ico" type="image/x-icon">

</head>
<body>
    <?php 
    // Essa parte serve para pegar as respostas da anterior e armazenar na pagina atual
    session_start(); 
    if (isset($_POST["questao1"])) {
    $_SESSION["q1"] = $_POST["questao1"];
}
?>
      <!--Se você estiver vendo isso professora não me tira nota pq eu tirei a validação pfvr-->
    <p class="fonte2">What was the first gym Ash fought in?</p>
    <form action="questao2.php" class="forms" method="post" id="formQuestao1">
        <div class="alternativas">
            <label right-answer="true"><input type="radio" name="questao1" value="A"> Rock</label> <!--resposta correta-->
            <label><input type="radio" name="questao1" value="B"> Electric</label>
            <label><input type="radio" name="questao1" value="C"> Dark</label>
            <label><input type="radio" name="questao1" value="D"> Water</label>
            <label><input type="radio" name="questao1" value="E"> Fire</label>
        </div>
    </form> 
</body>
    <!--Rodapé -->
      <footer class="fixar-rodape">
       Desenvolvido por Gabriel Victor Machado Silva e Eduardo Minghetti
      </footer>

        <script src="javascript/.js"></script>
</html>