document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('userForm');
    // Nota: Eliminamos userList si ya no quieres mostrar todos los mensajes en la web pública por privacidad

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        // 1. Referencia al botón para feedback visual
        const btn = form.querySelector('.submit-btn');
        const originalText = btn.innerHTML;
        
        // 2. Bloquear botón y mostrar estado de carga
        btn.innerHTML = "Enviando... <i class='fa-solid fa-spinner fa-spin'></i>";
        btn.disabled = true;

        // 3. Capturar valores
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;

        // 4. Enviar datos al controlador PHP
        fetch('controller.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ 
                name: name, 
                email: email, 
                message: message 
            })
        })
        .then(response => {
            if (!response.ok) throw new Error('Error en la respuesta del servidor');
            return response.json();
        })
        .then(data => {
            if (data.success) {
                alert('¡Mensaje enviado con éxito! Te responderé pronto a tu Gmail.');
                form.reset();
            } else {
                alert('Error al enviar: ' + (data.error || 'Hubo un problema en el servidor.'));
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('No se pudo conectar con el servidor. Revisa tu conexión.');
        })
        .finally(() => {
            // 5. Restaurar botón al finalizar (éxito o error)
            btn.innerHTML = originalText;
            btn.disabled = false;
        });
    });
});