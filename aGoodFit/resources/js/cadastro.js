let senha = document.getElementById("senha");
let confirmar_senha = document.getElementById("confirmar_senha");

function validarSenha(){
  if(senha.value != confirmar_senha.value) {
    confirmar_senha.setCustomValidity("Senhas diferentes!");
  } else {
    confirmar_senha.setCustomValidity('');
  }
}
 
// senha.onchange = validarSenha;
// confirmar_senha.onkeyup = validarSenha;
