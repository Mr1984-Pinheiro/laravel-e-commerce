<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Linking CSS -->
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- Main Title Icon -->
    <link rel="icon" type="image/gif/png" href="./images/Main Tab Image-Logo.png">
    <title>Login</title>
</head>

<body> 
    <x-alert />
    <div class="containter">        
        <div class="bluebg">
            <div class="box signin">
                <!-- Sign In Button -->
                <h2>Already Have an Account?</h2>
                <button class="signinbtn">Sign In
                </button>
            </div>
            <div class="box signup">
                <!-- Sign Up Button -->
                <h2>Don't Have an Account?</h2>
                <button class="signupbtn">Sign Up</button>
            </div>
        </div>
        <div class="formBx">
            <!------------ Slider ------------->
            <div class="form signinForm">
                <!-- Sign In Form -->
                <form>
                    <i class='bx bx-log-in signinimage'></i>
                    <h3>Sign In</h3>
                    <input type="text" placeholder=" Username">
                    <input type="password" placeholder=" Password">
                    <input type="submit" value="Login">
                    <a href="#" class="forgot">Forgot Password?</a>
                </form>
            </div>
            <div class="form signupForm">
                <!-- Sign Up Form -->
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf                    

                    <i class='bx bxs-user signupimage'></i>
                    <h3>Sign Up</h3>
                    <input type="text" name="name" id="name" value="{{ old('name') }}"  placeholder=" Username">
                    <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder=" Your best e-mail">
                    <input type="password" name="password" id="password" value="{{ old('password') }}" placeholder=" Password">                    
                    {{-- <input type="password" placeholder=" Confirm Password"> --}}
                    <input type="submit" value="Register">
                </form>
            </div>
        </div> 
    </div>
    <script src="script.js"></script>     
</body>
</html>