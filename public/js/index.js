if (history.scrollRestoration) {
    history.scrollRestoration = 'manual';
}

window.addEventListener('load', () => {
    window.scrollTo(0, 0);
});

AOS.init({
    duration: 1000,
    once: true
});

window.addEventListener('load', () => {
    document.documentElement.style.scrollBehavior = 'auto';
    window.scrollTo(0, 0);
    setTimeout(() => {
        document.documentElement.style.scrollBehavior = 'smooth';
    }, 10);
});

// ===== Redirect Logic for User Button =====
function handleUserClick() {
    // Cek apakah user sudah login
    if (isLoggedIn()) {
        // Jika sudah login, arahkan ke user profile
        window.location.href = '/user';
    } else {
        // Jika belum login, tampilkan login modal
        const loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
        loginModal.show();
    }
}

// ===== Modal Switching =====
function switchToRegister() {
    const loginModal = bootstrap.Modal.getInstance(document.getElementById('loginModal'));
    if (loginModal) loginModal.hide();
    setTimeout(() => {
        const registerModal = new bootstrap.Modal(document.getElementById('registerModal'));
        registerModal.show();
    }, 300);
}

function switchToLogin() {
    const registerModal = bootstrap.Modal.getInstance(document.getElementById('registerModal'));
    if (registerModal) registerModal.hide();
    setTimeout(() => {
        const loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
        loginModal.show();
    }, 300);
}

// ===== Handle Login Modal Form =====
function handleLoginModal(event) {
    event.preventDefault();
    
    const email = document.getElementById('loginEmail').value.trim();
    const password = document.getElementById('loginPassword').value;
    const remember = document.getElementById('loginRemember').checked;
    const errorMsg = document.getElementById('loginError');
    
    // Reset error message
    errorMsg.style.display = 'none';
    
    // Validasi input
    if (!email || !password) {
        showLoginModalError('Please fill in all fields');
        return;
    }
    
    // Validasi format email
    if (email.includes('@') && !isValidEmail(email)) {
        showLoginModalError('Please enter a valid email address');
        return;
    }
    
    // Process login
    processLoginModal(email, password, remember);
}

// Process login via API
function processLoginModal(email, password, remember) {
    const loginForm = document.getElementById('loginFormModal');
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
            
            // Close modal dan redirect
            const loginModal = bootstrap.Modal.getInstance(document.getElementById('loginModal'));
            loginModal.hide();
            
            setTimeout(() => {
                window.location.href = '/user';
            }, 500);
        } else {
            // Tampilkan error
            showLoginModalError(data.message || 'Login failed');
            submitBtn.disabled = false;
            submitBtn.textContent = originalText;
        }
    })
    .catch(error => {
        console.error('Login error:', error);
        showLoginModalError('Network error. Please try again.');
        submitBtn.disabled = false;
        submitBtn.textContent = originalText;
    });
}

// Show login error
function showLoginModalError(message) {
    const errorMsg = document.getElementById('loginError');
    errorMsg.textContent = message;
    errorMsg.style.display = 'block';
    
    setTimeout(() => {
        errorMsg.style.display = 'none';
    }, 5000);
}

// ===== Handle Register Modal Form =====
function handleRegisterModal(event) {
    event.preventDefault();
    
    const email = document.getElementById('registerEmailModal').value.trim();
    const name = document.getElementById('registerNameModal').value.trim();
    const password = document.getElementById('registerPasswordModal').value;
    const passwordConfirmation = document.getElementById('registerConfirmModal').value;
    
    const errorMsg = document.getElementById('registerError');
    const successMsg = document.getElementById('registerSuccess');
    
    // Reset messages
    errorMsg.style.display = 'none';
    successMsg.style.display = 'none';
    
    // Validasi input
    if (!email || !name || !password || !passwordConfirmation) {
        showRegisterModalError('Please fill in all fields');
        return;
    }
    
    // Validasi email format
    if (!isValidEmail(email)) {
        showRegisterModalError('Please enter a valid email address');
        return;
    }
    
    // Validasi username length
    if (name.length < 3) {
        showRegisterModalError('Username must be at least 3 characters');
        return;
    }
    
    // Validasi password length
    if (password.length < 6) {
        showRegisterModalError('Password must be at least 6 characters');
        return;
    }
    
    // Validasi password match
    if (password !== passwordConfirmation) {
        showRegisterModalError('Passwords do not match');
        return;
    }
    
    // Kirim ke backend
    processRegisterModal(email, name, password, passwordConfirmation);
}

// Process register via API
function processRegisterModal(email, name, password, passwordConfirmation) {
    const registerForm = document.getElementById('registerFormModal');
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
            const successMsg = document.getElementById('registerSuccess');
            successMsg.textContent = 'Registration successful! Redirecting to your profile...';
            successMsg.style.display = 'block';
            
            // Reset form
            registerForm.reset();
            
            // Auto login dan redirect ke user profile setelah 2 detik
            setTimeout(() => {
                const registerModal = bootstrap.Modal.getInstance(document.getElementById('registerModal'));
                registerModal.hide();
                
                // Redirect langsung ke user profile (sudah login)
                setTimeout(() => {
                    window.location.href = '/user';
                }, 300);
            }, 2000);
        } else {
            // Tampilkan error
            if (data.errors) {
                const errorMessages = Object.values(data.errors).flat().join(', ');
                showRegisterModalError(errorMessages);
            } else {
                showRegisterModalError(data.message || 'Registration failed');
            }
            submitBtn.disabled = false;
            submitBtn.textContent = originalText;
        }
    })
    .catch(error => {
        console.error('Register error:', error);
        showRegisterModalError('Network error. Please try again.');
        submitBtn.disabled = false;
        submitBtn.textContent = originalText;
    });
}

// Show register error
function showRegisterModalError(message) {
    const errorMsg = document.getElementById('registerError');
    errorMsg.textContent = message;
    errorMsg.style.display = 'block';
    
    setTimeout(() => {
        errorMsg.style.display = 'none';
    }, 5000);
}

// Validasi email format
function isValidEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}
