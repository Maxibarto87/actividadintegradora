function validateForm() {
    var nombreCategoria = document.getElementById("ct_Nombre_categoria").value;
    var descripcionCategoria = document.getElementById("ct_Descripcion_categoria").value;

    if (nombreCategoria === "" || descripcionCategoria === "") {
        alert("Por favor, complete todos los campos.");
        return false;
    }

    // Aquí puedes agregar código adicional de validación o enviar los datos a la base de datos.

    alert("Formulario enviado correctamente.");
    return true;
}
