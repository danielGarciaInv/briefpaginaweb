const url = "http://localhost/briefpaginaweb/";

const movPag = document.getElementById("movPag");
const btnSig = document.querySelectorAll(".btnSig");
const btnAnt = document.querySelectorAll(".btnAnt");
const btnEnviarBrief = document.getElementById("btnEnviarBrief");
const modalFinal = document.getElementById("modalFinal");
const btnCerrarModal = document.getElementById("btnCerrarModal");
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

btnEnviarBrief.addEventListener('click',(e)=>{
  e.preventDefault();
  let datos = new FormData();
  // ---------------------------- Recolección de datos para enviarlos
  /* Datos de contacto */
  datos.append('nombreCliente',nombreCliente.value);
  datos.append('correoCliente',correoCliente.value);
  datos.append('telefonoCliente',telefonoCliente.value);

  /* Datos de empresa */
  datos.append('nombreEmpresa',nombreEmpresa.value);
  datos.append('direccionEmpresa',direccionEmpresa.value);
  datos.append('coloniaEmpresa',coloniaEmpresa.value);
  datos.append('municipioEmpresa',municipioEmpresa.value);
  datos.append('estadoEmpresa',estadoEmpresa.value);
  datos.append('cpostalEmpresa',cpostalEmpresa.value);
  datos.append('paisEmpresa',paisEmpresa.value);
  datos.append('telefonoEmpresa',telefonoEmpresa.value);
  
  /* Info página */
  checkDominios = document.getElementsByName('checkDominio');
  for (let checkDominio of checkDominios){
    if(checkDominio.checked){
      datos.append('checkDominio',checkDominio.value);
    }
  }
  datos.append('dominioEmpresa',dominioEmpresa.value);
  datos.append('dominioDeseado',dominioDeseado.value);
  datos.append('significadoNombre',significadoNombre.value);
  datos.append('giroEmpresa',giroEmpresa.value);
  datos.append('productosEmpresa',productosEmpresa.value);
  datos.append('mercadoEmpresa',mercadoEmpresa.value);

  let objetivosSitio = document.getElementsByName('objetivoSitio');
  let objetivoSitio = [];
  for (let objetivo of objetivosSitio) {
    if(objetivo.checked || (objetivo.type == 'textarea' && objetivo.value != '')){
      objetivoSitio.push(objetivo.value);
    }
  }
  objetivoSitio = JSON.stringify(objetivoSitio);
  datos.append('objetivoSitio',objetivoSitio);

  let checksFunciones = document.getElementsByName('checkFunciones');
  let checkFunciones = [];
  for (let check of checksFunciones) {
    if(check.checked || (check.type == 'text' && check.value != '')){
      checkFunciones.push(check.value);
    }
  }
  checkFunciones = JSON.stringify(checkFunciones);
  datos.append('checkFunciones',checkFunciones);

  datos.append('logotipoEmpresa',logotipoEmpresa.value);
  datos.append('conReglasEstilos',conReglasEstilos.value);
  datos.append('reglasEstilos',reglasEstilos.value);
  datos.append('webReferencia',webReferencia.value);

  /* Redes sociales */
  let redesPrev = document.getElementsByName('redes');
  let redes = [];
  if(redesPrev.length > 0){
    for (let red of redesPrev) {
      redes.push(red.value);
    }
  }
  redes = JSON.stringify(redes);
  datos.append('redes',redes);

  /* Estructura */
  checksEstructura = document.getElementsByName('checkEstructura');
  for (let checkEstructura of checksEstructura){
    if(checkEstructura.checked){
      datos.append('checkEstructura',checkEstructura.value);
    }
  }

  /* Extra */
  datos.append('cuentasEmpresa',cuentasEmpresa.value);
  datos.append('desTresRenglones',desTresRenglones.value);
  datos.append('palabrasClave',palabrasClave.value);

  fetch(url+'back/procForm.php',{
    method: 'POST',
    body: datos
  }).then(res => res.text()).then((r) => {
    if(r == 'true'){
      mostrarModal('Se ha enviado el brief correctamente!', '#2ca02c');
    }else{
      mostrarModal('Ha ocurrido un error, favor de intentarlo mas tarde!', '#c83737');
    }
  });
});

btnCerrarModal.addEventListener('click',(e)=>{
  e.preventDefault();
  window.location.reload();
});
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
  if (validarCampoTexto('nombreEmpresa') && validarCampoTexto('direccionEmpresa') && validarCampoTexto('coloniaEmpresa') && validarCampoTexto('municipioEmpresa') && validarCampoTexto('estadoEmpresa') && validarCampoTexto('cpostalEmpresa') && validarCampoTexto('paisEmpresa') && validarCampoTexto('telefonoEmpresa')){
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

// ------------------------------------------------------------------- Funcion para el resultado asincrono
const mostrarModal = (mensaje, color) => {
  document.getElementById('mensajeModal').textContent = mensaje;
  document.getElementById('contIcono').style.background = color;
  document.getElementById('svgIco').src = (color == '#2ca02c') ? './img/check.svg' : './img/xmark.svg';
  modalFinal.classList.remove('hidden');
}
