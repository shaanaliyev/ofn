<?php require_once 's-lang/DIR_lang.php';?>
<!DOCTYPE html>
<html lang="az">
<head>
    <title>InValer</title>
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
    <!-- Owl    -->
    <link rel="stylesheet" href="3rd-party-includes/Owl/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="3rd-party-includes/Owl/dist/assets/owl.theme.default.min.css">
</head>
<body>
<!--HEADER-->
<?php
require_once 'header.php';
?>
<!--HEADER SONU-->
<!--scrol top-->
<button id="s-back-to-top-btn"><i class="fa fa-arrow-up fa-lg"></i></button>
<!--MAIN BODY-->
<div style="background: #FFFFFF" class="s-maincontent">
    <!--    Main Cat Slider-->
    <div class="owl-carousel s_main_category_slide">
        <div class="s_cat_1">
            <div class="row">
                <div class="s_cat_text s_sc-lg-7 s_sc-md-6 s_sc-sm-12 s_sc-xs-12">
                    <div class="s_cat_tag_area"><x>The Tag</x></div>
                    <div class="s_cat_header_area"><p class="s_cat_header">Yeni Telefonlar</p></div>
                    <div class="s_cat_desc_area"><p class="s_cat_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem et nemo!</p></div>
                    <div class="s_cat_go_area"><a href=""><?php echo s_show($lang['discover']);?> <i class="fa fa-paper-plane"></i></a></div>
                </div>
                <div class="s_cat_img s_sc-lg-5 s_sc-md-6 s_sc-sm-12 s_sc-xs-12">
                    <img src="<?php echo s_img_enc_base64('s-main-p/mainpage-slide/phone.png');?>" alt="">
                </div>
            </div>
        </div>
        <div class="s_cat_2">
            <div class="row">
                <div class="s_cat_text s_sc-lg-7 s_sc-md-6 s_sc-sm-12 s_sc-xs-12">
                    <div class="s_cat_tag_area"><x>The Tag</x></div>
                    <div class="s_cat_header_area"><p class="s_cat_header">Yeni Telefonlar</p></div>
                    <div class="s_cat_desc_area"><p class="s_cat_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem et nemo!</p></div>
                    <div class="s_cat_go_area"><a href=""><?php echo s_show($lang['discover']);?> <i class="fa fa-paper-plane"></i></a></div>
                </div>
                <div class="s_cat_img s_sc-lg-5 s_sc-md-6 s_sc-sm-12 s_sc-xs-12">
                    <img src="<?php echo s_img_enc_base64('s-main-p/mainpage-slide/watch.png');?>" alt="">
                </div>
            </div>
        </div>
        <div class="s_cat_3">
            <div class="row">
                <div class="s_cat_text s_sc-lg-7 s_sc-md-6 s_sc-sm-12 s_sc-xs-12">
                    <div class="s_cat_tag_area"><x>The Tag</x></div>
                    <div class="s_cat_header_area"><p class="s_cat_header">Yeni Telefonlar</p></div>
                    <div class="s_cat_desc_area"><p class="s_cat_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem et nemo!</p></div>
                    <div class="s_cat_go_area"><a href=""><?php echo s_show($lang['discover']);?> <i class="fa fa-paper-plane"></i></a></div>
                </div>
                <div class="s_cat_img s_sc-lg-5 s_sc-md-6 s_sc-sm-12 s_sc-xs-12">
                    <img src="<?php echo s_img_enc_base64('s-main-p/mainpage-slide/tablet.png');?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--    Marka Slider-->
    <div class="owl-carousel s_main_brand_slide">
        <div>
            <a href="#samsung"><img src="<?php echo s_img_enc_base64('s-main-p/brands/samsung.png');?>" alt=""></a>
        </div>
        <div>
            <a href="#samsung"><img src="<?php echo s_img_enc_base64('s-main-p/brands/huawei.png');?>" alt=""></a>
        </div>
        <div>
            <a href="#xiaomi"><img src="<?php echo s_img_enc_base64('s-main-p/brands/xiaomi.png');?>" alt=""></a>
        </div>
        <div>
            <a href=""><img src="<?php echo s_img_enc_base64('s-main-p/brands/fly.png');?>" alt=""></a>
        </div>
        <div>
            <a href=""><img src="<?php echo s_img_enc_base64('s-main-p/brands/nokia.png');?>" alt=""></a>
        </div>
        <div>
            <a href=""><img src="<?php echo s_img_enc_base64('s-main-p/brands/iphone.png');?>" alt=""></a>
        </div>
        <div>
            <a href=""><img src="<?php echo s_img_enc_base64('s-main-p/brands/xiaomi.png');?>" alt=""></a>
        </div>
        <div>
            <a href=""><img src="<?php echo s_img_enc_base64('s-main-p/brands/sony.png');?>" alt=""></a>
        </div>
    </div>
    <!--  xidmetler qısa  -->
    <div class="s_services_show_area">
        <div class="owl-carousel s_services_show_label">
            <div class="s_services_show_element">
                <a href="sh">
                    <div class="s_services_show_element_img"><img src="<?php echo s_img_enc_base64('s-main-p/services/competition.svg',1);?>" alt=""></div>
                    <div class="s_services_show_element_content">
                        <h3><?php echo s_show($lang['widechoiceopportunity']);?></h3>
                    </div>
                </a>
            </div>
            <div class="s_services_show_element">
                <a href="">
                    <div class="s_services_show_element_img"><img src="<?php echo s_img_enc_base64('s-main-p/services/delivery.svg',1);?>" alt=""></div>
                    <div class="s_services_show_element_content">
                        <h3><?php echo s_show($lang['homedelivery']);?></h3>
                    </div>
                </a>
            </div>
            <div class="s_services_show_element">
                <a href="">
                    <div class="s_services_show_element_img"><img src="<?php echo s_img_enc_base64('s-main-p/services/edit-order.svg',1);?>" alt=""></div>
                    <div class="s_services_show_element_content">
                        <h3><?php echo s_show($lang['orderprivatizationopportunity']);?></h3>
                    </div>
                </a>
            </div>
            <div class="s_services_show_element">
                <a href="">
                    <div class="s_services_show_element_img"><img src="<?php echo s_img_enc_base64('s-main-p/services/payment.svg',1);?>" alt=""></div>
                    <div class="s_services_show_element_content">
                        <h3><?php echo s_show($lang['securepayment']);?></h3>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!--    Trendlər-->
    <div class="s_main_trend_area">
        <div class="s_main_trend_tittle"><?php echo s_show($lang['trends']);?></div>
        <div class="s_main_trend_control_left">
            <x class="s_items_prev"><i class="fa fa-chevron-left fa-lg"></i></x>
        </div>
        <div class="s_main_trend_control_right">
            <x class="s_items_next"><i class="fa fa-chevron-right fa-lg"></i></x>
        </div>
        <div class="owl-carousel s_items">

            <div class="s_items_element">
                <div class="s_item_img">
                    <img src="<?php echo s_img_enc_base64('s-items/00.jpg');?>" alt="">
                    <div class="s_item_more_info">
                        <div><a href=""><?php echo s_show($lang['seedetails']);?></a></div>
                        <div class="s_i_m_i">2/32/299</div>
                    </div>
                    <div class="s_item_from_store"><a href="">Shaan InValer</a></div>
                    <div class="s_i_trending_icon_area"><div class="s_i_trending_icon"><i class="fa fa-fire"></i> <?php echo s_show($lang['trending']);?></div></div>
                    <div class="s_i_sale_icon_area"><div class="s_i_sale_icon"><i class="fa fa-percent"></i> <?php echo s_show($lang['sale']);?></div></div>
                </div>
                <div class="s_item_info">
                    <div class="s_item_model_name"><a href="">S20 Ultra 2020 Edge</a></div>
                    <div class="s_item_brand_name"><a href="">Samsung</a></div>
                    <div class="s_item_price">299<x>&#8380;</x></div>
                </div>
            </div>

            <div class="s_items_element">
                <div class="s_item_img">
                    <img src="<?php echo s_img_enc_base64('s-items/00.jpg');?>" alt="">
                    <div class="s_item_more_info">
                        <div><a href=""><?php echo s_show($lang['seedetails']);?></a></div>
                        <div class="s_i_m_i">2/32/299</div>
                    </div>
                    <div class="s_item_from_store"><a href="">Shaan InValer</a></div>
                    <div class="s_i_trending_icon_area"><div class="s_i_trending_icon"><i class="fa fa-fire"></i> <?php echo s_show($lang['trending']);?></div></div>
                    <div class="s_i_sale_icon_area"><div class="s_i_sale_icon"><i class="fa fa-percent"></i> <?php echo s_show($lang['sale']);?></div></div>
                </div>
                <div class="s_item_info">
                    <div class="s_item_model_name"><a href="">S20 Ultra 2020 Edge</a></div>
                    <div class="s_item_brand_name"><a href="">Samsung</a></div>
                    <div class="s_item_price">299<x>&#8380;</x></div>
                </div>
            </div>

            <div class="s_items_element">
                <div class="s_item_img">
                    <img src="<?php echo s_img_enc_base64('s-items/00.jpg');?>" alt="">
                    <div class="s_item_more_info">
                        <div><a href=""><?php echo s_show($lang['seedetails']);?></a></div>
                        <div class="s_i_m_i">2/32/299</div>
                    </div>
                    <div class="s_item_from_store"><a href="">Shaan InValer</a></div>
                    <div class="s_i_trending_icon_area"><div class="s_i_trending_icon"><i class="fa fa-fire"></i> <?php echo s_show($lang['trending']);?></div></div>
                    <div class="s_i_sale_icon_area"><div class="s_i_sale_icon"><i class="fa fa-percent"></i> <?php echo s_show($lang['sale']);?></div></div>
                </div>
                <div class="s_item_info">
                    <div class="s_item_model_name"><a href="">S20 Ultra 2020 Edge</a></div>
                    <div class="s_item_brand_name"><a href="">Samsung</a></div>
                    <div class="s_item_price">299<x>&#8380;</x></div>
                </div>
            </div>

            <div class="s_items_element">
                <div class="s_item_img">
                    <img src="<?php echo s_img_enc_base64('s-items/00.jpg');?>" alt="">
                    <div class="s_item_more_info">
                        <div><a href=""><?php echo s_show($lang['seedetails']);?></a></div>
                        <div class="s_i_m_i">2/32/299</div>
                    </div>
                    <div class="s_item_from_store"><a href="">Shaan InValer</a></div>
                    <div class="s_i_trending_icon_area"><div class="s_i_trending_icon"><i class="fa fa-fire"></i> <?php echo s_show($lang['trending']);?></div></div>
                    <div class="s_i_sale_icon_area"><div class="s_i_sale_icon"><i class="fa fa-percent"></i> <?php echo s_show($lang['sale']);?></div></div>
                </div>
                <div class="s_item_info">
                    <div class="s_item_model_name"><a href="">S20 Ultra 2020 Edge</a></div>
                    <div class="s_item_brand_name"><a href="">Samsung</a></div>
                    <div class="s_item_price">299<x>&#8380;</x></div>
                </div>
            </div>

            <div class="s_items_element">
                <div class="s_item_img">
                    <img src="<?php echo s_img_enc_base64('s-items/00.jpg');?>" alt="">
                    <div class="s_item_more_info">
                        <div><a href=""><?php echo s_show($lang['seedetails']);?></a></div>
                        <div class="s_i_m_i">2/32/299</div>
                    </div>
                    <div class="s_item_from_store"><a href="">Shaan InValer</a></div>
                    <div class="s_i_trending_icon_area"><div class="s_i_trending_icon"><i class="fa fa-fire"></i> <?php echo s_show($lang['trending']);?></div></div>
                    <div class="s_i_sale_icon_area"><div class="s_i_sale_icon"><i class="fa fa-percent"></i> <?php echo s_show($lang['sale']);?></div></div>
                </div>
                <div class="s_item_info">
                    <div class="s_item_model_name"><a href="">S20 Ultra 2020 Edge</a></div>
                    <div class="s_item_brand_name"><a href="">Samsung</a></div>
                    <div class="s_item_price">299<x>&#8380;</x></div>
                </div>
            </div>

        </div>
    </div>


