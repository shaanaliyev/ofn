<?php require_once 's-lang/DIR_lang.php';?>
<!DOCTYPE html>
<html lang="az">
<head>
    <title><?php echo s_show($lang['contact']);?> | InValer</title>
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
    <div id="s_contact_page_head" class="s_contact_page_head" style="background: url('<?php echo s_img_enc_base64('s-main-p/bg/contact_logo_bg.png');?>') no-repeat; background-size: 100% auto;">
        <div><img src="<?php echo s_img_enc_base64('s-main-p/logo.svg',1);?>" alt=""><x>. com</x></div>
        <div><?php echo s_show($lang['contact_page_info']);?></div>
    </div>
<div class="s_b_container">
    <div class="s_contact_page_alert_area">
        <div class="s_contact_page_alert">
            <div><i class="fa fa-info-circle fa-2x"></i></div><div>ssaslorem lorem gsds</div>
        </div>
    </div>
    <div class="s_contact_area">
    <div class="s_contact_page_area">
            <div class="row">
                <div class="s_sc-xl-4 s_sc-lg-5 s_sc-md-12 s_sc-sm-12 s_sc-xs-12">
                    <div class="s_c_p_info">
                        <div class="s_c_p_i_header"><?php echo s_show($lang['contact_information']);?></div>
                        <div class="s_c_p_i_elements_area">
                            <div><i class="fa fa-map-marker-alt fa-lg"></i>Rashid Mammadov 25</div>
                            <div><i class="fa fa-phone-alt fa-lg"></i>012 0123 45 67</div>
                            <div><i class="fa fa-mobile-alt fa-lg"></i>+994 50 889 56 74</div>
                            <div><i class="fa fa-envelope-open fa-lg"></i>support@invaler.com</div>
                        </div>
                    </div>
                </div>
                <div class="s_sc-xl-8 s_sc-lg-7 s_sc-md-12 s_sc-sm-12 s_sc-xs-12">
                    <div class="s_c_p_send">
                        <div class="s_c_p_message"><?php echo s_show($lang['send_us_a_message']);?><i class="fa fa-envelope"></i></div>
                        <div class="s_c_p_message_send_area">

                            <form action="" id="contact_form" method="post" novalidate>
                            <div class="row">
                                <div class="s_sc-xl-6 s_sc-lg-6 s_sc-md-6 s_sc-sm-12 s_sc-xs-12">
                                        <div class="omrs-input-group">
                                            <label class="omrs-input-underlined">
                                                <input required name="name" id="name_area">
                                                <span class="omrs-input-label"><?php echo s_show($lang['yuorname']);?>*</span>
                                            </label>
                                            <span class="s_c_p_m_s_a" id="name_warn"></span>
                                        </div>
                                </div>
                                <div class="s_sc-xl-6 s_sc-lg-6 s_sc-md-6 s_sc-sm-12 s_sc-xs-12">
                                    <div class="omrs-input-group">
                                        <label class="omrs-input-underlined">
                                            <input required name="email" id="email_area">
                                            <span class="omrs-input-label">E-Mail*</span>
                                        </label>
                                        <span class="s_c_p_m_s_a" id="email_warn"></span>
                                    </div>
                                </div>
                                <div class="s_sc-xl-12 s_sc-lg-12 s_sc-md-12 s_sc-sm-12 s_sc-xs-12">
                                    <div class="omrs-input-group">
                                        <label class="omrs-input-underlined">
                                            <input required name="subject" id="subject_area">
                                            <span class="omrs-input-label"><?php echo s_show($lang['subject']);?>*</span>
                                        </label>
                                        <span class="s_c_p_m_s_a" id="subject_warn"></span>
                                    </div>
                                </div>
                                <div class="s_sc-xl-12 s_sc-lg-12 s_sc-md-12 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_c_p_message_text">
                                        <label for="message_area"></label><textarea onkeyup="text_counter()" placeholder="<?php echo s_show($lang['message']);?>*" maxlength="499" name="message" id="message_area" cols="30" rows="5"></textarea>
                                        <x id="s_c_p_message_text_counter"></x>
                                        <span class="s_c_p_m_s_a" id="message_warn"></span>
                                    </div>
                                </div>
                                <div class="s_sc-xl-6 s_sc-lg-6 s_sc-md-6 s_sc-sm-12 s_sc-xs-12">
                                    <a href="#" onclick="document.getElementById('captcha').src = '3rd-party-includes/captcha/securimage_show.php?' + Math.random(); return false">
                                        <img id="captcha" src="3rd-party-includes/captcha/securimage_show.php" alt="captcha image">
                                    </a>
                                </div>
                                <div class="s_sc-xl-6 s_sc-lg-6 s_sc-md-6 s_sc-sm-12 s_sc-xs-12">
                                    <div class="omrs-input-group">
                                        <label class="omrs-input-underlined">
                                            <input required type="text" id="captcha_submit" name="captcha_code" autocomplete="off" maxlength="10">
                                            <span class="omrs-input-label"><?php echo s_show($lang['captcha']);?>*</span>
                                        </label>
                                        <span class="s_c_p_m_s_a" id="captcha_warn"></span>
                                    </div>
                                </div>
                                <div class="s_sc-xl-12 s_sc-lg-12 s_sc-md-12 s_sc-sm-12 s_sc-xs-12">
                                    <button class="s_c_p_message_btn"><?php echo s_show($lang['submit']);?></button>
                                </div>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="s_c_p_bot_info">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur a
            t commodi delectus deleniti deserunt illum iure molestias mollitia nece
            ssitatibus quam quia, quis, quod ullam vero voluptas! Alias eveniet mole
            stias perspiciatis?
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
<!-- Main Js kodlarim -->
<script src="s-main-scripts/js/main.js" type="text/javascript"></script>
<!--Jquery-->
<script src="3rd-party-includes/jquery/jquery.js" type="text/javascript"></script>
<!--Notofication-->
<script type="text/javascript" src="3rd-party-includes/notification/noti.js"></script>
<!--Header Bg size deyisdirmek ekran olculerine gore-->
<script>
    var s_cur = $(window).width();
    var s_limit = 972;
    if (s_cur<=s_limit){
        document.getElementById('s_contact_page_head').style.backgroundSize='auto auto';
    }
    $(window).resize(function() {
        var s_new = $(window).width();
        if (s_new<=s_limit){
            document.getElementById('s_contact_page_head').style.backgroundSize='auto auto';
        }else {
            document.getElementById('s_contact_page_head').style.backgroundSize='100% auto';
        }
    });
