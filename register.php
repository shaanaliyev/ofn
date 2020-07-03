<?php require_once 's-lang/DIR_lang.php';?>
<!DOCTYPE html>
<html lang="az">
<head>
    <title><?php echo s_show($lang['customerregisterpage']);?> | InValer</title>
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
                    <?php echo s_show($lang['customerregisterpage']);?>
                    <img src="<?php echo s_img_enc_base64('s-main-p/logo.svg',1);?>" alt="invaler-logo">
                </div>
                <div>s</div>
                <div class="s_login_place_alt">
                    <div class="row">
                        <div class="s_login_left_area s_sc-lg-6 s_sc-md-6 s_sc-sm-12 s_sc-xs-12">

                            <form action="" method="post" id="register_form">
                                <div class="s_login_input">
                                    <label for="name_area"><?php echo s_show($lang['yuorname']);?> :</label>
                                    <div class="s_input_icon"><i class="fa fa-user"></i></div>
                                    <input type="text" id="name_area" placeholder="<?php echo s_show($lang['yuorname']);?>">
                                    <span id="name_warn"></span>
                                </div>

                                <div class="s_login_input">
                                    <label for="email_area">E-Mail :</label>
                                    <div class="s_input_icon"><i class="fa fa-at"></i></div>
                                    <input type="text" id="email_area" placeholder="E-mail">
                                    <span id="email_warn"></span>
                                </div>

                                <div class="s_login_input">
                                    <label for="password_area"><?php echo s_show($lang['password']);?> :</label>
                                    <div class="s_input_icon"><i class="fa fa-key"></i></div>
                                    <input  type="password" id="password_area" placeholder="<?php echo s_show($lang['password']);?>">
                                    <span id="password_warn"></span>
                                </div>

                                <div class="s_login_input">
                                    <label for="confirmpassword_area"><?php echo s_show($lang['confirmpassword']);?> :</label>
                                    <div class="s_input_icon"><i class="fa fa-key"></i></div>
                                    <input  type="password" id="confirmpassword_area" placeholder="<?php echo s_show($lang['confirmpassword']);?>">
                                    <span id="confirmpassword_warn"></span>
                                </div>

                                <div class="s_login_input">
                                    <label  for="pin_area">PIN : <i class="s_tip fa fa-info-circle"><span><?php echo s_show($lang['pin_area_tip']);?></span></i></label>
                                    <div class="s_input_icon"><i class="fa fa-unlock"></i></div>
                                    <input type="password" id="pin_area" maxlength="6" placeholder="PIN">
                                    <span id="pin_warn"></span>
                                </div>

                                <div class="s_login_input">
                                    <a href="#" onclick="document.getElementById('captcha').src = '3rd-party-includes/captcha/securimage_show.php?' + Math.random(); return false">
                                        <img id="captcha" src="3rd-party-includes/captcha/securimage_show.php" alt="captcha image">
                                    </a>
                                    <div class="s_input_icon"><i class="fa fa-robot s_tip"><span><?php echo s_show($lang['captcha_area_tip']);?></span></i></div>
                                    <label for="captcha_submit"></label><input type="text" id="captcha_submit" placeholder="<?php echo s_show($lang['captcha']);?>" name="captcha_code" autocomplete="off" maxlength="10">
                                    <span id="captcha_warn"></span>
                                </div>
                                <div class="s_login_input">
                                    <div class="s_login_ag">
                                        <?php if (isset($_COOKIE['lang']) && s_getcookie('lang')==='en'){ ?>
                                                <?php echo s_show($lang['by_confirming_your_registration_you_accept_our']);?>
                                                <a href="user-agreement"><?php echo s_show($lang['useragreement']);?></a>,
                                                <?php echo s_show($lang['including_our']);?>
                                                <a href="privacy-policy"><?php echo s_show($lang['privacypolicy']);?></a>.
                                        <?php }
                                            else{
                                                echo s_show($lang['qeydiyyati_tesdiqledikde']);?>,
                                                <a href="privacy-policy"><?php echo s_show($lang['privacypolicy']);?></a>
                                                <?php echo s_show($lang['de_daxil_olmaqla']);?>
                                                <a href="user-agreement"><?php echo s_show($lang['useragreement']);?>nı</a>
                                                <?php echo s_show($lang['qebul_etmiş_olursunuz']);?>.
                                            <?php }?>
                                    </div>
                                </div>

                                <div class="s_login_input s_login_submit_btn_area">
                                    <button onclick="register_submit_btn()" id="s_login_btn" class="s_login_btn" type="submit"><?php echo s_show($lang['confirmregistration']);?></button>
                                </div>
                                <div class="s_login_input s_have_acc_area">
                                    <?php echo s_show($lang['already_have_an_account']);?>? <a href="login"><?php echo s_show($lang['loginhere']);?></a>
                                    <p><img src="<?php echo s_img_enc_base64('s-main-p/icon.svg',1);?>" alt=""></p>
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
<!--Owl login page codes-->
<script type="text/javascript" src="s-main-scripts/js/owl_loginpage.js"></script>
<!--Notofication-->
<script type="text/javascript" src="3rd-party-includes/notification/noti.js"></script>
<script type="text/javascript" src="s-main-scripts/js/noti_loginpage.js"></script>

