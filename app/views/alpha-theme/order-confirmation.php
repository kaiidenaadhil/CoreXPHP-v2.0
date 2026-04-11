<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation | AVANT VISTA VENTURES</title>
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

        .confirmation-container {
            display: flex;
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
            background: var(--card-bg);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--card-hover-shadow);
            min-height: 80vh;
        }

        .confirmation-sidebar {
            width: 40%;
            background: var(--gradient);
            color: var(--text-inverse);
            padding: 40px;
            display: flex;
            flex-direction: column;
            position: relative;
            overflow: hidden;
            text-align: center;
            justify-content: center;
            align-items: center;
        }

        .confirmation-sidebar::before {
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

        .sidebar-content {
            position: relative;
            z-index: 2;
        }

        .confirmation-icon {
            font-size: 5rem;
            margin-bottom: 20px;
            color: var(--text-inverse);
            background: rgba(255, 255, 255, 0.1);
            width: 120px;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin: 0 auto 30px;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .confirmation-title {
            font-size: 2.5rem;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .confirmation-subtitle {
            opacity: 0.9;
            margin-bottom: 30px;
            font-size: 1.2rem;
        }

        .confirmation-content {
            flex: 1;
            padding: 40px;
            overflow-y: auto;
            background: var(--bg-primary);
        }

        .content-header {
            margin-bottom: 40px;
        }

        .thank-you {
            color: var(--primary-blue);
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .order-number {
            color: var(--text-secondary);
            font-size: 1.1rem;
            margin-bottom: 20px;
        }

        .order-number span {
            color: var(--primary-blue);
            font-weight: 500;
        }

        .next-steps {
            background: rgba(32, 201, 151, 0.1);
            border-left: 4px solid var(--secondary-teal);
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 0 8px 8px 0;
        }

        .steps-title {
            color: var(--primary-blue);
            margin-bottom: 15px;
            font-size: 1.3rem;
            display: flex;
            align-items: center;
        }

        .steps-title i {
            margin-right: 10px;
            color: var(--secondary-teal);
        }

        .steps-list {
            list-style: none;
        }

        .steps-list li {
            margin-bottom: 10px;
            display: flex;
            align-items: flex-start;
        }

        .steps-list li i {
            color: var(--secondary-teal);
            margin-right: 10px;
            margin-top: 4px;
        }

        .order-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 40px;
        }

        .detail-card {
            background: var(--card-bg);
            border-radius: 10px;
            padding: 25px;
            box-shadow: var(--shadow);
        }

        .detail-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            color: var(--primary-blue);
        }

        .detail-header i {
            margin-right: 10px;
            font-size: 1.2rem;
        }

        .detail-item {
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--light-gray);
        }

        .detail-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }

        .detail-label {
            color: var(--text-secondary);
        }

        .detail-value {
            font-weight: 500;
        }

        .summary-card {
            background: var(--card-bg);
            border-radius: 10px;
            padding: 25px;
            box-shadow: var(--shadow);
            margin-bottom: 30px;
        }

        .summary-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            color: var(--primary-blue);
        }

        .summary-title {
            font-size: 1.3rem;
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

        .action-buttons {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .btn {
            padding: 12px 25px;
            border-radius: 10px;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            font-size: 1rem;
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .btn-primary {
            background: var(--gradient);
            color: white;
            border: none;
        }

        .btn-outline {
            background: transparent;
            color: var(--primary-blue);
            border: 2px solid var(--primary-blue);
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .btn i {
            margin-right: 8px;
        }

        /* Improved responsive design */
        @media (max-width: 992px) {
            .confirmation-container {
                flex-direction: column;
            }
            
            .confirmation-sidebar {
                width: 100%;
                padding: 30px;
            }
            
            .confirmation-content {
                padding: 30px;
            }
            
            .order-details {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            body {
                padding: 10px;
            }
            
            .confirmation-sidebar {
                padding: 20px;
            }
            
            .confirmation-content {
                padding: 20px;
            }
            
            .confirmation-icon {
                width: 80px;
                height: 80px;
                font-size: 2.5rem;
            }
            
            .confirmation-title {
                font-size: 1.8rem;
            }
            
            .thank-you {
                font-size: 1.5rem;
            }
            
            .action-buttons {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="confirmation-container">
        <div class="confirmation-sidebar">
            <div class="sidebar-content">
                <div class="confirmation-icon">
                    <i class="fas fa-check"></i>
                </div>
                
                <h2 class="confirmation-title">Order Confirmed!</h2>
                <p class="confirmation-subtitle">Thank you for your purchase. Your project is now in progress.</p>
            </div>
        </div>
        
        <div class="confirmation-content">
            <div class="content-header">
                <h2 class="thank-you">Thank You, John!</h2>
                <p class="order-number">Your order number is: <span>AVV-2023-0876</span></p>
                
                <div class="next-steps">
                    <h3 class="steps-title"><i class="fas fa-list-check"></i> What Happens Next?</h3>
                    <ul class="steps-list">
                        <li><i class="fas fa-check-circle"></i> You'll receive a confirmation email shortly</li>
                        <li><i class="fas fa-check-circle"></i> Our project manager will contact you within 24 hours</li>
                        <li><i class="fas fa-check-circle"></i> We'll schedule a kickoff meeting to discuss your requirements</li>
                        <li><i class="fas fa-check-circle"></i> Development will begin according to our agreed timeline</li>
                    </ul>
                </div>
            </div>
            
            <div class="order-details">
                <div class="detail-card">
                    <div class="detail-header">
                        <i class="fas fa-user-circle"></i>
                        <h3>Customer Information</h3>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Name:</span>
                        <span class="detail-value">John Doe</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Email:</span>
                        <span class="detail-value">john.doe@example.com</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Phone:</span>
                        <span class="detail-value">(123) 456-7890</span>
                    </div>
                </div>
                
                <div class="detail-card">
                    <div class="detail-header">
                        <i class="fas fa-credit-card"></i>
                        <h3>Payment Information</h3>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Payment Method:</span>
                        <span class="detail-value">Credit Card (Visa **** 3456)</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Payment Date:</span>
                        <span class="detail-value">Oct 15, 2023</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Status:</span>
                        <span class="detail-value" style="color: var(--success);">Completed</span>
                    </div>
                </div>
            </div>
            
            <div class="summary-card">
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
            
            <div class="action-buttons">
                <a href="#" class="btn btn-primary"><i class="fas fa-download"></i> Download Invoice</a>
                <a href="/services" class="btn btn-outline"><i class="fas fa-laptop-code"></i> Browse More Services</a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Generate a random order number (in a real app, this would come from the server)
            const orderNumber = 'AVV-' + new Date().getFullYear() + '-' + Math.floor(1000 + Math.random() * 9000);
            document.querySelector('.order-number span').textContent = orderNumber;
            
            // You could also populate other fields from the order data here
        });
    </script>
</body>
</html>