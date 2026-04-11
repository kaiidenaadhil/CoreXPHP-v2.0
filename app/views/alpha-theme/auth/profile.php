<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced User Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        
        .profile-card {
            width: 100%;
            max-width: 800px;  /* Limit the width of the profile card */
            margin:0px auto;
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            animation: fadeIn 0.6s ease-out;
            transition: transform 0.3s ease;
        }

        .profile-card:hover {
            transform: translateY(-5px);
        }

        .profile-header {
            background: linear-gradient(135deg, #662887 0%, #8e44ad 100%);
            padding: 40px 30px;
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .profile-header::before {
            content: "";
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .profile-header::after {
            content: "";
            position: absolute;
            bottom: -80px;
            left: -50px;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
        }

        .profile-avatar {
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, #5c258d 0%, #4389a2 100%);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3.5rem;
            font-weight: bold;
            margin: 0 auto 20px;
            border: 4px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 2;
            transition: all 0.3s ease;
        }

        .profile-avatar:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .profile-details {
            position: relative;
            z-index: 2;
        }

        .profile-details h3 {
            font-size: 2.2rem;
            margin: 0;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .profile-details .email {
            font-size: 1.2rem;
            margin: 8px 0;
            opacity: 0.9;
        }

        .role-badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            padding: 6px 18px;
            border-radius: 20px;
            margin-top: 10px;
            font-size: 0.9rem;
            font-weight: 500;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .profile-content {
            display: flex;
            padding: 30px;
        }

        .profile-info {
            flex: 1;
            padding-right: 30px;
        }

        .info-section {
            margin-bottom: 30px;
        }

        .info-section h4 {
            font-size: 1.1rem;
            color: #662887;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            padding-bottom: 8px;
            border-bottom: 1px solid #eee;
        }

        .info-section h4 i {
            margin-right: 10px;
        }

        .info-item {
            display: flex;
            margin-bottom: 15px;
            align-items: flex-start;
        }

        .info-item i {
            color: #8e44ad;
            min-width: 24px;
            margin-top: 4px;
            margin-right: 12px;
        }

        .info-content {
            flex: 1;
        }

        .info-content h5 {
            font-size: 0.95rem;
            color: #666;
            margin-bottom: 4px;
            font-weight: 500;
        }

        .info-content p {
            font-size: 1.1rem;
            color: #333;
            font-weight: 500;
        }

        .stats-section {
            background: #f9f9ff;
            border-radius: 12px;
            padding: 25px;
            flex: 0 0 250px;
            border: 1px solid #f0f0f7;
        }

        .stats-section h4 {
            color: #662887;
            margin-bottom: 20px;
            text-align: center;
            font-size: 1.2rem;
        }

        .stat-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        .stat-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .stat-icon {
            width: 46px;
            height: 46px;
            background: linear-gradient(135deg, #f0f5ff 0%, #e6edfa 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: #662887;
            font-size: 1.2rem;
        }

        .stat-content h5 {
            font-size: 0.9rem;
            color: #888;
            margin-bottom: 4px;
        }

        .stat-content p {
            font-size: 1.2rem;
            color: #333;
            font-weight: 600;
        }

        .profile-footer {
            background: #f9f9ff;
            border-top: 1px solid #eee;
            padding: 25px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn {
            padding: 14px 30px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .btn i {
            margin-right: 8px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #662887 0%, #8e44ad 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(102, 40, 135, 0.3);
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #5c258d 0%, #7d3c98 100%);
            box-shadow: 0 6px 20px rgba(102, 40, 135, 0.4);
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: white;
            color: #662887;
            border: 1px solid #e0e0e7;
        }

        .btn-secondary:hover {
            background: #f9f9ff;
            border-color: #d0d0df;
            transform: translateY(-2px);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 768px) {
            .profile-content {
                flex-direction: column;
            }
            
            .profile-info {
                padding-right: 0;
                margin-bottom: 30px;
            }
            
            .stats-section {
                flex: 0 0 auto;
                width: 100%;
            }
            
            .profile-footer {
                flex-direction: column;
                gap: 15px;
            }
            
            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="profile-card">
        <div class="profile-header">
            <div class="profile-avatar">
                <span><?= strtoupper(substr($user['name'], 0, 1)) ?></span>
            </div>
            <div class="profile-details">
                <h3><?= $user['name'] ?></h3>
                <p class="email"><?= $user['userEmail'] ?></p>
                <span class="role-badge"><?= $user['userRole'] ?></span>
            </div>
        </div>
        
        <div class="profile-content">
            <div class="profile-info">
                <div class="info-section">
                    <h4><i class="fas fa-user-circle"></i> Personal Information</h4>
                    <div class="info-item">
                        <i class="fas fa-id-card"></i>
                        <div class="info-content">
                            <h5>Full Name</h5>
                            <p><?= $user['name'] ?></p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <div class="info-content">
                            <h5>Email Address</h5>
                            <p><?= $user['userEmail'] ?></p>
                        </div>
                    </div>
                </div>
                
                <div class="info-section">
                    <h4><i class="fas fa-history"></i> Account Activity</h4>
                    <div class="info-item">
                        <i class="fas fa-calendar-plus"></i>
                        <div class="info-content">
                            <h5>Account Created On</h5>
                            <p><?= date('F j, Y, g:i a', strtotime($user['userCreatedAt'])) ?></p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-sign-in-alt"></i>
                        <div class="info-content">
                            <h5>Last Login</h5>
                            <p><?= date('F j, Y, g:i a', strtotime($user['lastLoginAt'])) ?></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="stats-section">
                <h4>Account Statistics</h4>
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="stat-content">
                        <h5>Tasks Completed</h5>
                        <p>128</p>
                    </div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-content">
                        <h5>Team Members</h5>
                        <p>24</p>
                    </div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="stat-content">
                        <h5>Performance Rating</h5>
                        <p>4.8/5.0</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="profile-footer">
            <button class="btn btn-secondary">
                <i class="fas fa-download"></i> Export Profile
            </button>
            <button class="btn btn-primary">
                <i class="fas fa-edit"></i> Edit Profile
            </button>
        </div>
    </div>
</body>
</html>
