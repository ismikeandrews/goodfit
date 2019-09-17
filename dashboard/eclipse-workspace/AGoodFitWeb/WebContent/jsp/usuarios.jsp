<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
  </head>
  <body>
    <jsp:include page="header.jsp"/>
  	<div class="container mt-5">
      <h2>Novo Usuario</h2>
      <hr>
      <form class="needs-validation" action="cadastro.jsp">
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="login">Login</label>
            <input type="text" name="login" id="login" class="form-control">
          </div>
          <div class="col-md-6 mb-3">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="email@example.com">
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label for="nivel">Nivel Usuario</label>
            <select class="form-control" name="nivel" id="nivel">
              <option value="">Selecione</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control">
          </div>
          <div class="col-md-6 mb-3">
            <label for="confirme">Confirme a senha</label>
            <input type="password" id="confirme" name="confirme" class="form-control">
          </div>
        </div>
        <button class="btn btn-success btn-lg btn-block" type="submit">Proximo</button>
      </form>
    </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
