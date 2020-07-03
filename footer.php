<?php if (!isset($_COOKIE['s_confirm_cookies']) || s_getcookie('s_confirm_cookies')!=='1'){ ?>
<div id="s_cookie_info_area" class="s_cookie_info_area">
    <div class="s_cookie_info_lang"><a href="s-lang/lang-config?lang=az">AZE</a> / <a href="s-lang/lang-config?lang=en">ENG</a></div>
    <div class="s_b_container s_cookie_info">
        <div class="row">
            <div class="s_sc-lg-9 s_sc-md-9 s_sc-sm-8 s_sc-xs-12">
                <div class="s_cookie_text"><?php echo s_show($lang['cookie_text']); ?>
                        <a href="privacy-policy#special-tracking-systems"><?php echo s_show($lang['learnmore']);?></a></div>
            </div>
            <div class="s_sc-lg-3 s_sc-md-3 s_sc-sm-4 s_sc-xs-12">
                <div class="s_cookie_btn"><x onclick="cookie_got_it()"><?php echo s_show($lang['gotit']); ?></x></div>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<footer>
        <div class="s-footer-t">
            <div class="s_b_container">
                <div class="row">
                    <div class="s-footer-t-l s_sc-lg-3 s_sc-md-3 s_sc-sm-6 s_sc-xs-12">
                        <div class="s-footer-t-l-header">
                            <p><a href=""><?php echo s_show($lang['aboutus']);?></a></p>
                        </div>
                        <div class="s-footer-t-l-text">
                            <p>
                                <?php echo s_show($lang['aboutus_short']);?>
                            </p>

                            <div class="s-footer-t-l-pay">
                                <i class="fab fa-cc-visa fa-lg "></i>
                                <i class="fab fa-cc-mastercard fa-lg"></i>
                                <i class="fa fa-receipt fa-lg"></i>
                            </div>
                        </div>
                    </div>
                    <div class="s-footer-t-r s_sc-lg-8 s_sc-md-8 s_sc-sm-6 s_sc-xs-12">
                        <div class="row" >
                            <div class="s_sc-lg-4 s_sc-md-4 s_sc-sm-4 s_sc-xs-4">
                                <div class="s-footer-t-r-header">
                                    <p><?php echo s_show($lang['usefullinks']);?></p>
                                </div>
                                <div class="s-footer-t-r-text">
                                    <a href=""><?php echo s_show($lang['specialoffers']);?></a>
                                </div>
                                <div class="s-footer-t-r-text">
                                    <a href=""><?php echo s_show($lang['partnerstores']);?></a>
                                </div>
                                <div class="s-footer-t-r-text">
                                    <a href="join-us"><?php echo s_show($lang['joinus']);?></a>
                                </div>
                                <div class="s-footer-t-r-text">
                                    <a href=""><?php echo s_show($lang['sitemap']);?></a>
                                </div>
                            </div>
                            <div class="s_sc-lg-4 s_sc-md-4 s_sc-sm-4 s_sc-xs-4">
                                <div class="s-footer-t-r-header">
                                    <p><?php echo s_show($lang['support']);?></p>
                                </div>
                                <div class="s-footer-t-r-text">
                                    <a href="contact"><?php echo s_show($lang['contact']);?></a>
                                </div>
                                <div class="s-footer-t-r-text">
                                    <a href="faq"><?php echo s_show($lang['faq']);?></a>
                                </div>
                                <div class="s-footer-t-r-text">
                                    <a href=""><?php echo s_show($lang['operations']);?></a>
                                </div>
                                <div class="s-footer-t-r-text">
                                    <a href=""><?php echo s_show($lang['errorcases']);?></a>
                                </div>
                            </div>
                            <div class="s_sc-lg-4 s_sc-md-4 s_sc-sm-4 s_sc-xs-4">
                                <div class="s-footer-t-r-header">
                                    <p><?php echo s_show($lang['shopping']);?></p>
                                </div>
                                <div class="s-footer-t-r-text">
                                    <a href=""><?php echo s_show($lang['services']);?></a>
                                </div>
                                <div class="s-footer-t-r-text">
                                    <a href=""><?php echo s_show($lang['useragreement']);?></a>
                                </div>
                                <div class="s-footer-t-r-text">
                                    <a href=""><?php echo s_show($lang['privacypolicy']);?></a>
                                </div>
                                <div class="s-footer-t-r-text">
                                    <a href=""><?php echo s_show($lang['remotesalesagreement']);?></a>
                                </div>
                            </div>
                            <div class="s-footer-t-r-alt s_sc-lg-12 s_sc-md-12 s_sc-sm-12 s_sc-xs-12">
                                <div class="row">
                                    <div class="s_sc-lg-5 s_sc-md-6 s_sc-sm-12 s_sc-xs-12 s-footer-social">
                                        <div>
                                            <p><?php echo s_show($lang['socialmedia']);?></p>
                                            <a href="https://facebook.com/invaler" target="_blank"><img src="<?php echo s_img_enc_base64('s-main-p/facebook.png');?>" alt=""></a>
                                            <a href="https://twitter.com/invaler" target="_blank"><img src="<?php echo s_img_enc_base64('s-main-p/twitter.png');?>" alt=""></a>
                                            <a href="https://linkedin.com/invaler" target="_blank"><img src="<?php echo s_img_enc_base64('s-main-p/linkedin.png');?>" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="s-footer-report-err s_sc-lg-7 s_sc-md-6 s_sc-sm-12 s_sc-xs-12">
                                        <x class="s-modal" s-target="s-report-bug"><?php echo s_show($lang['reportbug']);?> <i class="fa fa-bug s-footer-the-bug"></i></x>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="s-footer-b">
            <div class="s_b_container">
                <div class="s-footer-b-main">
                    <x><img class="s-f-logo" src="<?php echo s_img_enc_base64('s-main-p/logo.svg',1);?>" alt=""></x>
                    <x class="s-f-copyright">Copyright ©<?php echo date('Y');?> <x2>In</x2><x3>Valer</x3>.com</x>
                    <div class="s-footer-b-main-r s-hide-xs">
                        <x class="s-f-developer">Developed By <x2 class="s-modal" s-target="me">Shaban Aliyev</x2></x>
                    </div>
                </div>
            </div>
        </div>
</footer>
<script>
    function cookie_got_it() {
        document.getElementById('s_cookie_info_area').style.display='none';
        s_js_setCookie('s_confirm_cookies','<?php echo s_enc_by_key(1,'COOKIE_KEY')?>')
    }
</script>