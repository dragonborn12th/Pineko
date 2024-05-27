<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="icon" type="image/x-icon" href="file:images\_ec4c65ef-eb75-48c7-88fc-c7f007877583.ico">
      <link rel="icon" type="image/x-icon" href="/images/_ec4c65ef-eb75-48c7-88fc-c7f007877583.ico">

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Registration</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-image: url('images/background.jpg');
                background-size: cover;
                background-position: center;
            }
    
            .container {
                width: 100%;
                max-width: 400px;
                margin: 100px auto;
                background-color: rgba(255, 255, 255, 0.5);
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                transition: background-color 0.3s ease;
            }
    
            .container:hover {
                backdrop-filter: blur(10px);
                background-color: rgba(255, 255, 255, 0.7);
            }
    
            h2 {
                text-align: center;
                color: #333;
            }
    
            .input-group {
                margin-bottom: 20px;
                position: relative;
            }
    
            .input-group label {
                display: block;
                margin-bottom: 5px;
                color: #555;
            }
    
            .input-group input,
            .input-group select {
                width: 70%;
                padding: 10px;
                border: none;
                border-bottom: 1px solid #ccc;
                border-radius: 0;
                background: transparent;
                outline: none;
            }
    
            .toggle-password {
                position: absolute;
                top: 50%;
                right: 10px;
                transform: translateY(-50%);
                cursor: pointer;
            }
    
            .button-13 {
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
            }
    
            .button-13:active {
                transform: scale(0.92);
            }
    
            .button-13-background {
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
    
            .button-13 .text {
                background: linear-gradient(180deg, #FFE5C2 1%, #CDAF87 100%), #FFFFFF;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                text-fill-color: transparent;
                z-index: 3;
                position: relative;
            }
    
            @media (hover: hover) {
                .button-13:hover .button-13-background {
                    filter: brightness(0.8);
                }
            }
    
            .button-13:active .button-13-background {
                filter: brightness(0.6);
            }
    
            .button-13-border {
                position: absolute;
                z-index: 1;
                inset: -4px -12px;
            }
    
            @supports (-webkit-mask-box-image: inherit) or (mask-border: inherit) {
                .button-13-border {
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
                .button-13-border {
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
        </style>
    </head>
    <body>
        <div class="container">
        <h2>Create Your Account</h2>
<form id="registrationForm" action="register.php" method="post" onsubmit="return validateForm()">
    <div class="input-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
    </div>
    <div class="input-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="input-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <span class="toggle-password" onclick="togglePasswordVisibility(this)">👁️</span>
    </div>
    <div class="input-group">
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>
    </div>
    <div class="input-group">
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
    </div>
    <button class="button-13" type="submit">
        <span class="text">Sign Up</span>
        <span class="button-13-background"></span>
        <span class="button-13-border"></span>
    </button>
    <p class="message">Already have an account? <a href="login.php">Login here</a></p>
</form>

        <script>
            function registerUserAndRedirect() {
                var username = document.getElementById("username").value;
                var email = document.getElementById("email").value;
                var password = document.getElementById("password").value;
                var age = document.getElementById("age").value;
                var address = document.getElementById("address").value;
                var gender = document.getElementById("gender").value;
        
                var user = {
                    username: username,
                    email: email,
                    password: password,
                    age: age,
                    address: address,
                    gender: gender
                };
        
                localStorage.setItem('registeredUser', JSON.stringify(user));
                window.location.href = "login.html";
            }
        </script>
    
        <script>
            function togglePasswordVisibility(element) {
                var passwordInput = element.previousElementSibling;
                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    element.textContent = "🔒";
                } else {
                    passwordInput.type = "password";
                    element.textContent = "👁️";
                }
            }
        </script>
    </body>
    </html>