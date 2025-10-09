function confirmDelete(id) {
    Swal.fire({
        title: '¿Estás seguro?',
        text: "¡Esta acción cambiará el estado o eliminará el registro!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, continuar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('form-delete-' + id).submit();
        }
    });
}

function confirmStatus(id) {
    Swal.fire({
        title: '¿Estás seguro?',
        text: "¡Esta acción cambiará el estado del registro!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, continuar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('form-status-' + id).submit();
        }
    });
}