<?php
session_start();

if(isset($_SESSION['ticket'])){
    // header ("Location: http://localhost:3000/index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Signup System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 20px;
        }
        .auth-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 450px;
            overflow: hidden;
            max-height: 95vh; /* Added to prevent overflow */
        }
        .auth-header {
            background: linear-gradient(45deg, #007bff, #6610f2);
            color: white;
            padding: 25px; /* Reduced padding */
            text-align: center;
        }
        .auth-body {
            padding: 25px; /* Reduced padding */
            overflow-y: auto; /* Added scroll if needed */
            max-height: 65vh; /* Limit height */
        }
        .form-control {
            border-radius: 8px;
            padding: 12px 15px;
            font-size: 0.9rem; /* Slightly smaller font */
        }
        .input-group-text {
            background: transparent;
            border-radius: 0 8px 8px 0;
        }
        .btn-auth {
            background: linear-gradient(45deg, #007bff, #6610f2);
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-weight: 600;
            color: white;
            width: 100%;
            transition: all 0.3s;
        }
        .btn-auth:hover {
            background: linear-gradient(45deg, #0069d9, #5a0fd9);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .password-feedback {
            font-size: 0.8rem; /* Smaller font */
            margin-top: 5px;
        }
        .form-label {
            font-weight: 500;
            margin-bottom: 5px;
            font-size: 0.9rem; /* Slightly smaller font */
        }
        .toggle-form {
            text-align: center;
            margin-top: 15px; /* Reduced margin */
            font-size: 0.85rem; /* Smaller font */
        }
        .toggle-form a {
            color: #007bff;
            text-decoration: none;
            font-weight: 600;
            cursor: pointer;
        }
        .toggle-form a:hover {
            text-decoration: underline;
        }
        .alert {
            border-radius: 8px;
            padding: 8px 12px; /* Reduced padding */
            margin-bottom: 12px; /* Reduced margin */
            display: none;
            font-size: 0.85rem; /* Smaller font */
        }
        .password-strength {
            height: 4px; /* Reduced height */
            margin-top: 5px;
            margin-bottom: 12px; /* Reduced margin */
            border-radius: 5px;
            overflow: hidden;
        }
        .strength-weak {
            background: linear-gradient(to right, #ff4b4b, #ff8f8f);
            width: 33%;
        }
        .strength-medium {
            background: linear-gradient(to right, #ff8f8f, #ffc107);
            width: 66%;
        }
        .strength-strong {
            background: linear-gradient(to right, #20c997, #28a745);
            width: 100%;
        }
        .form-check {
            margin-bottom: 12px; /* Reduced margin */
        }
        .form-check-input {
            margin-top: 0.2rem; /* Better alignment */
        }
        .form-check-label {
            font-size: 0.85rem; /* Smaller font */
        }
        .mb-3 {
            margin-bottom: 15px !important; /* Consistent spacing */
        }
        .mb-4 {
            margin-bottom: 18px !important; /* Consistent spacing */
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <!-- Login Form -->
        <div id="loginForm">
            <div class="auth-header">
                <h2 style="font-size: 1.5rem;"><i class="fas fa-sign-in-alt me-2"></i>Welcome Back</h2>
                <p class="mb-0" style="font-size: 0.9rem;">Sign in to your account</p>
            </div>
            <div class="auth-body">
                <div class="alert alert-danger" id="loginAlert"></div>
                
                <form id="loginFormElement" method="post"  action="./log-user.php">
                    <!-- Email Field -->
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">Email Address</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control" name="email" id="loginEmail" placeholder="Enter your email" required>
                        </div>
                    </div>
                    
                    <!-- Password Field -->
                    <div class="mb-3">
                        <label for="loginPassword" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control" name="password" id="loginPassword" placeholder="Enter your password" required>
                            <span class="input-group-text toggle-password">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>

                        <?php 
                        if(isset($_SESSION['invalid'])){
                          echo "<p class='text-danger fw-semibold'>
                            Invalid data
                        </p>";
                        }
                        unset($_SESSION['invalid']);
                        
                        ?>
                    </div>
                    
                    <!-- Remember Me & Forgot Password -->
                    <div class="mb-3 d-flex justify-content-between align-items-center">
                        <!-- <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div> -->
                        <a href="#" id="forgotPassword" class="text-decoration-none" style="font-size: 0.85rem;">Forgot password?</a>
                    </div>
                    
                    <!-- Login Button -->
                    <div  class="d-grid">
                        <button type="submit" class="btn btn-auth">
                            <i class="fas fa-sign-in-alt me-2"></i>Login
                        </button>
                    </div>
                </form>
                
                <div class="toggle-form">
                    Don't have an account? <a id="showSignup">Sign up</a>
                </div>
            </div>
        </div>
        

        <!-- Signup Form (Initially Hidden) -->
         
        <div id="signupForm" style="display: none;">
            <div class="auth-header">
                <h2 style="font-size: 1.5rem;"><i class="fas fa-user-plus me-2"></i>Create Account</h2>
                <p class="mb-0" style="font-size: 0.9rem;">Join our community today</p>
            </div>
            <div class="auth-body">
                <div class="alert alert-danger" id="signupAlert"></div>
                
                <form id="signupFormElement" method="post" action="./register-user.php">
                    <!-- Name Field -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" required>
                        </div>
                    </div>
                    
                    <!-- Email Field -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                    </div>
                    
                    <!-- Password Field -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Create a password" required>
                            <span class="input-group-text toggle-password">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                        <div class="password-strength">
                            <div id="passwordStrength" class="strength-weak"></div>
                        </div>
                        <div class="password-feedback">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="lengthCheck" disabled>
                                <label class="form-check-label" for="lengthCheck">8+ chars</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="uppercaseCheck" disabled>
                                <label class="form-check-label" for="uppercaseCheck">Uppercase</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="numberCheck" disabled>
                                <label class="form-check-label" for="numberCheck">Number</label>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Confirm Password Field -->
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password" required>
                            <span class="input-group-text toggle-password">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                        <div id="passwordMatch" class="password-feedback mt-1"></div>
                    </div>
                    
                    <!-- Terms Agreement -->
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="termsAgreement" required>
                            <label class="form-check-label" for="termsAgreement">I agree to the <a href="#">Terms</a> and <a href="#">Privacy Policy</a></label>
                        </div>
                    </div>
                    
                    <!-- Sign Up Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-auth">
                            <i class="fas fa-user-plus me-2"></i>Sign Up
                        </button>
                    </div>
                </form>
                
                <div class="toggle-form">
                    Already have an account? <a id="showLogin">Log In</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // DOM Elements
            const loginForm = document.getElementById('loginForm');
            const signupForm = document.getElementById('signupForm');
            const showSignupBtn = document.getElementById('showSignup');
            const showLoginBtn = document.getElementById('showLogin');
            const loginAlert = document.getElementById('loginAlert');
            const signupAlert = document.getElementById('signupAlert');
            
            // Toggle between login and signup forms
            showSignupBtn.addEventListener('click', function() {
                loginForm.style.display = 'none';
                signupForm.style.display = 'block';
                clearAlerts();
            });
            
            showLoginBtn.addEventListener('click', function() {
                signupForm.style.display = 'none';
                loginForm.style.display = 'block';
                clearAlerts();
            });
            
            function clearAlerts() {
                loginAlert.style.display = 'none';
                signupAlert.style.display = 'none';
            }
            
            // Password toggle functionality
            const togglePasswordButtons = document.querySelectorAll('.toggle-password');
            
            togglePasswordButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const input = this.closest('.input-group').querySelector('input');
                    const icon = this.querySelector('i');
                    
                    if (input.type === 'password') {
                        input.type = 'text';
                        icon.classList.remove('fa-eye');
                        icon.classList.add('fa-eye-slash');
                    } else {
                        input.type = 'password';
                        icon.classList.remove('fa-eye-slash');
                        icon.classList.add('fa-eye');
                    }
                });
            });
            
            // Password validation for signup
            const passwordInput = document.getElementById('password');
            const confirmPasswordInput = document.getElementById('confirmPassword');
            const lengthCheck = document.getElementById('lengthCheck');
            const uppercaseCheck = document.getElementById('uppercaseCheck');
            const numberCheck = document.getElementById('numberCheck');
            const passwordMatch = document.getElementById('passwordMatch');
            const passwordStrength = document.getElementById('passwordStrength');
            
            passwordInput.addEventListener('input', function() {
                const password = passwordInput.value;
                
                // Check password length
                lengthCheck.checked = password.length >= 8;
                
                // Check for uppercase letters
                uppercaseCheck.checked = /[A-Z]/.test(password);
                
                // Check for numbers
                numberCheck.checked = /[0-9]/.test(password);
                
                // Update password strength indicator
                updatePasswordStrength(password);
                
                // Check if passwords match
                validatePasswords();
            });
            
            confirmPasswordInput.addEventListener('input', validatePasswords);
            
            function validatePasswords() {
                if (confirmPasswordInput.value === '') {
                    passwordMatch.textContent = '';
                    return;
                }
                
                if (passwordInput.value === confirmPasswordInput.value) {
                    passwordMatch.innerHTML = '<i class="fas fa-check-circle text-success"></i> Passwords match';
                } else {
                    passwordMatch.innerHTML = '<i class="fas fa-times-circle text-danger"></i> Passwords do not match';
                }
            }
            
            function updatePasswordStrength(password) {
                let strength = 0;
                
                if (password.length >= 8) strength++;
                if (/[A-Z]/.test(password)) strength++;
                if (/[0-9]/.test(password)) strength++;
                if (/[^A-Za-z0-9]/.test(password)) strength++;
                
                // Update strength indicator
                passwordStrength.className = '';
                if (password.length === 0) {
                    passwordStrength.classList.add('strength-weak');
                    passwordStrength.style.width = '0%';
                } else if (strength < 2) {
                    passwordStrength.classList.add('strength-weak');
                    passwordStrength.style.width = '33%';
                } else if (strength < 4) {
                    passwordStrength.classList.add('strength-medium');
                    passwordStrength.style.width = '66%';
                } else {
                    passwordStrength.classList.add('strength-strong');
                    passwordStrength.style.width = '100%';
                }
            }
            
            // Form submission handlers
            document.getElementById('loginFormElement').addEventListener('submit', function(e) {
                // e.preventDefault();
                
                const email = document.getElementById('loginEmail').value;
                const password = document.getElementById('loginPassword').value;
                const rememberMe = document.getElementById('rememberMe').checked;
                
                // Simple validation
                if (!email || !password) {
                    showAlert(loginAlert, 'Please fill in all fields');
                    return;
                }
                
                // Email validation
                if (!validateEmail(email)) {
                    showAlert(loginAlert, 'Please enter a valid email address');
                    return;
                }
                
                // Simulate login process
                simulateLogin(email, password, rememberMe);
            });
            
            document.getElementById('signupFormElement').addEventListener('submit', function(e) {
                
                
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;
                const confirmPassword = document.getElementById('confirmPassword').value;
                const termsAgreed = document.getElementById('termsAgreement').checked;
                
                // Basic validation
                if (!name || !email || !password || !confirmPassword) {
                    showAlert(signupAlert, 'Please fill in all fields');
                    return;
                }
                
                if (!termsAgreed) {
                    showAlert(signupAlert, 'Please agree to the terms and conditions');
                    return;
                }
                
                // Email validation
                if (!validateEmail(email)) {
                    showAlert(signupAlert, 'Please enter a valid email address');
                    return;
                }
                
                // Password validation
                if (password.length < 8) {
                    showAlert(signupAlert, 'Password must be at least 8 characters long');
                    return;
                }
                
                if (!/[A-Z]/.test(password)) {
                    showAlert(signupAlert, 'Password must contain at least one uppercase letter');
                    return;
                }
                
                if (!/[0-9]/.test(password)) {
                    showAlert(signupAlert, 'Password must contain at least one number');
                    return;
                }
                
                if (password !== confirmPassword) {
                    showAlert(signupAlert, 'Passwords do not match');
                    return;
                }
                
                // Simulate signup process
                simulateSignup(name, email, password);
            });
            
            // Forgot password functionality
            document.getElementById('forgotPassword').addEventListener('click', function(e) {
                e.preventDefault();
                
                const email = prompt('Please enter your email address:');
                if (email && validateEmail(email)) {
                    alert(`Password reset instructions have been sent to ${email}`);
                } else if (email) {
                    alert('Please enter a valid email address');
                }
            });
            
            // Helper functions
            function validateEmail(email) {
                const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(email);
            }
            
            function showAlert(alertElement, message) {
                alertElement.textContent = message;
                alertElement.style.display = 'block';
                
                // Hide alert after 5 seconds
                setTimeout(() => {
                    alertElement.style.display = 'none';
                }, 5000);
            }
            
            function simulateLogin(email, password, rememberMe) {
                // In a real application, you would make an API call here
                console.log('Logging in with:', { email, password, rememberMe });
                
                // Show success message
                showAlert(loginAlert, 'Login successful! Redirecting...');
                
                // Simulate redirect
                setTimeout(() => {
                    alert(`Logged in successfully as ${email}`);
                    document.getElementById('loginFormElement').reset();
                }, 1500);
            }
            
            function simulateSignup(name, email, password) {
                // In a real application, you would make an API call here
                console.log('Signing up with:', { name, email, password });
                
                // Show success message
                showAlert(signupAlert, 'Account created successfully! Redirecting...');
                
                // Simulate redirect
                setTimeout(() => {
                    alert(`Account created successfully for ${name} (${email})`);
                    document.getElementById('signupFormElement').reset();
                    
                    // Switch to login form
                    signupForm.style.display = 'none';
                    loginForm.style.display = 'block';
                    
                    // Pre-fill email in login form
                    document.getElementById('loginEmail').value = email;
                }, 1500);
            }
        });
    </script>
</body>
</html> 