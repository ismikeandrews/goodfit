# Nome do Projeto

Breve descrição do que se trata o projeto

---

# Integrantes
- **Cyntia**
- **Jonatas**
- **Nícolas**
- **Michael**
- **Vanessa**

---

> **Observações :**
- **1:** lista
- **2:** lista
- **3:** lista

---

# Laravel
======

### Instalação
---
- **1:** Instalar o composer
..* Verificar se o composer foi instalado com sucesso "composer" (bash/shell)
- **2:** Ultilizar o comando "composer global require laravel/installer" (bash/shell)
- **3:** Fazer o download do xamp (Windows) ou MAMP (Apple)

### Comandos
---
1. Criar um novo projeto: composer create-project --prefer-dist laravel/laravel nome-do-projeto
2. Iniciar o server: php artisan serve
3. Migrations servem para todos os Integrantes terem o mesmo esquema de banco de dados
⋅⋅* Para criar uma Migration: php artisan make:migration create_nome_da_tabela
⋅⋅* Para gerar uma Migration com o nome da tabela ja especificado ultilizar a bandeira:
--table NomeDaTabela
> **Observações :**
Uma Migration nunca tera o mesmo time stamp de outra para não haver conflito
⋅⋅* Para executar todas as Migrations ultilizar o comando: php artisan migrate
⋅⋅* Para voltar a Migration anterior ultilizar o comando: php artisan migrate:rollback
⋅⋅* Para voltar a um numero especifico de Migrations anterior ultilizar a bandeira: --step=5
⋅⋅* Para votar todas as Migration de sua applicação ultilizar o comando: php artisan migrate:reset
⋅⋅* [Clique aqui para mais codigos sobre Migration e como criar tabelas](https://laravel.com/docs/5.8/migrations)
4. Para ver todas a lista completa de comandos artisan: php artisan list
5. Para entender o que certo comando faz ultilizar: php artisan help NomeDoComando
6. Para testar e interagir com sua aplicação: php artisan tinker
7. Para criar um novo comando: php artisan make:command NomeDoComando
⋅⋅* Comandos são customizaveis e você pode editar como eles a descrição help e list deles
8. para criar um sistema de autenticação: php artisan make:auth
9. para remover todos os estilos padroes laravel do front-end (Bootstrap, Vue, css e Js) e deixar apenas funcoes basicas do Js e arquivos SASS em branco: php artisan preset none
10. Caso for ultilizar react e queira remover todos os estilos pré-definidos: php artisan preset react

[**Clique aqui para mais informacoes**](https://laravel.com/docs/5.8)
