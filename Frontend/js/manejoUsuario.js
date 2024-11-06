document.addEventListener('DOMContentLoaded', function() {
    // Obtener los datos del usuario
    fetch('../../../../BackEnd/Gestion de Usuarios/recibirUsuario.php')
        .then(response => {
            if (!response.ok) {
                throw new Error('Error en la respuesta del servidor');
            }
            return response.json();
        })
        .then(data => {
            if (data) {
                mostrarPerfilUsuario(data);
            } else {
                mostrarError('No se encontraron datos del usuario');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            mostrarError('Error al cargar los datos del usuario');
        });
});

function mostrarPerfilUsuario(usuario) {
    const adminCont = document.querySelector('.adminCont');
    
    // Crear el contenedor del perfil con Bootstrap
    const perfilHTML = `
        <div class="container mt-5 mb-5">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h3 class="mb-0">Perfil de Usuario</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-center mb-3">
                            <div class="avatar-container">
                                <i class="bi bi-person-circle" style="font-size: 8rem;"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row mb-2">
                                <div class="col-sm-4 fw-bold">Nombre:</div>
                                <div class="col-sm-8">${usuario.nombre || ''} ${usuario.apellido || ''}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-4 fw-bold">Correo:</div>
                                <div class="col-sm-8">${usuario.correo || ''}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-4 fw-bold">Teléfono:</div>
                                <div class="col-sm-8">${usuario.telefono || ''}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-4 fw-bold">Tipo de Usuario:</div>
                                <div class="col-sm-8">${usuario.tipo || 'Administrador'}</div>
                            </div>
                            ${usuario.permisos ? `
                            <div class="row mb-2">
                                <div class="col-sm-4 fw-bold">Nivel de Permisos:</div>
                                <div class="col-sm-8">${usuario.permisos}</div>
                            </div>` : ''}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `;
    
    adminCont.innerHTML = perfilHTML;
}

function mostrarError(mensaje) {
    const adminCont = document.querySelector('.adminCont');
    const errorHTML = `
        <div class="container mt-5">
            <div class="alert alert-danger" role="alert">
                ${mensaje}
            </div>
        </div>
    `;
    adminCont.innerHTML = errorHTML;
}