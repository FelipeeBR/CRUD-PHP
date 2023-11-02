# CRUD-PHP
Sistema para aprendizado da linguagem PHP.

Colocando em prática o conjunto de operações Create, Read, Update, Delete, utilizando PDO e o MySQL para salvar os dados.

Para criar a tabela:

```sql
CREATE TABLE users (
     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
     name varchar(100),
     lastName varchar(100),
     email varchar(100),
     password varchar(255)
);
```

Configurar o Envio de Emails:

```php
    $email -> Host = 'Host do email aqui';
    $email -> Port = 465;
    $email -> Username = 'id do usuario';
    $email -> Password = 'senha do usuario';
    $email -> setFrom('seu email aqui');
```

