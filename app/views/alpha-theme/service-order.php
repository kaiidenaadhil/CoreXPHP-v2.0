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

      
        .purchase-container {
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

        .service-summary {
            width: 40%;
            background: var(--gradient);
            color: var(--text-inverse);
            padding: 40px;
            display: flex;
            flex-direction: column;
            position: relative;
            overflow: hidden;
        }

        .service-summary::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 10% 20%, rgba(255,255,255,0.1) 0%, transparent 20%),
                radial-gradient(circle at 90% 80%, rgba(255,255,255,0.1) 0%, transparent 20%);
            z-index: 1;
        }

        .summary-content {
            position: relative;
            z-index: 2;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            margin-bottom: 30px;
            font-size: 0.95rem;
            transition: var(--transition);
        }

        .back-link:hover {
            color: var(--text-inverse);
            transform: translateX(-5px);
        }

        .back-link i {
            margin-right: 8px;
        }

        .service-icon {
            font-size: 4rem;
            margin-bottom: 20px;
            color: var(--text-inverse);
            background: rgba(255, 255, 255, 0.1);
            width: 100px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 20px;
        }

        .service-title {
            font-size: 2.2rem;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .service-description {
            opacity: 0.9;
            margin-bottom: 30px;
            font-size: 1.1rem;
        }

        .package-details {
            margin-top: 20px;
        }

        .package-name {
            font-size: 1.5rem;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .package-price {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .package-features {
            list-style: none;
            margin-top: 20px;
        }

        .package-features li {
            padding: 10px 0;
            display: flex;
            align-items: flex-start;
            border-bottom: 1px dashed rgba(255, 255, 255, 0.2);
        }

        .package-features li:last-child {
            border-bottom: none;
        }

        .package-features li i {
            margin-right: 15px;
            margin-top: 5px;
            min-width: 20px;
            font-size: 1.2rem;
            color: var(--secondary-teal);
        }

        .purchase-form-container {
            flex: 1;
            padding: 40px;
            overflow-y: auto;
            background: var(--bg-primary);
        }

        .form-title {
            color: var(--primary-blue);
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--secondary-teal);
            font-size: 1.8rem;
        }

        .purchase-form {
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

        .form-hint {
            font-size: 0.85rem;
            color: var(--text-secondary);
            margin-top: 5px;
        }

        .payment-methods {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }

        .payment-method {
            flex: 1;
            border: 2px solid var(--medium-gray);
            border-radius: 10px;
            padding: 15px;
            text-align: center;
            cursor: pointer;
            transition: var(--transition);
        }

        .payment-method:hover {
            border-color: var(--secondary-teal);
        }

        .payment-method.selected {
            border-color: var(--secondary-teal);
            background: rgba(32, 201, 151, 0.05);
        }

        .payment-method i {
            font-size: 2rem;
            margin-bottom: 10px;
            color: var(--primary-blue);
        }

        .payment-method span {
            display: block;
            font-weight: 500;
        }

        .card-element {
            padding: 15px;
            border: 2px solid var(--medium-gray);
            border-radius: 10px;
            background: var(--bg-tertiary);
            margin-bottom: 20px;
        }

        .form-check {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .form-check-input {
            margin-right: 10px;
            margin-top: 5px;
            flex-shrink: 0;
        }

        .form-check-label {
            font-size: 0.9rem;
            color: var(--text-secondary);
            line-height: 1.4;
        }

        .form-check-label a {
            color: var(--secondary-teal);
            text-decoration: none;
        }

        .form-check-label a:hover {
            text-decoration: underline;
        }

        .order-summary {
            background: var(--card-bg);
            border-radius: 10px;
            padding: 25px;
            margin-top: 30px;
            box-shadow: var(--shadow);
        }

        .summary-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .summary-title {
            color: var(--primary-blue);
            font-size: 1.2rem;
        }

        .summary-items {
            margin-bottom: 20px;
        }

        .summary-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .summary-item:last-child {
            margin-bottom: 0;
        }

        .summary-total {
            display: flex;
            justify-content: space-between;
            padding-top: 15px;
            margin-top: 15px;
            border-top: 2px solid var(--medium-gray);
            font-weight: 700;
            font-size: 1.2rem;
            color: var(--primary-blue);
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
            margin-top: 20px;
        }

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        /* Improved responsive design */
        @media (max-width: 1200px) {
            .purchase-container {
                flex-direction: column;
                max-width: 800px;
            }
            
            .service-summary {
                width: 100%;
                padding: 30px;
                text-align: center;
            }
            
            .service-icon {
                margin: 0 auto 20px;
            }
            
            .purchase-form-container {
                padding: 30px;
            }
        }

        @media (max-width: 768px) {
            .purchase-form {
                grid-template-columns: 1fr;
            }
            
            .payment-methods {
                flex-direction: column;
            }
            
            .service-title {
                font-size: 1.8rem;
            }
            
            .package-price {
                font-size: 2rem;
            }
            
            .form-title {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 576px) {
            body {
                padding: 10px;
            }
            
            .service-summary {
                padding: 20px;
            }
            
            .purchase-form-container {
                padding: 20px;
            }
            
            .service-icon {
                width: 80px;
                height: 80px;
                font-size: 2.5rem;
            }
            
            .form-title {
                font-size: 1.4rem;
            }
            
            .section-title {
                font-size: 1.1rem;
            }
            
            .form-control {
                padding: 12px;
            }
            
            .order-summary {
                padding: 20px;
            }
        }

        /* Focus states for accessibility */
        .form-control:focus,
        .payment-method:focus {
            outline: 2px solid var(--secondary-teal);
            outline-offset: 2px;
        }

        /* Animation for form elements */
        .form-group {
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Loading state for submit button */
        .submit-btn.loading {
            position: relative;
            color: transparent;
        }

        .submit-btn.loading::after {
            content: "";
            position: absolute;
            width: 20px;
            height: 20px;
            top: 50%;
            left: 50%;
            margin: -10px 0 0 -10px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>

    <div class="purchase-container">
        <div class="service-summary">
            <div class="summary-content">
                <a href="/services" class="back-link">
                    <i class="fas fa-arrow-left"></i> Back to Services
                </a>
                
                <div class="service-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                
                <h2 class="service-title">Custom Web Development</h2>
                <p class="service-description">Bespoke web applications built to solve your unique business challenges. Our solutions are scalable, secure, and designed for performance.</p>
                
                <div class="package-details">
                    <h3 class="package-name">🚀 Growth Package</h3>
                    <div class="package-price">৳150,000</div>
                    
                    <ul class="package-features">
                        <li><i class="fas fa-check"></i> Custom responsive website (up to 10 pages)</li>
                        <li><i class="fas fa-check"></i> Advanced SEO optimization</li>
                        <li><i class="fas fa-check"></i> Social media integration</li>
                        <li><i class="fas fa-check"></i> Contact form with lead capture</li>
                        <li><i class="fas fa-check"></i> 3 months of post-launch support</li>
                        <li><i class="fas fa-check"></i> Basic analytics setup</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="purchase-form-container">
            <h2 class="form-title">Complete Your Purchase</h2>
            
            <form class="purchase-form" id="purchase-form">
                <div class="form-section">
                    <h3 class="section-title"><i class="fas fa-user-circle"></i> Contact Information</h3>
                    
                    <div class="form-group full-width">
                        <label for="full-name" class="form-label">Full Name *</label>
                        <input type="text" id="full-name" name="full-name" class="form-control" required placeholder="Enter your full name">
                    </div>
                    
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address *</label>
                        <input type="email" id="email" name="email" class="form-control" required placeholder="your.email@example.com">
                    </div>
                    
                    <div class="form-group">
                        <label for="phone" class="form-label">Phone Number *</label>
                        <input type="tel" id="phone" name="phone" class="form-control" required placeholder="(123) 456-7890">
                    </div>
                </div>
                
                <div class="form-section">
                    <h3 class="section-title"><i class="fas fa-credit-card"></i> Payment Method</h3>
                    
                    <div class="form-group full-width">
                        <label class="form-label">Select Payment Method *</label>
                        <div class="payment-methods">
                            <div class="payment-method selected" data-method="card" tabindex="0">
                                <i class="fas fa-credit-card"></i>
                                <span>Credit Card</span>
                            </div>
                            <div class="payment-method" data-method="paypal" tabindex="0">
                                <i class="fab fa-paypal"></i>
                                <span>PayPal</span>
                            </div>
                            <div class="payment-method" data-method="bank" tabindex="0">
                                <i class="fas fa-university"></i>
                                <span>Bank Transfer</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group full-width">
                        <label for="card-number" class="form-label">Card Number *</label>
                        <input type="text" id="card-number" name="card-number" class="form-control" required placeholder="1234 5678 9012 3456">
                    </div>
                    
                    <div class="form-group">
                        <label for="card-expiry" class="form-label">Expiry Date *</label>
                        <input type="text" id="card-expiry" name="card-expiry" class="form-control" required placeholder="MM/YY">
                    </div>
                    
                    <div class="form-group">
                        <label for="card-cvc" class="form-label">CVC *</label>
                        <input type="text" id="card-cvc" name="card-cvc" class="form-control" required placeholder="123">
                    </div>
                </div>
                
                <div class="form-group full-width">
                    <div class="form-check">
                        <input type="checkbox" id="terms" name="terms" class="form-check-input" required>
                        <label for="terms" class="form-check-label">
                            I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a> *
                        </label>
                    </div>
                </div>
                
                <div class="order-summary">
                    <div class="summary-header">
                        <h3 class="summary-title">Order Summary</h3>
                    </div>
                    
                    <div class="summary-items">
                        <div class="summary-item">
                            <span>Custom Web Development - Growth Package</span>
                            <span>৳150,000</span>
                        </div>
                        <div class="summary-item">
                            <span>VAT (15%)</span>
                            <span>৳22,500</span>
                        </div>
                    </div>
                    
                    <div class="summary-total">
                        <span>Total</span>
                        <span>৳172,500</span>
                    </div>
                </div>
                
                <div class="form-group full-width">
                    <button type="submit" class="submit-btn">Complete Purchase</button>
                    <p class="form-hint" style="text-align: center; margin-top: 15px;">Your card will not be charged until we confirm project details with you</p>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('purchase-form');
            const paymentMethods = document.querySelectorAll('.payment-method');
            const submitBtn = document.querySelector('.submit-btn');
            
            // Payment method selection
            paymentMethods.forEach(method => {
                method.addEventListener('click', function() {
                    paymentMethods.forEach(m => m.classList.remove('selected'));
                    this.classList.add('selected');
                    
                    // Show/hide relevant payment fields based on selection
                    const methodType = this.getAttribute('data-method');
                    if (methodType === 'card') {
                        document.querySelectorAll('[id^="card-"]').forEach(input => {
                            input.closest('.form-group').style.display = 'block';
                        });
                    } else {
                        document.querySelectorAll('[id^="card-"]').forEach(input => {
                            input.closest('.form-group').style.display = 'none';
                        });
                    }
                });

                // Add keyboard navigation for accessibility
                method.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        this.click();
                    }
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
                        
                        // Add error message
                        if (!field.nextElementSibling || !field.nextElementSibling.classList.contains('error-message')) {
                            const errorMsg = document.createElement('div');
                            errorMsg.className = 'error-message';
                            errorMsg.style.color = 'var(--error)';
                            errorMsg.style.fontSize = '0.8rem';
                            errorMsg.style.marginTop = '5px';
                            errorMsg.textContent = 'This field is required';
                            field.parentNode.appendChild(errorMsg);
                        }
                    } else {
                        field.style.borderColor = '';
                        
                        // Remove error message if exists
                        if (field.nextElementSibling && field.nextElementSibling.classList.contains('error-message')) {
                            field.parentNode.removeChild(field.nextElementSibling);
                        }
                    }
                });
                
                if (isValid) {
                    // Show loading state
                    submitBtn.classList.add('loading');
                    submitBtn.disabled = true;
                    
                    // Simulate form submission
                    setTimeout(() => {
                        alert('Thank you for your purchase! Our team will contact you within 24 hours to discuss your project details.');
                        submitBtn.classList.remove('loading');
                        submitBtn.disabled = false;
                    }, 1500);
                }
            });
            
            // Format card number input
            const cardNumberInput = document.getElementById('card-number');
            cardNumberInput.addEventListener('input', function() {
                let value = this.value.replace(/\D/g, '');
                if (value.length > 0) {
                    value = value.match(/.{1,4}/g).join(' ');
                }
                this.value = value;
            });
            
            // Format expiry date input
            const expiryInput = document.getElementById('card-expiry');
            expiryInput.addEventListener('input', function() {
                let value = this.value.replace(/\D/g, '');
                if (value.length > 2) {
                    value = value.substring(0, 2) + '/' + value.substring(2, 4);
                }
                this.value = value;
            });
            
            // Format CVC input
            const cvcInput = document.getElementById('card-cvc');
            cvcInput.addEventListener('input', function() {
                this.value = this.value.replace(/\D/g, '').substring(0, 4);
            });
        });
    </script>