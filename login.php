<?php require_once 's-lang/DIR_lang.php';?>
<!DOCTYPE html>
<html lang="az">
<head>
    <title><?php echo s_show($lang['customerloginpage']);?> | InValer</title>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon title yanindaki -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo s_img_enc_base64('s-main-p/icon.svg',1);?>">
    <!-- Fontawesome -->
    <link rel="stylesheet" type="text/css" href="3rd-party-includes/fontawesome/css/all.css">
    <!-- s_grid -->
    <link rel="stylesheet" type="text/css" href="s-main-scripts/css/s_grid.css">
    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="3rd-party-includes/google-fonts/fonts.css">
    <!-- Slick    -->
    <link rel="stylesheet" href="3rd-party-includes/Owl/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="3rd-party-includes/Owl/dist/assets/owl.theme.default.min.css">
    <!--Notification-->
    <link rel="stylesheet" href="3rd-party-includes/notification/noti.css">
</head>
<body>
<!--HEADER-->
<?php require_once 'header.php';?>
<!--HEADER SONU-->
<!--scrol top-->
<button id="s-back-to-top-btn"><i class="fas fa-angle-double-up fa-lg"></i></button>
<!--MAIN BODY-->
<div style="background: #F2F2F2" class="s-maincontent">


<div class="s_b_container">
    <div class="s_login_area">
        <div class="s_login_place s_shadow">
            <div class="s_login_place_title">
                <?php echo s_show($lang['customerloginpage']);?>
                <img src="<?php echo s_img_enc_base64('s-main-p/logo.svg',1);?>" alt="invaler-logo">
            </div>
            <div>s</div>
            <div class="s_login_place_alt">
            <div class="row">
                <div class="s_login_left_area s_sc-lg-6 s_sc-md-6 s_sc-sm-12 s_sc-xs-12">

                    <form action="" method="post" id="login_form">
                        <div class="s_login_input">
                            <label for="email_area">E-Mail :</label>
                            <div class="s_input_icon"><i class="fa fa-at"></i></div>
                            <input type="text" id="email_area" placeholder="e-mail">
                            <span id="email_warn"></span>
                        </div>
                        <div class="s_login_input">
                            <label for="password_area"> <?php echo s_show($lang['password']);?> :</label>
                            <div class="s_input_icon"><i class="fa fa-key"></i></div>
                            <input type="password" id="password_area" placeholder="<?php echo s_show($lang['password']);?>">
                            <span id="password_warn"></span>
                        </div>

                        <div class="s_login_input_r_me">
                            <label class="s_remember_me"> <?php echo s_show($lang['rememberme']);?>
                                <input type="checkbox">
                                <span class="s_checkmark"></span>
                            </label>
                        </div>

                        <div class="s_login_input">
                            <a href="#" onclick="document.getElementById('captcha').src = '3rd-party-includes/captcha/securimage_show.php?' + Math.random(); return false">
                                <img id="captcha" src="3rd-party-includes/captcha/securimage_show.php" alt="captcha image">
                            </a>
                            <div class="s_input_icon"><i class="fa fa-robot"></i></div>
                            <label for="captcha_submit"></label><input type="text" id="captcha_submit" placeholder="<?php echo s_show($lang['captcha']);?>" name="captcha_code" autocomplete="off" maxlength="10">
                            <span id="captcha_warn"></span>
                        </div>

                        <div class="s_login_input s_login_submit_btn_area">
                            <button id="s_login_btn" class="s_login_btn" type="submit"><?php echo s_show($lang['loginascustomer']);?></button>
                        </div>
                        <div class="s_login_input s_forgot_pass_area">
                            <a href=""><?php echo s_show($lang['forgotpassword']);?></a>
                        </div>
                        <div class="s_login_input s_have_not_acc_area">
                            <?php echo s_show($lang['noaccount']);?>? <a href="register"><?php echo s_show($lang['createone']);?></a>
                            <p><img src="<?php echo s_img_enc_base64('s-main-p/icon.svg',1);?>" alt="invaler-icon"></p>
                        </div>


                    </form>

                </div>
                <div class="s_login_right_area s-hide-xs s_sc-lg-6 s_sc-md-6 s_sc-sm-12 s_sc-xs-12">
                        <div class="owl-carousel s_login_page">
                            <div>
                                <h3>ss</h3>
                                <img src="<?php echo s_img_enc_base64('s-main-p/pages/login_slide/s_target_map.svg',1);?>" alt="">
                                <p>sss</p>
                            </div>
                            <div>
                                <h3>ss</h3>
                                <img src="<?php echo s_img_enc_base64('s-main-p/pages/login_slide/s_direct_ph.svg',1);?>" alt="">
                                <p>sss</p>
                            </div>
                            <div>
                                <h3>ss</h3>
                                <img src="<?php echo s_img_enc_base64('s-main-p/pages/login_slide/s_item_disc.svg',1);?>" alt="">
                                <p>sss</p>
                            </div>
                            <div>
                                <h3>ss</h3>
                                <img src="<?php echo s_img_enc_base64('s-main-p/pages/login_slide/s_support.svg',1);?>" alt="">
                                <p>sss</p>
                            </div>
                            <div>
                                <h3>ss</h3>
                                <img src="<?php echo s_img_enc_base64('s-main-p/pages/login_slide/s_tweet_news.svg',1);?>" alt="">
                                <p>sss</p>
                            </div>
                            <div>
                                <h3>ss</h3>
                                <img src="<?php echo s_img_enc_base64('s-main-p/pages/login_slide/s_uptodate.svg',1);?>" alt="">
                                <p>sss</p>
                            </div>
                        </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>


