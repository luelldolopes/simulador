<script type="text/javascript">
var cont = new Number();
var cont = 41;

function start(){
    if ((cont - 1) >=0) {
        cont = cont - 1;

        if (cont == 0){
        alert("O tempo esgotou!");
        }

        tempo.innerText = cont+" minutos restantes";
        setTimeout('start();', 60000);
    }
}

</script>