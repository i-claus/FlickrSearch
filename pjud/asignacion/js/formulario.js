/*******valida tilde************/
 function Validatilde  (campo) {

    if(campo.value.match('[á,é,í,ó,ú]|[Á,É,Í,Ó,Ú]'))
    {
     alert('Favor ingresar texto sin tilde');
     
     campo.focus();
     
    }
    
 
}
/*********************************/
 
function ValidaLetraNumeroGuion(){ 
if ((event.keyCode  <65 || event.keyCode >90)&&(event.keyCode  <97 || event.keyCode >122)&&(event.keyCode < 48 || event.keyCode > 57 )&& event.keyCode!== 45)
    event.returnValue = false; 
} 
function ValidaLetraNumeroGuion_k(){ 
 if ((event.keyCode < 48 || event.keyCode > 57 )&& event.keyCode!== 45  && 
             event.keyCode!==75 && event.keyCode!==107
   )
    event.returnValue = false; 
}  
function ValidaLetra(){ 
if  ((event.keyCode  <65 || event.keyCode >90) && (event.keyCode  <97 || event.keyCode >122)&& event.keyCode!== 32) 
    event.returnValue = false; 
}  

function ValidaSoloNumeros() {
 if (event.keyCode < 48 || event.keyCode > 57 ) 
  event.returnValue = false;
} 

function ValidaSoloNumerosypuntos() {
 if ((event.keyCode < 48 || event.keyCode > 57 )&& event.keyCode!== 58)
         event.returnValue = false;
 }
function ValidaSoloNumerosyguion() {
 if ((event.keyCode < 48 || event.keyCode > 57 )&& event.keyCode!== 45)
         event.returnValue = false;
 }
function Validahora() {
 if ((event.keyCode < 48 || event.keyCode > 57 )&& event.keyCode!== 58)
         event.returnValue = false;
 }

function valida_contactos(form_contacto){   
 
   var valorRetorno = true;
   var nombre =form_contacto.nombre.value;
   var telefono = form_contacto.telefono.value;
   var correo = form_contacto.correo.value;
   var direccion = form_contacto.direccion.value;
  
  if( nombre === null || nombre.length === 0) 
        {
          alert('Por favor, ingrese nombre de la institucion');
          return false; 
        }else if( telefono === null || telefono.length === 0   ) {
          alert('Por favor, ingrese telefono');
          return false; 
        }else if ((correo === null || correo.length === 0)) {
          alert('Ingrese correo');
          return false;             
        }else if ((direccion === null || direccion.length === 0)) {
          alert('Ingrese direccion');
          return false;             
        }
  return valorRetorno;
}

 




 
 