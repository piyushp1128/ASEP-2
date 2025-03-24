function selectRole(role) {
    document.getElementById('role-selection').style.display = 'none';
    document.getElementById('login-form').style.display = 'block';
    document.getElementById('role-input').value = role;
    document.getElementById('form-title').textContent = role.charAt(0).toUpperCase() + role.slice(1) + ' Login';
}