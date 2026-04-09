


document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('userForm');
    const userList = document.getElementById('userList');

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;

        fetch('controller.php', {
            method: 'POST',
            body: JSON.stringify({ name: name, email: email, message: message })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                userList.innerHTML = '';
                fetchUsers();
                form.reset();
            } else {
                alert('Error al agregar usuario.');
            }
        });
    });

    function fetchUsers() {
        fetch('controller.php')
        .then(response => response.json())
        .then(data => {
            data.forEach(user => {
                const userItem = document.createElement('div');
                userItem.innerHTML = `<strong>${user.name}</strong> - ${user.email}`;
                userList.appendChild(userItem);
            });
        });
    }

    fetchUsers();
});
