const url = "https://invirtual.mx/briefpaginaweb/";

const movPag = document.getElementById("movPag");
const btnSig = document.querySelectorAll(".btnSig");
const btnAnt = document.querySelectorAll(".btnAnt");
const btnEnviarBrief = document.getElementById("btnEnviarBrief");
const modalFinal = document.getElementById("modalFinal");
const btnCerrarModal = document.getElementById("btnCerrarModal");
const exp = {
  campoTexto: /^[a-zA-Z\-\.\,\"\s\u00C0-\u017F]{2,256}$/,
  campoTextoNoAcento: /^[a-zA-Z\-\.\,\"\s]{2,256}$/,
  campoEmail: /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i,
  campoUrl: /^[a-zA-Z\-\,\.\s\:\/\u00C0-\u017F]{2,256}$/
}

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
  if(validarPasoNueve()){
    e.preventDefault();
    
    // Intercambiar los nombres para el llamado de la API
    let data = new FormData();
    let datos = {};
  
    // ---------------------------- Recolecci???n de datos para enviarlos
    /* Datos de contacto */
    datos.contactName = nombreCliente.value;
    datos.contactEmail = correoCliente.value;
    datos.contactPhone = telefonoCliente.value;
  
    /* Datos de empresa */
    datos.businessName = nombreEmpresa.value;
    datos.street = direccionEmpresa.value;
    datos.suburb = coloniaEmpresa.value;
    datos.municipality = municipioEmpresa.value;
    datos.state = estadoEmpresa.value;
    datos.postalCode = cpostalEmpresa.value;
    datos.country = paisEmpresa.value;
    datos.phone = telefonoEmpresa.value;
    
    /* Info p??gina */
    datos.tradename = razonEmpresa.value;
    checkDominios = document.getElementsByName('checkDominio');
    for (let checkDominio of checkDominios){
      if(checkDominio.checked){
        datos.domainCheck = checkDominio.value;
      }
    }
    datos.website = dominioEmpresa.value;
    datos.desiredWebsite = dominioDeseado.value;
    datos.nameMeaning = significadoNombre.value;
    datos.businessLine = giroEmpresa.value;
    datos.companyProducts = productosEmpresa.value;
    datos.companyMarket = mercadoEmpresa.value;
  
    let objetivosSitio = document.getElementsByName('objetivoSitio');
    let objetivoSitio = [];
    for (let objetivo of objetivosSitio) {
      if(objetivo.checked || (objetivo.type == 'textarea' && objetivo.value != '')){
        objetivoSitio.push(objetivo.value);
      }
    }
    datos.siteGoal = objetivoSitio;
  
    let checksFunciones = document.getElementsByName('checkFunciones');
    let checkFunciones = [];
    for (let check of checksFunciones) {
      if(check.checked || (check.type == 'text' && check.value != '')){
        checkFunciones.push(check.value);
      }
    }
    datos.functionsCheck = checkFunciones;
  
    datos.logo = logotipoEmpresa.value;
    datos.withStyleRules = conReglasEstilos.value;
    datos.styleRules = reglasEstilos.value;
    datos.webReference = webReferencia.value;
  
    /* Redes sociales */
    let redesPrev = document.getElementsByName('redes');
    let redes = [];
    if(redesPrev.length > 0){
      for (let red of redesPrev) {
        redes.push(red.value);
      }
    }
    datos.networks = redes;
  
    /* Estructura */
    checksEstructura = document.getElementsByName('checkEstructura');
    for (let checkEstructura of checksEstructura){
      if(checkEstructura.checked){
        datos.structureCheck = checkEstructura.value;
      }
    }
  
    /* Extra */
    datos.companyAccounts = cuentasEmpresa.value;
    datos.threeLines = desTresRenglones.value;
    datos.keywords = palabrasClave.value;
  
    // Hacer append del objeto datos (SOLO PARA EL ENVIO POR CORREO)
    data.append('datos',JSON.stringify(datos));
    
    // --------------------- Fetch a la API
    
    fetch('https://centralinvirzo.xyz/app/api/v1/briefs/web',{
      method: "POST",
      body: JSON.stringify(datos),
    headers: {
        Accept: "applicaton/json",
        'Content-type': 'application/json; charset=UTF-8'
    }
    }).then(res => res.text()).then((r) => {
      if(r == 'true'){
        enviarCorreo(data);
        mostrarModal('Se ha enviado el brief correctamente!', '#2ca02c');
      }else{
        mostrarModal('Ha ocurrido un error, favor de intentarlo mas tarde!', '#c83737');
      }
    });
    
    // --------------------- Fetch para enviar Correos
    
    /*fetch(url+'back/procForm.php',{
      method: 'POST',
      body: data,
    }).then(res => res.text()).then((r) => {
      if(r == 'true'){
        mostrarModal('Se ha enviado el brief correctamente!', '#2ca02c');
      }else{
        mostrarModal('Ha ocurrido un error, favor de intentarlo mas tarde!', '#c83737');
      }
    });*/
  }
});

