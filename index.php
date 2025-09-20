
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register & Login Toggle</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      margin: 0;
      padding: 0;
      background: #f5f6fa;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .wrapper {
      background: #fff;
      width: 400px;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .tab-buttons {
      display: flex;
      justify-content: space-between;
      margin-bottom: 1.5rem;
    }

    .tab-buttons button {
      width: 48%;
      padding: 10px;
      border: none;
      background-color: #eee;
      font-weight: bold;
      cursor: pointer;
      border-radius: 8px;
      transition: background 0.3s;
    }

    .tab-buttons button.active {
      background-color: #5c6bc0;
      color: white;
    }

    form {
      display: none;
    }

    form.active {
      display: block;
    }

    .form-title {
      text-align: center;
      margin-bottom: 1rem;
      font-size: 1.5rem;
      color: #333;
    }

    .input-group {
      position: relative;
      margin-bottom: 1rem;
    }

    .input-group i {
      position: absolute;
      top: 12px;
      left: 10px;
      color: #888;
    }

    .input-group input {
      width: 100%;
      padding: 10px 10px 10px 35px;
      border-radius: 6px;
      border: 1px solid #ccc;
      outline: none;
    }

    .input-group label {
      font-size: 12px;
      margin-left: 5px;
      color: #777;
    }

    .btn {
      width: 100%;
      padding: 10px;
      background: #5c6bc0;
      color: white;
      font-weight: bold;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .btn:hover {
      background: #3f51b5;
    }

    .or {
      text-align: center;
      margin: 1rem 0;
      color: #999;
    }

    .icons {
      text-align: center;
      font-size: 1.4rem;
    }

    .icons i {
      margin: 0 10px;
      cursor: pointer;
      color: #666;
    }

    .icons i:hover {
      color: #3f51b5;
    }

    .recover {
      text-align: right;
      font-size: 0.9rem;
    }

    .recover a {
      color: #5c6bc0;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <div class="tab-buttons">
      <button id="registerTab" class="active">Register</button>
      <button id="loginTab">Sign In</button>
    </div>

    <!-- Register Form -->
    <form id="registerForm" class="active" method="post" action="register.php">
      <h2 class="form-title">Register</h2>
      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="fName" placeholder="First Name" required />
        <label>First Name</label>
      </div>
      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="lName" placeholder="Last Name" required />
        <label>Last Name</label>
      </div>
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" placeholder="Email" required />
        <label>Email</label>
      </div>
      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Password" required />
        <label>Password</label>
      </div>
      <input type="submit" class="btn" value="Sign Up" name="signUp">
      
    </form>

    <!-- Login Form -->
    <form id="loginForm" method="post" action="register.php">
      <h2 class="form-title">Sign In</h2>
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" placeholder="Email" required />
        <label>Email</label>
      </div>
      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Password" required />
        <label>Password</label>
      </div>
      <p class="recover"><a href="forgot-password.php">Recover Password</a></p>
      <input type="submit" class="btn" value="Sign In" name="signIn">
      
    </form>
  </div>

  <script>
    const registerTab = document.getElementById('registerTab');
    const loginTab = document.getElementById('loginTab');
    const registerForm = document.getElementById('registerForm');
    const loginForm = document.getElementById('loginForm');

    registerTab.onclick = () => {
      registerTab.classList.add('active');
      loginTab.classList.remove('active');
      registerForm.classList.add('active');
      loginForm.classList.remove('active');
    };

    loginTab.onclick = () => {
      loginTab.classList.add('active');
      registerTab.classList.remove('active');
      loginForm.classList.add('active');
      registerForm.classList.remove('active');
    };
  </script>
</body>
</html>
