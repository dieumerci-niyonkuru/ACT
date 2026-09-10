<?php
/**
 * Contact form handler for the ACT website.
 *
 * ---------------------------------------------------------------------------
 * EDIT HERE - who receives contact-form messages
 * ---------------------------------------------------------------------------
 */
$RECIPIENTS   = ['info@actrwanda.org'];      // add more addresses to notify more people
$FROM_ADDRESS = 'website@actrwanda.org';     // must be an address on this domain
$SITE_NAME    = 'Africa College of Theology';
// ---------------------------------------------------------------------------

header('Content-Type: application/json; charset=utf-8');

function respond($status, $message) {
    echo json_encode(['status' => $status, 'message' => $message]);
    exit;
}

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    respond('error', 'Invalid request.');
}

// Hidden field real people never fill in; bots usually do.
if (trim($_POST['form_botcheck'] ?? '') !== '') {
    respond('success', 'Thank you for your message.');
}

$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$comment = trim($_POST['comment'] ?? '');

if ($name === '' || $email === '' || $subject === '' || $comment === '') {
    respond('error', 'Please fill in your name, email, subject and message.');
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    respond('error', 'Please enter a valid email address.');
}
if (mb_strlen($comment) > 5000) {
    respond('error', 'Your message is too long. Please keep it under 5000 characters.');
}

// Header injection guard: these fields end up in mail headers.
foreach ([$name, $email, $subject] as $field) {
    if (preg_match('/[\r\n]/', $field)) {
        respond('error', 'Invalid characters in your submission.');
    }
}

$esc = fn($v) => htmlspecialchars($v, ENT_QUOTES, 'UTF-8');

$body = "<html><body style=\"font-family:Arial,sans-serif;color:#252a26\">"
      . '<h3 style="color:#4a6329;margin:0 0 12px">New enquiry from the ACT website</h3>'
      . '<table cellpadding="6" style="border-collapse:collapse">'
      . '<tr><td><strong>Name</strong></td><td>' . $esc($name) . '</td></tr>'
      . '<tr><td><strong>Email</strong></td><td>' . $esc($email) . '</td></tr>'
      . '<tr><td><strong>Phone</strong></td><td>' . $esc($phone !== '' ? $phone : '-') . '</td></tr>'
      . '<tr><td><strong>Subject</strong></td><td>' . $esc($subject) . '</td></tr>'
      . '</table>'
      . '<p style="margin-top:16px"><strong>Message</strong></p>'
      . '<p style="white-space:pre-wrap">' . $esc($comment) . '</p>'
      . '</body></html>';

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= 'From: ' . $SITE_NAME . ' <' . $FROM_ADDRESS . ">\r\n";
$headers .= 'Reply-To: ' . $name . ' <' . $email . ">\r\n";

// Suppressed: a mail() warning would print before the JSON and break the response.
// The failure is reported to the visitor through the $sent check below.
$sent = @mail(implode(', ', $RECIPIENTS), '[Website] ' . $subject, $body, $headers);

if ($sent) {
    respond('success', 'Thank you, ' . $esc($name) . '. Your message has been sent - we will get back to you shortly.');
}

respond('error', 'Sorry, the message could not be sent right now. Please email ' . $RECIPIENTS[0] . ' directly.');
