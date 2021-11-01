function lancement() {
    'use strict';
    
    $('#starc41').click(function() {
        colorerEtoile(5);
        reponseQuestion = $(this).attr('value');
    });
    $('#starc41').hover(function() {
        colorerEtoile(5);
    });
    
    $('#starc42').click(function() {
        var valeurclique = $(this).attr('value');
        colorerEtoile(4);
        reponseQuestion = valeurclique;
    });
    $('#starc42').hover(function() {
        colorerEtoile(4);
    });
    $('#starc43').click(function() {
        var valeurclique = $(this).attr('value');
        colorerEtoile(3);
        reponseQuestion = valeurclique;
    });
    $('#starc43').hover(function() {
        colorerEtoile(3);
        document.getElementById("message").style.visibility = "visible";
    });
    $('#starc44').click(function() {
        var valeurclique = $(this).attr('value');
        colorerEtoile(2);
        reponseQuestion = valeurclique;
    });
    $('#starc44').hover(function() {
        colorerEtoile(2);
    });
    $('#starc45').click(function() {
        var valeurclique = $(this).attr('value');
        colorerEtoile(1);
        reponseQuestion = valeurclique;
    });
    $('#starc45').hover(function() {
        colorerEtoile(1);
    });
    $('.c3').mouseout(function() {
        colorerEtoile(parseInt(reponseQuestion,10));
    });
    
   
}


function colorerEtoile(n) {
    switch(n) {
        case 0:
            $('#starc41').css('color','#0a9abc');
            $('#starc41').css('text-shadow','none');
            $('#starc42').css('color','#0a9abc');
            $('#starc42').css('text-shadow','none');
            $('#starc43').css('color','#0a9abc');
            $('#starc43').css('text-shadow','none');
            $('#starc44').css('color','#0a9abc');
            $('#starc44').css('text-shadow','none');
            $('#starc45').css('color','#0a9abc');
            $('#starc45').css('text-shadow','none');
            break;
        case 1:
            $('#starc45').css('color','#ffce00');
            $('#starc45').css('text-shadow','0 0px 15px yellow');
            $('#starc41').css('color','#0a9abc');
            $('#starc41').css('text-shadow','none');
            $('#starc42').css('color','#0a9abc');
            $('#starc42').css('text-shadow','none');
            $('#starc43').css('color','#0a9abc');
            $('#starc43').css('text-shadow','none');
            $('#starc44').css('color','#0a9abc');
            $('#starc44').css('text-shadow','none');
            break;
        case 2:
            $('#starc44').css('color','#ffce00');
            $('#starc44').css('text-shadow','0 0px 15px yellow');
            $('#starc41').css('color','#0a9abc');
            $('#starc41').css('text-shadow','none');
            $('#starc42').css('color','#0a9abc');
            $('#starc42').css('text-shadow','none');
            $('#starc43').css('color','#0a9abc');
            $('#starc43').css('text-shadow','none');
            $('#starc45').css('color','#ffce00');
            $('#starc45').css('text-shadow','0 0px 15px yellow');
            break;
        case 3:
            $('#starc43').css('color','#ffce00');
            $('#starc43').css('text-shadow','0 0px 15px yellow');
            $('#starc41').css('color','#0a9abc');
            $('#starc41').css('text-shadow','none');
            $('#starc42').css('color','#0a9abc');
            $('#starc42').css('text-shadow','none');
            $('#starc44').css('color','#ffce00');
            $('#starc44').css('text-shadow','0 0px 15px yellow');
            $('#starc45').css('color','#ffce00');
            $('#starc45').css('text-shadow','0 0px 15px yellow');
            break;
        case 4:
            $('#starc42').css('color','#ffce00');
            $('#starc42').css('text-shadow','0 0px 15px yellow');
            $('#starc41').css('color','#0a9abc');
            $('#starc41').css('text-shadow','none');
            $('#starc43').css('color','#ffce00');
            $('#starc43').css('text-shadow','0 0px 15px yellow');
            $('#starc44').css('color','#ffce00');
            $('#starc44').css('text-shadow','0 0px 15px yellow');
            $('#starc45').css('color','#ffce00');
            $('#starc45').css('text-shadow','0 0px 15px yellow');
            break;
        case 5:
            $('#starc41').css('color','#ffce00');
            $('#starc41').css('text-shadow','0 0px 15px yellow');
            $('#starc42').css('color','#ffce00');
            $('#starc42').css('text-shadow','0 0px 15px yellow');
            $('#starc43').css('color','#ffce00');
            $('#starc43').css('text-shadow','0 0px 15px yellow');
            $('#starc44').css('color','#ffce00');
            $('#starc44').css('text-shadow','0 0px 15px yellow');
            $('#starc45').css('color','#ffce00');
            $('#starc45').css('text-shadow','0 0px 15px yellow');
        default:
            break;
            
    }
}

var reponseQuestion= "0";
window.onload = lancement;
