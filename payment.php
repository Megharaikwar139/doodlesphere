<?php
// DoodleSphere - Payment Page
$product_name = "DoodleSphere Mega Bundle - 12,500+ Preschool Learning & Coloring Activities";
$product_price = 27.00;
$product_currency = "INR"; // Change to INR for Razorpay or keep USD for PayPal

// Handle form submission
$success = false;
$error = '';
$order_id = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // This is where payment gateway integration will go
    // For now, we capture form data
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');

    if (empty($name) || empty($email)) {
        $error = 'Please fill in all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } else {
        // Generate order ID
        $order_id = 'DS' . strtoupper(uniqid());
        // TODO: Process payment via gateway here
        $success = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - DoodleSphere Mega Bundle</title>
    <meta name="robots" content="noindex">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&family=Poppins:wght@600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-orange: #f5a623;
            --primary-purple: #9013fe;
            --gradient-btn: linear-gradient(256deg, #f5a623 0%, #9013fe 99.5%);
            --white: #ffffff;
            --dark: #1a1a2e;
            --gray: #6b7280;
            --light-bg: #f8fafc;
            --success: #10b981;
            --error: #ef4444;
            --border: #e5e7eb;
            --shadow: 0 10px 40px rgba(0,0,0,0.1);
        }
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { font-size: 16px; scroll-behavior: smooth; }
        body {
            font-family: 'Open Sans', sans-serif;
            background: linear-gradient(135deg, #fff8e7 0%, #fef3c7 30%, #e0f2fe 100%);
            min-height: 100vh;
            color: var(--dark);
        }

        /* ---- Header ---- */
        .pay-header {
            background: white;
            border-bottom: 3px solid #ffecd0;
            padding: 16px 24px;
            text-align: center;
            box-shadow: 0 2px 15px rgba(0,0,0,0.06);
        }
        .pay-header a { display: inline-block; }
        .pay-header img { height: 52px; width: auto; }

        /* ---- Secure Badge ---- */
        .secure-banner {
            background: linear-gradient(135deg, #f0fdf4, #dcfce7);
            border-bottom: 1px solid #bbf7d0;
            padding: 10px 24px;
            text-align: center;
            font-size: 14px;
            font-weight: 600;
            color: #16a34a;
        }

        /* ---- Main Layout ---- */
        .pay-main {
            max-width: 980px;
            margin: 40px auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 32px;
            align-items: start;
        }

        /* ---- Order Summary ---- */
        .order-summary {
            background: white;
            border-radius: 20px;
            padding: 32px;
            box-shadow: var(--shadow);
            border: 2px solid #ffecd0;
            position: sticky;
            top: 20px;
        }
        .order-summary h2 {
            font-size: 22px;
            font-weight: 800;
            color: var(--dark);
            margin-bottom: 24px;
            padding-bottom: 16px;
            border-bottom: 2px solid #ffecd0;
        }
        .product-preview {
            display: flex;
            gap: 16px;
            align-items: flex-start;
            margin-bottom: 24px;
        }
        .product-preview img {
            width: 90px;
            height: 90px;
            object-fit: cover;
            border-radius: 12px;
            border: 2px solid #ffecd0;
            flex-shrink: 0;
        }
        .product-info h3 {
            font-size: 16px;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 8px;
            line-height: 1.4;
        }
        .product-badge {
            display: inline-block;
            background: #fef3c7;
            color: #92400e;
            font-size: 11px;
            font-weight: 700;
            padding: 3px 10px;
            border-radius: 20px;
            border: 1px solid #fde68a;
        }
        .includes-list {
            margin-top: 16px;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        .includes-list li {
            font-size: 14px;
            color: #444;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .includes-list li::before { content: '✅'; font-size: 13px; }
        .order-total {
            margin-top: 24px;
            padding-top: 20px;
            border-top: 2px dashed #ffecd0;
        }
        .total-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        .total-label { font-size: 15px; color: var(--gray); }
        .total-value { font-size: 15px; font-weight: 700; color: var(--dark); }
        .total-final {
            background: linear-gradient(135deg, #fff8e7, #fef3c7);
            border-radius: 12px;
            padding: 16px;
            margin-top: 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 2px solid #ffd700;
        }
        .total-final-label { font-size: 18px; font-weight: 800; color: var(--dark); }
        .total-final-price {
            font-size: 32px;
            font-weight: 800;
            color: var(--primary-orange);
        }
        .total-final-price sup {
            font-size: 18px;
            vertical-align: top;
            margin-top: 6px;
        }
        .guarantees {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .guarantee-item {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 13px;
            color: var(--gray);
        }
        .guarantee-icon { font-size: 18px; }

        /* ---- Checkout Form ---- */
        .checkout-form-card {
            background: white;
            border-radius: 20px;
            padding: 36px;
            box-shadow: var(--shadow);
            border: 2px solid #e5e7eb;
        }
        .checkout-form-card h2 {
            font-size: 24px;
            font-weight: 800;
            color: var(--dark);
            margin-bottom: 8px;
        }
        .form-subtitle {
            font-size: 14px;
            color: var(--gray);
            margin-bottom: 28px;
        }

        .form-section-title {
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--primary-orange);
            margin-bottom: 16px;
            margin-top: 24px;
            padding-bottom: 8px;
            border-bottom: 1px solid #ffecd0;
        }

        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-size: 14px;
            font-weight: 700;
            color: #374151;
            margin-bottom: 8px;
        }
        .form-group label span.required { color: var(--error); margin-left: 2px; }
        .form-control {
            width: 100%;
            padding: 13px 16px;
            border: 2px solid var(--border);
            border-radius: 12px;
            font-size: 15px;
            font-family: 'Open Sans', sans-serif;
            color: var(--dark);
            background: #fafafa;
            transition: all 0.3s;
            outline: none;
        }
        .form-control:focus {
            border-color: var(--primary-orange);
            background: white;
            box-shadow: 0 0 0 4px rgba(245,166,35,0.12);
        }
        .form-control.error { border-color: var(--error); }
        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }

        /* Payment method tabs */
        .payment-tabs {
            display: flex;
            gap: 12px;
            margin-bottom: 24px;
        }
        .pay-tab {
            flex: 1;
            padding: 14px;
            border: 2px solid var(--border);
            border-radius: 12px;
            background: white;
            cursor: pointer;
            text-align: center;
            font-size: 14px;
            font-weight: 700;
            color: var(--gray);
            transition: all 0.3s;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 6px;
        }
        .pay-tab:hover { border-color: var(--primary-orange); color: var(--primary-orange); }
        .pay-tab.active {
            border-color: var(--primary-orange);
            background: linear-gradient(135deg, #fff8e7, #fef3c7);
            color: var(--primary-orange);
        }
        .pay-tab-icon { font-size: 26px; }

        .payment-panel { display: none; }
        .payment-panel.active { display: block; }

        /* Card fields */
        .card-icons {
            display: flex;
            gap: 8px;
            margin-bottom: 16px;
        }
        .card-icon {
            background: #f3f4f6;
            border-radius: 6px;
            padding: 4px 10px;
            font-size: 12px;
            font-weight: 700;
            color: #555;
        }

        /* Submit button */
        .submit-btn {
            width: 100%;
            padding: 18px;
            background: var(--gradient-btn);
            color: white;
            border: none;
            border-radius: 14px;
            font-size: 19px;
            font-weight: 800;
            font-family: 'Open Sans', sans-serif;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 8px 25px rgba(245,166,35,0.45);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 24px;
            position: relative;
            overflow: hidden;
        }
        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 14px 35px rgba(245,166,35,0.55);
        }
        .submit-btn:active { transform: translateY(0); }
        .submit-btn:disabled { opacity: 0.7; cursor: not-allowed; transform: none; }

        .btn-loader {
            display: none;
            width: 22px; height: 22px;
            border: 3px solid rgba(255,255,255,0.5);
            border-top-color: white;
            border-radius: 50%;
            animation: spin 0.7s linear infinite;
        }
        @keyframes spin { to { transform: rotate(360deg); } }

        .security-note {
            text-align: center;
            font-size: 12px;
            color: var(--gray);
            margin-top: 14px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 6px;
        }

        /* Alert messages */
        .alert {
            padding: 14px 18px;
            border-radius: 12px;
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .alert-error { background: #fef2f2; color: #dc2626; border: 2px solid #fecaca; }
        .alert-success { background: #f0fdf4; color: #16a34a; border: 2px solid #bbf7d0; }

        /* ---- Success Screen ---- */
        .success-screen {
            max-width: 600px;
            margin: 60px auto;
            padding: 0 20px;
            text-align: center;
        }
        .success-icon {
            font-size: 80px;
            margin-bottom: 24px;
            animation: successBounce 0.6s cubic-bezier(0.36, 0.07, 0.19, 0.97);
        }
        @keyframes successBounce {
            0% { transform: scale(0); }
            60% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }
        .success-card {
            background: white;
            border-radius: 24px;
            padding: 48px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.1);
            border: 3px solid #bbf7d0;
        }
        .success-card h1 {
            font-size: 32px;
            font-weight: 800;
            color: var(--success);
            margin-bottom: 12px;
        }
        .success-card p {
            font-size: 17px;
            color: var(--gray);
            margin-bottom: 24px;
            line-height: 1.7;
        }
        .order-id-badge {
            background: #f0fdf4;
            border: 2px solid #bbf7d0;
            border-radius: 12px;
            padding: 12px 24px;
            font-size: 16px;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 32px;
            display: inline-block;
        }
        .success-steps {
            text-align: left;
            display: flex;
            flex-direction: column;
            gap: 16px;
            margin-bottom: 32px;
        }
        .success-step {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            padding: 14px;
            background: #f8fafc;
            border-radius: 12px;
        }
        .success-step-num {
            width: 32px; height: 32px;
            background: var(--gradient-btn);
            border-radius: 50%;
            color: white;
            font-weight: 800;
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .back-home-btn {
            display: inline-block;
            background: var(--gradient-btn);
            color: white;
            padding: 15px 40px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s;
            box-shadow: 0 6px 20px rgba(245,166,35,0.4);
        }
        .back-home-btn:hover { transform: translateY(-3px); box-shadow: 0 10px 30px rgba(245,166,35,0.5); }

        /* ---- Responsive ---- */
        @media (max-width: 768px) {
            .pay-main { grid-template-columns: 1fr; gap: 24px; }
            .order-summary { position: static; }
            .checkout-form-card { padding: 24px; }
            .form-row { grid-template-columns: 1fr; }
            .payment-tabs { flex-wrap: wrap; }
            .success-card { padding: 32px 24px; }
        }
    </style>
</head>
<body>

<!-- Header -->
<header class="pay-header">
    <a href="index.php">
        <img src="images/logo.png" alt="DoodleSphere">
    </a>
</header>

<!-- Secure Banner -->
<div class="secure-banner">
    🔒 Secure Checkout &nbsp;·&nbsp; 🛡️ SSL Encrypted &nbsp;·&nbsp; ✅ Instant Digital Delivery
</div>

<?php if ($success): ?>
<!-- ===== SUCCESS PAGE ===== -->
<div class="success-screen">
    <div class="success-icon">🎉</div>
    <div class="success-card">
        <h1>Order Confirmed!</h1>
        <p>Thank you! Your order has been placed successfully. Check your email for download instructions.</p>
        <div class="order-id-badge">Order ID: <?php echo htmlspecialchars($order_id); ?></div>
        <div class="success-steps">
            <div class="success-step">
                <div class="success-step-num">1</div>
                <div>
                    <strong>Check your email</strong>
                    <p style="font-size:14px;color:#666;margin-top:4px;">A confirmation email has been sent to <?php echo htmlspecialchars($_POST['email']); ?></p>
                </div>
            </div>
            <div class="success-step">
                <div class="success-step-num">2</div>
                <div>
                    <strong>Download your bundle</strong>
                    <p style="font-size:14px;color:#666;margin-top:4px;">Click the download link in your email to access all 12,500+ activities.</p>
                </div>
            </div>
            <div class="success-step">
                <div class="success-step-num">3</div>
                <div>
                    <strong>Start printing & learning!</strong>
                    <p style="font-size:14px;color:#666;margin-top:4px;">Print the pages and enjoy endless learning fun with your little one. 🎨</p>
                </div>
            </div>
        </div>
        <a href="index.php" class="back-home-btn">← Back to Home</a>
    </div>
</div>

<?php else: ?>
<!-- ===== CHECKOUT PAGE ===== -->
<div class="pay-main">

    <!-- LEFT: Order Summary -->
    <div class="order-summary">
        <h2>📦 Your Order</h2>
        <div class="product-preview">
            <img src="images/hero-worksheets.jpg" alt="DoodleSphere Bundle">
            <div class="product-info">
                <h3><?php echo htmlspecialchars($product_name); ?></h3>
                <span class="product-badge">⚡ Digital Download</span>
            </div>
        </div>
        <ul class="includes-list">
            <li>10,000+ Preschool Worksheets</li>
            <li>2,500+ Coloring Pages</li>
            <li>Alphabet & Numbers Activities</li>
            <li>Tracing & Pre-Writing Sheets</li>
            <li>Shapes, Colors & Matching Games</li>
            <li>Instant PDF Download</li>
            <li>Use Again & Again – Print at Home</li>
            <li>Perfect for Ages 2–6</li>
        </ul>
        <div class="order-total">
            <div class="total-row">
                <span class="total-label">Subtotal</span>
                <span class="total-value">₹<?php echo number_format($product_price, 2); ?></span>
            </div>
            <div class="total-row">
                <span class="total-label">Shipping</span>
                <span class="total-value" style="color:#16a34a;">FREE</span>
            </div>
            <div class="total-final">
                <span class="total-final-label">Total</span>
                <span class="total-final-price"><sup>₹</sup><?php echo number_format($product_price, 2); ?></span>
            </div>
        </div>
        <div class="guarantees">
            <div class="guarantee-item">
                <span class="guarantee-icon">🔒</span>
                <span>Secure 256-bit SSL encryption</span>
            </div>
            <div class="guarantee-item">
                <span class="guarantee-icon">⚡</span>
                <span>Instant digital delivery after payment</span>
            </div>
            <div class="guarantee-item">
                <span class="guarantee-icon">🔄</span>
                <span>30-day money back guarantee</span>
            </div>
            <div class="guarantee-item">
                <span class="guarantee-icon">📱</span>
                <span>Works on all devices</span>
            </div>
        </div>
    </div>

    <!-- RIGHT: Checkout Form -->
    <div class="checkout-form-card">
        <h2>Complete Your Order</h2>
        <p class="form-subtitle">You're one step away from 12,500+ activities! Fill in the details below.</p>

        <?php if (!empty($error)): ?>
        <div class="alert alert-error">
            ⚠️ <?php echo htmlspecialchars($error); ?>
        </div>
        <?php endif; ?>

        <form id="checkoutForm" method="POST" action="payment.php" novalidate>

            <!-- Contact Info -->
            <div class="form-section-title">👤 Contact Information</div>
            <div class="form-group">
                <label for="name">Full Name <span class="required">*</span></label>
                <input type="text" id="name" name="name" class="form-control"
                       placeholder="Your full name"
                       value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>"
                       required>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="email">Email Address <span class="required">*</span></label>
                    <input type="email" id="email" name="email" class="form-control"
                           placeholder="your@email.com"
                           value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>"
                           required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" class="form-control"
                           placeholder="+91 XXXXX XXXXX"
                           value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>">
                </div>
            </div>

            <!-- Payment Method -->
            <div class="form-section-title">💳 Payment Method</div>
            <div class="payment-tabs">
                <div class="pay-tab active" data-panel="razorpay" id="tab-razorpay">
                    <span class="pay-tab-icon">💳</span>
                    <span>Card / UPI / NetBanking</span>
                </div>
                <div class="pay-tab" data-panel="paypal" id="tab-paypal">
                    <span class="pay-tab-icon">🌐</span>
                    <span>PayPal</span>
                </div>
            </div>

            <!-- Razorpay Panel -->
            <div class="payment-panel active" id="panel-razorpay">
                <div style="background:#f8fafc;border-radius:14px;padding:20px;border:2px solid #e5e7eb;text-align:center;">
                    <div style="font-size:32px;margin-bottom:10px;">🏦</div>
                    <p style="font-size:15px;font-weight:700;color:#1a1a2e;margin-bottom:6px;">Pay with Razorpay</p>
                    <p style="font-size:13px;color:#666;line-height:1.6;">Supports: Credit/Debit Card, UPI, NetBanking, Wallets, EMI</p>
                    <div style="display:flex;justify-content:center;gap:10px;margin-top:14px;flex-wrap:wrap;">
                        <span style="background:white;padding:5px 12px;border-radius:8px;font-size:12px;font-weight:700;color:#555;border:1px solid #e5e7eb;">UPI</span>
                        <span style="background:white;padding:5px 12px;border-radius:8px;font-size:12px;font-weight:700;color:#555;border:1px solid #e5e7eb;">VISA</span>
                        <span style="background:white;padding:5px 12px;border-radius:8px;font-size:12px;font-weight:700;color:#555;border:1px solid #e5e7eb;">Mastercard</span>
                        <span style="background:white;padding:5px 12px;border-radius:8px;font-size:12px;font-weight:700;color:#555;border:1px solid #e5e7eb;">NetBanking</span>
                    </div>
                    <input type="hidden" name="payment_method" value="razorpay">
                </div>
            </div>

            <!-- PayPal Panel -->
            <div class="payment-panel" id="panel-paypal">
                <div style="background:#f8fafc;border-radius:14px;padding:20px;border:2px solid #e5e7eb;text-align:center;">
                    <div style="font-size:32px;margin-bottom:10px;">🌐</div>
                    <p style="font-size:15px;font-weight:700;color:#1a1a2e;margin-bottom:6px;">Pay with PayPal</p>
                    <p style="font-size:13px;color:#666;line-height:1.6;">You will be redirected to PayPal to complete your payment securely.</p>
                </div>
            </div>

            <!-- Terms -->
            <div class="form-group" style="margin-top:20px;">
                <label style="display:flex;align-items:flex-start;gap:10px;cursor:pointer;font-weight:400;">
                    <input type="checkbox" id="terms" name="terms" required
                           style="width:18px;height:18px;margin-top:2px;accent-color:var(--primary-orange);">
                    <span style="font-size:14px;color:#555;line-height:1.5;">
                        I agree to the <a href="#" style="color:var(--primary-orange);font-weight:700;">Terms of Use</a>
                        and <a href="#" style="color:var(--primary-orange);font-weight:700;">Privacy Policy</a>.
                        I understand this is a digital product with no refund after download.
                    </span>
                </label>
            </div>

            <!-- Submit -->
            <button type="submit" class="submit-btn" id="submitBtn">
                <span id="btnText">🔒 Complete Purchase – ₹<?php echo number_format($product_price, 2); ?></span>
                <span class="btn-loader" id="btnLoader"></span>
            </button>

            <div class="security-note">
                🔒 Your payment is 100% secured &amp; encrypted
            </div>

        </form>
    </div>

</div>
<?php endif; ?>

<!-- Footer -->
<footer style="text-align:center;padding:30px 20px;font-size:13px;color:#999;margin-top:40px;border-top:1px solid #f0f0f0;">
    <a href="index.php" style="color:#f5a623;font-weight:700;text-decoration:none;">← Back to DoodleSphere</a>
    &nbsp;·&nbsp;
    <a href="#" style="color:#999;">Privacy Policy</a>
    &nbsp;·&nbsp;
    <a href="#" style="color:#999;">Terms of Use</a>
    <br><br>
    © <?php echo date('Y'); ?> DoodleSphere. All rights reserved.
</footer>

<script>
document.addEventListener('DOMContentLoaded', function() {

    // Payment tab switching
    const tabs = document.querySelectorAll('.pay-tab');
    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const panelId = this.dataset.panel;
            // Deactivate all
            tabs.forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.payment-panel').forEach(p => p.classList.remove('active'));
            // Activate selected
            this.classList.add('active');
            const panel = document.getElementById('panel-' + panelId);
            if (panel) panel.classList.add('active');
            // Update hidden input
            const input = document.querySelector('input[name="payment_method"]');
            if (input) input.value = panelId;
        });
    });

    // Form validation & submission
    const form = document.getElementById('checkoutForm');
    const submitBtn = document.getElementById('submitBtn');
    const btnText = document.getElementById('btnText');
    const btnLoader = document.getElementById('btnLoader');

    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            let valid = true;
            const name = document.getElementById('name');
            const email = document.getElementById('email');
            const terms = document.getElementById('terms');

            // Reset
            [name, email].forEach(el => el.classList.remove('error'));

            if (!name.value.trim()) {
                name.classList.add('error');
                name.focus();
                valid = false;
            } else if (!email.value.trim() || !isValidEmail(email.value)) {
                email.classList.add('error');
                email.focus();
                valid = false;
            } else if (!terms.checked) {
                alert('Please agree to the Terms of Use to continue.');
                valid = false;
            }

            if (valid) {
                // Show loading
                submitBtn.disabled = true;
                btnText.style.display = 'none';
                btnLoader.style.display = 'block';

                // For Razorpay integration - uncomment when ready:
                // initRazorpay();

                // For now, submit the form normally
                setTimeout(() => form.submit(), 800);
            }
        });
    }

    function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    /* 
    ========================================
    RAZORPAY INTEGRATION (Uncomment when ready)
    ========================================
    
    function initRazorpay() {
        // First create order on server via AJAX, then open Razorpay
        fetch('create_order.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                phone: document.getElementById('phone').value,
                amount: <?php echo $product_price * 100; ?> // in paise
            })
        })
        .then(res => res.json())
        .then(data => {
            var options = {
                key: "rzp_test_YOUR_KEY_HERE", // Your Razorpay Key ID
                amount: data.amount,
                currency: "INR",
                name: "DoodleSphere",
                description: "12,500+ Preschool Learning Bundle",
                image: "images/logo.png",
                order_id: data.id,
                handler: function(response) {
                    // Verify payment on server
                    verifyPayment(response);
                },
                prefill: {
                    name: document.getElementById('name').value,
                    email: document.getElementById('email').value,
                    contact: document.getElementById('phone').value
                },
                theme: { color: "#f5a623" }
            };
            var rzp = new Razorpay(options);
            rzp.open();
            submitBtn.disabled = false;
            btnText.style.display = 'inline';
            btnLoader.style.display = 'none';
        });
    }
    
    function verifyPayment(response) {
        fetch('verify_payment.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(response)
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                window.location.href = 'payment.php?success=1&order=' + data.order_id;
            }
        });
    }
    */

});
</script>
</body>
</html>
