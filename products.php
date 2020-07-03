<?php require_once 's-lang/DIR_lang.php';?>
<!DOCTYPE html>
<html lang="az">
<head>
    <title><?php echo s_show($lang['products']);?> | InValer</title>
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
    <!--  Select  -->
    <link rel="stylesheet" href="3rd-party-includes/select/select.css">
    <!--  Range Selector  -->
    <link rel="stylesheet" href="3rd-party-includes/range-selector/range_select.css">
</head>
<body>
<!--HEADER-->
<?php require_once 'header.php';?>
<!--HEADER SONU-->
<!--scrol top-->
<button id="s-back-to-top-btn"><i class="fas fa-angle-double-up fa-lg"></i></button>
<!--MAIN BODY-->
<div style="background: #F2F2F2" class="s-maincontent">

    <div class="s_p_head_go">
        <div><a href=""><?php echo s_show($lang['specialoffers']);?></a></div>
        <div><a href=""><?php echo s_show($lang['featuredproducts']);?></a></div>
        <div><a href=""><?php echo s_show($lang['trends']);?></a></div>
    </div>
    <div class="s_p_con">
        <div class="s_p_title">
            test test test
            <img src="<?php echo s_img_enc_base64('s-main-p/icon.svg',1)?>" alt="invaler-icon">
        </div>
        <div class="s_p_content">

            <div class="row">
                <div class="s_sc-xl-3 s_sc-lg-4 s_sc-md-12 s_sc-sm-12 s_sc-xs-12">
                    <div class="s_p_filter_area s_shadow">

                        <form action="" method="post">
                            <div class="s_p_filter">
                                <div class="s_p_filter_title">
                                    <div onclick="s_p_filter_show()"><?php echo s_show($lang['searchfilter']);?></div>
                                    <a href=""><?php echo s_show($lang['removefilter']);?></a>
                                </div>
                                <div class="s_p_filter_info" onclick="s_p_filter_show()">
                                    Samsung Galaxy S20 Ultra / 1899 azn > 2999 azn
                                </div>
                                <div id="s_p_filter_element_area">
                                    <div class="s_p_filter_element">
                                        <div class="s_p_filter_element_header"><label for="s_category"><?php echo s_show($lang['category']);?> :</label></div>
                                        <select id="s_category">
                                            <option data-placeholder="true"></option>
                                            <option value="1">Telefonlar</option>
                                            <option value="2">Ağıllı Saatlar</option>
                                            <option value="3">Planşetlər</option>
                                            <option value="3">Planşetlər</option>
                                            <option value="3">Planşetlər</option>
                                            <option value="3">Planşetlər</option>
                                            <option value="3">Planşetlər</option>
                                            <option value="3">Planşetlər</option>
                                            <option value="3">Planşetlər</option>

                                        </select>
                                    </div>

                                    <div class="s_p_filter_element">
                                        <div class="s_p_filter_element_header"><label for="s_brand"><?php echo s_show($lang['brand']);?> :</label></div>
                                        <select id="s_brand">
                                            <option data-placeholder="true"></option>
                                            <option value="1">test  1</option>
                                            <option value="2">Valueəğğə ğəfaəığəıasfasfas</option>
                                            <option value="3">Value 3</option>
                                        </select>
                                    </div>

                                    <div class="s_p_filter_element">
                                        <div class="s_p_filter_element_header"><label for="s_model"><?php echo s_show($lang['model']);?> :</label></div>
                                        <select id="s_model">
                                            <option data-placeholder="true"></option>
                                            <option value="1">test  1</option>
                                            <option value="2">Valueəğğə ğəfaəığəıasfasfas as</option>
                                            <option value="3">Value 3</option>
                                            <option value="3">Planşetlər</option>
                                            <option value="3">Planşetlər</option>
                                            <option value="3">Planşetlər</option>
                                            <option value="3">Planşetlər</option>
                                            <option value="3">Planşetlər</option>
                                            <option value="3">Planşetlər</option>
                                            <option value="3">Planşetlər</option>
                                            <option value="3">Planşetlər</option>
                                            <option value="3">Planşetlər</option>
                                            <option value="3">Planşetlər</option>
                                            <option value="3">Planşetlər</option>
                                            <option value="3">Planşetlər</option>
                                        </select>
                                    </div>

                                    <div class="s_p_filter_element">
                                        <div class="s_p_filter_element_header">
                                            <label for="s_model"><?php echo s_show($lang['price']);?> :</label>
                                        </div>
                                        <div class="s_p_filter_element_price">
                                            <div id="s_price"></div>
                                            <div class="s_price_inputs">
                                                <label for="s_price_min"></label><input id="s_price_min" type="number">
                                                <label for="s_price_max"></label><input id="s_price_max" type="number">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="s_p_filter_element">
                                        <div class="s_p_filter_submit">
                                            <button type="submit"><?php echo s_show($lang['search']);?></button>
                                        </div>
                                    </div>

                                </div>
                                <div onclick="s_p_filter_show()" class="s_p_close"><i id="s_p_filter_show_btn" class="fa fa-angle-up fa-lg s_color_1a"></i></div>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="s_sc-xl-9 s_sc-lg-8 s_sc-md-12 s_sc-sm-12 s_sc-xs-12">

                    <div class="s_p_right_area">
                        <div class="s_p_slide_area">
                            <div class="owl-carousel s_p_slide">
                                <div><a href=""><img src="<?php echo s_img_enc_base64('s-main-p/products-page-slide/umi.png',1);?>" alt=""></a></div>
                                <div><a href=""><img src="<?php echo s_img_enc_base64('s-main-p/products-page-slide/test.png',1);?>" alt=""></a></div>
                                <div><a href=""><img src="<?php echo s_img_enc_base64('s-main-p/products-page-slide/umi.png',1);?>" alt=""></a></div>
                                <div><a href=""><img src="<?php echo s_img_enc_base64('s-main-p/products-page-slide/test.png',1);?>" alt=""></a></div>
                            </div>
                        </div>

                        <div class="s_w_item_area">
                            <div class="s_w_item_area_view">
                                    <x>s</x>
                                <div>
                                    <a class="s_w_item_area_view_active" href="products"><i class="fa fa-grip-lines"></i></a>
                                    <a class="s_w_item_area_view_deactive" href="products-s"><i class="fa fa-grip-vertical"></i></a>
                                </div>
                            </div>

                            <div class="s_w_item">
                                <div class="row">
                                    <div class="s_sc-xl-3 s_sc-lg-4 s_sc-md-5 s_sc-sm-5 s_sc-xs-12">
                                        <img class="s_w_img" src="s-items/00.jpg" alt="">
                                    </div>
                                    <div class="s_sc-xl-9 s_sc-lg-8 s_sc-md-7 s_sc-sm-7 s_sc-xs-12">
                                        <div class="s_w_item_info">
                                            <div class="s_w_i_top">
                                                <div class="s_w_i_t"><x>1599 <x2>₼</x2></x>
                                                    <div title="Galaxy S20 Ultra 2020" class="s_w_i_model"><a href="#">Galaxy S20 Ulra20 UltraGalaxy S20 Ulra20 UltraGalaxy S20 Ulra20 UltraGalaxy S20 Ulra20 UltraGalaxy S20 Ulra20 UltraGalaxy S20 Ulra20 UltraGalaxy S20 Ulra20 UltraGalaxy S20 Ulra20 UltraGalaxy S20 Ulra20 UltraGalaxy S20 Ulra20 UltraGalaxy S20 Ulra20 Ultra</a></div>
                                                    <div class="s_w_i_brand"><a href="">Samsung</a></div>
                                                </div>
                                            </div><div class="s_w_i_sub_info">2/64/699AZN</div>
                                            <div class="s_line s_w_i_line"></div>
                                            <div class="s_w_i_bot">
                                                <div class="s_w_i_b">
                                                    <div class="s_w_i_store_area">
                                                        <div class="s_w_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                            <div class="s_w_i_store_name">
                                                                <a href="">sss sss sss sss sss sss s</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="s_w_item">
                                <div class="row">
                                    <div class="s_sc-xl-3 s_sc-lg-4 s_sc-md-5 s_sc-sm-5 s_sc-xs-12">
                                        <img class="s_w_img" src="s-items/00.jpg" alt="">
                                    </div>
                                    <div class="s_sc-xl-9 s_sc-lg-8 s_sc-md-7 s_sc-sm-7 s_sc-xs-12">
                                        <div class="s_w_item_info">
                                            <div class="s_w_i_top">
                                                <div class="s_w_i_t"><x>1599 <x2>₼</x2></x>
                                                    <div title="Galaxy S20 Ultra 2020" class="s_w_i_model"><a href="#">Galaxy S20 Ulra20 Ultra</a></div>
                                                    <div class="s_w_i_brand"><a href="">Samsung</a></div>
                                                </div>
                                            </div><div class="s_w_i_sub_info">2/64/699AZN</div>
                                            <div class="s_line s_w_i_line"></div>
                                            <div class="s_w_i_bot">
                                                <div class="s_w_i_b">
                                                    <div class="s_w_i_store_area">
                                                        <div class="s_w_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                            <div class="s_w_i_store_name">
                                                                <a href="">sss sss sss sss sss sss s</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="s_w_item">
                                <div class="row">
                                    <div class="s_sc-xl-3 s_sc-lg-4 s_sc-md-5 s_sc-sm-5 s_sc-xs-12">
                                        <img class="s_w_img" src="s-items/00.jpg" alt="">
                                    </div>
                                    <div class="s_sc-xl-9 s_sc-lg-8 s_sc-md-7 s_sc-sm-7 s_sc-xs-12">
                                        <div class="s_w_item_info">
                                            <div class="s_w_i_top">
                                                <div class="s_w_i_t"><x>1599 <x2>₼</x2></x>
                                                    <div title="Galaxy S20 Ultra 2020" class="s_w_i_model"><a href="#">Galaxy S20 Ulra20 Ultra</a></div>
                                                    <div class="s_w_i_brand"><a href="">Samsung</a></div>
                                                </div>
                                            </div><div class="s_w_i_sub_info">2/64/699AZN</div>
                                            <div class="s_line s_w_i_line"></div>
                                            <div class="s_w_i_bot">
                                                <div class="s_w_i_b">
                                                    <div class="s_w_i_store_area">
                                                        <div class="s_w_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                            <div class="s_w_i_store_name">
                                                                <a href="">sss sss sss sss sss sss s</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="s_w_item">
                                <div class="row">
                                    <div class="s_sc-xl-3 s_sc-lg-4 s_sc-md-5 s_sc-sm-5 s_sc-xs-12">
                                        <img class="s_w_img" src="s-items/00.jpg" alt="">
                                    </div>
                                    <div class="s_sc-xl-9 s_sc-lg-8 s_sc-md-7 s_sc-sm-7 s_sc-xs-12">
                                        <div class="s_w_item_info">
                                            <div class="s_w_i_top">
                                                <div class="s_w_i_t"><x>1599 <x2>₼</x2></x>
                                                    <div title="Galaxy S20 Ultra 2020" class="s_w_i_model"><a href="#">Galaxy S20 Ulra20 Ultra</a></div>
                                                    <div class="s_w_i_brand"><a href="">Samsung</a></div>
                                                </div>
                                            </div><div class="s_w_i_sub_info">2/64/699AZN</div>
                                            <div class="s_line s_w_i_line"></div>
                                            <div class="s_w_i_bot">
                                                <div class="s_w_i_b">
                                                    <div class="s_w_i_store_area">
                                                        <div class="s_w_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                            <div class="s_w_i_store_name">
                                                                <a href="">sss sss sss sss sss sss s</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="s_w_item">
                                <div class="row">
                                    <div class="s_sc-xl-3 s_sc-lg-4 s_sc-md-5 s_sc-sm-5 s_sc-xs-12">
                                        <img class="s_w_img" src="s-items/00.jpg" alt="">
                                    </div>
                                    <div class="s_sc-xl-9 s_sc-lg-8 s_sc-md-7 s_sc-sm-7 s_sc-xs-12">
                                        <div class="s_w_item_info">
                                            <div class="s_w_i_top">
                                                <div class="s_w_i_t"><x>1599 <x2>₼</x2></x>
                                                    <div title="Galaxy S20 Ultra 2020" class="s_w_i_model"><a href="#">Galaxy S20 Ulra20 Ultra</a></div>
                                                    <div class="s_w_i_brand"><a href="">Samsung</a></div>
                                                </div>
                                            </div><div class="s_w_i_sub_info">2/64/699AZN</div>
                                            <div class="s_line s_w_i_line"></div>
                                            <div class="s_w_i_bot">
                                                <div class="s_w_i_b">
                                                    <div class="s_w_i_store_area">
                                                        <div class="s_w_i_store"><a href=""><img src="s-items/00.jpg" alt=""></a>
                                                            <div class="s_w_i_store_name">
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
<!--Select -->
<script src="3rd-party-includes/select/select.js" type="text/javascript"></script>
<!--Owl-->
<script type="text/javascript" src="3rd-party-includes/Owl/dist/owl.carousel.min.js"></script>
<!--Owl product page kodlarim-->
<script type="text/javascript" src="s-main-scripts/js/owl_productspage.js"></script>
<!--Range Selector-->
<script type="text/javascript" src="3rd-party-includes/range-selector/range_select.min.js"></script>


