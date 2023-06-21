function aplicarEstilosFormulario() {
    var formulario = document.querySelector('form');
    var formGroups = formulario.getElementsByClassName('form-group');
  
    formulario.style.margin = '20px auto';
    formulario.style.width = '300px';
  
    for (var i = 0; i < formGroups.length; i++) {
      var formGroup = formGroups[i];
      formGroup.style.marginBottom = '10px';
    }
  }
  
  function validarFormulario() {
    var nombreCategoria = document.getElementById('ct_Nombre_categoria').value;
    var descripcionCategoria = document.getElementById('ct_Descripcion_categoria').value;
  
    if (nombreCategoria.trim() === '') {
      alert('Por favor, ingrese el nombre de la categoría.');
      return false;
    }
  
    if (descripcionCategoria.trim() === '') {
      alert('Por favor, ingrese la descripción de la categoría.');
      return false;
    }
  
    return true;
  }

var clienteForm = document.getElementById('clienteForm');
  var formGroups = clienteForm.getElementsByClassName('form-group');

  clienteForm.style.margin = '20px auto';
  clienteForm.style.width = '300px';

  for (var i = 0; i < formGroups.length; i++) {
    var formGroup = formGroups[i];
    formGroup.style.marginBottom = '10px';
  }

  function aplicarEstilosFormulario() {
    var clienteForm = document.querySelector('form');
    var formGroups = clienteForm.getElementsByClassName('form-group');
  
    clienteForm.style.margin = '20px auto';
    clienteForm.style.width = '300px';
  
    for (var i = 0; i < formGroups.length; i++) {
      var formGroup = formGroups[i];
      formGroup.style.marginBottom = '10px';
    }
  }
  
  function validateForm() {
    var nombreCategoria = document.getElementById('ct_Nombre_categoria').value;
    var descripcionCategoria = document.getElementById('ct_Descripcion_categoria').value;
  
    if (nombreCategoria.trim() === '' || descripcionCategoria.trim() === '') {
      alert('Por favor, complete todos los campos.');
      return false;
    }
  
    return true;
  }

  function aplicarEstilosFormulario() {
    var formulario = document.querySelector('form');
    var formGroups = formulario.getElementsByClassName('form-group');
  
    formulario.style.margin = '20px auto';
    formulario.style.width = '300px';
  
    for (var i = 0; i < formGroups.length; i++) {
      var formGroup = formGroups[i];
      formGroup.style.marginBottom = '10px';
    }
  }
  
  function validarFormulario() {
    var nombreFantasia = document.getElementById('pr_Nombre_de_fantasia').value;
    var nombre = document.getElementById('pr_Nombre').value;
    var apellido = document.getElementById('pr_Apellido').value;
    var email = document.getElementById('pr_Email').value;
    var direccion = document.getElementById('pr_Direccion').value;
    var cuit = document.getElementById('pr_CUIT').value;
    var telefono = document.getElementById('pr_Telefono').value;
  
    if (nombreFantasia.trim() === '') {
      alert('Por favor, ingrese el Nombre de Fantasía.');
      return false;
    }
  
    if (nombre.trim() === '') {
      alert('Por favor, ingrese el Nombre.');
      return false;
    }
  
    if (apellido.trim() === '') {
      alert('Por favor, ingrese el Apellido.');
      return false;
    }
  
    if (email.trim() === '') {
      alert('Por favor, ingrese el Email.');
      return false;
    }
  
    if (direccion.trim() === '') {
      alert('Por favor, ingrese la Dirección.');
      return false;
    }
  
    if (cuit.trim() === '') {
      alert('Por favor, ingrese el CUIT.');
      return false;
    }
  
    if (telefono.trim() === '') {
      alert('Por favor, ingrese el Teléfono.');
      return false;
    }
  
    return true;
  }

  function aplicarEstilosFormulario() {
    var formulario = document.querySelector('form');
    formulario.style.margin = '20px auto';
  }
  
  function validateForm() {
    // Obtener los valores de los campos del formulario
    var nombreProducto = document.getElementById('st_Nombre_del_producto').value;
    var precioPorUnidad = document.getElementById('st_Precio_por_unidad').value;
    var cantidadExistencia = document.getElementById('st_N_de_existencia').value;
    var categoria = document.getElementById('st_Categoria').value;
    var cantidadTotalExistencia = document.getElementById('st_Cantidad_total_en_existencia').value;
  
    // Validar que los campos no estén vacíos
    if (nombreProducto.trim() === '' || precioPorUnidad.trim() === '' || cantidadExistencia.trim() === '' || categoria.trim() === '' || cantidadTotalExistencia.trim() === '') {
      alert('Por favor, complete todos los campos del formulario.');
      return false;
    }
  
    // Validar que los campos numéricos sean valores numéricos
    if (isNaN(precioPorUnidad) || isNaN(cantidadExistencia) || isNaN(cantidadTotalExistencia)) {
      alert('Los campos de precio por unidad, cantidad en existencia y cantidad total en existencia deben ser valores numéricos.');
      return false;
    }
  
    // Validación adicional si es necesario
  
    // Si todos los campos son válidos, se envía el formulario
    return true;
  }
  
  // Aplicar estilos al formulario cuando se cargue la página
  window.onload = aplicarEstilosFormulario;