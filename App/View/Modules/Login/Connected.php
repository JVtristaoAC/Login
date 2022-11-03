<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/View/Modules/Login/style.css"> 
    <title>Lista Categoria</title>
</head>
 <body class="Fundo">
 <img src="https://preview.redd.it/a5t5lyy7pui81.jpg?auto=webp&s=106e7b43f584fcb5640b06062ab0f7057582dba5" class="wallpaper"/>
 

 <table>
    <tr>
        <th></th>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Senha</th>
    </tr>
        <?php foreach($model->rows as $item): ?>
<tr>
<td> 
     <a href="/login/delete?id=<?= $item->id?>">X </a>
    </td>
 <td>
    <?= $item->id ?> 
    </td>

 <td>
 <a href="/login/form?id=<?= $item->id?>"> <?= $item->nome ?> </a>
    </td>

 <td>
     <?= $item->email ?>
    </td>

    <td>
     <?= $item->senha ?>
    </td>
</tr>
    <?php endforeach ?>
</table>

</body>
</html>

