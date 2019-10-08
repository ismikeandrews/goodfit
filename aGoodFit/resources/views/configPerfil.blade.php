<h1>Pagina de configuracoes</h1>
<a href="/home">voltar</a>
<br>
<img src="/images/candidatos/{{$candidato->fotoCandidato}}" width="250" alt="">
<br>
<form enctype="multipart/form-data"  action="/candidato/configuracoes" method="post">
  @csrf
  <input type="file" name="foto">
  <input type="submit" value="Enviar">
</form>
<br>
{{$candidato->nomeCandidato}}
<br>
{{$candidato->cpfCandidato}}
<br>
{{$candidato->rgCandidato}}
<br>
{{$candidato->dataNascimentoCandidato}}
<br>
{{$usuario->loginUsuario}}
<br>
{{$usuario->email}}