<!--MAIN BODY SONU-->

<!--FOOTER-->
<?php require_once 'footer.php';?>
<!--FOOTER SONU-->
<!--Main-Modallar-->
<?php require_once 's-main-scripts/DIR_modals.php';?>
<!--Main-Modallar sonu-->
<!--SCRIPTLER Asagi daxil edilecek -->
<!-- Main Js -->
<script src="s-main-scripts/js/main.js" type="text/javascript"></script>
<!--Jquery-->
<script src="3rd-party-includes/jquery/jquery.js" type="text/javascript"></script>
<!--Owl-->
<script type="text/javascript" src="3rd-party-includes/Owl/dist/owl.carousel.min.js"></script>
<!--Owl main page codes-->
<script type="text/javascript" src="s-main-scripts/js/owl_loginpage.js"></script>
<!--Notofication-->
<script type="text/javascript" src="3rd-party-includes/notification/noti.js"></script>
<script type="text/javascript" src="s-main-scripts/js/noti_loginpage.js"></script>
<!--input check js yeri-->
<script>
    //qiymetleri almaq ucun
    const email = document.getElementById('email_area');
    const password = document.getElementById('password_area');
    const captcha = document.getElementById('captcha_submit');
    //form
    const form = document.getElementById('login_form');
    //err yerlerini almaq ucun
    const email_warn = document.getElementById('email_warn');
    const password_warn = document.getElementById('password_warn');
    const captcha_warn = document.getElementById('captcha_warn');

    //submit tesdiq listeneri
    form.addEventListener('submit', (e) => {
        //error toplamaq ucun arraylar
        let s_email_warn = [];
        let s_password_warn = [];
        let s_captcha_warn = [];

        //email ucun error mueyyen edirik
        if (email.value === '' || email.value == null) {
            s_email_warn.push("<?php echo s_show($lang['this_is_a_required_field']);?>")
        }

        //password ucun error mueyyen edirik
        if (password.value === '' || password.value == null) {
            s_password_warn.push("<?php echo s_show($lang['this_is_a_required_field']);?>")
        }

        //captcha ucun error mueyyen edirik
        if (captcha.value === '' || captcha.value == null) {
            s_captcha_warn.push("<?php echo s_show($lang['this_is_a_required_field']);?>")
        }

        //error varsa
        if (s_email_warn.length > 0 || s_password_warn.length > 0|| s_captcha_warn.length > 0) {
            e.preventDefault();
            email_warn.innerHTML= s_email_warn.join('<br> ');
            password_warn.innerHTML= s_password_warn.join('<br> ');
            captcha_warn.innerHTML= s_captcha_warn.join('<br> ');
        }
    });
</script>

</body>
</html>




