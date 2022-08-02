//Vamos a realizar una entrada de datos y darle salida en la pantalla con un alert();



//declaramos variable
var edad;



//le damos valor a la variable.
//le damos un valor que viene de un return de una funcion
edad = prompt('Introduce tu edad');

//creamos un condicional para saber si nos han escrito un número

if(Number(edad) == edad){
    if (edad<18){
        alert('Tienes que ser mayor de 18 años para entrar.');
        window.location.href="https://elpais.com/"
    }

document.getElementById('main').innerHTML = `
    <h2>Enhorabuena!! Tu edad es </h2>
    <h1>${edad}</h1>
`;
}else{
    
    alert('Tiene que ser un número');//No es un número, avisamos
    window.location.reload();//recargamos para que vuelva a salir el prompt
}



switch(nota){
    case '0':
    case '1':
        nota = "Muy insuficiente"
    break;
    case '2':
    case '3':
    case '4':
        nota = "Insuficiente"
    case '5':
        nota = "Suficiente"    
    case '6':
        nota = "Bien"
    case '7':
    case '8':
        nota = "Notable"
    case '9':
    case '10':
        nota = "Sobresaliente"   

}
