<?php
session_start();
$username = $_POST['name'] ?? '';
$password = $_POST['pass'] ?? '';
if ($username == 'admin' && $password == '123') {
    $_SESSION['user'] = $username;
    header("Location: index.php");
} else {
    require_once"login.php";
}
?>
            <form action="login.php" class="login100-form validate-form"  method="post" >
					<span class="login100-form-title p-b-33">
						Account Login
					</span>
                ​
                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="name" placeholder="Name">
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                </div>
                ​
                <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="pass" placeholder="Password">
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                </div>
                <div></div>
                ​
                <div class="container-login100-form-btn m-t-20">
                    <button type="submit" class="login100-form-btn">
                        LOGIN
                    </button>
                </div>
                ​
                ​
            </form>
