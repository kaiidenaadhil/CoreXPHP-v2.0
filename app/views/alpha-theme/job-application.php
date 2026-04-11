<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Center | AVANT VISTA VENTURES</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #0a2463;
            --secondary-teal: #20c997;
            --accent-purple: #6f42c1;
            --text-primary: #333;
            --text-secondary: #6c757d;
            --text-inverse: #fff;
            --bg-primary: #f8f9fa;
            --bg-secondary: #e9ecef;
            --bg-tertiary: #fff;
            --card-bg: #ffffff;
            --medium-gray: #ced4da;
            --light-gray: #e9ecef;
            --success: #28a745;
            --error: #dc3545;
            --shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            --card-hover-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            --transition: all 0.3s ease;
            --gradient: linear-gradient(135deg, #0a2463 0%, #5e60ce 100%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #e9ecef 100%);
            color: var(--text-primary);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            padding: 20px;
        }

        .app-container {
            display: flex;
            max-width: 1400px;
            margin: 0 auto;
            width: 100%;
            background: var(--card-bg);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--card-hover-shadow);
            min-height: 80vh;
        }

        .left-panel {
            width: 320px;
            background: var(--primary-blue);
            color: var(--text-inverse);
            padding: 30px 0;
            display: flex;
            flex-direction: column;
        }

        .panel-header {
            padding: 0 30px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 20px;
        }

        .panel-header h2 {
            font-family: 'Poppins', sans-serif;
            font-size: 1.5rem;
            margin-bottom: 5px;
        }

        .panel-header p {
            opacity: 0.8;
            font-size: 0.9rem;
        }

        .app-list {
            flex: 1;
            overflow-y: auto;
        }

        .app-item {
            padding: 15px 30px;
            border-left: 4px solid transparent;
            cursor: pointer;
            transition: var(--transition);
        }

        .app-item:hover {
            background: rgba(255, 255, 255, 0.05);
        }

        .app-item.active {
            background: rgba(255, 255, 255, 0.1);
            border-left-color: var(--secondary-teal);
        }

        .app-title {
            font-weight: 600;
            margin-bottom: 5px;
            font-size: 1.1rem;
        }

        .app-meta {
            display: flex;
            justify-content: space-between;
            font-size: 0.85rem;
            opacity: 0.8;
        }

        .status-badge {
            display: inline-block;
            padding: 3px 10px;
            border-radius: 12px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .status-pending {
            background: rgba(255, 193, 7, 0.2);
            color: #ffc107;
        }

        .status-reviewing {
            background: rgba(23, 162, 184, 0.2);
            color: #17a2b8;
        }

        .status-approved {
            background: rgba(40, 167, 69, 0.2);
            color: #28a745;
        }

        .status-rejected {
            background: rgba(220, 53, 69, 0.2);
            color: #dc3545;
        }

        .new-app-btn {
            margin: 20px 30px 0;
            padding: 12px;
            background: var(--secondary-teal);
            color: white;
            border: none;
            border-radius: 8px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            text-align: center;
        }

        .new-app-btn:hover {
            background: #1aa87f;
            transform: translateY(-2px);
        }

        .right-panel {
            flex: 1;
            padding: 40px;
            overflow-y: auto;
            background: var(--bg-primary);
        }

        .panel-title {
            color: var(--primary-blue);
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--secondary-teal);
            font-size: 1.8rem;
        }

        .application-form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-section {
            grid-column: 1 / -1;
            margin-bottom: 30px;
        }

        .section-title {
            color: var(--primary-blue);
            margin-bottom: 20px;
            font-size: 1.3rem;
            display: flex;
            align-items: center;
        }

        .section-title i {
            margin-right: 10px;
            color: var(--secondary-teal);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .full-width {
            grid-column: 1 / -1;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--primary-blue);
        }

        .form-control {
            width: 100%;
            padding: 15px;
            border: 2px solid var(--medium-gray);
            border-radius: 10px;
            font-family: 'Roboto', sans-serif;
            font-size: 1rem;
            background-color: var(--bg-tertiary);
            color: var(--text-primary);
            transition: var(--transition);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--secondary-teal);
            box-shadow: 0 0 0 3px rgba(32, 201, 151, 0.2);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        .file-upload {
            position: relative;
            border: 2px dashed var(--medium-gray);
            border-radius: 10px;
            padding: 25px;
            text-align: center;
            transition: var(--transition);
            background: var(--bg-primary);
        }

        .file-upload:hover {
            border-color: var(--secondary-teal);
            background: rgba(32, 201, 151, 0.05);
        }

        .file-upload input {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0;
            cursor: pointer;
        }

        .file-upload-icon {
            font-size: 2.5rem;
            color: var(--secondary-teal);
            margin-bottom: 10px;
        }

        .file-upload-text {
            color: var(--text-secondary);
        }

        .file-upload-text strong {
            color: var(--primary-blue);
        }

        .form-hint {
            font-size: 0.85rem;
            color: var(--text-secondary);
            margin-top: 5px;
        }

        .submit-btn {
            background: var(--gradient);
            color: white;
            padding: 16px 25px;
            border: none;
            border-radius: 10px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
            transition: var(--transition);
            width: 100%;
            margin-top: 10px;
        }

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .application-status {
            background: var(--card-bg);
            border-radius: 10px;
            padding: 25px;
            margin-top: 30px;
            box-shadow: var(--shadow);
        }

        .status-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .status-title {
            color: var(--primary-blue);
            font-size: 1.2rem;
        }

        .status-info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .status-item {
            margin-bottom: 15px;
        }

        .status-label {
            font-weight: 500;
            color: var(--text-secondary);
            font-size: 0.9rem;
            margin-bottom: 5px;
        }

        .status-value {
            color: var(--text-primary);
            font-weight: 500;
        }

        @media (max-width: 992px) {
            .app-container {
                flex-direction: column;
            }
            
            .left-panel {
                width: 100%;
                padding: 20px;
            }
            
            .app-list {
                display: flex;
                overflow-x: auto;
                padding-bottom: 15px;
            }
            
            .app-item {
                min-width: 250px;
                border-left: none;
                border-bottom: 3px solid transparent;
            }
            
            .app-item.active {
                border-left: none;
                border-bottom: 3px solid var(--secondary-teal);
            }
        }

        @media (max-width: 576px) {
            .right-panel {
                padding: 25px;
            }
            
            .application-form {
                grid-template-columns: 1fr;
            }
            
            .status-info {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="app-container">
        <div class="left-panel">
            <div class="panel-header">
                <h2>Application Center</h2>
                <p>Manage your job applications</p>
            </div>
            
            <div class="app-list">
                <div class="app-item active">
                    <div class="app-title">Senior Digital Marketing Strategist</div>
                    <div class="app-meta">
                        <span>Applied: Today</span>
                        <span class="status-badge status-pending">Pending</span>
                    </div>
                </div>
                
                <div class="app-item">
                    <div class="app-title">Frontend Developer</div>
                    <div class="app-meta">
                        <span>Applied: 3 days ago</span>
                        <span class="status-badge status-reviewing">Reviewing</span>
                    </div>
                </div>
                
                <div class="app-item">
                    <div class="app-title">Content Creator</div>
                    <div class="app-meta">
                        <span>Applied: 1 week ago</span>
                        <span class="status-badge status-approved">Approved</span>
                    </div>
                </div>
                
                <div class="app-item">
                    <div class="app-title">Project Manager</div>
                    <div class="app-meta">
                        <span>Applied: 2 weeks ago</span>
                        <span class="status-badge status-rejected">Rejected</span>
                    </div>
                </div>
            </div>
            
            <button class="new-app-btn">
                <i class="fas fa-plus"></i> New Application
            </button>
        </div>
        
        <div class="right-panel">
            <h2 class="panel-title">Application Details</h2>
            
            <form class="application-form" id="job-application-form">
                <div class="form-section">
                    <h3 class="section-title"><i class="fas fa-user-circle"></i> Personal Information</h3>
                    
                    <div class="form-group full-width">
                        <label for="full-name" class="form-label">Full Name *</label>
                        <input type="text" id="full-name" name="full-name" class="form-control" required placeholder="Enter your full name" value="John Doe">
                    </div>
                    
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address *</label>
                        <input type="email" id="email" name="email" class="form-control" required placeholder="your.email@example.com" value="john.doe@example.com">
                    </div>
                    
                    <div class="form-group">
                        <label for="phone" class="form-label">Phone Number *</label>
                        <input type="tel" id="phone" name="phone" class="form-control" required placeholder="(123) 456-7890" value="(555) 123-4567">
                    </div>
                </div>
                
                <div class="form-section">
                    <h3 class="section-title"><i class="fas fa-file-alt"></i> Application Materials</h3>
                    
                    <div class="form-group full-width">
                        <label class="form-label">Upload Your Resume *</label>
                        <div class="file-upload">
                            <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
                            <div class="file-upload-icon">
                                <i class="fas fa-cloud-upload-alt"></i>
                            </div>
                            <p class="file-upload-text"><strong>Click to upload</strong> or drag and drop</p>
                            <p class="form-hint">PDF, DOC, DOCX (Max: 5MB)</p>
                        </div>
                    </div>
                    
                    <div class="form-group full-width">
                        <label for="cover-letter" class="form-label">Cover Letter *</label>
                        <textarea id="cover-letter" name="cover-letter" class="form-control" required placeholder="Why are you interested in this position and what makes you a good fit?">I am excited to apply for the Senior Digital Marketing Strategist position at Avant Vista Ventures. With over 5 years of experience in digital marketing and a proven track record of developing successful campaigns, I believe I would be a valuable addition to your team.</textarea>
                    </div>
                </div>
                
                <div class="form-group full-width">
                    <button type="submit" class="submit-btn">Update Application</button>
                </div>
            </form>
            
            <div class="application-status">
                <div class="status-header">
                    <h3 class="status-title">Application Status</h3>
                    <span class="status-badge status-pending">Pending</span>
                </div>
                
                <div class="status-info">
                    <div class="status-item">
                        <div class="status-label">Application ID</div>
                        <div class="status-value">APP-2023-089</div>
                    </div>
                    
                    <div class="status-item">
                        <div class="status-label">Position Applied For</div>
                        <div class="status-value">Senior Digital Marketing Strategist</div>
                    </div>
                    
                    <div class="status-item">
                        <div class="status-label">Department</div>
                        <div class="status-value">Marketing</div>
                    </div>
                    
                    <div class="status-item">
                        <div class="status-label">Location</div>
                        <div class="status-value">Remote</div>
                    </div>
                    
                    <div class="status-item">
                        <div class="status-label">Applied At</div>
                        <div class="status-value">Today at 10:30 AM</div>
                    </div>
                    
                    <div class="status-item">
                        <div class="status-label">Last Updated</div>
                        <div class="status-value">Just now</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('job-application-form');
            const fileUpload = document.querySelector('.file-upload');
            const fileInput = document.getElementById('resume');
            const appItems = document.querySelectorAll('.app-item');
            
            // File upload feedback
            fileInput.addEventListener('change', function() {
                if (this.files.length > 0) {
                    fileUpload.innerHTML = `
                        <i class="fas fa-check-circle" style="color: var(--success); font-size: 2.5rem; margin-bottom: 10px;"></i>
                        <p class="file-upload-text"><strong>${this.files[0].name}</strong></p>
                        <p class="form-hint">Click to change file</p>
                        <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; opacity: 0; cursor: pointer;">
                    `;
                    
                    // Re-add the event listener to the new input
                    document.getElementById('resume').addEventListener('change', fileInput.addEventListener('change', arguments.callee));
                }
            });
            
            // Application item selection
            appItems.forEach(item => {
                item.addEventListener('click', function() {
                    appItems.forEach(i => i.classList.remove('active'));
                    this.classList.add('active');
                    
                    // In a real application, this would load the selected application data
                    document.querySelector('.status-value:last-child').textContent = 'Just now';
                });
            });
            
            // Form submission handling
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Basic form validation
                const requiredFields = form.querySelectorAll('[required]');
                let isValid = true;
                
                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        isValid = false;
                        field.style.borderColor = 'var(--error)';
                    } else {
                        field.style.borderColor = '';
                    }
                });
                
                if (isValid) {
                    // In a real application, you would send the form data to a server here
                    alert('Application updated successfully!');
                    
                    // Update the last updated timestamp
                    document.querySelectorAll('.status-value')[5].textContent = 'Just now';
                } else {
                    alert('Please fill in all required fields.');
                }
            });
        });
    </script>
</body>
</html>