<script>
//============================================================+
// File name   : 1_1.php
// Version     : 1 
// Begin       : 20021-09-03
// Author      : Derlyn Garzon - Lynn projects -  https://www.youtube.com/channel/UCTLGtkalqf5CqbR6734VdMw?sub_confirmation=1 - Lynn learn
// -------------------------------------------------------------------
// Copyright (C) 2021 Derlyn Garzon - Lynn projects
</script>

<html>
<header>
<style>
body{
    margin:0px;
    padding:0px;
    position:relative;
}
.cont_bas{

    height: 25px;
    background:#111;
    position:absolute;
    top:0px;
    left:20px;
    width:20px;
}

.cont_bas1{

    height: 25px;
    background:#2903a1;
    position:absolute ;
    top:0px;
    left:500px;
    width:20px;
}

.cont_bas2{
 
    height: 25px;
    background:#7902a8;
    top:0px;
    position:absolute ;
    left:900px;
    width:20px;
}


.cont_bas{

    height: 25px;
    background:#111;
    position:absolute;
    top:0px;
    left:20px;
    width:20px;
}

.cont_bas1{

    height: 25px;
    background:#2903a1;
    position:absolute ;
    top:0px;
    left:500px;
    width:20px;
}

.cont_bas2{
 
    height: 25px;
    background:#7902a8;
    top:0px;
    position:absolute ;
    left:900px;
    width:20px;
}


.cont_basy{

height: 25px;
background:#111;
position:absolute;
top:20px;
width:20px;
}

.cont_bas1y{

height: 25px;
background:#2903a1;
position:absolute ;
top:320px;

width:20px;
}

.cont_bas2y{

height: 25px;
background:#7902a8;
top:520px;
position:absolute ;

width:20px;
}

</style>
</header>
<body>
<!--Movimientos en x -->
<div style='width:100%;position:relative'>
<div id="span1" class="cont_bas" style="">23</div>
<div id="span2" class="cont_bas1" style="">23</div>
<div id="span3" class="cont_bas2" style="">23</div>
</div>


<br>
<br>
<!--Movimientos en y -->
<div style='width:25px;position:relative;background:#ccc;height:auto;padding:10px;height: 564px;'>
<div id="span1y" class="cont_basy" style="">23</div>
<div id="span2y" class="cont_bas1y" style="">23</div>
<div id="span3y" class="cont_bas2y" style="">23</div>
</div>


</body>
</html>
<script>
elem1 =document.getElementById("span1y");
elem2 =document.getElementById("span2y");
elem3 =document.getElementById("span3y");


movizq = elem2.getBoundingClientRect()['y'] - elem1.getBoundingClientRect()['y'];//valor positivo
movder = elem2.getBoundingClientRect()['y'] - elem3.getBoundingClientRect()['y'];//valor negativo
console.log(movizq);
console.log(movder);


function perseguirDivEjeX(elemEnmovimiento, elemPerseguir){
    
    var movientoX = 10;
    var elemEnmovimientoEjeX = elemEnmovimiento.getBoundingClientRect()['x'];
    var elemPerseguirEjeX =  elemPerseguir.getBoundingClientRect()['x'];
    //valor positivo -> se mueve a la izq, valor negativo -> mueve a la derecha 
    var diferenciCoordenadEjeX =  elemEnmovimientoEjeX - elemPerseguirEjeX;
    //var diferenciCoordenadEjeXPartedecimal = ;
    console.log('diferncia::');
    console.log(diferenciCoordenadEjeX);

    //movimiento a la izquierda
    if(diferenciCoordenadEjeX>=0){
        if(diferenciCoordenadEjeX > movientoX){   
            elemEnmovimiento.style.left = elemEnmovimiento.getBoundingClientRect()['x'] - movientoX + 'px'; 
            setTimeout(function(){ perseguirDivEjeX(elemEnmovimiento, elemPerseguir); }, 100);
        }else if(diferenciCoordenadEjeX > 1){
            //console.log('de 1 en 1');
            elemEnmovimiento.style.left = elemEnmovimiento.getBoundingClientRect()['x'] - 1 + 'px'; 
            setTimeout(function(){ perseguirDivEjeX(elemEnmovimiento, elemPerseguir); }, 100);
        }else{
            //console.log('resta toda la diferencia y termina');
            elemEnmovimiento.style.left = elemEnmovimiento.getBoundingClientRect()['x'] - diferenciCoordenadEjeX + 'px'; 
        }   
    }else{
        var diferenciCoordenadEjeXAbsoluto =  diferenciCoordenadEjeX*-1;
        console.log('movimiento a la derecha');
        console.log('diffabsoluta');
        console.log(diferenciCoordenadEjeXAbsoluto);
        if(diferenciCoordenadEjeXAbsoluto > movientoX){   
            console.log(2390);
            console.log()
            elemEnmovimiento.style.left = elemEnmovimiento.getBoundingClientRect()['x'] + movientoX + 'px'; 
            setTimeout(function(){ perseguirDivEjeX(elemEnmovimiento, elemPerseguir); }, 100);
        }else if(diferenciCoordenadEjeXAbsoluto > 1){
            //console.log('de 1 en 1');
            elemEnmovimiento.style.left = elemEnmovimiento.getBoundingClientRect()['x'] + 1 + 'px'; 
            setTimeout(function(){ perseguirDivEjeX(elemEnmovimiento, elemPerseguir); }, 100);
        }else{
            //console.log('resta toda la diferencia y termina');
            elemEnmovimiento.style.left = elemEnmovimiento.getBoundingClientRect()['x'] + diferenciCoordenadEjeXAbsoluto + 'px'; 
        }
    } 

    return 0; 
}


