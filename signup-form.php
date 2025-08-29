<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
        }
        .form-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            padding: 25px;
            max-width: 500px;
            width: 100%;
        }
        .form-heading {
            text-align: center;
            margin-bottom: 25px;
            color: #3b5998;
        }
        .form-icon {
            text-align: center;
            font-size: 50px;
            color: #3b5998;
            margin-bottom: 15px;
        }
        .btn-primary {
            background-color: #3b5998;
            border-color: #3b5998;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #2d4373;
            border-color: #2d4373;
        }
        .password-toggle {
            cursor: pointer;
        }
        .input-group-text {
            background-color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="./register-user.php" method="POST" class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="form-container">
                    <div class="form-icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <h2 class="form-heading">Create Your Account</h2>
                    
                    <form id="registrationForm">
                        <!-- Name Field -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your full name">
                            </div>
                        </div>
                        
                        <!-- Email Field -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                            </div>
                        </div>
                        
                        <!-- Password Field -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Create a password">
                                <span class="input-group-text password-toggle" id="togglePassword">
                                    <i class="fas fa-eye"></i>
                                </span>
                            </div>
                        </div>
                        
                        <!-- Confirm Password Field -->
                        <div class="mb-4">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" class="form-control"  id="confirmPassword" placeholder="Confirm your password">
                                <span class="input-group-text password-toggle" id="toggleConfirmPassword">
                                    <i class="fas fa-eye"></i>
                                </span>
                            </div>
                            <div id="passwordMatch" class="form-text"></div>
                        </div>
                        
                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </form>
    </div>

    <!-- Bootstrap & jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        $(document).ready(function() {
            // Toggle password visibility
            $('.password-toggle').click(function() {
                const input = $(this).closest('.input-group').find('input');
                const icon = $(this).find('i');
                
                if (input.attr('type') === 'password') {
                    input.attr('type', 'text');
                    icon.removeClass('fa-eye').addClass('fa-eye-slash');
                } else {
                    input.attr('type', 'password');
                    icon.removeClass('fa-eye-slash').addClass('fa-eye');
                }
            });
            
            // Check if passwords match
            $('#confirmPassword').on('keyup', function() {
                const password = $('#password').val();
                const confirmPassword = $(this).val();
                const matchElement = $('#passwordMatch');
                
                if (confirmPassword.length === 0) {
                    matchElement.text('');
                } else if (password !== confirmPassword) {
                    matchElement.html('<i class="fas fa-times-circle text-danger"></i> Passwords do not match');
                } else {
                    matchElement.html('<i class="fas fa-check-circle text-success"></i> Passwords match');
                }
            });
            
            // Form submission
            $('#registrationForm').submit(function(e) {
                
                const name = $('#name').val();
                const email = $('#email').val();
                const password = $('#password').val();
                const confirmPassword = $('#confirmPassword').val();
                
                // Simple validation
                if (!name || !email || !password || !confirmPassword) {
                    alert('Please fill in all fields');
                    return;
                }
                
                if (password !== confirmPassword) {
                    alert('Passwords do not match');
                    return;
                }
                
                // If everything is valid
                alert('Registration successful!');
                // Here you would typically send the data to a server
            });
        });
    </script>
</body>
</html>