</script>



<!--input check js yeri-->
<script>
    //qiymetleri almaq ucun
    const name = document.getElementById('name_area');
    const email = document.getElementById('email_area');
    const subject = document.getElementById('subject_area');
    const message = document.getElementById('message_area');
    const captcha = document.getElementById('captcha_submit');
    //form
    const form = document.getElementById('contact_form');
    //err yerlerini almaq ucun
    const name_warn = document.getElementById('name_warn');
    const email_warn = document.getElementById('email_warn');
    const subject_warn = document.getElementById('subject_warn');
    const message_warn = document.getElementById('message_warn');
    const captcha_warn = document.getElementById('captcha_warn');

    //submit tesdiq listeneri
    form.addEventListener('submit', (e) => {
        //error toplamaq ucun arraylar
        let s_name_warn = [];
        let s_email_warn = [];
        let s_subject_warn = [];
        let s_message_warn = [];
        let s_captcha_warn = [];

        //name ucun error mueyyen edirik
        if (name.value === '' || name.value == null) {
            s_name_warn.push("<?php echo s_show($lang['this_is_a_required_field']);?>")
        }
        if (name.value.length < 3 || name.value.length > 20) {
            s_name_warn.push("<?php echo s_show($lang['min_3_20_char']);?>")
        }
        if (name.value.match(/[^a-zA-Züöİğıəçş]+/g)) {
            s_name_warn.push("<?php echo s_show($lang['name_regex']);?>")
        }

        //email ucun error mueyyen edirik
        if (email.value === '' || email.value == null) {
            s_email_warn.push("<?php echo s_show($lang['this_is_a_required_field']);?>")
        }
        if (!email.value.match(/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,5})+$/g)) {
            s_email_warn.push("<?php echo s_show($lang['email_regex']);?>")
        }

        //subject ucun error mueyyen edirik
        if (subject.value === '' || subject.value == null) {
            s_subject_warn.push("<?php echo s_show($lang['this_is_a_required_field']);?>")
        }
        if (subject.value.length < 6 || subject.value.length > 26) {
            s_subject_warn.push("<?php echo s_show($lang['min_6_26_char']);?>")
        }


        //message ucun error mueyyen edirik
        if (message.value === '' || message.value == null) {
            s_message_warn.push("<?php echo s_show($lang['this_is_a_required_field']);?>")
        }
        if (message.value.length < 20 || message.value.length > 499) {
            s_message_warn.push("<?php echo s_show($lang['min_20_499_char']);?>")
        }
        if (message.value.match(/[^a-zA-Z0-9!@#%()*\-=+\/\\üöğİı?,.`";'əçş]+/g)) {
            s_message_warn.push("<?php echo s_show($lang['suspicious_regex']);?>")
        }

        //captcha ucun error mueyyen edirik
        if (captcha.value === '' || captcha.value == null) {
            s_captcha_warn.push("<?php echo s_show($lang['this_is_a_required_field']);?>")
        }

        //error varsa
        if (s_name_warn.length > 0 || s_email_warn.length > 0 || s_subject_warn.length > 0 || s_message_warn.length > 0 || s_captcha_warn.length > 0) {
            e.preventDefault();
            name_warn.innerHTML = s_name_warn.join('<br> ');
            email_warn.innerHTML= s_email_warn.join('<br> ');
            subject_warn.innerHTML= s_subject_warn.join('<br> ');
            message_warn.innerHTML= s_message_warn.join('<br> ');
            captcha_warn.innerHTML= s_captcha_warn.join('<br> ');
        }
    });
</script>

<script>
    function text_counter() {
        var len = 499-document.getElementById('message_area').value.length;
        document.getElementById('s_c_p_message_text_counter').innerHTML=len;
        if (len<10)
        {
            document.getElementById('s_c_p_message_text_counter').style.color='red';
            document.getElementById('s_c_p_message_text_counter').style.fontWeight='bold';
        }

        else
        {
            document.getElementById('s_c_p_message_text_counter').style.color='#103F6E';
            document.getElementById('s_c_p_message_text_counter').style.fontWeight='normal';
        }
    }
</script>



</body>
</html>




