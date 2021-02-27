<html>
<head>
    <title>Upload de imagens</title>

<body>
<form method="POST" enctype="multipart/form-data">
    <label for="conteudo">Enviar imagem:</label>
    <input type="file" name="pic" accept="image/*">

    <div align="center">
        <button type="submit">Cadastrar notícia</button>
    </div>
</form>

<hr>

<?php
if (isset($_FILES['pic'])) {
    $ext = strtolower(substr($_FILES['pic']['name'], -4)); //Pegando extensão do arquivo
    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
    $dir = './imagens/'; //Diretório para uploads

    move_uploaded_file($_FILES['pic']['tmp_name'], $dir . $new_name); //Fazer upload do arquivo
    echo("Imagen enviada com sucesso!");
}


// conexão com o banco, antes do INSERT
?>

</body>
</html>