//perseguirDivEjeX(document.getElementById("span2"), document.getElementById("span1"));
//perseguirDivEjeX(document.getElementById("span2"), document.getElementById("span3"));



/*function perseguirDivEjeY(elemEnmovimiento, elemPerseguir){
    
    var movientoX = 10;
    var elemEnmovimientoEjeX = elemEnmovimiento.getBoundingClientRect()['x'];
    var elemPerseguirEjeX =  elemPerseguir.getBoundingClientRect()['x'];
    //valor positivo -> se mueve a la izq, valor negativo -> mueve a la derecha 
    var diferenciCoordenadEjeX =  elemEnmovimientoEjeX - elemPerseguirEjeX;
    //var diferenciCoordenadEjeXPartedecimal = ;
    console.log('diferncia::');
    console.log(diferenciCoordenadEjeX);

    //movimiento a la izquierda
    if(diferenciCoordenadEjeX>=0){
        if(diferenciCoordenadEjeX > movientoX){   
            elemEnmovimiento.style.left = elemEnmovimiento.getBoundingClientRect()['x'] - movientoX + 'px'; 
            setTimeout(function(){ perseguirDivEjeX(elemEnmovimiento, elemPerseguir); }, 100);
        }else if(diferenciCoordenadEjeX > 1){
            //console.log('de 1 en 1');
            elemEnmovimiento.style.left = elemEnmovimiento.getBoundingClientRect()['x'] - 1 + 'px'; 
            setTimeout(function(){ perseguirDivEjeX(elemEnmovimiento, elemPerseguir); }, 100);
        }else{
            //console.log('resta toda la diferencia y termina');
            elemEnmovimiento.style.left = elemEnmovimiento.getBoundingClientRect()['x'] - diferenciCoordenadEjeX + 'px'; 
        }   
    }else{
        var diferenciCoordenadEjeXAbsoluto =  diferenciCoordenadEjeX*-1;
        console.log('movimiento a la derecha');
        console.log('diffabsoluta');
        console.log(diferenciCoordenadEjeXAbsoluto);
        if(diferenciCoordenadEjeXAbsoluto > movientoX){   
            console.log(2390);
            console.log()
            elemEnmovimiento.style.left = elemEnmovimiento.getBoundingClientRect()['x'] + movientoX + 'px'; 
            setTimeout(function(){ perseguirDivEjeX(elemEnmovimiento, elemPerseguir); }, 100);
        }else if(diferenciCoordenadEjeXAbsoluto > 1){
            //console.log('de 1 en 1');
            elemEnmovimiento.style.left = elemEnmovimiento.getBoundingClientRect()['x'] + 1 + 'px'; 
            setTimeout(function(){ perseguirDivEjeX(elemEnmovimiento, elemPerseguir); }, 100);
        }else{
            //console.log('resta toda la diferencia y termina');
            elemEnmovimiento.style.left = elemEnmovimiento.getBoundingClientRect()['x'] + diferenciCoordenadEjeXAbsoluto + 'px'; 
        }
    } 

    return 0; 
}

perseguirDivEjeY(document.getElementById("span2y"), document.getElementById("span1y"));*/
</script>


