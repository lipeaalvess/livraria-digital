<?php
require_once "conexao.php";

$sql = "SELECT * FROM livros";
$consulta = $conexao->query($sql);
$livros = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" 
        content="width=device-width, initial-scale=1.0">

  <title>Livraria Digital</title>

  <link rel="stylesheet" href="estilo.css">
</head>
<body>
  
  <header>
    <h1>Livraria DIgital</h1>
    <p>Encontre seus proximos livros favoritos!</p>
  </header>

  <main>
    <h2>Nosso catálogo de e-books</h2>

    <?php foreach ($livros as $livro):?>
      <div class= "livro">
         <h3> <?= htmlspecialchars($livro['titulo']) ?></h3>
         <p> Autor: <?= htmlspecialchars($livro['autor']) ?></p>
         <p> Preço: R$ <?=number_format($livro['preco'],2,',','.') ?> </p>
       </div>
    <?php endforeach; ?>

  </main>
</body>
</html> 