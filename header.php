<header>
    <div class="s-main-menu s-main-menu-sticky">
        <div class="s_b_container">
            <div class="s-logo-area">
                <a href="index"><img class="s-logo" src="<?php echo s_img_enc_base64('s-main-p/logo.svg',1);?>" alt="invaler logo"></a>
            </div>

            <div class="s-hide-lg s-hide-xs s-md-menu-space">
                <div class="s-md-subnav">
                    <button onclick="s_md_menu_btn();" id="s_md_menu_btn_out" class="s-md-subnavbtn">
                        <i id="s-md-subnavbtn" class="fa fa-bars"></i>
                    </button>
                    <div id="s-md-menu-background-set" class=""></div>

                    <div id="s_md_menu_btn" class="s-md-subnav-content">
                        <div class="s-md-menu-place">


                            <div class="s-md-menu-left">
                                <div class="s-md-menu-item">
                                    <div class="row s-md-menu-item-area">
                                        <div class="s-md-menu-head s_sc-lg-12 s_sc-md-12 s_sc-sm-12 s_sc-xs-12" ><a  href="products.php"><?php echo s_show($lang['products']);?></a></div>
                                    </div>
                                </div>
                                <div class="s-md-menu-item">
                                    <div class="row s-md-menu-item-area">
                                        <div class="s-md-menu-head s_sc-lg-12 s_sc-md-12 s_sc-sm-12 s_sc-xs-12" ><a  href=""><?php echo s_show($lang['stores']);?></a></div>
                                    </div>
                                </div>
                                <div class="s-md-menu-item">
                                    <div class="row s-md-menu-item-area">
                                        <div class="s-md-menu-head s_sc-lg-12 s_sc-md-12 s_sc-sm-12 s_sc-xs-12" ><a  href="join-us"><?php echo s_show($lang['joinus']);?></a></div>
                                    </div>
                                </div>
                                <div class="s-md-menu-item">
                                    <div class="row s-md-menu-item-area s-md-menu-have-sub">
                                        <div class="s-md-menu-head" ><a  href="contact"><?php echo s_show($lang['support']);?></a></div>
                                        <div class="s-md-menu-sub" ><a  href="contact"><?php echo s_show($lang['contact']);?></a></a></div>
                                        <div class="s-md-menu-sub" ><a  href="faq"><?php echo s_show($lang['faq']);?></a></a></div>
                                        <div class="s-md-menu-sub" ><a class="s-modal" s-target="s-report-bug" href="javascript:void(0)"><?php echo s_show($lang['reportbug']);?></a></a></div>
                                    </div>
                                </div>
                                <div class="s-md-menu-item">
                                    <div class="row s-md-menu-item-area s-md-menu-have-sub">
                                        <div class="s-md-menu-head s_full_w" ><a  href=""><?php echo s_show($lang['invaler']);?></a></div>
                                        <div class="s-md-menu-sub" ><a  href=""><?php echo s_show($lang['services']);?></a></a></div>
                                        <div class="s-md-menu-sub" ><a  href=""><?php echo s_show($lang['useragreement']);?></a></a></div>
                                        <div class="s-md-menu-sub" ><a  href=""><?php echo s_show($lang['privacypolicy']);?></a></a></div>
                                        <div class="s-md-menu-sub" ><a  href=""><?php echo s_show($lang['remotesalesagreement']);?></a></a></div>
                                    </div>
                                </div>
                            </div>


                            <div class="s-md-menu-right">
                                <div class="" style="overflow:auto;"><a  href="">sasfssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasfasfa</a></div>
                                <div class="" style="overflow:auto;"><a  href="">sasfssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssasfasfa</a></div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="s-hide-md">
                <a class="s-menu-buttons s-menu-1st-button" href="products"><?php echo s_show($lang['products']);?></a>
                <a class="s-menu-buttons" href="stores"><?php echo s_show($lang['stores']);?></a>
                <a class="s-menu-buttons" href="join-us"><?php echo s_show($lang['joinus']);?></a>
                <div class="s-dropdown">
                    <button class="s-dropbtn s-menu-buttons"><?php echo $lang['support'];?> <i class="fa fa-caret-down"></i></button>
                    <div class="s-dropdown-content">
                        <a href="contact"><?php echo s_show($lang['contact']);?></a>
                        <a href="faq"><?php echo s_show($lang['faq']);?></a>
                        <a class="s-modal" s-target="s-report-bug" href="javascript:void(0)"><?php echo s_show($lang['reportbug']);?></a>
                    </div>
                </div>
                <div class="s-dropdown">
                    <button class="s-dropbtn s-menu-buttons"><?php echo s_show($lang['invaler']);?> <i class="fa fa-caret-down"></i></button>
                    <div class="s-dropdown-content">
                        <a href="#"><?php echo s_show($lang['aboutus']);?></a>
                        <a href="#"><?php echo s_show($lang['services']);?></a>
                        <a href="#"><?php echo s_show($lang['useragreement']);?></a>
                        <a href="#"><?php echo s_show($lang['privacypolicy']);?></a>
                        <a href="#"><?php echo s_show($lang['remotesalesagreement']);?></a>
                    </div>
                </div>
            </div>
            <div class="s-hide-xs">
                <div class="s-f-subnav">
                    <button class="s-f-subnavbtn" id="s_main_find_out" onclick="s_main_find()"><i id="s-f-subnavbtn" class="fa fa-search"></i></button>
                    <div id="s-f-subnavbtn-background-set" class=""></div>
                    <div id="s_main_find" class="s-f-subnav-content s-search">
                        <label for="s-main-find-input"></label><input type="text" onkeypress="s_main_find_clean()" placeholder="<?php echo s_show($lang['search']);?> . . .">
                        <div class="s-f-show">
                            <x>Axtaris NeticesiAxtaris NeticesiAxtaris NeticesiAxtaris Neticesi</x>
                            <x>AxtarAxtaris NeticesiAxtaris Neticesiis Neticesi</x>
                            <x>Axtaris Neticesi</x>
                            <x>Axtaris Neticesi</x>
                            <x>Axtaris Neticesi</x>
                            <x>Axtaris Neticesi</x>
                            <x>Axtaris Neticesi</x>
                            <x>Axtaris Neticesi</x>
                            <x>Axtaris Neticesi</x>
                            <x>Axtaris Neticesi</x>
                            <x>Axtaris Neticesi</x>
                        </div>

                    </div>
                </div>


                <div class="s_log_in_btn_area r-dropdown r-menu-right s-hide-xs">
                    <div class="s_log_in_btn"><button onclick="s_log_in_btn()" id="s_log_in_btn_out"><?php echo s_show($lang['login']);?> <i class="fa fa-sign-in-alt" id="s_log_in_btn_"></i></button></div>
                    <div id="s_log_in_btn" class="r-dropdown-content">
                        <div class="s_login_header_area">
                            <div class="row">
                                <div class="s_login_header_l s_sc-lg-6 s_sc-md-6 s_sc-sm-6 s_sc-xs-6">
                                    <div class="s_header_login">
                                        <div class="s_header_login_tittle">
                                            <img src="s-main-p/store_log.svg" alt="">
                                            <p><?php echo s_show($lang['storeloginarea']);?></p>
                                        </div>
                                        <div class="s_header_login_go">
                                            <a href="s-login"><?php echo s_show($lang['loginpage']);?></a>
                                            <p>sassas</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="s_login_header_r s_sc-lg-6 s_sc-md-6 s_sc-sm-6 s_sc-xs-6">
                                    <div class="s_header_login">
                                        <div class="s_header_login_tittle">
                                            <img src="s-main-p/customer_log.svg" alt="">
                                            <p><?php echo s_show($lang['customerloginarea']);?>
                                        </div>
                                        <div class="s_header_login_go">
                                            <a href="login"><?php echo s_show($lang['loginpage']);?></a>
                                            <a href="register"><?php echo s_show($lang['registerpage']);?></a>
                                            <p>sssss</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--                <div class="r-dropdown r-menu-right s-hide-xs">-->
                <!--                    <button onclick="s_menu_user()" id="s_menu_user_out" class="r-dropbtn r-menu-buttons"><i id="r-menu-buttons-user" class="fa fa-user-circle fa-lg"></i></button>-->
                <!--                    <div id="s_menu_user" class="r-dropdown-content">-->
                <!--                        <a href="#">Haqqımızda</a>-->
                <!--                        <a href="#">İstifadəçi Razılaşması</a>-->
                <!--                        <a href="#">Məxfilik Siyasəti</a>-->
                <!--                        <a href="#">Uzaqdan Satış Sözləşməsi</a>-->
                <!--                        <a href="#">Təhlükəsizlik Forması</a>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div class="r-dropdown r-menu-right s-hide-xs">-->
                <!--                    <button onclick="s_menu_cart()" id="s_menu_cart_out" class="r-dropbtn r-menu-buttons"><i id="r-menu-buttons-cart" class="fa fa-shopping-cart fa-lg"></i></button>-->
                <!--                    <div id="s_menu_cart" class="r-dropdown-content">-->
                <!--                        <a href="#">Haqqımızda</a>-->
                <!--                        <a href="#">İstifadəçi Razılaşması</a>-->
                <!--                        <a href="#">Məxfilik Siyasəti</a>-->
                <!--                        <a href="#">Uzaqdan Satış Sözləşməsi</a>-->
                <!--                        <a href="#">Təhlükəsizlik Forması</a>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div class="r-dropdown r-menu-right s-hide-xs">-->
                <!--                    <button onclick="s_menu_noti()" id="s_menu_noti_out" class="r-dropbtn r-menu-buttons"><i id="r-menu-buttons-noti" class="fa fa-bell fa-lg"></i></button>-->
                <!--                    <div id="s_menu_noti" class="r-dropdown-content">-->
                <!--                        <a href="#">Haqqımızda</a>-->
                <!--                        <a href="#">İstifadəçi Razılaşması</a>-->
                <!--                        <a href="#">Məxfilik Siyasəti</a>-->
                <!--                        <a href="#">Uzaqdan Satış Sözləşməsi</a>-->
                <!--                        <a href="#">Təhlükəsizlik Forması</a>-->
                <!--                    </div>-->
                <!--                </div>-->
            </div>
        </div>
        <div class="s-only-xs">
            <div id="s-mob-menu-background-set" class=""></div>
            <div class="s-mob-menu-space">
                <div class="s-mob-subnav">
                    <button onclick="s_mob_btn_left()" id="s_mob_btn_left_out" class="s-mob-subnavbtn">
                        <i id="s-mob-subnavbtn" class="s-mob-subnavbtn-x fa fa-list fa-lg"></i>
                    </button>
                    <div id="s_mob_btn_left" class="s-mob-subnav-content">
                        <div class="s-mob-find">
                            <label>
                                <input type="text" placeholder="<?php echo s_show($lang['search']);?> . . ." >
                            </label>
                        </div>
                        <div class="s-mob-menu">
                            <div class="s-mob-menu-place">
                                <div id="s-mob-menu-iclik" class="s-mob-menu-iclik">
                                    <a href="products"><div class="s-mob-l-menu-links-btn"><?php echo s_show($lang['products']);?></div></a>
                                </div>
                                <div id="s-mob-menu-iclik" class="s-mob-menu-iclik">
                                    <a href="stores"><div class="s-mob-l-menu-links-btn"><?php echo s_show($lang['stores']);?></div></a>
                                </div>
                                <div id="s-mob-menu-iclik" class="s-mob-menu-iclik">
                                    <a href="join-us"><div class="s-mob-l-menu-links-btn"><?php echo s_show($lang['joinus']);?></div></a>
                                </div>
                                <div id="s-mob-menu-iclik" class="s-mob-menu-iclik">
                                    <div class="s-mob-l-menu-links-btn"><?php echo s_show($lang['support']);?><i class="fa fa-caret-down"></i></div>
                                    <div class="s-mob-l-menu-links">
                                        <div><a href="contact"><?php echo s_show($lang['contact']);?></a></div>
                                        <div><a href="faq"><?php echo s_show($lang['faq']);?></a></div>
                                        <div class="s-mob-l-menu-links-bot-space"><a class="s-modal" s-target="s-report-bug" href="javascript:void(0)"><?php echo s_show($lang['reportbug']);?></a></div>
                                    </div>
                                </div>
                                <div id="s-mob-menu-iclik" class="s-mob-menu-iclik">
                                    <div class="s-mob-l-menu-links-btn"><?php echo s_show($lang['invaler']);?><i class="fa fa-caret-down"></i></div>
                                    <div class="s-mob-l-menu-links">
                                        <div><a href="#"><?php echo s_show($lang['aboutus']);?></a></div>
                                        <div><a href="#"><?php echo s_show($lang['services']);?></a></div>
                                        <div><a href="#"><?php echo s_show($lang['useragreement']);?></a></div>
                                        <div><a href="#"><?php echo s_show($lang['privacypolicy']);?></a></div>
                                        <div class="s-mob-l-menu-links-bot-space"><a href="#"><?php echo s_show($lang['remotesalesagreement']);?></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="s-mob-menu-r-background-set" class=""></div>
                <div class="s-mob-r-menu-space">
                    <div class="s-mob-r-subnav">
                        <button onclick="s_mob_btn_right()" id="s_mob_btn_right_out" class="s-mob-r-subnavbtn">
                            <i id="s-mob-r-subnavbtn" class="s-mob-r-subnavbtn-x fa fa-th-large fa-lg"></i>
                        </button>
                        <div id="s_mob_btn_right" class="s-mob-r-subnav-content">
                            <a href="#company">Məhsullar</a>
                            <a href="#team">Mağazalar</a>
                            <a href="#careers">Bizə Qoşul</a>
                            <a href="#careers">Dəstək</a>
                            <a href="#careers">Əlaqə</a>
                            <a href="#careers">Əlaqə</a>
                            <a href="#careers">Əlaqə</a>
                            <a href="#careers">Əlaqə</a>
                            <a href="#careers">Əlaqə</a>
                            <a href="#careers">Əlaqə</a>
                            <a href="#careers">Əlaqə</a>
                            <a href="#careers">Əlaqə</a>
                            <a href="#careers">Əlaqə</a>

                            <a href="#careers">Əlaqə</a>
                            <a href="#careers">Əlaqə</a>
                            <a href="#careers">Əlaqə</a>
                            <a href="#careers">Əlaqə</a>
                            <a href="#careers">Əlaqə</a>
                            <a href="#careers">Əlaqə</a>
                            <a href="#careers">Əlaqə</a>
                            <a href="#careers">Əlaqə</a>
                            <a href="#careers">Əlaqə</a>
                            <a href="#careers">Əlaqə</a>
                            <a href="#careers">Əlaqə</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</header>
<!--Left side menu-->
<div class="s_left_side_menu">
    <div class="change_lang">
        <a href="s-lang/lang-config?lang=az">AZE </a> |
        <a href="s-lang/lang-config?lang=en"> ENG</a>
        <i class="fa fa-globe fa-lg"></i>
    </div>
</div>