<!DOCTYPE html>
<html>

<head>
    <title>Sign up</title>
</head>

<body>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #dc143c, #ff4500);
            margin-top: 30;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #fff;
        }

        button {
            background: linear-gradient(to right, #dc143c, #ff4500);
            color: #fff;
            font-size: medium;
            width: 100%;
            padding: 15px;
            margin: 10px 0px;
            border: none;
            cursor: pointer;
            border-radius: 12px;
        }

        form {
            width: 100%;
            max-width: 450px;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: #333;
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        input[type=text],
        input[type=password],
        input[type=tel],
        input[type=email],
        input[type=date] {
            width: 100%;
            padding: 13px;
            margin-bottom: 0px;
            box-sizing: border-box;
            border: 2.2px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
            color: #333;
        }

        button:hover {
            opacity: 0.7;
        }

        label {
            display: inline-block;
            margin-bottom: 7px;
            color: #333;
            text-align: center;
            margin-left: 1.5px
        }
        label{
        float: inline-start;
}
        .container {
            padding: 0px;
            background: white;
            border-radius: 15px;
            float: middle;
            color: #353935;
        }
        .input input:focus{
            outline: 0;
        }
        .input.success input{
            border-color: aquamarine;
        }
        .input.error input{
            border-color: #dc143c;
        }
        .input .error{
            color:red;
            font-size: 13px;
            height: 13px;

        }
        .input{
            font-size: 15px;
        }
        .error{
            margin-bottom: 3px;
        }

    </style>

        <form id="id">
            <div class="container">
                <h2>Sign Up </h2><br>

                <div class="input">
                <label><b> Full Name </b></label>
                <input type="text" id="name" placeholder="Enter Name" name="name">
                <div class="error"></div>
                </div>

                <div class="input">
                <label><b>Email </b></label>
                <input type="email" id="email" placeholder="Enter Email" name="email">
                <div class="error"></div>
                </div>

                <div class="input">
                <label><b>Phone Number </b></label>
                <input type="tel" id="number" placeholder="Enter Number" name="number">
                <div class="error"></div>
                </div>

                <div class="input">
                <label><b>Password </b></label>
                <input type="password" id="password" placeholder="Enter Password" name="password">
                <div class="error"></div>
                </div>

                <div class="input">
                <label><b>Re-enter Password </b></label>
                <input type="password" id="password2" placeholder="Enter Password" name="password">
                <div class="error"></div> 
                </div>

                <button type="submit">Sign Up</button>

                <a href="pract.html" target="pract.html"></a><br>

                <input type="checkbox" checked="checked"> Remember me<br>
                <p> Already have an account? <a href="Login.html">Login</a></p>
            </div>
        </form>
    
</body>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.getElementById('id');
        const name = document.getElementById('name');
        const email = document.getElementById('email');
        const number = document.getElementById('number');
        const password = document.getElementById('password');
        const password2 = document.getElementById('password2');
    
        form.addEventListener('submit', e => {
            e.preventDefault();
            validateInputs();
        });
    
        const setError = (element, message) => {
            const inputControl = element.parentElement;
            const errorDisplay = inputControl.querySelector('.error');
    
            errorDisplay.innerText = message;
            inputControl.classList.add('error');
            inputControl.classList.remove('success');
        };
    
        const setSuccess = element => {
            const inputControl = element.parentElement;
            const errorDisplay = inputControl.querySelector('.error');
    
            errorDisplay.innerText = '';
            inputControl.classList.add('success');
            inputControl.classList.remove('error');
        };
    
        const isValidEmail = email => {
            const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        };
    
        const validNumber = number => {
            const numberPattern = /^[0-9]{10}$/;
            return numberPattern.test(number);
            const numberchar = a
        };
    
        const validateInputs = () => {
            const nameValue = name.value.trim();
            const emailValue = email.value.trim();
            const numberValue = number.value.trim();
            const passwordValue = password.value.trim();
            const password2Value = password2.value.trim();
    
            if (nameValue === '') {
                setError(name, 'Name is required');
            } else {
                setSuccess(name);
            }
    
            if (emailValue === '') {
                setError(email, 'Email is required');
            } else if (!isValidEmail(emailValue)) {
                setError(email, 'Provide a valid email address');
            } else {
                setSuccess(email);
            }

            if (!validNumber(numberValue)) {
                setError(number, 'Enter a valid phone number');
            } else {
                setSuccess(number);
            }
    
            if (passwordValue === '') {
                setError(password, 'Password is required');
            } else if (passwordValue.length < 8) {
                setError(password, 'Password must be at least 8 characters');
            } else {
                setSuccess(password);
            }
    
            if (password2Value === '') {
                setError(password2, 'Please confirm your password');
            } else if (password2Value !== passwordValue) {
                setError(password2, 'Passwords do not match');
            } else {
                setSuccess(password2);
            }
        };
    });
    </script>
    
<!-- <script>
    function signUpValidation(){
    var pwd=document.getElementById('pwd').value;
    var phno=document.getElementById('phno').value;
    if(pwd.length<5){
        alert('Password has to be longer than 5 characters');
        return false;
    }
    if(phno.length<10){
        alert('Invalid Phone Number');
        return false;
    }
    else{
        alert('Sign in sucessfull');
        return true;
    }
 }
</script> -->

</html>