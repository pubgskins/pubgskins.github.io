<html>
<head>
<script src='https://www.google.com/recaptcha/api.js'></script>
<meta charset="UTF-8">
<meta name="description" content="This is the demo of Integrating Google reCAPTCHA in your website with example">
<meta name="keywords" content="Google reCAPTCHA, Robot identification, Bot identification, Captcha, reCAPTCHA,  reCAPTCHA Live demo,
CAPTCHA demo, Google CAPTCHA, CAPTCHA LiveDemo, dreamscoder.com,dreamscoder">
<meta name="author" content="Chinmay Mahajan">
<title>Integrating Google reCAPTCHA Demo Dreamscoder </title>

<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<h1> Integrating Google reCAPTCHA Demo </h1>

<form action="" method="post">
Name : <input type="text" name="name"><br>
City : <input type="text" name="city"><br><br>
<div class="g-recaptcha" data-sitekey="6LfCELAZAAAAAB1_Rw4ogrrhoDZZ7H49nG_1SzbU"></div>
<input type="submit" name="submit" value="submit">

</form>

<?php

if(isset($_POST['submit']))
{

function CheckCaptcha($userResponse) {
        $fields_string = '';
        $fields = array(
            'secret' => 6LfCELAZAAAAANxYkC1GwOahcfeXlxbI0OXGr8Bh
            'response' => $userResponse
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

