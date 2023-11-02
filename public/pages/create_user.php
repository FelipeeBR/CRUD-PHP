<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Cadastro de Usuário</h2>
    <?= get('message');?>
    <form action="/pages/forms/create_user.php" method="POST" role="form">
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control" name="name" placeholder="Digite seu nome">
        </div>
        <div class="form-group">
            <label for="">Sobrenome</label>
            <input type="text" class="form-control" name="lastName" placeholder="Digite seu sobrenome">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Digite seu e-mail">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Digite sua senha">
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</body>
</html>