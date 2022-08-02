function escribe(cadena,id){
    document.getElementById(id).innerHTML = cadena; 
}
let palabra_prohibida = 'mierda'; 

let cadena_de_texto = prompt('escribe tu mensaje')

if(cadena_de_texto = cadena_de_texto.replace (palabra_prohibida,'') != cadena_de_texto){
    cadena_de_texto = cadena_de_texto.replace(palabra_prohibida, 'heces');
    console.log(palabra_prohibida);
}



escribe ('cadena de texto', 'main'); 