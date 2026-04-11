<style>
   
        .registration-container {
            display: flex;
            width: 100%;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow);
            margin: 2rem 0rem;
        }

        .registration-info {
            flex: 1;
            padding: 4rem;
            background: var(--gradient);
            color: var(--text-inverse);
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .registration-info h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .registration-info p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 2rem;
            max-width: 500px;
        }

        .benefits-list {
            list-style: none;
            margin: 2rem 0;
        }

        .benefits-list li {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 1.5rem;
        }

        .benefits-list i {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            flex-shrink: 0;
        }

        .workshop-details {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 1.5rem;
            margin-top: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .detail-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .detail-item:last-child {
            border-bottom: none;
        }

        .registration-form {
            flex: 1;
            background: var(--card-bg);
            padding: 4rem;
            display: flex;
            flex-direction: column;
        }

        .progress-bar {
            display: flex;
            margin-bottom: 3rem;
            position: relative;
        }

        .progress-bar::before {
            content: '';
            position: absolute;
            top: 20px;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--medium-gray);
            z-index: 1;
        }

        .progress-step {
            flex: 1;
            text-align: center;
            position: relative;
            z-index: 2;
        }

        .step-number {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--medium-gray);
            color: var(--text-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            font-weight: 600;
            transition: var(--transition);
        }

        .step-label {
            font-size: 0.9rem;
            font-weight: 500;
            color: var(--text-primary);
        }

        .progress-step.active .step-number {
            background: var(--gradient);
            color: var(--text-inverse);
            transform: scale(1.1);
        }

        .form-header {
            margin-bottom: 2rem;
        }

        .form-header h2 {
            font-size: 2.5rem;
            color: var(--primary-blue);
            margin-bottom: 10px;
        }

        .form-header p {
            color: var(--text-primary);
        }

        .form-section {
            display: none;
        }

        .form-section.active {
            display: block;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 1.5rem;
        }

        .form-row .form-group {
            flex: 1;
            margin-bottom: 0;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--primary-blue);
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 14px 20px;
            border: 1px solid var(--medium-gray);
            border-radius: 10px;
            font-family: 'Montserrat', sans-serif;
            font-size: 1rem;
            background: var(--bg-tertiary);
            color: var(--text-primary);
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: var(--secondary-teal);
            outline: none;
            box-shadow: 0 0 0 3px rgba(0, 180, 216, 0.1);
        }

        .form-group .error {
            color: #e74c3c;
            font-size: 0.9rem;
            margin-top: 5px;
            display: none;
        }

        .checkbox-group {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1rem;
        }

        .checkbox-group input {
            margin-right: 10px;
            margin-top: 5px;
        }

        .payment-options {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 15px;
            margin: 1.5rem 0;
        }

        .payment-option {
            border: 2px solid var(--medium-gray);
            border-radius: 10px;
            padding: 15px;
            text-align: center;
            cursor: pointer;
            transition: var(--transition);
        }

        .payment-option i {
            font-size: 2rem;
            margin-bottom: 10px;
            color: var(--accent-purple);
        }

        .payment-option:hover, .payment-option.selected {
            border-color: var(--secondary-teal);
            background: rgba(0, 180, 216, 0.05);
            transform: translateY(-5px);
        }

        .form-navigation {
            display: flex;
            justify-content: space-between;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid var(--medium-gray);
        }

        .btn {
            display: inline-block;
            padding: 14px 32px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            font-size: 1rem;
            border: none;
        }

        .btn-outline {
            background: transparent;
            color: var(--primary-blue);
            border: 2px solid var(--primary-blue);
        }

        .btn-outline:hover {
            background: var(--primary-blue);
            color: var(--text-inverse);
        }

        .btn-primary {
            background: var(--gradient);
            color: var(--text-inverse);
            box-shadow: var(--shadow);
        }

        .btn-primary:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(10, 36, 99, 0.3);
        }

        .btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .confirmation {
            text-align: center;
            padding: 2rem;
        }

        .confirmation i {
            font-size: 5rem;
            color: var(--secondary-teal);
            margin-bottom: 2rem;
        }

        .confirmation h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--primary-blue);
        }

        .confirmation p {
            color: var(--text-primary);
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .order-summary {
            background: var(--bg-tertiary);
            border-radius: 15px;
            padding: 2rem;
            margin: 2rem 0;
            text-align: left;
        }

        .summary-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid var(--medium-gray);
        }

        .summary-total {
            font-weight: 700;
            font-size: 1.2rem;
            margin-top: 10px;
            padding-top: 10px;
        }

      
        /* Responsive */
        @media (max-width: 992px) {
            .registration-container {
                flex-direction: column;
            }
            
            .registration-info {
                padding: 3rem;
            }
            
            .form-row {
                flex-direction: column;
                gap: 0;
            }
        }

        @media (max-width: 768px) {
            .registration-info h1 {
                font-size: 2.5rem;
            }
            
            .registration-form {
                padding: 2rem;
            }
            
            .progress-bar {
                flex-wrap: wrap;
            }
            
            .progress-step {
                flex: none;
                width: 33%;
                margin-bottom: 20px;
            }
        }

        @media (max-width: 576px) {
            body {
                padding: 1rem;
            }
            
            .registration-info {
                padding: 2rem;
            }
            
            .progress-step {
                width: 50%;
            }
        }
    </style>


