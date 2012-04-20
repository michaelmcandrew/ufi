<?php
/**
 * @package Website_Template
 * @since Website 1.0
 *
 * Script for receiving, validating and sending contact form.
 * Use $config variable to define email address for incoming contact forms.
 */

// -----------------------------------------------------------------------------

// Configuration
$config = array
(
	'title' => 'Website',             // prefix of the contact form message's subject
	'email' => 'contact@yourmail.com' // e-mail address for incoming contact forms
);

// -----------------------------------------------------------------------------

/**
 * Return output
 *
 * @param boolean $result
 * @param string $message
 */
function output($result, $message)
{
	echo json_encode(array('result' => $result, 'message' => $message));
	exit;
}

// -----------------------------------------------------------------------------

// Form type
$full = isset($_POST['type']) && $_POST['type'] == 'full';

// Parsing POST data
foreach (array('name', 'email', 'subject', 'message') as $field) {
	${$field} = isset($_POST[$field]) ? trim(strip_tags($_POST[$field])) : '';
}
if (!$full) {
	$name = $email;
}

// Data validation
if (empty($name) && $full) {
	output(false, 'Please enter your name.');
} else if (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)+$/i', $email)) {
	output(false, 'Invalid email address.');
} else if (strlen($message) < 3) {
	output(false, 'Please write your comment.');
}

// Data preparing
$subject = rtrim("[{$config['title']}] ".trim(str_replace(array("\r", "\n"), ' ', $subject)));
$option = isset($_POST['option']) ? $_POST['option'] : 'no';
if ($full) {
	$message .= "\r\n\r\nOption: {$option}\r\n\r\n---\r\n{$name}\r\n{$email}";
} else {
	$message .= "\r\n\r\n---\r\n{$email}";
}

// Send mail
$result = @mail(
	$config['email'],
	'=?UTF-8?B?'.base64_encode($subject).'?=',
	$message,
	"From: {$name} <{$config['email']}>\r\n".
	"Reply-to: {$email}\r\n".
	"MIME-Version: 1.0\r\n".
	"Content-type: text/plain; charset=UTF-8\r\n"
);
if ($result) {
	output(true, 'Message sent.');
} else {
	output(false, 'Error occured. Message couldn\'t be sent.');
}