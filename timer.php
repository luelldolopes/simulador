<script type="text/javascript">
var cont = new Number();
var cont = 39;
var cont2 = new Number();
var cont2 = 60;
function start2(){
    if ((cont2 ) >=-1) {
        cont2 = cont2 - 1;
        if (cont2 == -1){
        cont2 = 59;
 		cont = cont - 1;
 		}
        if (cont == 0){
        alert("O tempo esgotou!");
        }
        
 		if ((cont2) > 9) {
 		tempo2.innerText = cont+":"+cont2+" minutos restantes";
        setTimeout('start2();', 1000);
 		}else{
 		tempo2.innerText = cont+":"+"0"+cont2+" minutos restantes";
        setTimeout('start2();', 1000);
 		}
    }
}

</script>