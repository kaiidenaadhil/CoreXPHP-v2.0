<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>License Verification</title>
    <style>
        * { margin:0; padding:0; box-sizing:border-box; }
        body {
            font-family: 'Segoe UI', system-ui, sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 20px;
        }
        .card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 12px 20px -10px rgba(0,0,0,0.08), 0 4px 12px rgba(0,0,0,0.05);
            padding: 40px;
            max-width: 480px;
            text-align: center;
            animation: float-in 0.6s cubic-bezier(0.22, 1, 0.36, 1);
        }
        .icon {
            width: 72px; height: 72px;
            background: #fff0f3;
            border-radius: 50%;
            margin: 0 auto 24px;
            position: relative;
        }
        .icon::before, .icon::after {
            content: '';
            position: absolute;
            top: 50%; left: 50%;
            width: 32px; height: 2px;
            background: #e91e63;
            transform: translate(-50%, -50%);
        }
        .icon::before { transform: translate(-50%, -50%) rotate(45deg); }
        .icon::after { transform: translate(-50%, -50%) rotate(-45deg); }
        h2 { margin: 0 0 12px; font-size: 22px; font-weight: 600; color: #212529; }
        p { color: #495057; line-height: 1.6; margin: 0 0 28px; }
        .actions {
            display: flex;
            gap: 12px;
            justify-content: center;
            margin-bottom: 28px;
        }
        .btn {
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .btn-secondary {
            background: #f8f9fa;
            color: #495057;
            border: 1px solid #e9ecef;
        }
        .btn-primary {
            background: #e91e63;
            color: white;
        }
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .btn-secondary:hover { background: #e9ecef; }
        .btn-primary:hover { background: #d81b60; }
        .error-code {
            color: #868e96;
            font-size: 13px;
            font-family: monospace;
        }
        @keyframes float-in {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @media (max-width: 480px) {
            .card { padding: 30px 20px; }
            .actions { flex-direction: column; }
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="icon"></div>
        <h2>License Verification Required</h2>
        <p>This domain is not authorized. Please validate your license to continue using this service.</p>
        <div class="actions">
            <a href="https://avantvista.com/contact" target="_blank" class="btn btn-secondary">Contact Support</a>
            <a href="https://avantvista.com/licenses/renew" target="_blank" class="btn btn-primary">Renew License</a>
        </div>
        <div class="error-code">Error Code: LIC-403</div>
    </div>
</body>
</html>