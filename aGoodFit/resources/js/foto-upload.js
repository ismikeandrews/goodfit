const reader = new FileReader();
const fotoPerfil = document.getElementById("foto-perfil");
const selecaoArquivo = document.getElementById("selecao-arquivo");

selecaoArquivo.onchange = function(){
  reader.onload = function(){
    if (reader.readyState == 2) {
      fotoPerfil.src = reader.result;
    }
  }
  reader.readAsDataURL(event.target.files[0]);
}
