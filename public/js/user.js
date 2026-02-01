// ===== User Profile Page Logic =====

document.addEventListener('DOMContentLoaded', function() {
    // Cek apakah user sudah login
    if (!isLoggedIn()) {
        // Jika belum login, redirect ke login page
        window.location.href = '/login';
        return;
    }
    
    // Tampilkan data user
    displayUserProfile();
});

// Display user profile information
function displayUserProfile() {
    const user = getCurrentUser();
    
    if (user) {
        // Update username display
        const displayName = user.username || user.email;
        document.getElementById('userDisplayName').textContent = displayName.charAt(0).toUpperCase() + displayName.slice(1);
        
        // Update member date
        if (user.loginTime) {
            const loginDate = new Date(user.loginTime);
            const monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                              'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            const formattedDate = monthNames[loginDate.getMonth()] + ' ' + loginDate.getFullYear();
            document.getElementById('memberDate').textContent = formattedDate;
        }
        
        // Log user info (untuk debug)
        console.log('User logged in:', user);
    }
}

// Edit profile function
function editProfile() {
    alert('Edit Profile feature coming soon!');
    // TODO: Implement edit profile modal/page
}

// Logout function (already defined in auth.js, but can be overridden here if needed)
// window.logout = function() {
//     localStorage.removeItem('currentUser');
//     window.location.href = '/login';
// };
