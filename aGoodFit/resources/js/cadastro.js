$(document).ready(function(){
  $('#senha').complexify({},function(valid, complex){
    var progress = $('#senha');
    progress.toggleClass('borda-progresso-valido', valid);
    progress.toggleClass('borda-progresso-invalido', !valid);
  });
});
