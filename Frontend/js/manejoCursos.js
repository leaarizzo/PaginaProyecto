datosClase = []; //Array global para manejo de usuarios

async function traerCursos() {
	const response = await fetch('../../../../BackEnd/Gestion de Usuarios/listarCursos.php'
		, {
			method: 'GET',
		});
	// waits until the request completes...
	const res = await response.json();
	return res;
}

traerCursos().then(dato => {
	for (var i = 0; i < dato.length; i++) {
		filaNueva(dato[i], i);
	}
	datosClase = dato;
});

function filaNueva(infoCurso, pos) {
	var fila = "<tr id=" + pos + ">"
		+ "<td id='txtCodigo" + pos + "' class='pl-4'>" + infoCurso.Codigo + "</td>"
		+ "<td id='txtDocumentoAlumno" + pos + "' class='pl-4'>" + infoCurso.documentoAlumno + "</td>"
		+ "<td id='txtDocumentoInstructor" + pos + "' class='pl-4'>" + infoCurso.documentoInstructor + "</td>"
		+ "<td id='txtMatricula" + pos + "' class='pl-4'>" + infoCurso.Matricula + "</td>"
		+ "<td id='txtPrecio" + pos + "' class='pl-4'>" + infoCurso.precio + "</td>"
		+ "<td id='txtDocumento" + pos + "' class='pl-4'>" + infoCurso.fecha + "</td>"
		+ "<td id='txhHora" + pos + "' class='pl - 4'>" + infoCurso.hora + "</td>"
		+ "<td id='txtTipoLibreta" + pos + "' class='pl-4'>" + infoCurso.tipoLibreta + "</td>"
		+ "<td id='txtResultado" + pos + "' class='pl-4'>" + infoCurso.resultado + "</td>"
		+ "<td id=='txtTipoCurso" + pos + "' class='pl-4'>" + infoCurso.Tipo + "</td>"
		+ "<td>"
		+ "<button type='button' id=" + pos + " onclick='eliminar(this.id)' class='btn btn-outline-info btn-circle btn-lg btn-circle ml-2'><i class='fa fa-trash'></i> </button>"
		+ "<button type='button' onclick='mostrarModal(" + pos + ")' class='btn btn-outline-info btn-circle btn-lg btn-circle ml-2'><i class='fa fa-edit'></i> </button>"
		+ "</td></tr>";
	$("#tablaCursos").append(fila);
}


function agregarCursos() {
	$.ajax({
		url: '../../../../BackEnd/Gestion de Usuarios/altaCurso.php',
		method: 'POST',
		data: {
			cantidad: $('#txtCantidad').val(),
			documentoAlumno: $('#txtDocumentoAlumno').val(),
			documentoInstructor: $('#txtDocumentoInstructor').val(),
			matricula: $('#txtMatricula').val(),
			precio: $('#txtPrecio').val(),
			tipoLibreta: $('#txtLibreta').val(),
			tipo: $('#txtTipoCurso').val(),
		},
		success: function (respuesta) {
			console.log(respuesta);

			traerCursos().then(dato => {
				// Clear the table first
				$("#tablaCursos").find("tr:gt(0)").remove();
				datosClase = dato;
				for (var i = 0; i < dato.length; i++) {
					filaNueva(dato[i], i);
				}
			});
			cerrarModalAgregar();
		},
		error: function (respuesta) {
			console.log(respuesta);

		},
	});
}
function eliminar(pos) {
	if (confirm('¿Está seguro de que desea eliminar este curso?')) {
		$.ajax({
			url: '../../../../BackEnd/Gestion de Usuarios/bajaCurso.php',
			method: 'POST',
			data: {
				dato: datosClase[pos].Codigo 	
			},
			success: function (respuesta) {
				console.log(respuesta);
			},
			error: function (respuesta) {
				console.log(respuesta);
			},
		});
		$("#" + pos).remove();
	}
}

function guardarCambios(pos) {
	$.ajax({
		url: '../../../../BackEnd/Gestion de Usuarios/modificarCurso.php',
		method: 'POST',
		data: {
			codigo: datosClase[pos].Codigo,
			dato: $('#txtDato').val(),
			nuevo: $('#txtNuevo').val()
		},
		success: function (respuesta) {
			console.log(respuesta);
		},
		error: function (respuesta) {
			console.log(respuesta);
		},
	});

	$casos = $('#txtDato').val();

	if ($casos == "documentoAlumno") {
		$('#txtDocumentoAlumno' + pos).text($('#txtNuevo').val());
	}
	if ($casos == "documentoInstructor") {
		$('#txtDocumentoInstructor' + pos).text($('#txtNuevo').val());
	}
	if ($casos == "matricula") {
		$('#txtMatricula' + pos).text($('#txtNuevo').val());
	}
	if ($casos == "precio") {
		$('#txtPrecio' + pos).text($('#txtNuevo').val());
	}
	if ($casos == "fecha") {
		$('#txtFecha' + pos).text($('#txtNuevo').val());
	}
	if ($casos == "hora") {
		$('#txtHora' + pos).text($('#txtNuevo').val());
	}
	if ($casos == "tipoLibreta") {
		$('#txtTipoLibreta' + pos).text($('#txtNuevo').val());
	}
	if ($casos == "tipoCurso") {
		$('#txtTipoCurso' + pos).text($('#txtNuevo').val());
	}
	if ($casos == "resultado") {
		$('#txtResultado' + pos).text($('#txtNuevo').val());
	}
	cerrarModal();
}

/*##############   MODAL  ############## */

function mostrarModal(pos) {
	$('#modifModal').css("display", "block");
	$('#btnGuardar').click(function () { guardarCambios(pos); });
}

// Cerrar el modal
function cerrarModal() {
	$('#modifModal').css("display", "none");
	$('#btnGuardar').unbind('click');
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
	var modal = document.getElementById("modifModal");
	if (event.target == modal) {
		modal.style.display = "none";
	}
}
function mostrarModalAgregar() {
	$('#addModal').css("display", "block");
}

function cerrarModalAgregar() {
	$('#addModal').css("display", "none");
}

