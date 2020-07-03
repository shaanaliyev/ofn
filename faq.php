<?php require_once 's-lang/DIR_lang.php';?>
<!DOCTYPE html>
<html lang="az">
<head>
    <title><?php echo s_show($lang['faq']);?> | InValer</title>
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
</head>
<body>
<!--HEADER-->
<?php require_once 'header.php';?>
<!--HEADER SONU-->
<!--scrol top-->
<button id="s-back-to-top-btn"><i class="fas fa-angle-double-up fa-lg"></i></button>
<!--MAIN BODY-->
<div style="background: #F2F2F2" class="s-maincontent">
    <div id="s_faq_page_head" class="s_faq_page_head" style="background: url('<?php echo s_img_enc_base64('s-main-p/bg/faq.png');?>') no-repeat center; background-size: 100% auto;">
        <div><?php echo s_show($lang['faq']);?></div>
        <div><?php echo s_show($lang['faq_info']);?></div>
    </div>
    <div class="s_p_con">
        <div class="s_faq_page_top_info">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. At e
            xpedita iste officia pariatur quas? A atque consectetur dolorem
            eligendi harum illum incidunt inventore ipsa minima necessitatibus
            , nihil quis tenetur voluptates.
        </div>
        <div class="row">
            <div class="s_sc-xl-3 s_sc-lg-3 s_sc-md-4 s_sc-sm-12 s_sc-xs-12">
                <div class="s_faq_page_side_category_area">
                    <div class="s_faq_page_side_category_head">
                        <?php echo s_show($lang['topics']);?>
                    </div>
                    <div class="s_faq_page_side_category">
                        <div class="s_faq_page_top_category_element"><i class="fa fa-money-check-alt fa-lg"></i><div>Ödəniş</div></div>
                        <div class="s_faq_page_top_category_element"><i class="fa fa-shipping-fast fa-lg"></i><div>Çatdırlıma</div></div>
                        <div class="s_faq_page_top_category_element"><i class="fa fa-tags fa-lg"></i><div>ssss</div></div>
                        <div class="s_faq_page_top_category_element"><i class="fa fa-gift fa-lg"></i><div>ssss</div></div>
                    </div>
                </div>
            </div>
            <div class="s_sc-xl-9 s_sc-lg-9 s_sc-md-8 s_sc-sm-12 s_sc-xs-12">
                <div class="s_faq_page_main_content_area">
                    <div class="s_faq_page_main_content_head">
                        <?php echo s_show($lang['explanations']);?>
                    </div>
                    <div class="s_faq_page_main_content">

                        <div class="s_faq_page_topics"># Ödəniş
                            <div class="s_faq_page_q_area">
                                <div><?php echo s_show($lang['q_?']);?></div>
                                <div>
                                    Lorem ipsum dolor sit amet, co
                                    <div class="s_faq_page_a_area">
                                        <div><?php echo s_show($lang['a_?']);?></div>
                                        <div>Lorem ipsum dolor sit amet, consecte
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="s_faq_page_q_area">
                                <div><?php echo s_show($lang['q_?']);?></div>
                                <div>
                                    Lorem ipsum dolor sit amet, co
                                    <div class="s_faq_page_a_area">
                                        <div><?php echo s_show($lang['a_?']);?></div>
                                        <div>Lorem ipsum dolor sit amet, consecte
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="s_faq_page_q_area">
                                <div><?php echo s_show($lang['q_?']);?></div>
                                <div>
                                    Lorem ipsum dolor sit amet, co
                                    <div class="s_faq_page_a_area">
                                        <div><?php echo s_show($lang['a_?']);?></div>
                                        <div>Lorem ipsum dolor sit amet, consecte
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="s_faq_page_topics"># Çatdırılma
                            <div class="s_faq_page_q_area">
                                <div><?php echo s_show($lang['q_?']);?></div>
                                <div>
                                    Lorem ipsum dolor sit amet, co
                                    <div class="s_faq_page_a_area">
                                        <div><?php echo s_show($lang['a_?']);?></div>
                                        <div>Lorem ipsum dolor sit amet, consecte
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="s_faq_page_q_area">
                                <div><?php echo s_show($lang['q_?']);?></div>
                                <div>
                                    Lorem ipsum dolor sit amet, co
                                    <div class="s_faq_page_a_area">
                                        <div><?php echo s_show($lang['a_?']);?></div>
                                        <div>Lorem ipsum dolor sit amet, consecte
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="s_faq_page_q_area">
                                <div><?php echo s_show($lang['q_?']);?></div>
                                <div>
                                    Lorem ipsum dolor sit amet, co
                                    <div class="s_faq_page_a_area">
                                        <div><?php echo s_show($lang['a_?']);?></div>
                                        <div>Lorem ipsum dolor sit amet, consecte
                                        </div>
                                    </div>
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
<!-- Main Js kodlarim -->
<script src="s-main-scripts/js/main.js" type="text/javascript"></script>
<!--Jquery-->
<script src="3rd-party-includes/jquery/jquery.js" type="text/javascript"></script>
<!--Header Bg size deyisdirmek ekran olculerine gore-->
<script>
    var s_cur = $(window).width();
    var s_limit = 1572;
    if (s_cur<=s_limit){
        document.getElementById('s_faq_page_head').style.backgroundSize='auto auto';
    }
    $(window).resize(function() {
        var s_new = $(window).width();
        if (s_new<=s_limit){
            document.getElementById('s_faq_page_head').style.backgroundSize='auto auto';
        }else {
            document.getElementById('s_faq_page_head').style.backgroundSize='100% auto';
        }
    });
</script>




</body>
</html>




