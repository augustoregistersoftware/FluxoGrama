<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    body, html {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #f8f9fa;
    }

    .container {
        display: flex;
        width: 800px;
        height: 500px;
        background: #fff;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        border-radius: 10px;
        overflow: hidden;
    }

    .illustration {
        flex: 1;
        background: #f0f4f8;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .illustration img {
        width: 70%;
    }

    .login-form {
        flex: 1;
        padding: 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .login-form h2 {
        margin-bottom: 20px;
        font-weight: 600;
    }

    .login-form input[type="email"],
    .login-form input[type="password"] {
        width: 100%;
        padding: 12px 15px;
        margin: 8px 0;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 16px;
    }

    .login-form .remember-forgot {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 10px 0 20px;
    }

    .login-form .remember-forgot label {
        display: flex;
        align-items: center;
        font-size: 14px;
    }

    .login-form .remember-forgot input[type="checkbox"] {
        margin-right: 5px;
    }

    .login-form button {
        padding: 12px;
        background: #3b82f6;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: 0.3s;
    }

    .login-form button:hover {
        background: #2563eb;
    }

    .login-form .signup {
        text-align: center;
        margin-top: 15px;
        font-size: 14px;
    }

    .login-form .signup a {
        color: #3b82f6;
        text-decoration: none;
        font-weight: 500;
    }
</style>