btnCerrarModal.addEventListener('click',(e)=>{
  e.preventDefault();
  window.location.reload();
});

// ------------------------------------------------------------------- Funci??n para notificar por correo
const enviarCorreo = (data) => {
  fetch(url+'back/correoNotificar.php',{
    method: 'POST',
    body: data
  }).then(res => res.text()).then(r => r);
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
  if (validarCampoTexto('nombreEmpresa') && validarCampoTextoNoAcento('direccionEmpresa') && validarCampoTexto('coloniaEmpresa') && validarCampoTexto('municipioEmpresa') && validarCampoTexto('estadoEmpresa') && validarCampoTexto('cpostalEmpresa') && validarCampoTexto('paisEmpresa') && validarCampoTexto('telefonoEmpresa')){
    return true;
  }else{
    return false;
  }
}

const validarPasoTres = () => {
  if (validarCampoTexto('razonEmpresa') && validarCampoRadio('checkDominio') && validarCampoUrl('dominioDeseado') && validarCampoTextoChar('significadoNombre') && validarCampoTextoChar('giroEmpresa')){
    return true;
  }else{
    return false;
  }
}

const validarPasoCuatro = () => {
  if (validarCampoTextoChar('productosEmpresa') && validarCampoTextoChar('mercadoEmpresa')){
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
  if (validarCampoTextoChar('conReglasEstilos') && validarCampoTextoCharNoRequerido('reglasEstilos') && validarCampoTextoCharNoRequerido('webReferencia')){
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

const validarPasoNueve = () => {
  if (validarCampoEmail('cuentasEmpresa') && validarCampoTextoChar('desTresRenglones') && validarCampoTextoChar('palabrasClave')){
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

const validarCampoTextoNoAcento = (nombreCampo) => {
  let input = document.getElementById(nombreCampo);
  let campo = input.parentNode;
  let label = campo.querySelector(`label[for=${nombreCampo}] span`);

  if(input.value != '' && exp.campoTextoNoAcento.test(input.value)){
    input.classList.remove('border-red-500');
    input.classList.add('border-invirtual-200');
    label.classList.add('hidden');
    return true;
  }else{
    alert('Favor de validar el campo\nNo colocar acentos\nSe permiten solo letras y "-.,');
    input.classList.remove('border-invirtual-200');
    input.classList.add('border-red-500');
    label.classList.remove('hidden');
    return false;
  }
}

const validarCampoTextoChar = (nombreCampo) => {
  let input = document.getElementById(nombreCampo);
  let campo = input.parentNode;
  let label = campo.querySelector(`label[for=${nombreCampo}] span`);

  if(input.value != '' && exp.campoTexto.test(input.value)){
    input.classList.remove('border-red-500');
    input.classList.add('border-invirtual-200');
    label.classList.add('hidden');
    return true;
  }else{
    alert('Favor de validar el campo \n Se permiten solo letras y "-.,');
    input.classList.remove('border-invirtual-200');
    input.classList.add('border-red-500');
    label.classList.remove('hidden');
    return false;
  }
}

const validarCampoTextoCharNoRequerido = (nombreCampo) => {
  let input = document.getElementById(nombreCampo);
  let campo = input.parentNode;
  let label = campo.querySelector(`label[for=${nombreCampo}] span`);

  if(input.value == '' || exp.campoTexto.test(input.value)){
    input.classList.remove('border-red-500');
    input.classList.add('border-invirtual-200');
    label.classList.add('hidden');
    return true;
  }else{
    alert('Favor de validar el campo \n Se permiten solo letras y "-.,');
    input.classList.remove('border-invirtual-200');
    input.classList.add('border-red-500');
    label.classList.remove('hidden');
    return false;
  }
}

const validarCampoEmail = (nombreCampo) => {
  let input = document.getElementById(nombreCampo);
  let campo = input.parentNode;
  let label = campo.querySelector(`label[for=${nombreCampo}] span`);

  if(input.value != '' || exp.campoEmail.test(input.value)){
    input.classList.remove('border-red-500');
    input.classList.add('border-invirtual-200');
    label.classList.add('hidden');
    return true;
  }else{
    alert('Favor de validar el campo \n El formato es "correo@mail.com"');
    input.classList.remove('border-invirtual-200');
    input.classList.add('border-red-500');
    label.classList.remove('hidden');
    return false;
  }
}

const validarCampoUrl = (nombreCampo) => {
  let input = document.getElementById(nombreCampo);
  let campo = input.parentNode;
  let label = campo.querySelector(`label[for=${nombreCampo}] span`);

  if(input.value != '' && exp.campoUrl.test(input.value)){
    input.classList.remove('border-red-500');
    input.classList.add('border-invirtual-200');
    label.classList.add('hidden');
    return true;
  }else{
    alert('Favor de validar el campo \n Se permiten: http(s)://(www).example.com ?? (www).example.com');
    input.classList.remove('border-invirtual-200');
    input.classList.add('border-red-500');
    label.classList.remove('hidden');
    return false;
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
