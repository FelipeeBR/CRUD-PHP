<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $user = find('users', 'id', $_GET['id']);
    ?>
    <h2>Editar dados do Usuário</h2>
    <?= get('message');?>
    <form action="/pages/forms/update_user.php" method="POST" role="form">
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control" name="name" placeholder="Digite seu nome" value="<?= $user->name?>">
        </div>

        <input type="hidden" name="id" value="<?= $user->id?>">

        <div class="form-group">
            <label for="">Sobrenome</label>
            <input type="text" class="form-control" name="lastName" placeholder="Digite seu sobrenome" value="<?= $user->lastName?>">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Digite seu e-mail" value="<?= $user->email?>">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</body>
</html>