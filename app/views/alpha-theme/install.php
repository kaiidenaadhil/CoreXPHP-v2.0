<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Admin Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #2271b1;
            --primary-hover: #135e96;
            --secondary: #f6f7f7;
            --border: #ddd;
            --text: #3c434a;
            --success: #00a32a;
            --warning: #dba617;
        }

        body {
            background-color: #f1f1f1;
            color: var(--text);
            line-height: 1.6;
        }

        .admin-container {
            max-width: 800px;
            margin: 2rem auto;
            background: white;
            border: 1px solid var(--border);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
        }

        .admin-header {
            background: var(--primary);
            color: white;
            padding: 1.5rem;
            text-align: center;
            border-radius: 4px 4px 0 0;
        }

        .admin-header h1 {
            font-weight: 500;
            font-size: 23px;
        }

        .admin-content {
            padding: 1.5rem;
        }

        .admin-notice {
            background: #f0f6fc;
            border-left: 4px solid var(--primary);
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 2px;
        }

        .form-group {
            margin-bottom: 1.2rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid var(--border);
            border-radius: 4px;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 2px rgba(34, 113, 177, 0.2);
        }

        .divider {
            text-align: center;
            margin: 1.5rem 0;
            position: relative;
        }

        .divider::before {
            content: "";
            position: absolute;
            left: 0;
            top: 50%;
            right: 0;
            border-top: 1px solid var(--border);
            z-index: 1;
        }

        .divider-text {
            background: white;
            position: relative;
            z-index: 2;
            padding: 0 12px;
            color: #757575;
        }

        .file-input {
            position: relative;
        }

        .file-input input[type="file"] {
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }

        .file-input-label {
            display: flex;
            align-items: center;
            padding: 10px;
            border: 1px solid var(--border);
            border-radius: 4px;
            background: var(--secondary);
            cursor: pointer;
        }

        .file-input-label i {
            margin-right: 8px;
            color: var(--primary);
        }

        .file-name {
            margin-left: 10px;
            font-style: italic;
            color: #757575;
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
            transition: background 0.3s;
            text-decoration: none;
        }

        .btn:hover {
            background: var(--primary-hover);
        }

        .btn-success {
            background: var(--success);
        }

        .btn-success:hover {
            background: #008a20;
        }

        .btn-warning {
            background: var(--warning);
        }

        .action-buttons {
            display: flex;
            gap: 12px;
            margin-top: 1.5rem;
        }

        .admin-footer {
            background: var(--secondary);
            padding: 1rem 1.5rem;
            border-top: 1px solid var(--border);
            text-align: right;
            border-radius: 0 0 4px 4px;
        }

        .connection-status {
            margin-top: 1.5rem;
            padding: 12px;
            border-radius: 4px;
            display: none;
        }

        .status-success {
            background: #edfaef;
            border-left: 4px solid var(--success);
            display: block;
        }

        .status-error {
            background: #fcf0f1;
            border-left: 4px solid #d63638;
            display: block;
        }

        @media (max-width: 768px) {
            .admin-container {
                margin: 1rem;
                width: auto;
            }
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <div class="admin-header">
            <h1><i class="fas fa-database"></i> Database Administration Panel</h1>
        </div>

        <div class="admin-content">
            <div class="admin-notice">
                <p>Enter your database connection details or import an SQL file to initialize the database.</p>
            </div>

            <form id="dbForm" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="host">Database Host</label>
                    <input type="text" id="host" name="host" class="form-control" value="localhost" required>
                </div>

                <div class="form-group">
                    <label for="user">Database User</label>
                    <input type="text" id="user" name="user" class="form-control" value="root" required>
                </div>

                <div class="form-group">
                    <label for="pass">Database Password</label>
                    <input type="password" id="pass" name="pass" class="form-control">
                </div>

                <div class="form-group">
                    <label for="db">Database Name</label>
                    <input type="text" id="db" name="db" class="form-control" placeholder="Enter database name" required>
                </div>

                <div class="divider">
                    <span class="divider-text">OR</span>
                </div>

                <div class="form-group">
                    <label>Import SQL File</label>
                    <div class="file-input">
                        <label class="file-input-label">
                            <i class="fas fa-upload"></i> Choose File
                            <input type="file" name="sqlfile" id="sqlfile" accept=".sql">
                        </label>
                        <span id="file-name" class="file-name">No file chosen</span>
                    </div>
                </div>

                <div class="action-buttons">
                    <button type="submit" name="submit" class="btn btn-success">
                        <i class="fas fa-plug"></i> Connect Database
                    </button>
                    <a href="#" class="btn">
                        <i class="fas fa-download"></i> Export Database
                    </a>
                </div>
            </form>

            <div id="connectionStatus" class="connection-status">
                <p id="statusMessage"></p>
            </div>
        </div>

        <div class="admin-footer">
            <span>Database Admin Panel &copy; 2023</span>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('dbForm');
            const fileInput = document.getElementById('sqlfile');
            const fileName = document.getElementById('file-name');
            const statusDiv = document.getElementById('connectionStatus');
            const statusMessage = document.getElementById('statusMessage');

            // Update file name when a file is selected
            fileInput.addEventListener('change', function() {
                fileName.textContent = this.files.length ? this.files[0].name : 'No file chosen';
            });

            // Form submission handler
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Simple validation
                const dbName = document.getElementById('db').value;
                const sqlFile = fileInput.files.length;
                
                if (!dbName && !sqlFile) {
                    showStatus('Please enter a database name or select an SQL file.', 'error');
                    return;
                }

                // Simulate connection process
                showStatus('Connecting to database...', 'loading');
                
                // Simulate AJAX call with timeout
                setTimeout(() => {
                    showStatus('Database connected successfully! Installation completed.', 'success');
                }, 2000);
            });

            function showStatus(message, type) {
                statusMessage.textContent = message;
                statusDiv.className = 'connection-status';
                
                if (type === 'success') {
                    statusDiv.classList.add('status-success');
                } else if (type === 'error') {
                    statusDiv.classList.add('status-error');
                } else {
                    // For loading or other status types
                    statusDiv.style.display = 'block';
                    statusDiv.style.backgroundColor = '#f0f6fc';
                    statusDiv.style.borderLeft = '4px solid var(--primary)';
                }
            }
        });
    </script>
</body>
</html>