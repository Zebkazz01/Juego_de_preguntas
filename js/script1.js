// -------------------------------------Animacion Principal-----------------------------------
var inic = document.querySelector(".inic");
var prin = document.querySelector(".prin");
var bodyb = document.querySelector(".bodyb");
var fondoninos = document.querySelector(".fondoninos");
var fondofamily = document.querySelector(".fondofamily");
var fondotruck = document.querySelector(".fondotruck");
var footerm = document.querySelector(".footerm");
var content1 = document.querySelector(".contenido");

    document.addEventListener("keydown", (event) =>{
        if (event.key === "Enter"){
            animacion1();
        }
    });
    document.getElementById("anima").addEventListener("click", animacion1);
    function animacion1(){
        inic.classList.remove("inic");
        inic.classList.add("inic_move");
        prin.classList.remove("prin");
        prin.classList.add("prin_move");
        bodyb.classList.remove("bodyb");
        bodyb.classList.add("bodyb_move");
        fondoninos.classList.remove("fondoninos");
        fondoninos.classList.add("fondoninos_move");
        fondofamily.classList.remove("fondofamily");
        fondofamily.classList.add("fondofamily_move");
        fondotruck.classList.remove("fondotruck");
        fondotruck.classList.add("fondotruck_move");
        footerm.classList.remove("footerm");
        footerm.classList.add("footerm_move");
        content1.classList.remove("contenido");
        content1.classList.add("content_move");
        document.getElementById('encabezadof').style.display="none";
        document.getElementById('homep').style.display="none";
        setTimeout(sol_ini, 6000);
        function sol_ini(){
            document.getElementById('sol_des').style.opacity="100%";
        }
    }
// -------------------------------------Menu bienvenida-----------------------------------

let seleccion = [".opc",".opc1",".opc2",".opc3",".opc4"];
let seleccioni = [".info",".info1",".info2",".info3",".info4"];
let selecciont = [".tit_info",".tit_info1",".tit_info2",".tit_info3",".tit_info4"];

function sel(val) {
    for (n = 0; n < 5; n++) {
        var opcion = document.querySelector(seleccion[n]);
        opcion.classList.remove("opc_move");
        var info = document.querySelector(seleccioni[n]);
        info.classList.remove("info_move");
        var tit_info = document.querySelector(selecciont[n]);
        tit_info.classList.remove("tit_info_move");
        document.querySelector(".homebs").style.background ="";
        document.querySelector(".fa-circle-caret-right").style.color ="";
    }
    if (val == "opc") {
        var opcion = document.querySelector(".opc");
            opcion.classList.add("opc_move");
        var info = document.querySelector(".info");
            info.classList.add("info_move");
        var tinfo = document.querySelector(".tit_info");
            tinfo.classList.add("tit_info_move");
    }else if (val == "opc1") {
        var opcion = document.querySelector(".opc1");
            opcion.classList.add("opc_move");
        var info1 = document.querySelector(".info1");
            info1.classList.add("info_move");
        var tinfo1 = document.querySelector(".tit_info1");
            tinfo1.classList.add("tit_info_move");
        document.querySelector(".homebs").style.background ="#062b7a";
        document.querySelector(".fa-circle-caret-right").style.color ="#fff";
    }else if (val == "opc2") {
        var opcion = document.querySelector(".opc2");
            opcion.classList.add("opc_move");
        var info2 = document.querySelector(".info2");
            info2.classList.add("info_move");
        var tinfo2 = document.querySelector(".tit_info2");
            tinfo2.classList.add("tit_info_move");
    }else if (val == "opc3") {
        var opcion = document.querySelector(".opc3");
            opcion.classList.add("opc_move");
        var info3 = document.querySelector(".info3");
            info3.classList.add("info_move");
        var tinfo3 = document.querySelector(".tit_info3");
            tinfo3.classList.add("tit_info_move");
    }else if (val == "opc4") {
        var opcion = document.querySelector(".opc4");
            opcion.classList.add("opc_move");
        var info4 = document.querySelector(".info4");
            info4.classList.add("info_move");
        var tinfo4 = document.querySelector(".tit_info4");
            tinfo4.classList.add("tit_info_move");
    }
    
    
}       
        
