# Code With Lasa — PHP reCAPTCHA v2

## Video Tutorial
[Click Here](https://youtu.be/9DD5QLEL6c0)

## Frontend
```html
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY"></div>
```

## Backend
```php
$secretKey = "YOUR_SECRET_KEY";
$captcha = $_POST['g-recaptcha-response'] ?? '';
```

## Verify
```php
$verify = file_get_contents(
"https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$captcha"
);

$result = json_decode($verify);

if (!$result->success) {
 exit;
}
```

Subscribe and star repo.
