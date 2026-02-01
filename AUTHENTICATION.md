## Authentication Flow Documentation

### Overview
Sistem login sederhana menggunakan localStorage untuk mengelola session user tanpa backend API.

### Flow Diagram
```
Index Page
    ↓
Click "User" Button
    ↓
checkAuthStatus() in index.js
    ├─ If logged in → Redirect to /user
    └─ If not logged in → Redirect to /login
        ↓
    Login Page
        ↓
    User fills form & submit
        ↓
    handleLogin() validates form
        ↓
    simulateLogin() saves to localStorage
        ↓
    Redirect to /user profile
        ↓
    User Profile Page
        └─ Display user info from localStorage
        └─ Can click "Logout" to clear session
```

### File Changes Made

#### 1. **js/auth.js** (NEW)
Main authentication file dengan fungsi:
- `checkAuthStatus()` - Cek login status saat page load
- `handleLogin()` - Handle form submission
- `simulateLogin()` - Simulasi login (REPLACE dengan API call)
- `logout()` - Clear session dan redirect to login
- `isLoggedIn()` - Check if user logged in
- `getCurrentUser()` - Get user data from localStorage

#### 2. **public/js/index.js** (MODIFIED)
Tambahan:
- `handleUserClick()` - Redirect logic ketika user klik "User" button

#### 3. **public/js/user.js** (MODIFIED)
- `displayUserProfile()` - Display user info dari localStorage
- Redirect to login jika belum authenticated

#### 4. **resources/views/login.blade.php** (MODIFIED)
- Tambah `id` attributes untuk form elements
- Tambah `handleLogin(event)` onsubmit handler
- Tambah error message display div
- Link ke `js/auth.js`

#### 5. **resources/views/index.blade.php** (MODIFIED)
- Ubah User button dari link menjadi `onclick="handleUserClick()"`
- Link ke `js/auth.js` dan update `js/index.js`

#### 6. **resources/views/user.blade.php** (MODIFIED)
- Ubah hardcoded username menjadi dynamic `id="userDisplayName"`
- Tambah Logout button
- Link ke `js/auth.js` dan `js/user.js`

#### 7. **public/css/login.css** (MODIFIED)
- Tambah styling untuk error message
- Tambah button disabled state
- Tambah form input focus state

### How to Test

1. **Go to Index Page**: `http://localhost/index`
2. **Click User Button**: 
   - First time → Redirect to `/login`
3. **Login**:
   - Fill email/password (any value works for now)
   - Click "Log in" button
   - Data saved to localStorage
4. **View Profile**: 
   - Redirect to `/user`
   - See user info displayed
5. **Click Logout**:
   - Clear localStorage session
   - Redirect to `/login`

### Next Steps: Integrate with Backend API

Replace `simulateLogin()` function in `js/auth.js` dengan actual API call:

```javascript
// Current (Simulated)
fetch('/api/login', {
    method: 'POST',
    headers: {'Content-Type': 'application/json'},
    body: JSON.stringify({email, password})
})
.then(response => response.json())
.then(data => {
    if (data.success) {
        localStorage.setItem('currentUser', JSON.stringify(data.user));
        window.location.href = '/user';
    } else {
        showError(data.message);
    }
})
```

### Storage Format
Data disimpan di localStorage dengan key `currentUser`:
```json
{
    "email": "user@example.com",
    "username": "user",
    "id": "abc123xyz",
    "loginTime": "2025-12-21T10:30:00.000Z",
    "remember": true
}
```

### Security Notes
⚠️ **For Development Only**: 
- localStorage bukan secure untuk production
- Implementasi proper session/token-based auth untuk production
- Hash password di backend, jangan di frontend
- CSRF protection diperlukan untuk production
