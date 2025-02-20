function validarcampos(){
    var nom = document.getElementById("nom").value;
    var pla = document.getElementById("pla").value;
    var tel = document.getElementById("tel").value;
    var cedu= document.getElementById("cedu").value;

    if (nom == "" && pla == "" && tel == "" && cedu == ""){
        alert('Llene los Campos Papa');
        return false;
    }
    else if(nom.length < 4 ){
        console.log("Digite un nombre valido");
        alert('Digite un nombre valido (4 CARACTERES MINIMO)');
        return false;
    }
    else if(pla.length < 6){
        console.log("Digite Los Seis Digitos de la placa");
        alert('Digite Los Seis Digitos de la placa (6 CARACTERES MINIMO)');
        return false;
    }
    else if(tel.length < 10){
        console.log("Digite un Telefono Valido");
        alert('Digite un Telefono Valido (10 CARACTERES MINIMO)');
        return false;
    }
    else if(cedu.length < 10){
        console.log("Digite una Cedula Valida");
        alert('Digite una Cedula Valida (10 CARACTERES MINIMO)');
        return false;
    }
    
    else{
    console.log("Bien Hecho Homie");
        alert('Gracias Por Inscribirse');
        return true;
    }


}