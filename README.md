# Plan-Class

Projeto desenvolvido com as linguagens JavaScript e PHP, visando implementar as funcionalidades básicas do SQL: CRUD (Create, Read, Update e Delete).

## Instruções para Criação das Tabelas

É importante ressaltar que caso o nome do banco de dados seja diferente de phjas(nome utilizado no src/conf.ini) ou qualquer tipo de alteração como port, usuário ou senha devem ser feitas
antes da criação das tabelas.

### 1. Tabela de Usuários

```sql 
CREATE TABLE usuarios (
    id INT(10) AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(150) UNIQUE,
    senha VARCHAR(150)
);

```

### 2. Tabela Biblioteca

```sql
CREATE TABLE biblioteca (
    id INT(10) AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT(10),
    autor VARCHAR(150),
    titulo VARCHAR(150),
    subtitulo VARCHAR(150),
    edicao VARCHAR(150),
    editora VARCHAR(150),
    data_de_publicacao DATE
);

```
