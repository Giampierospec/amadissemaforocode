var color = "rojo";
var tiempo = 0;
$(".luz").hide();
$("#"+color).show();

function ciclo(){
/*if(color == "rojo" && tiempo > 7){
  actualizarServidor('amarillo');
}*/

if(color =="rojo" && tiempo > 7/*$datos['rojo']*/){
    color = "verde";
    tiempo = 0;
    actualizarServidor(color);
  }
  else if(color == "amarillo" && tiempo > 2){
    color = "rojo";
    tiempo = 0;
  }
  else if(color == "verde" && tiempo > 5 /*$datos['verde'];*/){
    color = "amarillo";
    tiempo = 0;
    actualizarServidor(color);
  }
  tiempo++;
}
function actualizarServidor(cc){
  $.ajax({
    url:'server.php',
    method:'post',
    data:{'color':color},
    success:function(info){
      console.log(php);
    }
  });
  setInterval(ciclo, 1000);
}
