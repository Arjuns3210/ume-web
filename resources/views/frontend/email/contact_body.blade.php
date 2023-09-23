<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>New Lead Generated</title>
</head>
<body>
	<h2>Good day team,</h2>

	<h4>There has been a new contact us enquiry recorded from the website on Date <?php echo date('d-M-Y'); ?> . Details filled by the user are as follows,</h4>
	<p>Name: {{ $name }}</p>
	<p>E-mail: {{ $email_id }}</p>
	<p>Phone: +91 {{ $phone }}</p>
	<p>Subject: {{ $subject }}</p>
	<p>Message: {{ $msg }}</p>
	<p>Ip Address: {{ $ip_address }}</p>
	<h3>Contact the visitor and guide him forward as per the filled details .</h3>

</body>
</html>