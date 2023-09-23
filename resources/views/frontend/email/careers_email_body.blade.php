<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Career</title>
</head>
<body>
	<h2>Good day team,</h2>
	<h4>There has been a new CV recorded from the careers page of the website on <?php echo date('d-M-Y'); ?> . Details filled by the user are as follows,</h4>
	<p>Name: {{ $name }}</p>
	<p>E-mail: {{ $email }}</p>
	<p>City: {{ $city }}</p>
	<p>Experience : {{ $experience }}</p>
	<p>Application : {{ $application }}</p>
	<p>CV Link: <a href="{{ $cvLink}}" target="_blank">Click Here</a></p>
	<p>Ip Address: {{ $ip_address }}</p>
	<h3>Check the CV and if useful reach out to the candidate as per the filled details .</h3>

</body>
</html>