<!--input check js yeri-->
<script>
    //qiymetleri almaq ucun
    const name = document.getElementById('name_area');
    const email = document.getElementById('email_area');
    const password = document.getElementById('password_area');
    const confirmpassword = document.getElementById('confirmpassword_area');
    const pin = document.getElementById('pin_area');
    const captcha = document.getElementById('captcha_submit');
    //form
    const form = document.getElementById('register_form');
    //err yerlerini almaq ucun
    const name_warn = document.getElementById('name_warn');
    const email_warn = document.getElementById('email_warn');
    const password_warn = document.getElementById('password_warn');
    const confirmpassword_warn = document.getElementById('confirmpassword_warn');
    const pin_warn = document.getElementById('pin_warn');
    const captcha_warn = document.getElementById('captcha_warn');

    //submit tesdiq listeneri
    form.addEventListener('submit', (e) => {
        //error toplamaq ucun arraylar
        let s_name_warn = [];
        let s_email_warn = [];
        let s_password_warn = [];
        let s_confirmpassword_warn = [];
        let s_pin_warn = [];
        let s_captcha_warn = [];

        //name ucun error mueyyen edirik
        if (name.value === '' || name.value == null) {
            s_name_warn.push("<?php echo s_show($lang['this_is_a_required_field']);?>")
        }
        if (name.value.length < 3 || name.value.length > 20) {
            s_name_warn.push("<?php echo s_show($lang['min_3_20_char']);?>")
        }
        if (name.value.match(/[^a-zA-Züöğİıəçş]+/g)) {
            s_name_warn.push("<?php echo s_show($lang['name_regex']);?>")
        }

        //email ucun error mueyyen edirik
        if (email.value === '' || email.value == null) {
            s_email_warn.push("<?php echo s_show($lang['this_is_a_required_field']);?>")
        }
        if (!email.value.match(/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,5})+$/g)) {
            s_email_warn.push("<?php echo s_show($lang['email_regex']);?>")
        }

        //password ucun error mueyyen edirik
        if (password.value === '' || password.value == null) {
            s_password_warn.push("<?php echo s_show($lang['this_is_a_required_field']);?>")
        }
        if (password.value.length < 6 || password.value.length > 26) {
            s_password_warn.push("<?php echo s_show($lang['min_6_26_char']);?>")
        }

        //confirm password ucun error mueyyen edirik
        if (confirmpassword.value === '' || confirmpassword.value == null) {
            s_confirmpassword_warn.push("<?php echo s_show($lang['this_is_a_required_field']);?>")
        }
        if (password.value!==confirmpassword.value) {
            s_confirmpassword_warn.push("<?php echo s_show($lang['password_does_not_match']);?>")
        }

        //Pin ucun error mueyyen edirik
        if (pin.value === '' || pin.value == null) {
            s_pin_warn.push("<?php echo s_show($lang['this_is_a_required_field']);?>")
        }
        if (pin.value.length!==6) {
            s_pin_warn.push("<?php echo s_show($lang['6_char']);?>")
        }

        //captcha ucun error mueyyen edirik
        if (captcha.value === '' || captcha.value == null) {
            s_captcha_warn.push("<?php echo s_show($lang['this_is_a_required_field']);?>")
        }

        //error varsa
        if (s_name_warn.length > 0 || s_email_warn.length > 0 || s_password_warn.length > 0 || s_confirmpassword_warn.length > 0 || s_pin_warn.length > 0 || s_captcha_warn.length > 0) {
            e.preventDefault();
            name_warn.innerHTML = s_name_warn.join('<br> ');
            email_warn.innerHTML= s_email_warn.join('<br> ');
            password_warn.innerHTML= s_password_warn.join('<br> ');
            confirmpassword_warn.innerHTML= s_confirmpassword_warn.join('<br> ');
            pin_warn.innerHTML= s_pin_warn.join('<br> ');
            captcha_warn.innerHTML= s_captcha_warn.join('<br> ');
        }
    });

    //go top when duymeye basanda
    function register_submit_btn() {
        $("html, body").animate({ scrollTop: 160 }, 400);
    }
</script>

</body>
</html>