<div class="container">
    <div class="registration-container">
        <div class="registration-info">
            <h1>Advanced React Patterns Workshop</h1>
            <p>Complete this form to register for our intensive 2-day workshop and master advanced React techniques.</p>
            
            <ul class="benefits-list">
                <li>
                    <i class="fas fa-chalkboard-teacher"></i>
                    <div>
                        <h4>Expert Instruction</h4>
                        <p>Learn from industry professionals with years of experience</p>
                    </div>
                </li>
                <li>
                    <i class="fas fa-laptop-code"></i>
                    <div>
                        <h4>Hands-on Projects</h4>
                        <p>Apply your knowledge through practical exercises</p>
                    </div>
                </li>
                <li>
                    <i class="fas fa-certificate"></i>
                    <div>
                        <h4>Certificate of Completion</h4>
                        <p>Receive a certificate to showcase your new skills</p>
                    </div>
                </li>
            </ul>
            
            <div class="workshop-details">
                <div class="detail-item">
                    <span>Date:</span>
                    <span>June 15-16, 2023</span>
                </div>
                <div class="detail-item">
                    <span>Time:</span>
                    <span>9:00 AM - 4:00 PM</span>
                </div>
                <div class="detail-item">
                    <span>Duration:</span>
                    <span>14 Hours</span>
                </div>
                <div class="detail-item">
                    <span>Price:</span>
                    <span>$349</span>
                </div>
            </div>
        </div>
        
        <div class="registration-form">
            <!-- Progress Bar -->
            <div class="progress-bar">
                <div class="progress-step active">
                    <div class="step-number">1</div>
                    <div class="step-label">Personal Info</div>
                </div>
                <div class="progress-step">
                    <div class="step-number">2</div>
                    <div class="step-label">Experience</div>
                </div>
                <div class="progress-step">
                    <div class="step-number">3</div>
                    <div class="step-label">Payment</div>
                </div>
                <div class="progress-step">
                    <div class="step-number">4</div>
                    <div class="step-label">Confirmation</div>
                </div>
            </div>
            
            <!-- Step 1: Personal Information -->
            <div class="form-section active" id="step1">
                <div class="form-header">
                    <h2>Personal Information</h2>
                    <p>Tell us about yourself</p>
                </div>
                
                <form id="personalInfoForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" id="firstName" required>
                            <div class="error" id="firstNameError">Please enter your first name</div>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" id="lastName" required>
                            <div class="error" id="lastNameError">Please enter your last name</div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" required placeholder="you@example.com">
                        <div class="error" id="emailError">Please enter a valid email address</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" placeholder="(123) 456-7890">
                    </div>
                    
                    <div class="form-group">
                        <label for="company">Company / Organization</label>
                        <input type="text" id="company">
                    </div>
                    
                    <div class="form-group">
                        <label for="jobTitle">Job Title</label>
                        <input type="text" id="jobTitle">
                    </div>
                    
                    <div class="form-navigation">
                        <button type="button" class="btn btn-outline" disabled>Previous</button>
                        <button type="button" class="btn btn-primary" id="nextToStep2">Next: Experience</button>
                    </div>
                </form>
            </div>
            
            <!-- Step 2: Experience -->
            <div class="form-section" id="step2">
                <div class="form-header">
                    <h2>Your Experience</h2>
                    <p>Help us tailor the workshop to your needs</p>
                </div>
                
                <form id="experienceForm">
                    <div class="form-group">
                        <label for="experience">How would you rate your React experience?</label>
                        <select id="experience" required>
                            <option value="">Select your experience level</option>
                            <option value="beginner">Beginner (0-6 months)</option>
                            <option value="intermediate">Intermediate (6-24 months)</option>
                            <option value="advanced">Advanced (2+ years)</option>
                        </select>
                        <div class="error" id="experienceError">Please select your experience level</div>
                    </div>
                    
                    <div class="form-group">
                        <label>What topics are you most interested in? (Select all that apply)</label>
                        <div class="checkbox-group">
                            <input type="checkbox" id="topic1" value="state">
                            <label for="topic1">State Management (Redux, Context API)</label>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="topic2" value="performance">
                            <label for="topic2">Performance Optimization</label>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="topic3" value="testing">
                            <label for="topic3">Testing Strategies</label>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="topic4" value="hooks">
                            <label for="topic4">Advanced Hooks Patterns</label>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="topic5" value="architecture">
                            <label for="topic5">Application Architecture</label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="expectations">What do you hope to achieve from this workshop?</label>
                        <textarea id="expectations" rows="4" placeholder="Your goals..."></textarea>
                    </div>
                    
                    <div class="form-navigation">
                        <button type="button" class="btn btn-outline" id="backToStep1">Previous: Personal Info</button>
                        <button type="button" class="btn btn-primary" id="nextToStep3">Next: Payment</button>
                    </div>
                </form>
            </div>
            
            <!-- Step 3: Payment -->
            <div class="form-section" id="step3">
                <div class="form-header">
                    <h2>Payment Information</h2>
                    <p>Secure payment processing</p>
                </div>
                
                <form id="paymentForm">
                    <div class="form-group">
                        <label>Select Payment Method</label>
                        <div class="payment-options">
                            <div class="payment-option" data-method="credit">
                                <i class="fas fa-credit-card"></i>
                                <div>Credit Card</div>
                            </div>
                            <div class="payment-option" data-method="paypal">
                                <i class="fab fa-paypal"></i>
                                <div>PayPal</div>
                            </div>
                            <div class="payment-option" data-method="bank">
                                <i class="fas fa-university"></i>
                                <div>Bank Transfer</div>
                            </div>
                        </div>
                        <input type="hidden" id="paymentMethod" value="" required>
                        <div class="error" id="paymentMethodError">Please select a payment method</div>
                    </div>
                    
                    <div id="creditCardForm">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="cardNumber">Card Number</label>
                                <input type="text" id="cardNumber" placeholder="1234 5678 9012 3456">
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="cardName">Name on Card</label>
                                <input type="text" id="cardName">
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="expDate">Expiration Date</label>
                                <input type="text" id="expDate" placeholder="MM/YY">
                            </div>
                            <div class="form-group">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" placeholder="123">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="checkbox-group">
                            <input type="checkbox" id="saveCard" value="1">
                            <label for="saveCard">Save card information for future purchases</label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="checkbox-group">
                            <input type="checkbox" id="terms" required>
                            <label for="terms">I agree to the <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></label>
                        </div>
                        <div class="error" id="termsError">You must agree to the terms to proceed</div>
                    </div>
                    
                    <div class="form-navigation">
                        <button type="button" class="btn btn-outline" id="backToStep2">Previous: Experience</button>
                        <button type="button" class="btn btn-primary" id="submitRegistration">Complete Registration</button>
                    </div>
                </form>
            </div>
            
            <!-- Step 4: Confirmation -->
            <div class="form-section" id="step4">
                <div class="confirmation">
                    <i class="fas fa-check-circle"></i>
                    <h2>Registration Complete!</h2>
                    <p>Thank you for registering for the Advanced React Patterns Workshop. We've sent a confirmation email with all the details to your inbox.</p>
                    
                    <div class="order-summary">
                        <div class="summary-item">
                            <span>Workshop:</span>
                            <span>Advanced React Patterns</span>
                        </div>
                        <div class="summary-item">
                            <span>Date:</span>
                            <span>June 15-16, 2023</span>
                        </div>
                        <div class="summary-item">
                            <span>Attendee:</span>
                            <span id="confName">John Smith</span>
                        </div>
                        <div class="summary-item">
                            <span>Email:</span>
                            <span id="confEmail">john@example.com</span>
                        </div>
                        <div class="summary-item summary-total">
                            <span>Total:</span>
                            <span>$349.00</span>
                        </div>
                    </div>
                    
                    <div class="form-navigation">
                        <button type="button" class="btn btn-outline" id="backToDashboard">Back to Dashboard</button>
                        <button type="button" class="btn btn-primary" id="downloadMaterials">Download Workshop Materials</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>

        // Form Navigation
        const formSections = document.querySelectorAll('.form-section');
        const progressSteps = document.querySelectorAll('.progress-step');
        let currentStep = 0;
        
        function showStep(stepIndex) {
            formSections.forEach(section => section.classList.remove('active'));
            progressSteps.forEach(step => step.classList.remove('active'));
            
            formSections[stepIndex].classList.add('active');
            
            for (let i = 0; i <= stepIndex; i++) {
                progressSteps[i].classList.add('active');
            }
            
            currentStep = stepIndex;
        }
        
        // Navigation Buttons
        document.getElementById('nextToStep2').addEventListener('click', function() {
            // Validate step 1
            let valid = true;
            
            if (!document.getElementById('firstName').value) {
                document.getElementById('firstNameError').style.display = 'block';
                valid = false;
            } else {
                document.getElementById('firstNameError').style.display = 'none';
            }
            
            if (!document.getElementById('lastName').value) {
                document.getElementById('lastNameError').style.display = 'block';
                valid = false;
            } else {
                document.getElementById('lastNameError').style.display = 'none';
            }
            
            const email = document.getElementById('email').value;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!email || !emailRegex.test(email)) {
                document.getElementById('emailError').style.display = 'block';
                valid = false;
            } else {
                document.getElementById('emailError').style.display = 'none';
            }
            
            if (valid) {
                showStep(1);
            }
        });
        
        document.getElementById('backToStep1').addEventListener('click', function() {
            showStep(0);
        });
        
        document.getElementById('nextToStep3').addEventListener('click', function() {
            // Validate step 2
            if (!document.getElementById('experience').value) {
                document.getElementById('experienceError').style.display = 'block';
                return;
            }
            document.getElementById('experienceError').style.display = 'none';
            showStep(2);
        });
        
        document.getElementById('backToStep2').addEventListener('click', function() {
            showStep(1);
        });
        
        // Payment method selection
        const paymentOptions = document.querySelectorAll('.payment-option');
        paymentOptions.forEach(option => {
            option.addEventListener('click', function() {
                paymentOptions.forEach(opt => opt.classList.remove('selected'));
                this.classList.add('selected');
                document.getElementById('paymentMethod').value = this.dataset.method;
            });
        });
        
        // Submit registration
        document.getElementById('submitRegistration').addEventListener('click', function() {
            // Validate step 3
            if (!document.getElementById('paymentMethod').value) {
                document.getElementById('paymentMethodError').style.display = 'block';
                return;
            }
            document.getElementById('paymentMethodError').style.display = 'none';
            
            if (!document.getElementById('terms').checked) {
                document.getElementById('termsError').style.display = 'block';
                return;
            }
            document.getElementById('termsError').style.display = 'none';
            
            // Set confirmation details
            document.getElementById('confName').textContent = 
                document.getElementById('firstName').value + ' ' + 
                document.getElementById('lastName').value;
                
            document.getElementById('confEmail').textContent = 
                document.getElementById('email').value;
            
            showStep(3);
        });
        
        // Final step buttons
        document.getElementById('backToDashboard').addEventListener('click', function() {
            alert('Redirecting to dashboard...');
        });
        
        document.getElementById('downloadMaterials').addEventListener('click', function() {
            alert('Downloading workshop materials...');
        });
    </script>
