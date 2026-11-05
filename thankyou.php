<?php
/**
 * DoodleSphere - Secure Thank You / Download Page
 * Server-Side Access Control Guard
 */

$params = $_GET;
$valid_keys = ['payment_id', 'order_id', 'transaction_id', 'txn_id', 'razorpay_payment_id', 'token', 'session_id', 'sp_id', 'sp_payment_id'];
$has_param = false;

foreach ($valid_keys as $key) {
    if (!empty($params[$key])) {
        $has_param = true;
        break;
    }
}

$status = strtolower($params['status'] ?? $params['payment'] ?? '');
if (in_array($status, ['success', 'completed']) || ($params['success'] ?? '') === '1' || ($params['success'] ?? '') === 'true') {
    $has_param = true;
}

$ref = strtolower($_SERVER['HTTP_REFERER'] ?? '');
$is_from_gateway = str_contains($ref, 'superprofile.bio') || 
                   str_contains($ref, 'razorpay.com') || 
                   str_contains($ref, 'cashfree.com') || 
                   str_contains($ref, 'stripe.com');

// If not verified, redirect to home page
if (!$has_param && !$is_from_gateway) {
    header("Location: index.php?access=restricted");
    exit;
}

// Otherwise include the thank you page
include_once __DIR__ . '/thankyou.html';
