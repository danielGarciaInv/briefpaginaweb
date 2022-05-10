const movPag = document.getElementById("movPag");
const btnSig = document.querySelectorAll(".btnSig");
const btnAnt = document.querySelectorAll(".btnAnt");
var paso = 1;

// ------------------------------------------------------------------- Eventos para los Botones
for (const btn of btnSig) {
  btn.addEventListener("click", (e) => {
    e.preventDefault();
    switch(paso){
      case 1:
        if(validarPasoUno()){
          desplazarDerecha();
          
        }
        break;
      case 2:
        if(validarPasoDos()){
          desplazarDerecha();
        }
        break;
      case 3:
        if(validarPasoTres()){
          desplazarDerecha();
        }
        break;
      case 4:
        if(validarPasoCuatro()){
          desplazarDerecha();
        }
        break;
      case 5:
        if(validarPasoCinco()){
          desplazarDerecha();
        }
        break;
      case 6:
        if(validarPasoSeis()){
          desplazarDerecha();
        }
        break;
      case 7:
        if(validarPasoSiete()){
          desplazarDerecha();
        }
        break;
      case 8:
        if(validarPasoOcho()){
          desplazarDerecha();
        }
        break;
      case 9:
      break;
    }
  });
}

for (const btn of btnAnt) {
  btn.addEventListener("click", (e) => {
    e.preventDefault();
    desplazarIzquierda();
  });
}

// ------------------------------------------------------------------- Funciones para el Desplazamiento

const desplazarDerecha = () => {
  if (movPag.style.marginLeft == "") {
    movPag.style.marginLeft = "-10%";
  } else if (movPag.style.marginLeft != "") {
    let porcentaje = movPag.style.marginLeft;
    porcentaje = porcentaje.replace('-','');
    porcentaje = porcentaje.replace('%','');
    movPag.style.marginLeft = `-${parseInt(porcentaje,10) + 10}%`;
  }
  paso++;
}

const desplazarIzquierda = () => {
  if (movPag.style.marginLeft != "0%") {
    let porcentaje = movPag.style.marginLeft;
    porcentaje = porcentaje.replace('-','');
    porcentaje = porcentaje.replace('%','');
    movPag.style.marginLeft = `-${parseInt(porcentaje,10) - 10}%`;
    paso--;
  } else {
    return;
  }
}
// ------------------------------------------------------------------- Funciones para validar Campos
const validarPasoUno = () => {
  if (validarCampoTexto('nombreCliente') && validarCampoTexto('correoCliente') && validarCampoTexto('telefonoCliente')){
    return true;
  }else{
    return false;
  }
}

const validarPasoDos = () => {
  if (validarCampoTexto('nombreEmpresa') && validarCampoTexto('direccionEmpresa') && validarCampoTexto('municipioEmpresa') && validarCampoTexto('ciudadEmpresa') && validarCampoTexto('estadoEmpresa') && validarCampoTexto('cpostalEmpresa') && validarCampoTexto('telefonoEmpresa')){
    return true;
  }else{
    return false;
  }
}

const validarPasoTres = () => {
  if (validarCampoRadio('checkDominio') && validarCampoTexto('dominioDeseado') && validarCampoTexto('significadoNombre') && validarCampoTexto('giroEmpresa')){
    return true;
  }else{
    return false;
  }
}

const validarPasoCuatro = () => {
  if (validarCampoTexto('productosEmpresa') && validarCampoTexto('mercadoEmpresa')){
    return true;
  }else{
    return false;
  }
}

const validarPasoCinco = () => {
  if (validarCampoRadio('checkFunciones') && validarCampoTexto('logotipoEmpresa')){
    return true;
  }else{
    return false;
  }
}

const validarPasoSeis = () => {
  if (validarCampoTexto('conReglasEstilos')){
    return true;
  }else{
    return false;
  }
}

const validarPasoSiete = () => {
  return true;
}

const validarPasoOcho = () => {
  if (validarCampoRadio('checkEstructura')){
    return true;
  }else{
    return false;
  }
}

const validarCampoTexto = (nombreCampo) => {
  let input = document.getElementById(nombreCampo);
  let campo = input.parentNode;
  let label = campo.querySelector(`label[for=${nombreCampo}] span`);

  if(input.value == ''){
    input.classList.remove('border-invirtual-200');
    input.classList.add('border-red-500');
    label.classList.remove('hidden');
    return false;
  }else{
    input.classList.remove('border-red-500');
    input.classList.add('border-invirtual-200');
    label.classList.add('hidden');
    return true;
  }
}

const validarCampoRadio = (nombreCampo) => {
  var inputs = document.getElementsByName(nombreCampo);
  let label = document.querySelector(`label[for=${nombreCampo}] span`);
  for (let input of inputs){
    if(input.checked){
      label.classList.add('hidden');
      return true;
    }
  }
  label.classList.remove('hidden');
  return false;
}