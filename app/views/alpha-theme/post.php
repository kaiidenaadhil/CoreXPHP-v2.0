<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compose - Empowro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>

        /* Compose Area */
        .compose-area {
            background: white;
            border-radius: var(--border-radius);
            margin-top: var(--space-lg);
            padding: var(--space-md);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .user-info {
            display: flex;
            align-items: center;
            margin-bottom: var(--space-md);
        }

        .avatar {
            width: 46px;
            height: 46px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--emerald), var(--royal-blue));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 1.1rem;
            margin-right: var(--space-sm);
        }

        .username {
            font-weight: 600;
        }

        .compose-input {
            width: 100%;
            min-height: 180px;
            border: none;
            resize: none;
            font-family: 'Inter', sans-serif;
            font-size: 1.1rem;
            line-height: 1.6;
            padding: 0;
            margin-bottom: var(--space-md);
            transition: var(--transition);
        }

        .compose-input:focus {
            outline: none;
        }

        .compose-input::placeholder {
            color: var(--medium-gray);
        }

        /* Post Type Selector */
        .post-type-selector {
            display: flex;
            gap: var(--space-sm);
            margin-bottom: var(--space-md);
            flex-wrap: wrap;
        }

        .post-type {
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            border: 1px solid var(--light-gray);
            background: white;
            display: flex;
            align-items: center;
            gap: 6px;
            transition: var(--transition);
        }

        .post-type.active {
            border-color: transparent;
        }

        .post-type.deed.active {
            background-color: rgba(46, 204, 113, 0.15);
            color: var(--emerald);
        }

        .post-type.report.active {
            background-color: rgba(231, 76, 60, 0.15);
            color: #e74c3c;
        }

        .post-type.help.active {
            background-color: rgba(52, 152, 219, 0.15);
            color: var(--royal-blue);
        }

        .post-type.link.active {
            background-color: rgba(155, 89, 182, 0.15);
            color: #9b59b6;
        }

        /* Action Bar */
        .action-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid var(--light-gray);
            padding-top: var(--space-md);
        }

        .media-options {
            display: flex;
            gap: var(--space-sm);
        }

        .media-btn {
            background: none;
            border: none;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: var(--royal-blue);
            font-size: 1.1rem;
            transition: var(--transition);
        }

        .media-btn:hover {
            background-color: var(--light-gray);
            transform: scale(1.1);
        }

        .publish-options {
            display: flex;
            align-items: center;
            gap: var(--space-sm);
        }

        .character-count {
            color: var(--medium-gray);
            font-size: 0.9rem;
            margin-right: var(--space-sm);
            font-weight: 500;
        }

        .character-count.warning {
            color: #f39c12;
        }

        .character-count.danger {
            color: #e74c3c;
        }

        .publish-dropdown {
            position: relative;
            display: inline-block;
        }

        .publish-btn {
            background: var(--emerald);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 24px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .publish-btn:hover {
            background: #25a25a;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(46, 204, 113, 0.3);
        }

        .publish-dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            bottom: 100%;
            background-color: white;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.1);
            border-radius: var(--border-radius);
            z-index: 1;
            margin-bottom: 8px;
            padding: var(--space-sm);
            animation: fadeIn 0.3s ease;
        }

        .publish-dropdown-content button {
            display: block;
            width: 100%;
            text-align: left;
            background: none;
            border: none;
            padding: var(--space-sm);
            text-decoration: none;
            color: var(--text-dark);
            cursor: pointer;
            border-radius: 6px;
            font-family: 'Inter', sans-serif;
            font-size: 0.95rem;
            transition: var(--transition);
        }

        .publish-dropdown-content button:hover {
            background-color: var(--light-gray);
        }

        .publish-dropdown.show .publish-dropdown-content {
            display: block;
        }

        /* Additional Options */
        .additional-options {
            margin-top: var(--space-md);
            display: flex;
            flex-wrap: wrap;
            gap: var(--space-sm);
        }

        .option-btn {
            background: none;
            border: 1px solid var(--light-gray);
            padding: 6px 12px;
            border-radius: 16px;
            font-size: 0.9rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 4px;
            transition: var(--transition);
        }

        .option-btn:hover {
            background-color: var(--light-gray);
        }

        .option-btn.active {
            background-color: var(--light-gray);
            border-color: var(--royal-blue);
            color: var(--royal-blue);
        }

        .tag-input {
            border: 1px solid var(--light-gray);
            padding: 8px 12px;
            border-radius: 16px;
            font-size: 0.9rem;
            width: 100%;
            margin-top: var(--space-sm);
            transition: var(--transition);
        }

        .tag-input:focus {
            outline: none;
            border-color: var(--royal-blue);
        }

        /* Attachment Preview */
        .attachment-preview {
            margin-top: var(--space-md);
            border-radius: var(--border-radius);
            overflow: hidden;
            position: relative;
            max-height: 300px;
            animation: fadeIn 0.5s ease;
        }

        .attachment-preview img {
            width: 100%;
            object-fit: cover;
        }

        .remove-attachment {
            position: absolute;
            top: 10px;
            right: 10px;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            border: none;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
        }

        .remove-attachment:hover {
            background: rgba(0, 0, 0, 0.9);
            transform: scale(1.1);
        }

        /* Dropdown Menu */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            top: 100%;
            background-color: white;
            min-width: 220px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.1);
            border-radius: var(--border-radius);
            z-index: 1;
            padding: var(--space-sm);
            margin-top: 8px;
            animation: slideDown 0.3s ease;
        }

        .dropdown-content a, .dropdown-content button {
            display: block;
            width: 100%;
            text-align: left;
            background: none;
            border: none;
            padding: var(--space-sm);
            text-decoration: none;
            color: var(--text-dark);
            cursor: pointer;
            border-radius: 6px;
            font-family: 'Inter', sans-serif;
            font-size: 0.95rem;
            transition: var(--transition);
        }

        .dropdown-content a:hover, .dropdown-content button:hover {
            background-color: var(--light-gray);
        }

        .dropdown.show .dropdown-content {
            display: block;
        }

        .post-as-section {
            padding: 8px 0;
        }

        .post-as-section div {
            font-weight: 500;
            padding: 8px 12px;
            color: var(--medium-gray);
            font-size: 0.9rem;
        }

        .post-as-option {
            display: flex;
            align-items: center;
            gap: 8px;
            width: 100%;
            text-align: left;
            background: none;
            border: none;
            padding: 8px 12px;
            text-decoration: none;
            color: var(--text-dark);
            cursor: pointer;
            border-radius: 6px;
            font-family: 'Inter', sans-serif;
            font-size: 0.95rem;
            transition: var(--transition);
        }

        .post-as-option.active {
            background-color: var(--light-gray);
        }

        .post-as-option:hover {
            background-color: var(--light-gray);
        }

        /* Schedule Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
            animation: fadeIn 0.3s ease;
        }

        .modal-content {
            background-color: white;
            padding: var(--space-lg);
            border-radius: var(--border-radius);
            width: 90%;
            max-width: 400px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            animation: slideUp 0.4s ease;
        }

        .modal-content h3 {
            margin-bottom: var(--space-md);
            color: var(--charcoal);
        }

        .modal-input {
            width: 100%;
            padding: 10px 12px;
            border-radius: 8px;
            border: 1px solid var(--medium-gray);
            margin: 8px 0;
            font-family: 'Inter', sans-serif;
        }

        .modal-input:focus {
            outline: none;
            border-color: var(--royal-blue);
        }

        .modal-actions {
            display: flex;
            justify-content: flex-end;
            gap: var(--space-sm);
            margin-top: var(--space-md);
        }

        .modal-btn {
            padding: 8px 16px;
            border-radius: 20px;
            border: none;
            cursor: pointer;
            font-weight: 500;
            transition: var(--transition);
        }

        .modal-btn.cancel {
            background: var(--light-gray);
            color: var(--text-dark);
        }

        .modal-btn.cancel:hover {
            background: var(--medium-gray);
        }

        .modal-btn.confirm {
            background: var(--royal-blue);
            color: white;
        }

        .modal-btn.confirm:hover {
            background: #3a7cbf;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: var(--space-lg);
            color: var(--medium-gray);
            font-size: 0.9rem;
            margin-top: var(--space-lg);
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideDown {
            from { transform: translateY(-10px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes slideUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            .container {
                padding: 0;
            }
            
            .compose-area {
                border-radius: 0;
                margin-top: 0;
                box-shadow: none;
                min-height: calc(100vh - 60px);
            }
            
            header {
                position: static;
            }
            
            .post-type-selector {
                overflow-x: auto;
                padding-bottom: 8px;
            }
            
            .post-type {
                white-space: nowrap;
            }
            
            .action-bar {
                flex-direction: column;
                gap: var(--space-md);
                align-items: flex-start;
            }
            
            .publish-options {
                width: 100%;
                justify-content: space-between;
            }
            
            .publish-dropdown-content {
                right: auto;
                left: 0;
                width: 100%;
            }
            
            .additional-options {
                flex-direction: column;
            }
            
            .option-btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>


    <div class="container">
        <div class="compose-area">
            <div class="user-info">
                <div class="avatar">J</div>
                <div class="username">John Doe</div>
            </div>
            
            <div class="post-type-selector">
                <button class="post-type deed active">
                    <i class="fas fa-seedling"></i> Deed
                </button>
                <button class="post-type report">
                    <i class="fas fa-flag"></i> Report
                </button>
                <button class="post-type help">
                    <i class="fas fa-hands-helping"></i> Help
                </button>
                <button class="post-type link">
                    <i class="fas fa-link"></i> Share Link
                </button>
            </div>
            
            <textarea class="compose-input" placeholder="What good deed have you done?"></textarea>
            
            <div class="action-bar">
                <div class="media-options">
                    <button class="media-btn" title="Add image">
                        <i class="fas fa-image"></i>
                    </button>
                    <button class="media-btn" title="Add video">
                        <i class="fas fa-video"></i>
                    </button>
                    <button class="media-btn" title="Add poll">
                        <i class="fas fa-chart-pie"></i>
                    </button>
                </div>
                
                <div class="publish-options">
                    <span class="character-count">500</span>
                    <div class="publish-dropdown">
                        <button class="publish-btn">
                            <span>Publish</span>
                            <i class="fas fa-caret-down"></i>
                        </button>
                        <div class="publish-dropdown-content">
                            <button class="publish-now-option">
                                <i class="fas fa-paper-plane"></i> Publish now
                            </button>
                            <button class="schedule-option">
                                <i class="fas fa-clock"></i> Schedule
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="additional-options">
                <button class="option-btn active">
                    <i class="fas fa-globe-americas"></i> Public
                </button>
                <button class="option-btn active">
                    <i class="fas fa-comment"></i> Allow comments
                </button>
                <button class="option-btn">
                    <i class="fas fa-tag"></i> Add tags
                </button>
            </div>
            
            <input type="text" class="tag-input" placeholder="Add tags (separated by commas)" style="display: none;">
        </div>
    </div>

    <!-- Schedule Modal -->
    <div class="modal" id="schedule-modal">
        <div class="modal-content">
            <h3>Schedule Your Post</h3>
            <input type="date" class="modal-input" id="schedule-date">
            <input type="time" class="modal-input" id="schedule-time">
            <div class="modal-actions">
                <button class="modal-btn cancel" id="schedule-cancel">Cancel</button>
                <button class="modal-btn confirm" id="schedule-confirm">Schedule</button>
            </div>
        </div>
    </div>

    <footer>
        <p>Empowro · Fostering Goodness, Deterring Evil</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Elements
            const textarea = document.querySelector('.compose-input');
            const charCount = document.querySelector('.character-count');
            const maxChars = 500;
            const postTypes = document.querySelectorAll('.post-type');
            const mediaButtons = document.querySelectorAll('.media-btn');
            const tagInput = document.querySelector('.tag-input');
            const tagBtn = document.querySelector('.option-btn:last-child');
            const menuBtn = document.querySelector('.menu-btn');
            const dropdown = document.querySelector('.dropdown');
            const publishDropdown = document.querySelector('.publish-dropdown');
            const scheduleModal = document.getElementById('schedule-modal');
            const scheduleCancel = document.getElementById('schedule-cancel');
            const scheduleConfirm = document.getElementById('schedule-confirm');
            const postAsOptions = document.querySelectorAll('.post-as-option');
            const username = document.querySelector('.username');
            const avatar = document.querySelector('.avatar');
            const optionBtns = document.querySelectorAll('.option-btn');
            
            // Character count update
            textarea.addEventListener('input', function() {
                const remaining = maxChars - this.value.length;
                charCount.textContent = remaining;
                
                // Update color based on remaining characters
                charCount.classList.remove('warning', 'danger');
                if (remaining < 50) {
                    charCount.classList.add('warning');
                }
                if (remaining < 0) {
                    charCount.classList.add('danger');
                }
            });
            
            // Close button functionality
            document.querySelector('.close-btn').addEventListener('click', function() {
                if (textarea.value.trim() !== '') {
                    if (confirm('Discard post?')) {
                        window.history.back();
                    }
                } else {
                    window.history.back();
                }
            });
            
            // Tag input toggle
            tagBtn.addEventListener('click', function() {
                if (tagInput.style.display === 'none') {
                    tagInput.style.display = 'block';
                    tagInput.focus();
                } else {
                    tagInput.style.display = 'none';
                }
            });
            
            // Toggle option buttons
            optionBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    if (!this.classList.contains('option-btn-trigger')) {
                        this.classList.toggle('active');
                    }
                });
            });
            
            // Post type selection
            postTypes.forEach(type => {
                type.addEventListener('click', function() {
                    postTypes.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Update placeholder based on post type
                    if (this.classList.contains('deed')) {
                        textarea.placeholder = "What good deed have you done?";
                    } else if (this.classList.contains('report')) {
                        textarea.placeholder = "What issue would you like to report?";
                    } else if (this.classList.contains('help')) {
                        textarea.placeholder = "What help do you need?";
                    } else if (this.classList.contains('link')) {
                        textarea.placeholder = "Share a meaningful link with description";
                    }
                });
            });
            
            // Media attachment functionality
            mediaButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    if (this.querySelector('.fa-image')) {
                        // Image upload
                        const input = document.createElement('input');
                        input.type = 'file';
                        input.accept = 'image/*';
                        input.onchange = handleImageUpload;
                        input.click();
                    } else if (this.querySelector('.fa-video')) {
                        // Video upload
                        alert('Video upload functionality would be implemented here');
                    } else if (this.querySelector('.fa-chart-pie')) {
                        // Poll creation
                        alert('Poll creation would be implemented here');
                    }
                });
            });
            
            function handleImageUpload(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        // Create image preview
                        const preview = document.createElement('div');
                        preview.className = 'attachment-preview';
                        preview.innerHTML = `
                            <img src="${event.target.result}" alt="Attachment preview">
                            <button class="remove-attachment">
                                <i class="fas fa-times"></i>
                            </button>
                        `;
                        
                        // Insert after the textarea
                        textarea.parentNode.insertBefore(preview, textarea.nextSibling);
                        
                        // Add remove functionality
                        preview.querySelector('.remove-attachment').addEventListener('click', function() {
                            preview.remove();
                        });
                    };
                    reader.readAsDataURL(file);
                }
            }
            
            // Dropdown functionality
            menuBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                dropdown.classList.toggle('show');
            });
            
            // Publish dropdown functionality
            publishDropdown.addEventListener('click', function(e) {
                e.stopPropagation();
                this.classList.toggle('show');
            });
            
            // Close dropdowns when clicking outside
            window.addEventListener('click', function() {
                dropdown.classList.remove('show');
                publishDropdown.classList.remove('show');
            });
            
            // Post as option selection
            postAsOptions.forEach(option => {
                option.addEventListener('click', function() {
                    postAsOptions.forEach(o => o.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Update the user info with the selected option
                    if (this.textContent.includes('Community Helper')) {
                        username.textContent = 'Community Helper';
                        avatar.textContent = 'C';
                    } else if (this.textContent.includes('Anonymous')) {
                        username.textContent = 'Anonymous';
                        avatar.textContent = '?';
                    } else {
                        username.textContent = 'John Doe';
                        avatar.textContent = 'J';
                    }
                    
                    dropdown.classList.remove('show');
                });
            });
            
            // Publish now option
            document.querySelector('.publish-now-option').addEventListener('click', function() {
                const content = textarea.value.trim();
                if (content === '') {
                    alert('Please write something before publishing.');
                    textarea.focus();
                    return;
                }
                
                if (content.length > maxChars) {
                    alert(`Your post exceeds the character limit by ${content.length - maxChars} characters.`);
                    return;
                }
                
                // Get selected post type
                const selectedType = document.querySelector('.post-type.active').classList[1];
                
                // Get selected post as option
                const postAs = document.querySelector('.post-as-option.active').textContent.trim();
                
                // Simulate publishing
                const publishBtn = document.querySelector('.publish-btn');
                const originalText = publishBtn.querySelector('span').textContent;
                publishBtn.querySelector('span').textContent = 'Publishing...';
                publishBtn.disabled = true;
                
                setTimeout(() => {
                    alert(`Your ${selectedType} post has been published as ${postAs}!`);
                    publishBtn.querySelector('span').textContent = originalText;
                    publishBtn.disabled = false;
                    publishDropdown.classList.remove('show');
                    window.history.back();
                }, 1000);
            });
            
            // Schedule option
            document.querySelector('.schedule-option').addEventListener('click', function() {
                scheduleModal.style.display = 'flex';
                publishDropdown.classList.remove('show');
            });
            
            scheduleCancel.addEventListener('click', function() {
                scheduleModal.style.display = 'none';
            });
            
            scheduleConfirm.addEventListener('click', function() {
                const date = document.getElementById('schedule-date').value;
                const time = document.getElementById('schedule-time').value;
                
                if (!date || !time) {
                    alert('Please select both date and time to schedule your post.');
                    return;
                }
                
                const content = textarea.value.trim();
                if (content === '') {
                    alert('Please write something before scheduling.');
                    textarea.focus();
                    return;
                }
                
                if (content.length > maxChars) {
                    alert(`Your post exceeds the character limit by ${content.length - maxChars} characters.`);
                    return;
                }
                
                // Get selected post type
                const selectedType = document.querySelector('.post-type.active').classList[1];
                
                // Get selected post as option
                const postAs = document.querySelector('.post-as-option.active').textContent.trim();
                
                // Simulate scheduling
                scheduleConfirm.textContent = 'Scheduling...';
                scheduleConfirm.disabled = true;
                
                setTimeout(() => {
                    alert(`Your ${selectedType} post has been scheduled for ${date} at ${time} as ${postAs}!`);
                    scheduleModal.style.display = 'none';
                    scheduleConfirm.textContent = 'Schedule';
                    scheduleConfirm.disabled = false;
                    window.history.back();
                }, 1000);
            });
            
            // Set minimum date to today for schedule
            const today = new Date();
            const yyyy = today.getFullYear();
            const mm = String(today.getMonth() + 1).padStart(2, '0');
            const dd = String(today.getDate()).padStart(2, '0');
            const todayStr = `${yyyy}-${mm}-${dd}`;
            document.getElementById('schedule-date').setAttribute('min', todayStr);
        });
    </script>
</body>
</html>