function div(){
    if(window.document.getElementById("hid").style.display != "block"){
        window.document.getElementById("hid").style.display = "block";
        window.document.getElementById("exp").style.display = "none";
        window.document.getElementById("canc").style.display = "block";

    }else{
        window.document.getElementById("hid").style.display = "none";
        window.document.getElementById("exp").style.display = "block";
        window.document.getElementById("canc").style.display = "none";

    }
}


function aviso(){
    window.document.alert("Mensagem Enviada!");
}