<!--Hide show filter area-->
<script>
    function s_p_filter_show() {
        document.getElementById("s_p_filter_element_area").classList.toggle("s-hide");
        document.getElementById("s_p_filter_show_btn").classList.toggle("fa-angle-down");
        document.getElementById("s_p_filter_show_btn").classList.toggle("fa-angle-up");
        document.getElementById("s_p_filter_show_btn").classList.toggle("s_color_1a");
        document.getElementById("s_p_filter_show_btn").classList.toggle("s_color_red");
    }
</script>
<!--range selector-->
<script>
    const s_price = document.getElementById('s_price');
    range_selector.create(s_price, {
        start: [0, 10000],
        step: 1,
        range: {'min': [0], 'max': [10000]},
    });
    const min_range = document.getElementById('s_price_min');
    const max_range = document.getElementById('s_price_max');
    s_price.range_selector.on('update', function (values, handle) {

        const value = values[handle];

        if (handle) {
            max_range.value = Math.round(value);
        } else {
            min_range.value = Math.round(value);
        }
    });
    min_range.addEventListener('change', function () {
        s_price.range_selector.set([this.value, null]);
    });
    max_range.addEventListener('change', function () {
        s_price.range_selector.set([null, this.value]);
    });
</script>
<!--open close select bars-->
<script>
    new s_next_g_selector({
        select: '#s_category',
        placeholder: 'Placeholder Text Here',
        searchText:"<?php echo s_show($lang['noresultfound']);?>",
        searchPlaceholder:"<?php echo s_show($lang['search']);?> . . .",
        searchingText:"<?php echo s_show($lang['searching']);?>",
        placeholderText:"<?php echo s_show($lang['chooseanelement']);?>",
        allowDeselect: true,
    });

    new s_next_g_selector({
        select: '#s_brand',
        placeholder: 'Placeholder Text Here',
        searchText:"<?php echo s_show($lang['noresultfound']);?>",
        searchPlaceholder:"<?php echo s_show($lang['search']);?> . . .",
        searchingText:"<?php echo s_show($lang['searching']);?>",
        placeholderText:"<?php echo s_show($lang['chooseanelement']);?>",
        allowDeselect: true,
    });

    new s_next_g_selector({
        select: '#s_model',
        placeholder: 'Placeholder Text Here',
        searchText:"<?php echo s_show($lang['noresultfound']);?>",
        searchPlaceholder:"<?php echo s_show($lang['search']);?> . . .",
        searchingText:"<?php echo s_show($lang['searching']);?>",
        placeholderText:"<?php echo s_show($lang['chooseanelement']);?>",
        allowDeselect: true,
    });
</script>

</body>
</html>




