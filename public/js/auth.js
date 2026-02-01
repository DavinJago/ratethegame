// ===== Authentication System =====

// Check jika user sudah login ketika halaman di-load
document.addEventListener('DOMContentLoaded', function() {
    checkAuthStatus();
});

// Cek status login
function checkAuthStatus() {
    const user = localStorage.getItem('currentUser');
    const isLoginPage = window.location.pathname.includes('login');
    const isRegisterPage = window.location.pathname.includes('register');
    
    // Jika sudah login dan di halaman login/register, redirect ke user
    if (user && (isLoginPage || isRegisterPage)) {
        window.location.href = '/user';
    }
}

// Handle Login Form
function handleLogin(event) {
    event.preventDefault();
    
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value;
    const remember = document.getElementById('remember').checked;
    const errorMsg = document.getElementById('errorMsg');
    
    // Reset error message
    errorMsg.style.display = 'none';
    
    // Validasi input
    if (!email || !password) {
        showError('Please fill in all fields');
        return;
    }
    
    // Validasi format email
    if (email.includes('@') && !isValidEmail(email)) {
        showError('Please enter a valid email address');
        return;
    }
    
    // Simulasi validasi login (replace dengan API call nanti)
    simulateLogin(email, password, remember);
}

// Simulasi login - replace dengan API call ke backend
function simulateLogin(email, password, remember) {
    // Simulasi delay loading
    const loginForm = document.getElementById('loginForm');
    const submitBtn = loginForm.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;
    
    submitBtn.disabled = true;
    submitBtn.textContent = 'Loading...';
    
    // API Call ke backend
    fetch('/api/auth/login', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || ''
        },
        body: JSON.stringify({
            email: email,
            password: password,
            remember: remember
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Simpan user data ke localStorage
            localStorage.setItem('currentUser', JSON.stringify(data.user));
            localStorage.setItem('authToken', 'authenticated');
            
            // Redirect ke user page
            setTimeout(() => {
                window.location.href = '/user';
            }, 500);
        } else {
            // Tampilkan error
            showError(data.message || 'Login failed');
            submitBtn.disabled = false;
            submitBtn.textContent = originalText;
        }
    })
    .catch(error => {
        console.error('Login error:', error);
        showError('Network error. Please try again.');
        submitBtn.disabled = false;
        submitBtn.textContent = originalText;
    });
}

// Tampilkan error message
function showError(message) {
    const errorMsg = document.getElementById('errorMsg');
    errorMsg.textContent = message;
    errorMsg.style.display = 'block';
    
    // Auto-hide after 5 seconds
    setTimeout(() => {
        errorMsg.style.display = 'none';
    }, 5000);
}

// Validasi email format
function isValidEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

// Logout function - panggil ini ketika user click logout
function logout() {
    localStorage.removeItem('currentUser');
    window.location.href = '/login';
}

// Get current logged-in user
function getCurrentUser() {
    const user = localStorage.getItem('currentUser');
    return user ? JSON.parse(user) : null;
}

// Check if user is logged in
function isLoggedIn() {
    return localStorage.getItem('currentUser') !== null;
}

// ===== Handle Register Form =====
function handleRegister(event) {
    event.preventDefault();
    
    const email = document.getElementById('email').value.trim();
    const name = document.getElementById('name').value.trim();
    const password = document.getElementById('password').value;
    const passwordConfirmation = document.getElementById('password_confirmation').value;
    
    const errorMsg = document.getElementById('errorMsg');
    const successMsg = document.getElementById('successMsg');
    
    // Reset messages
    errorMsg.style.display = 'none';
    successMsg.style.display = 'none';
    
    // Validasi input
    if (!email || !name || !password || !passwordConfirmation) {
        showRegisterError('Please fill in all fields');
        return;
    }
    
    // Validasi email format
    if (!isValidEmail(email)) {
        showRegisterError('Please enter a valid email address');
        return;
    }
    
    // Validasi username length
    if (name.length < 3) {
        showRegisterError('Username must be at least 3 characters');
        return;
    }
    
    // Validasi password length
    if (password.length < 6) {
        showRegisterError('Password must be at least 6 characters');
        return;
    }
    
    // Validasi password match
    if (password !== passwordConfirmation) {
        showRegisterError('Passwords do not match');
        return;
    }
    
    // Kirim ke backend
    processRegister(email, name, password, passwordConfirmation);
}

// Process register - API call ke backend
function processRegister(email, name, password, passwordConfirmation) {
    const registerForm = document.getElementById('registerForm');
    const submitBtn = registerForm.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;
    
    submitBtn.disabled = true;
    submitBtn.textContent = 'Creating Account...';
    
    // API Call
    fetch('/api/auth/register', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || ''
        },
        body: JSON.stringify({
            email: email,
            name: name,
            password: password,
            password_confirmation: passwordConfirmation
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Simpan user data ke localStorage (auto login setelah register)
            localStorage.setItem('currentUser', JSON.stringify(data.user));
            localStorage.setItem('authToken', 'authenticated');
            
            // Tampilkan success message
            const successMsg = document.getElementById('successMsg');
            successMsg.textContent = 'Registration successful! You are now logged in. Redirecting...';
            successMsg.style.display = 'block';
            
            // Reset form
            registerForm.reset();
            
            // Auto login dan redirect ke user profile setelah 2 detik
            setTimeout(() => {
                window.location.href = '/user';
            }, 2000);
        } else {
            // Tampilkan error
            if (data.errors) {
                const errorMessages = Object.values(data.errors).flat().join(', ');
                showRegisterError(errorMessages);
            } else {
                showRegisterError(data.message || 'Registration failed');
            }
            submitBtn.disabled = false;
            submitBtn.textContent = originalText;
        }
    })
    .catch(error => {
        console.error('Register error:', error);
        showRegisterError('Network error. Please try again.');
        submitBtn.disabled = false;
        submitBtn.textContent = originalText;
    });
}

// Tampilkan error untuk register
function showRegisterError(message) {
    const errorMsg = document.getElementById('errorMsg');
    errorMsg.textContent = message;
    errorMsg.style.display = 'block';
    
    // Auto-hide after 5 seconds
    setTimeout(() => {
        errorMsg.style.display = 'none';
    }, 5000);
}
