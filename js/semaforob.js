var color = "rojo";
var tiempo = 0;

function ciclo(){
  $.ajax({
    url: 'server.php',
    method: 'get',
    success: function(info){
      color = info;
    }
  });

  if(color == 'rojo'){
    color = 'verde';
  }
  else if(color == 'verde'){
    color = 'rojo';
  }
  else if(color == 'amarillo'){
    color = 'rojo';
  }
  $(".luz").hide();
  $("#"+color).show();
  setInterval(ciclo, 1000);
}
