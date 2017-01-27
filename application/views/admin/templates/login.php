<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css')?>">
    <style>
.form-signin
{
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}
.form-signin .form-signin-heading, .form-signin .checkbox
{
    margin-bottom: 10px;
}
.form-signin .checkbox
{
    font-weight: normal;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type="text"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.form-signin input[type="password"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.account-wall
{
    margin-top: 20px;
    padding: 40px 0px 20px 0px;
    background-color: #f7f7f7;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.login-title
{
    color: #555;
    font-size: 18px;
    font-weight: 400;
    display: block;
}
.profile-img
{
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.need-help
{
    margin-top: 10px;
}
.new-account
{
    display: block;
    margin-top: 10px;
}
.form-control{
    line-height: 1.200;
}
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <?php
            if($error){
                echo '<div class="alert alert-danger" >User and Password Salah. Coba Ulangi.</div>';
            }?>
            <h1 class="text-center login-title">Sign in to continue to Kuiren Admin</h1>
            <div class="account-wall">
                <img class="profile-img" src="<?=base_url('assets/images/admin/photo.png')?>"
                    alt="">
                <form class="form-signin" method="post">
                    <div class="input-group">
                        <div class="input-group-btn" style="width:100px;padding:0px">
                            <select class="form-control" name="user_type" style="margin:0px;">
                                <option value="admin">Admin</option>
                                <option value="author">Author</option>
                                <option value="user" selected>User</option>
                            </select>
                        </div>
                        <input class="form-control" autocomplete="false" type="text" placeholder="Username / Email" name="username" required autofocus />
                        
                    </div>
                    <input class="form-control" type="password" autocomplete="false" placeholder="Password" name="password"/>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">
                        Sign in</button>
                    <label class="checkbox pull-left">
                        <input type="checkbox" value="remember-me">
                        Remember me
                    </label>
                    <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                </form>
            </div>
            <a href="#" class="text-center new-account">Create an account </a>
        </div>
    </div>
</div>
<!--     <div id="site_content">
        <div id="content">
            <!-- insert the page content here -->
<!--            <h1>Login</h1>
            <form action="<?=  base_url()?>index.php/users/login/" method="post">
                <div class="form_settings">
                    
                    <p><span>Username</span></p>
                    <p><span>Password</span></p>
                    <p><span>User Type</span>
                        
                    <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="add" value="Login" /></p>
                </div>
            </form>
        </div>
    </div> -->
</body>
</html>