<!--    Special offers-->
    <div class="s_white_to_spec"></div>
    <div class="s_special_offers_area">
        <!--        <div  class="s_main_titles">--><?php //echo s_show($lang['specialoffers']);?><!--</div>-->
        <div id="s_for_fixed_special" class="s_p_con">


            <div class="s_ice_tittle"><?php echo s_show($lang['featuredproducts']);?><x onclick="featured_oc()"><i id="s_featured_oc_arrow" class="fa fa-arrow-down"></i></x></div>
            <div id="s_ice_tittle" class="s_ice_tittle_fixed"><?php echo s_show($lang['featuredproducts']);?></div>
            <div id="s_featured_area" class="row">

                <div class="s_sc-xl-4 s_sc-lg-6 s_sc-md-6 s_sc-sm-6 s_sc-xs-12">

                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
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


                <div class="s_sc-xl-4 s_sc-lg-6 s_sc-md-6 s_sc-sm-6 s_sc-xs-12">
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
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
                <div class="s_sc-xl-4 s_sc-lg-6 s_sc-md-6 s_sc-sm-6 s_sc-xs-12">
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
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
                <div class="s_sc-xl-4 s_sc-lg-6 s_sc-md-6 s_sc-sm-6 s_sc-xs-12">
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
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
                <div class="s_sc-xl-4 s_sc-lg-6 s_sc-md-6 s_sc-sm-6 s_sc-xs-12">
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
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
                <div class="s_sc-xl-4 s_sc-lg-6 s_sc-md-6 s_sc-sm-6 s_sc-xs-12">
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s_special_single">
                        <div class="s_spec_item">
                            <div class="row">
                                <div class="s_sc-lg-4 s_sc-md-5 s_sc-sm-12 s_sc-xs-12">
                                    <a href=""><img class="s_spec_img" src="s-items/00.jpg" alt=""></a>
                                </div>
                                <div class="s_sc-lg-8 s_sc-md-7 s_sc-sm-12 s_sc-xs-12">
                                    <div class="s_spec_item_info">
                                        <div class="s_spec_i_top">
                                            <div class="s_spec_i_t"><x>1599 <x2>₼</x2></x>
                                                <div title="Galaxy S20 Ultra 2020" class="s_spec_i_model"><a href="#">Galaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 GaGalaxy S20 Ultra 2020 Ga</a></div>
                                                <div class="s_spec_i_brand"><a href="">Samsung</a></div>
                                            </div>
                                        </div><!--<div class="s_spec_i_sub_info">2/64/699AZN</div>-->
                                        <div class="s_line s_spec_i_line"></div>
                                        <div class="s_spec_i_bot">
                                            <div class="s_spec_i_b">
                                                <div class="s_spec_i_store_area">
                                                    <div class="s_spec_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                        <div class="s_spec_i_store_name">
                                                            <a href="">sss sss sss sss sss sss s</a></div>
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




        </div>
    </div>
    <div id="s_for_fixed_specialt_end" class="s_spec_to_white"></div>

    <!--    One cixan mehsullar  featured products-->
    <div class="s_main_featured_products">
        <div class="g_item_area">
            <div class="g_item_area_space">
                <div class="s_g_i_tittle"><?php echo s_show($lang['specialoffers']);?></div>
                <div class="row">


                    <div class="g_item s_sc-xl-3 s_sc-lg-4 s_sc-md-6 s_sc-sm-6 s_sc-xs-12">
                        <div class="s_i_element">
                            <div class="g_item_img">
                                <a href=""><img src="<?php echo s_img_enc_base64('s-items/00.jpg');?>" alt=""></a>
                                <div class="g_item_from_store"><a href="$haan">Shaan InValer</a></div>
                                <div class="g_item_trending_icon_area"><div class="g_item_trending_icon"><?php echo s_show($lang['trending']);?> <i class="fa fa-fire"></i></div></div>
                                <div class="g_item_sale_icon_area"><div class="g_item_sale_icon"><?php echo s_show($lang['sale']);?> <i class="fa fa-percent"></i></div></div>
                            </div>
                            <div class="g_item_info">
                                <div class="g_item_model_name"><a href="">S20 Ultra</a></div>
                                <div class="g_item_brand_name"><a href="">Samsung</a></div>
                                <div class="g_item_price">299<x>&#8380;</x></div>
                            </div>
                        </div>
                    </div>

                    <div class="g_item s_sc-xl-3 s_sc-lg-4 s_sc-md-6 s_sc-sm-6 s_sc-xs-12">
                        <div class="s_i_element">
                            <div class="g_item_img">
                                <a href=""><img src="<?php echo s_img_enc_base64('s-items/00.jpg');?>" alt=""></a>
                                <div class="g_item_from_store"><a href="$haan">Shaan InValer</a></div>
                                <div class="g_item_trending_icon_area"><div class="g_item_trending_icon"><?php echo s_show($lang['trending']);?> <i class="fa fa-fire"></i></div></div>
                                <div class="g_item_sale_icon_area"><div class="g_item_sale_icon"><?php echo s_show($lang['sale']);?> <i class="fa fa-percent"></i></div></div>
                            </div>
                            <div class="g_item_info">
                                <div class="g_item_model_name"><a href="">S20 Ultra</a></div>
                                <div class="g_item_brand_name"><a href="">Samsung</a></div>
                                <div class="g_item_price">299<x>&#8380;</x></div>
                            </div>
                        </div>
                    </div>

                    <div class="g_item s_sc-xl-3 s_sc-lg-4 s_sc-md-6 s_sc-sm-6 s_sc-xs-12">
                        <div class="s_i_element">
                            <div class="g_item_img">
                                <a href=""><img src="<?php echo s_img_enc_base64('s-items/00.jpg');?>" alt=""></a>
                                <div class="g_item_from_store"><a href="$haan">Shaan InValer</a></div>
                                <div class="g_item_trending_icon_area"><div class="g_item_trending_icon"><?php echo s_show($lang['trending']);?> <i class="fa fa-fire"></i></div></div>
                                <div class="g_item_sale_icon_area"><div class="g_item_sale_icon"><?php echo s_show($lang['sale']);?> <i class="fa fa-percent"></i></div></div>
                            </div>
                            <div class="g_item_info">
                                <div class="g_item_model_name"><a href="">S20 Ultra</a></div>
                                <div class="g_item_brand_name"><a href="">Samsung</a></div>
                                <div class="g_item_price">299<x>&#8380;</x></div>
                            </div>
                        </div>
                    </div>

                    <div class="g_item s_sc-xl-3 s_sc-lg-4 s_sc-md-6 s_sc-sm-6 s_sc-xs-12">
                        <div class="s_i_element">
                            <div class="g_item_img">
                                <a href=""><img src="<?php echo s_img_enc_base64('s-items/00.jpg');?>" alt=""></a>
                                <div class="g_item_from_store"><a href="$haan">Shaan InValer</a></div>
                                <div class="g_item_trending_icon_area"><div class="g_item_trending_icon"><?php echo s_show($lang['trending']);?> <i class="fa fa-fire"></i></div></div>
                                <div class="g_item_sale_icon_area"><div class="g_item_sale_icon"><?php echo s_show($lang['sale']);?> <i class="fa fa-percent"></i></div></div>
                            </div>
                            <div class="g_item_info">
                                <div class="g_item_model_name"><a href="">S20 Ultra</a></div>
                                <div class="g_item_brand_name"><a href="">Samsung</a></div>
                                <div class="g_item_price">299<x>&#8380;</x></div>
                            </div>
                        </div>
                    </div>

                    <div class="g_item s_sc-xl-3 s_sc-lg-4 s_sc-md-6 s_sc-sm-6 s_sc-xs-12">
                        <div class="s_i_element">
                            <div class="g_item_img">
                                <a href=""><img src="<?php echo s_img_enc_base64('s-items/00.jpg');?>" alt=""></a>
                                <div class="g_item_from_store"><a href="$haan">Shaan InValer</a></div>
                                <div class="g_item_trending_icon_area"><div class="g_item_trending_icon"><?php echo s_show($lang['trending']);?> <i class="fa fa-fire"></i></div></div>
                                <div class="g_item_sale_icon_area"><div class="g_item_sale_icon"><?php echo s_show($lang['sale']);?> <i class="fa fa-percent"></i></div></div>
                            </div>
                            <div class="g_item_info">
                                <div class="g_item_model_name"><a href="">S20 Ultra</a></div>
                                <div class="g_item_brand_name"><a href="">Samsung</a></div>
                                <div class="g_item_price">299<x>&#8380;</x></div>
                            </div>
                        </div>
                    </div>

                    <div class="g_item s_sc-xl-3 s_sc-lg-4 s_sc-md-6 s_sc-sm-6 s_sc-xs-12">
                        <div class="s_i_element">
                            <div class="g_item_img">
                                <a href=""><img src="<?php echo s_img_enc_base64('s-items/00.jpg');?>" alt=""></a>
                                <div class="g_item_from_store"><a href="$haan">Shaan InValer</a></div>
                                <div class="g_item_trending_icon_area"><div class="g_item_trending_icon"><?php echo s_show($lang['trending']);?> <i class="fa fa-fire"></i></div></div>
                                <div class="g_item_sale_icon_area"><div class="g_item_sale_icon"><?php echo s_show($lang['sale']);?> <i class="fa fa-percent"></i></div></div>
                            </div>
                            <div class="g_item_info">
                                <div class="g_item_model_name"><a href="">S20 Ultra</a></div>
                                <div class="g_item_brand_name"><a href="">Samsung</a></div>
                                <div class="g_item_price">299<x>&#8380;</x></div>
                            </div>
                        </div>
                    </div>

                    <div class="g_item s_sc-xl-3 s_sc-lg-4 s_sc-md-6 s_sc-sm-6 s_sc-xs-12">
                        <div class="s_i_element">
                            <div class="g_item_img">
                                <a href=""><img src="<?php echo s_img_enc_base64('s-items/00.jpg');?>" alt=""></a>
                                <div class="g_item_from_store"><a href="$haan">Shaan InValer</a></div>
                                <div class="g_item_trending_icon_area"><div class="g_item_trending_icon"><?php echo s_show($lang['trending']);?> <i class="fa fa-fire"></i></div></div>
                                <div class="g_item_sale_icon_area"><div class="g_item_sale_icon"><?php echo s_show($lang['sale']);?> <i class="fa fa-percent"></i></div></div>
                            </div>
                            <div class="g_item_info">
                                <div class="g_item_model_name"><a href="">S20 Ultra</a></div>
                                <div class="g_item_brand_name"><a href="">Samsung</a></div>
                                <div class="g_item_price">299<x>&#8380;</x></div>
                            </div>
                        </div>
                    </div>

                    <div class="g_item s_sc-xl-3 s_sc-lg-4 s_sc-md-6 s_sc-sm-6 s_sc-xs-12">
                        <div class="s_i_element">
                            <div class="g_item_img">
                                <a href=""><img src="<?php echo s_img_enc_base64('s-items/00.jpg');?>" alt=""></a>
                                <div class="g_item_from_store"><a href="$haan">Shaan InValer</a></div>
                                <div class="g_item_trending_icon_area"><div class="g_item_trending_icon"><?php echo s_show($lang['trending']);?> <i class="fa fa-fire"></i></div></div>
                                <div class="g_item_sale_icon_area"><div class="g_item_sale_icon"><?php echo s_show($lang['sale']);?> <i class="fa fa-percent"></i></div></div>
                            </div>
                            <div class="g_item_info">
                                <div class="g_item_model_name"><a href="">S20 Ultra</a></div>
                                <div class="g_item_brand_name"><a href="">Samsung</a></div>
                                <div class="g_item_price">299<x>&#8380;</x></div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="s_see_all_btn_area s_center"><a href=""><div class="s_see_all_btn"><?php echo s_show($lang['seeall']);?><i class="fa fa-arrow-right"></i></div></a></div>

            </div>
        </div>
    </div>

    <!--     Main Bottom area-->
    <div class="s_m_b_area">
        <div class="s_m_b_area_header">
            <img src="s-main-p/logo.svg" alt=""> . com
        </div>


    </div>
