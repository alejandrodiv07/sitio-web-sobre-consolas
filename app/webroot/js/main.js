$(document).ready(function () {
	var urlbase = $("#baseUrl").val();

	$("#submitbtn").click(function (e) {
		var formData = new FormData(document.formFace);
		e.preventDefault();

		fetch(urlbase + "principal/agregarInfo", {
			method: "POST",
			body: formData,
		})
			.then((response) => response.text())
			.then((data) => {
				if (data === "SUCCESS") {
					alert("Usuario registrado correctamente");
					document.formFace.reset();
					location.href = urlbase + "principal/listar";
				} else {
					alert("Error al registrar el usuario");
				}
			})
			.catch((error) => {
				console.error("Error:", error);
				alert("Error de conexión");
			});
	});

	$("#formEditar").submit(function (e) {
		e.preventDefault();

		var formData = new FormData(this);

		fetch(urlbase + "principal/editarInfo", {
			method: "POST",
			body: formData,
		})
			.then((response) => response.text())
			.then((data) => {
				if (data === "SUCCESS") {
					alert("Usuario actualizado correctamente");
					location.reload();
				} else {
					alert("Error al actualizar el usuario");
				}
			})
			.catch((error) => {
				console.error("Error:", error);
				alert("Error de conexión");
			});
	});
});

function cargarDatosEditar(id, cedula, nombre, apellido, telefono, email) {
	$("#editarId").val(id);
	$("#editarCedula").val(cedula);
	$("#editarNombre").val(nombre);
	$("#editarApellido").val(apellido);
	$("#editarTelefono").val(telefono);
	$("#editarEmail").val(email);
}

function eliminarUsuario(id) {
	if (confirm("¿Estás seguro de que deseas eliminar este usuario?")) {
		var urlbase = $("#baseUrl").val();

		$.ajax({
			url: urlbase + "principal/eliminar/" + id,
			type: "POST",
			success: function (data) {
				alert("Usuario eliminado correctamente");
				location.reload();
			},
			error: function (xhr, status, error) {
				console.error("Error:", error);
				alert("Error al eliminar el usuario");
			},
		});
	}
}
