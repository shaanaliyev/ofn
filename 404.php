<?php require_once 's-lang/DIR_lang.php';?>
<!DOCTYPE html>
<html lang="az">
<head>
    <title><?php echo s_show($lang['404pagetitle']);?></title>
    <meta charset="UTF-8">
    <meta name="description" content="404 page of invaler.com">
    <meta name="keywords" content="404, 404-page, invaler-404">
    <meta name="author" content="Shaban Aliyev">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo s_img_enc_base64('s-main-p/icon.svg',1)?>">
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
<div class="nf_page_content">
<!--    header-->
    <div class="nf_page_header">
        <div class="s_b_container">
            <div class="nf_head_area">
                <div class="nf_h_l">
                    <a href="http://localhost/CODE/InValer/"><img src="<?php echo s_img_enc_base64('s-main-p/logo.svg',1)?>" alt="invaler"></a>
                </div>
                <div class="nf_h_r">
                    <a href="s-lang/DIR_lang-config.php?lang=az">AZE</a> /
                    <a href="s-lang/DIR_lang-config.php?lang=en">EN</a>
                </div>
            </div>
        </div>
    </div>
<!--    content-->
    <div class="nt_bg" style="background: url('<?php echo s_img_enc_base64('s-main-p/bg/404page.svg',1)?>') no-repeat center;"></div>
    <div class="nf_page_main">
        <h1><?php echo s_show($lang['404pagenotfound']);?></h1>
        <p><?php echo s_show($lang['notfoundinfo1']);?><a href="contact"><?php echo s_show($lang['contact']);?></a><?php echo s_show($lang['notfoundinfo2']);?></p>
        <div class="nf_home_button"><a href="http://localhost/CODE/InValer/"><?php echo s_show($lang['gohomebtn']);?></a></div>
    </div>
<!--    footer-->
    <div class="nf_page_footer">
        <div class="s_b_container">
            <div class="nf_f_cpy">
                <x>Copyright ©<?php echo date('Y');?> InValer.com <x2 style="float: right">Developed By Shaban Aliyev</x2></x>
            </div>

        </div>
    </div>
</div>
</body>
</html>