</div>







<!---  Middle Menu-->
<!--    <div class="s_main_middle_area">-->
<!--        <div class="s_main_middle s_b_container">-->
<!--            <div class="s_main_middle_header">Önə Çıxanlar</div>-->
<!--            <div class="s_main_middle_content">-->
<!--                <div class="s_main_middle_content_item">-->
<!--                    <button class="s_main_middle_content_item_btn">Dropdown-->
<!--                        <i class="fa fa-caret-down"></i>-->
<!--                    </button>-->
<!--                    <div class="s_main_middle_content_item_content">-->
<!--                        <a href="#">Link 1</a>-->
<!--                        <a href="#">Link 2</a>-->
<!--                        <a href="#">Link 3</a>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

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
<script type="text/javascript" src="s-main-scripts/js/owl_mainpage.js"></script>
<!--Reaload page 750.1 px < > -->
<script>
    var ww = $(window).width();
    var limit = 750.1;

    function refresh() {
        ww = $(window).width();
        var w =  ww<limit ? (location.reload(true)) :  ( ww>limit ? (location.reload(true)) : ww=limit );
    }
    var tOut;
    $(window).resize(function() {
        var resW = $(window).width();
        clearTimeout(tOut);
        if ( (ww>limit && resW<limit) || (ww<limit && resW>limit) ) {
            tOut = setTimeout(refresh, 1);
        }
    });

    <!--Auto go top when page load-->
    window.onbeforeunload = function () {
        window.scrollTo(0, 0);
    }

    function featured_oc() {
        document.getElementById('s_featured_oc_arrow').classList.toggle('fa-arrow-down');
        document.getElementById('s_featured_oc_arrow').classList.toggle('fa-arrow-up');
        document.getElementById('s_featured_area').classList.toggle('s-hide');
    }

    window.onscroll = function() {
        s_scroll_element_fixed('s_for_fixed_special','s_ice_tittle',-60,'s_featured_area','s-hide','s_fixed','s_for_fixed_specialt_end',400);
    }
</script>
</body>
</html>




