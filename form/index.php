<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-2.2.4.js"
            integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="assets/js/script.js" type="text/javascript"></script>
</head>
<body>

<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
    <h1>Material Login Form</h1><span>Bài tập của Nghĩa <i class='fa fa-code'></i> by <a
            href='https://github.com/nghiatv'>Nghĩa Thân</a></span>
</div>
<div class="rerun"><a href="">Rerun Pen</a></div>
<div class="container">
    <div class="card"></div>
    <!--    <div class="card">-->
    <!--        <form action="--><?php //$_PHP_SELF; ?><!--" method="post">-->
    <!--            <div class="input-container">-->
    <!--                <input type="text" id="Username" name="username" required="required" value=""/>-->
    <!--                <label for="Username">Username</label>-->
    <!--                <div class="bar"></div>-->
    <!--                <div class="error"></div>-->
    <!--            </div>-->
    <!--            <div class="input-container">-->
    <!--                <input type="password" id="Password" name="password" required="required" value=""/>-->
    <!--                <label for="Password">Password</label>-->
    <!--                <div class="bar"></div>-->
    <!--                <div class="error"></div>-->
    <!--            </div>-->
    <!--            <div class="button-container">-->
    <!--                <button><span>Go</span></button>-->
    <!--            </div>-->
    <!--            <div class="footer"><a href="#">Forgot your password?</a></div>-->
    <!--        </form>-->
    <!---->
    <!---->
    <!--    </div>-->
    <div class="card ">
        <div class="toggle"></div>
        <h1 class="title">Register
            <div class="close"></div>
        </h1>
        <form action="<?php $_PHP_SELF; ?>" method="post">
            <div class="input-container">
                <input type="text" id="Username" name="username" required="required"/>
                <label for="Username">Username</label>
                <div class="bar"></div>
                <div class="error"></div>
            </div>
            <div class="input-container">
                <input type="password" id="Password" name="password" required="required"/>
                <label for="Password">Password</label>
                <div class="bar"></div>
                <div class="error"></div>
            </div>
            <div class="input-container">
                <input type="password" id="Repeat Password" name="repeatPassword" required="required"/>
                <label for="Repeat Password">Repeat Password</label>
                <div class="bar"></div>
            </div>
            <div class="input-container">
                <input type="email" id="Email" name="email" required="required"/>
                <label for="Email">Email</label>
                <div class="bar"></div>
                <div class="error"></div>
            </div>
            <div class="button-container">
                <button><span>Next</span></button>
            </div>
        </form>
    </div>
    <?php
//    check cookie
    if(isset($_Cookie)){
        var_dump($_Cookie);
    }else{
        echo "cookie dau";
    }

    //    dữ liệu
    $user = array('username' => 'hungmaix',
        'password' => 'hungmaix',

    );
    //    đầu vào
    $pattern = "/[a-zA-Z]{6,32}/";
    //    regedit
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $repeatPassword = $_POST['repeatPassword'];
        $email = $_POST['email'];
        $flag = 1;
//        regex
        if (!preg_match($pattern, $username, $match)) {
            $flag = 0;
            echo "sao lai vao day";
            exit;
        }
        if (!preg_match($pattern, $password, $match2)) {
            $flag = 0;
            echo "sao lại vao day ha be";
            exit;
        }
        if (!preg_match($pattern, $email, $match4)) {
            $flag = 0;
            echo "email ko validate";
            exit;
        }

//        kiem tra
        if ($flag == 1) {
            if ($repeatPassword == $password) {
                echo "dang ki thanh cong";

            } else {
                echo "repass ko khop";
            }
        } else {
            echo "Nhập user pass khong hop le";
        }
    } else {
        echo "ahihi";
    }


// Cookie truyền dữ liệu thông qua trình duyệt


    ?>

</div>
</body>
</html>
