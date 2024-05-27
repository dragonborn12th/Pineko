<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="file:images\_ec4c65ef-eb75-48c7-88fc-c7f007877583.ico">
      <link rel="icon" type="image/x-icon" href="/images/_ec4c65ef-eb75-48c7-88fc-c7f007877583.ico">

    <style>
        body.login-body {
            text-align: center;
            margin-top: 100px;
            background-image: url('images/vecteezy_ai-generated-freshness-of-nature-in-a-close-up-of-a-ripe_38995198.jpg');
            background-size: cover;
        }
        .welcome-heading {
            font-size: 60px; 
            font-family: "Arial Black", Arial, sans-serif; 
            color: white; 
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
            margin-bottom: 30px; 
        }
        .login-form {
            max-width: 400px;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.5); 
            padding: 20px;
            border-radius: 10px;
        }
        .form-label {
            font-size: 18px;
            color: red;
            font-weight: bold; 
            display: block; 
            margin-bottom: 5px; 
        }
        .form-input {
            font-size: 16px;
            padding: 15px;
            width: 80%;
        }
        .login-button,
        .create-account-button,
        .social-button {
            touch-action: manipulation;
            background: none;
            position: relative;
            border-width: 4px 12px;
            border-style: solid;
            border-color: transparent;
            padding: 8px 24px;
            text-align: center;
            color: #fff;
            transition-property: transform;
            transition-duration: 0.4s;
            cursor: pointer;
            width: 100%;
            margin-bottom: 10px;
        }
        .login-button .text,
        .create-account-button .text,
        .social-button .text {
            background: linear-gradient(180deg, #FFE5C2 1%, #CDAF87 100%), #FFFFFF;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-fill-color: transparent;
            z-index: 3;
            position: relative;
        }
        .login-button .button-13-background,
        .create-account-button .button-13-background,
        .social-button .button-13-background {
            position: absolute;
            z-index: 2;
            inset: 0;
            clip-path: polygon(12px 0, calc(100% - 12px) 0%, 100% 12px, 100% calc(100% - 12px), calc(100% - 12px) 100%, 12px 100%, 0% calc(100% - 12px), 0% 12px);
            background-color: saddlebrown;
            background-image: radial-gradient(transparent, rgba(0, 0, 0, 0.8)), linear-gradient(to bottom, #af6a65, calc(12.5% - 1px), #cfa381, #88312b calc(12.5% + 1px) 50%, #601d2c 50% calc(87.5% - 1px), #994021, #341227 calc(87.5% + 1px));
            transition-property: filter;
            transition-duration: 0.2s;
            will-change: filter;
        }
        .login-button:hover .button-13-background,
        .create-account-button:hover .button-13-background,
        .social-button:hover .button-13-background {
            filter: brightness(0.8);
        }
        .login-button:active .button-13-background,
        .create-account-button:active .button-13-background,
        .social-button:active .button-13-background {
            filter: brightness(0.6);
        }
        .login-button .button-13-border,
        .create-account-button .button-13-border,
        .social-button .button-13-border {
            position: absolute;
            z-index: 1;
            inset: -4px -12px;
        }
        @supports (-webkit-mask-box-image: inherit) or (mask-border: inherit) {
            .login-button .button-13-border,
            .create-account-button .button-13-border,
            .social-button .button-13-border {
                background-image: linear-gradient(to bottom, #bb9d7a 50%, #806d56 50%);
                -webkit-mask-box-image-source: url("https://csspro.com/css-3d-buttons/buttons-img/baldurs-gate-3-border.svg");
                -webkit-mask-box-image-slice: 15 23;
                -webkit-mask-box-image-width: 15px 23px;
                -webkit-mask-box-image-repeat: repeat;
                mask-border-source: url("https://csspro.com/css-3d-buttons/buttons-img/baldurs-gate-3-border.svg");
                mask-border-slice: 15 23;
                mask-border-width: 15px 23px;
                mask-border-repeat: repeat;
            }
        }
        @supports not ((-webkit-mask-box-image: inherit) or (mask-border: inherit)) {
            .login-button .button-13-border,
            .create-account-button .button-13-border,
            .social-button .button-13-border {
                border-width: 15px 23px;
                border-style: solid;
                border-color: transparent;
                border-image-source: url("https://csspro.com/css-3d-buttons/buttons-img/baldurs-gate-3-border-inverted.svg");
                border-image-slice: 15 23;
                border-image-width: 15px 23px;
                border-image-repeat: repeat;
                background-image: linear-gradient(#000, #000), linear-gradient(to bottom, #bb9d7a 50%, #806d56 50%);
                background-origin: content-box, border-box;
                background-repeat: no-repeat;
                filter: url("#remove-black-button-13");
            }
        }
        @keyframes revealText {
            0% {
                opacity: 0;
                transform: translateY(50%);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .welcome-heading {
            font-family: Arial, sans-serif;
            font-size: 80px;
            text-align: center;
            background: linear-gradient(45deg, violet, gold);
            -webkit-background-clip: text;
            color: transparent;
            animation: revealText 1.5s ease-in-out;
        }
       
        .password-container {
            position: relative;
            margin-bottom: 20px;
        }
        .password-toggle {
            position: absolute;
            top: 50%;
            right: 10px;
            bottom: 30px; 
            left: 300px; 
            transform: translateY(-50%);
            cursor: pointer;
        }
        .password-toggle span {
            font-size: 20px;
        }
    </style>
</head>

<body class="login-body">

    <h1 class="welcome-heading">𝕎𝔼𝕃ℂ𝕆𝕄𝔼 𝕋𝕆 𝕆ℕ𝕃𝕀ℕ𝔼 ℙ𝕀ℕ𝔼𝔸ℙℙ𝕃𝔼 𝕊𝕋𝕆ℝ𝔼</h1>

    <form class="login-form" action="logcont.php" method="POST">
        <img src="images/profile.png" alt="Profile Icon" style="width: 100px; height: 100px; margin-bottom: 10px;"><br>
        <label for="Username" class="form-label">Username</label>
        <input type="text" id="Username" name="username" placeholder="Enter your username" class="form-input" required><br>
        <div class="password-container">
            <label for="Password" class="form-label">Password</label>
            <input type="password" id="Password" name="password" placeholder="Enter your password" class="form-input" required>
            <div class="password-toggle" onclick="togglePasswordVisibility()">
                <span id="toggleIcon" role="img" aria-label="Toggle Password Visibility">👁️</span>
            </div>
        </div>
        <br>
        <button type="submit" class="login-button" role="button"><span class="text">Login</span><span class="button-13-background"></span><span class="button-13-border"></span></button><br>
       
        <button type="button" onclick="window.location.href = 'createaccount.php';" class="create-account-button" role="button"><span class="text">Create Account</span><span class="button-13-background"></span><span class="button-13-border"></span></button><br>
        <button type="button" onclick="window.location.href = 'index.php';" class="create-account-button" role="button"><span class="text">Back to Main</span><span class="button-13-background"></span><span class="button-13-border"></span></button><br>
        <p class="or-text">or continue with:</p>
        <button type="button" onclick="location.href='#';" class="social-button google-button" role="button"><span class="text">Continue with Google</span><span class="button-13-background"></span><span class="button-13-border"></span></button>
        <button type="button" onclick="location.href='#';" class="social-button facebook-button" role="button"><span class="text">Continue with Facebook</span><span class="button-13-background"></span><span class="button-13-border"></span></button><br>
        <p class="register-text">Don't have an account? <a href="createaccount.html" class="register-link">Register</a></p>
        <p id="error-message" class="error-message" style="display: none;">Wrong username or password. Please try again.</p>
        </form>
    

    <script>
       function login() {
    var username = document.getElementById("Username").value;
    var password = document.getElementById("Password").value;

    alert("Login successful!");
    window.location.href = "dashbaord.php";
}

    </script>
    

    <script>
       
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("Password");
            var toggleIcon = document.getElementById("toggleIcon");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleIcon.textContent = "🔒";
            } else {
                passwordInput.type = "password";
                toggleIcon.textContent = "👁️";
            }
        }
    </script>

</body>

</html>
