<?php
// Assuming that you've already fetched the user data in your controller
// Example:
// $user = $this->model('AuthModel')->getUserById($userId);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Settings</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css">
    <style>
    
        .dashboard {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
            animation: fadeIn 0.6s ease-out;
        }

        .top-row {
            background: linear-gradient(135deg, #662887 0%, #8e44ad 100%);
            padding: 25px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        .top-row h2 {
            font-size: 1.8rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .btn {
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            gap: 8px;
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }

        .settings-container {
            padding: 40px;
        }

        .form-section {
            margin-bottom: 40px;
            padding-bottom: 30px;
            border-bottom: 1px solid #eee;
        }

        .form-section:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .section-title {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid #f0f0f7;
            color: #662887;
            font-size: 1.5rem;
            gap: 12px;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            color: #555;
            font-size: 1.05rem;
        }

        .input-container {
            position: relative;
        }

        .input-container i {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #8e44ad;
            font-size: 1.3rem;
            z-index: 2;
        }

        /* Parent class for input padding */
        .input-padding {
            padding: 1rem 3rem;
        }

        input {
            width: 100%;
            padding: 1rem 3rem;
            border: 2px solid #e0e0e7;
            border-radius: 10px;
            font-size: 1.05rem;
            transition: all 0.3s ease;
        }

        input:focus {
              padding: 1rem 3rem;
            outline: none;
            border-color: #8e44ad;
            box-shadow: 0 0 0 3px rgba(142, 68, 173, 0.2);
        }

        input[readonly] {
              padding: 1rem 3rem;
            background-color: #f9f9ff;
            color: #777;
            cursor: not-allowed;
        }

        .toggle-password {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #8e44ad;
            cursor: pointer;
            font-size: 1.3rem;
            z-index: 2;
        }

        /* Password input specific styles */
input[type="password"] {
          padding: 1rem 3rem;
}

/* Text input specific styles */
input[type="text"] {
          padding: 1rem 3rem;
}

        .form-actions {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #662887 0%, #8e44ad 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(102, 40, 135, 0.3);
            flex: 1;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #5c258d 0%, #7d3c98 100%);
            box-shadow: 0 6px 20px rgba(102, 40, 135, 0.4);
            transform: translateY(-2px);
        }

        .btn-cancel {
            background: white;
            color: #662887;
            border: 1px solid #e0e0e7;
            flex: 1;
        }

        .btn-cancel:hover {
            background: #f9f9ff;
            border-color: #d0d0df;
            transform: translateY(-2px);
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 30px 0;
            color: #888;
        }

        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .divider span {
            padding: 0 15px;
            font-weight: 500;
            color: #662887;
            font-size: 1.1rem;
        }

        .password-strength {
            height: 6px;
            background: #f0f0f7;
            border-radius: 3px;
            margin-top: 10px;
            overflow: hidden;
            position: relative;
        }

        .strength-meter {
            height: 100%;
            width: 0;
            background: #e74c3c;
            border-radius: 3px;
            transition: width 0.3s ease, background 0.3s ease;
        }

        .strength-labels {
            display: flex;
            justify-content: space-between;
            margin-top: 8px;
            font-size: 0.85rem;
            color: #888;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .settings-container {
                padding: 30px 20px;
            }
            
            .top-row {
                padding: 20px;
                flex-direction: column;
                text-align: center;
                gap: 15px;
            }
            
            .form-actions {
                flex-direction: column;
            }

            .input-padding {
                padding: 1rem 2.5rem;
            }
        }

        @media (max-width: 480px) {
            .section-title {
                font-size: 1.3rem;
            }
            
            input {
                padding: 1rem 2.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <div class="top-row">
            <h2><i class="uil uil-cog"></i> User Settings</h2>
            <a href="#" class="btn btn-secondary">
                <i class="uil uil-arrow-left"></i> Back to Dashboard
            </a>
        </div>
        
        <div class="settings-container">
            <!-- Form for Updating Name -->
            <div class="form-section">
                <div class="section-title">
                    <i class="uil uil-user-edit"></i> Update Your Profile
                </div>
                
                <form method="post" action="<?= ROOT ?>/admin/settings/update-name">
                    <div class="form-group">
                        <label for="userName">Current Name</label>
                        <div class="input-container">
                            <i class="uil uil-user"></i>
                            <input type="text" id="userName" name="userName" value="<?= $user['name'] ?>" readonly class="input-padding">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="newUserName">New Name</label>
                        <div class="input-container">
                            <i class="uil uil-sign-alt"></i>
                            <input type="text" id="newUserName" name="newUserName" placeholder="Enter your new name" required class="input-padding">
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">
                            <i class="uil uil-save"></i> Update Name
                        </button>
                        <a href="#" class="btn btn-cancel">
                            <i class="uil uil-times"></i> Cancel
                        </a>
                    </div>
                </form>
            </div>
            
            <div class="divider">
                <span>Security Settings</span>
            </div>

            <!-- Form for Updating Password -->
            <div class="form-section">
                <div class="section-title">
                    <i class="uil uil-lock"></i> Change Password
                </div>
                
                <form method="post" action="<?= ROOT ?>/admin/settings/update-password">
                    <div class="form-group">
                        <label for="currentPassword">Current Password</label>
                        <div class="input-container">
                            <i class="uil uil-key-skeleton"></i>
                            <input type="password" id="currentPassword" name="currentPassword" placeholder="Enter your current password" required class="input-padding">
                            <button type="button" class="toggle-password" data-target="currentPassword">
                                <i class="uil uil-eye"></i>
                            </button>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="newPassword">New Password</label>
                        <div class="input-container">
                            <i class="uil uil-lock-access"></i>
                            <input type="password" id="newPassword" name="newPassword" placeholder="Create a new password" required class="input-padding">
                            <button type="button" class="toggle-password" data-target="newPassword">
                                <i class="uil uil-eye"></i>
                            </button>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="confirmPassword">Confirm New Password</label>
                        <div class="input-container">
                            <i class="uil uil-check-circle"></i>
                            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm your new password" required class="input-padding">
                            <button type="button" class="toggle-password" data-target="confirmPassword">
                                <i class="uil uil-eye"></i>
                            </button>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">
                            <i class="uil uil-sync"></i> Update Password
                        </button>
                        <a href="#" class="btn btn-cancel">
                            <i class="uil uil-times"></i> Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script>
        // Toggle password visibility
        document.querySelectorAll('.toggle-password').forEach(button => {
            button.addEventListener('click', function() {
                const targetId = this.getAttribute('data-target');
                const inputField = document.getElementById(targetId);
                const icon = this.querySelector('i');
                
                if (inputField.type === "password") {
                    inputField.type = "text";
                    icon.classList.replace('uil-eye', 'uil-eye-slash');
                } else {
                    inputField.type = "password";
                    icon.classList.replace('uil-eye-slash', 'uil-eye');
                }
            });
        });
    </script>
</body>
</html>
