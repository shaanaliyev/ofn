
/*=======================================================================
 Mobile menu link dropdown
=========================================================================*/
var s_mob_dropdown = document.getElementsByClassName("s-mob-l-menu-links-btn");
var i;

for (i = 0; i < s_mob_dropdown.length; i++) {
    s_mob_dropdown[i].addEventListener("click", function() {
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });
}

/*=======================================================================
 Mobile menu open colse button LEFT
=========================================================================*/
function s_mob_btn_left() {
    document.getElementById("s_mob_btn_left").classList.toggle("s-nav-global-show");
    document.getElementById("s-mob-menu-background-set").classList.toggle("s-menu-background");
    document.getElementById("s-mob-subnavbtn").classList.toggle("s-nav-btn-active");
}
//Graga tiklayanda baglamaq ucun
window.addEventListener('click', function(e){
    if (document.getElementById('s_mob_btn_left').contains(e.target) || document.getElementById('s_mob_btn_left_out').contains(e.target)){
        // Clicked in box
    } else{
        document.getElementById("s_mob_btn_left").classList.remove("s-nav-global-show");
        document.getElementById("s-mob-menu-background-set").classList.remove("s-menu-background");
        document.getElementById("s-mob-subnavbtn").classList.remove("s-nav-btn-active");
    }
});


/*=======================================================================
 Mobile menu open colse button RIGHT
=========================================================================*/
function s_mob_btn_right() {
    document.getElementById("s_mob_btn_right").classList.toggle("s-nav-global-show");
    document.getElementById("s-mob-r-subnavbtn").classList.toggle("s-nav-btn-active");
    document.getElementById("s-mob-menu-r-background-set").classList.toggle("s-menu-background");
}
//Graga tiklayanda baglamaq ucun
window.addEventListener('click', function(e){
    if (document.getElementById('s_mob_btn_right').contains(e.target) || document.getElementById('s_mob_btn_right_out').contains(e.target)){
        // Clicked in box
    } else{
        document.getElementById("s_mob_btn_right").classList.remove("s-nav-global-show");
        document.getElementById("s-mob-r-subnavbtn").classList.remove("s-nav-btn-active");
        document.getElementById("s-mob-menu-r-background-set").classList.remove("s-menu-background");
    }
});


/*=======================================================================
MD menu open colse button
=========================================================================*/
function s_md_menu_btn() {
    document.getElementById("s_md_menu_btn").classList.toggle("s-nav-global-show");
    document.getElementById("s-md-subnavbtn").classList.toggle("s-nav-btn-active");
    document.getElementById("s-md-menu-background-set").classList.toggle("s-menu-background");
    // s_auto_close_menu_buttons("s_md_menu_btn","s-md-subnavbtn");
}
//Graga tiklayanda baglamaq ucun
window.addEventListener('click', function(e){
    if (document.getElementById('s_md_menu_btn').contains(e.target) || document.getElementById('s_md_menu_btn_out').contains(e.target)){
        // Clicked in box
    } else{
        document.getElementById("s_md_menu_btn").classList.remove("s-nav-global-show");
        document.getElementById("s-md-subnavbtn").classList.remove("s-nav-btn-active");
        document.getElementById("s-md-menu-background-set").classList.remove("s-menu-background");
    }
});

/*=======================================================================
Menu Right buttons
=========================================================================*/
function s_main_find() {
    document.getElementById("s_main_find").classList.toggle("s-nav-global-show");
    document.getElementById("s-f-subnavbtn").classList.toggle("s-nav-btn-active");
    document.getElementById("s-f-subnavbtn-background-set").classList.toggle("s-menu-background");
    // s_auto_close_menu_buttons("s_main_find","s-f-subnavbtn");
}
//Graga tiklayanda baglamaq ucun
window.addEventListener('click', function(e){
    if (document.getElementById('s_main_find').contains(e.target) || document.getElementById('s_main_find_out').contains(e.target)){
        // Clicked in box
    } else{
        document.getElementById("s_main_find").classList.remove("s-nav-global-show");
        document.getElementById("s-f-subnavbtn").classList.remove("s-nav-btn-active");
        document.getElementById("s-f-subnavbtn-background-set").classList.remove("s-menu-background");
    }
});

// function s_menu_user() {
//     document.getElementById("s_menu_user").classList.toggle("s-nav-global-show");
//     document.getElementById("r-menu-buttons-user").classList.toggle("s-nav-btn-active");
//     // s_auto_close_menu_buttons("s_menu_user","r-menu-buttons-user");
// }
// //Graga tiklayanda baglamaq ucun
// window.addEventListener('click', function(e){
//     if (document.getElementById('s_menu_user').contains(e.target) || document.getElementById('s_menu_user_out').contains(e.target)){
//         // Clicked in box
//     } else{
//         document.getElementById("s_menu_user").classList.remove("s-nav-global-show");
//         document.getElementById("r-menu-buttons-user").classList.remove("s-nav-btn-active");
//     }
// });
//
// function s_menu_cart() {
//     document.getElementById("s_menu_cart").classList.toggle("s-nav-global-show");
//     document.getElementById("r-menu-buttons-cart").classList.toggle("s-nav-btn-active");
//     // s_auto_close_menu_buttons("s_menu_cart","r-menu-buttons-cart");
// }
// //Graga tiklayanda baglamaq ucun
// window.addEventListener('click', function(e){
//     if (document.getElementById('s_menu_cart').contains(e.target) || document.getElementById('s_menu_cart_out').contains(e.target)){
//         // Clicked in box
//     } else{
//         document.getElementById("s_menu_cart").classList.remove("s-nav-global-show");
//         document.getElementById("r-menu-buttons-cart").classList.remove("s-nav-btn-active");
//     }
// });
//
// function s_menu_noti() {
//     document.getElementById("s_menu_noti").classList.toggle("s-nav-global-show");
//     document.getElementById("r-menu-buttons-noti").classList.toggle("s-nav-btn-active");
//     // s_auto_close_menu_buttons("s_menu_noti","r-menu-buttons-noti");
// }
// //Graga tiklayanda baglamaq ucun
// window.addEventListener('click', function(e){
//     if (document.getElementById('s_menu_noti').contains(e.target) || document.getElementById('s_menu_noti_out').contains(e.target)){
//         // Clicked in box
//     } else{
//         document.getElementById("s_menu_noti").classList.remove("s-nav-global-show");
//         document.getElementById("r-menu-buttons-noti").classList.remove("s-nav-btn-active");
//     }
// });

//log in button
function s_log_in_btn() {
    document.getElementById("s_log_in_btn").classList.toggle("s-nav-global-show");
    document.getElementById("s_log_in_btn_").classList.toggle("s-nav-btn-active");
    // s_auto_close_menu_buttons("s_menu_user","r-menu-buttons-user");
}
//Graga tiklayanda baglamaq ucun
window.addEventListener('click', function(e){
    if (document.getElementById('s_log_in_btn').contains(e.target) || document.getElementById('s_log_in_btn_out').contains(e.target)){
        // Clicked in box
    } else{
        document.getElementById("s_log_in_btn").classList.remove("s-nav-global-show");
        document.getElementById("s_log_in_btn_").classList.remove("s-nav-btn-active");
    }
});



// //Bu funksiya bir menu acilanda digerini hem baglayir hem de rengini geri alir
// function s_auto_close_menu_buttons(the_content_area, btn_icon){
//     //mumkun variantlari arraya veririk ( hem content / hem icon id lerini
//     var contents = ["s_md_menu_btn", "s_main_find", "s_menu_user","s_menu_cart", "s_menu_noti"];
//     var icons = ["s-md-subnavbtn", "s-f-subnavbtn", "r-menu-buttons-user","r-menu-buttons-cart", "r-menu-buttons-noti"];
//     // funksiyaya parametr kimi gelen content ve icon lari istisna kimi qraga yaziriq (onlari baglamayacagin onun ucun)
//     var dont_content = the_content_area;
//     var dont_icon = btn_icon;
//     //birinci olaraq content yoxlanilir bu funksiya contents arrayindaki butun funksiyalara gore isleyecek, butun funksiyalara gore contntleri baglayacaq ve
//     // istisnaya gelende hemin elementi saymayacaq.
//     contents.forEach(function(contents){
//         if(contents == dont_content){
//             return;
//         }
//         document.getElementById(contents).classList.remove("s-nav-global-show");
//     });
//     // content ucun olanin eynisi. bu sefer icons lar arrayi ucun
//     icons.forEach(function(icons){
//         if(icons == dont_icon){
//             return;
//         }
//         document.getElementById(icons).classList.remove("s-nav-btn-active");
//     });
//     //son olaraq qragda yazmagimin sebebi eger md menu isledilerse bu islemeyecek yoxsa butun hallarda md menu aciq variant kimi backgroun silinecek
//     if (the_content_area!=='s_md_menu_btn' && btn_icon!=='s-md-subnavbtn'){
//     document.getElementById("s-md-menu-background-set").classList.remove("s-menu-background");
//     }
// }

/*=======================================================================
[1] MODAL
=========================================================================*/
// coxlu modallar
let currentlyOpenModals = [];

const noModalsOpen = () => !currentlyOpenModals.length;

const openModal = modalId => {
    const modalWrapper = document.getElementById(modalId);
    modalWrapper.classList.add("visible");
    currentlyOpenModals.push(modalWrapper);
};
// Çoxlu modallar üst üstə açıq olanda birinci ən üstdəki bağlansın
const closeTopmostModal = () => {
    if (noModalsOpen()) {
        return;
    }
    const modalWrapper = currentlyOpenModals[currentlyOpenModals.length - 1];
    modalWrapper.classList.remove("visible");
    currentlyOpenModals.pop();
};
const modalTriggers = document.querySelectorAll(".s-modal");
modalTriggers.forEach(modalTrigger => {
    modalTrigger.addEventListener("click", clickEvent => {
        const trigger = clickEvent.target;
        const modalId = trigger.getAttribute("s-target");
        openModal(modalId);
    });
});
document.querySelectorAll(".modal-window").forEach(modal => {
    modal.addEventListener("click", clickEvent => {
        clickEvent.stopPropagation();
    });
});
const modalWrappers = document.querySelectorAll(".s_modal_area");
modalWrappers.forEach(modalWrapper => {
    modalWrapper.addEventListener("click", () => {
        closeTopmostModal();
    });
});
document.querySelectorAll(".s-close-modal").forEach(closeModalButton => {
    closeModalButton.addEventListener("click", () => {
        closeTopmostModal();
    });
});
document.body.addEventListener("keyup", keyEvent => {
    if (keyEvent.key === "Escape") {
        closeTopmostModal();
    }
});

/*=======================================================================
[2] Scrol to top
=========================================================================*/

const backToTopButton = document.querySelector("#s-back-to-top-btn");

window.addEventListener("scroll", scrollFunction);

function scrollFunction() {
    if (window.pageYOffset > 300) { // Show backToTopButton
        if(!backToTopButton.classList.contains("btnEntrance")) {
            backToTopButton.classList.remove("btnExit");
            backToTopButton.classList.add("btnEntrance");
            backToTopButton.style.display = "block";
        }
    }
    else { // Hide backToTopButton
        if(backToTopButton.classList.contains("btnEntrance")) {
            backToTopButton.classList.remove("btnEntrance");
            backToTopButton.classList.add("btnExit");
            setTimeout(function() {
                backToTopButton.style.display = "none";
            }, 250);
        }
    }
}
backToTopButton.addEventListener("click", smoothScrollBackToTop);
function smoothScrollBackToTop() {
    const targetPosition = 0;
    const startPosition = window.pageYOffset;
    const distance = targetPosition - startPosition;
    const duration = 750;
    let start = null;

    window.requestAnimationFrame(step);

    function step(timestamp) {
        if (!start) start = timestamp;
        const progress = timestamp - start;
        window.scrollTo(0, easeInOutCubic(progress, startPosition, distance, duration));
        if (progress < duration) window.requestAnimationFrame(step);
    }
}
function easeInOutCubic(t, b, c, d) {
    t /= d/2;
    if (t < 1) return c/2*t*t*t + b;
    t -= 2;
    return c/2*(t*t*t + 2) + b;
}

// /*=======================================================================
// [3] SET GET cookie js
// =========================================================================*/
function s_js_setCookie(cname, cvalue, exdays='365') {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
//    sonra https ucun   axıra ;secure  elave ele
}
// get
function s_js_getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

/*=======================================================================
[4] FIXED ELEMENT WHEN SCROLL (BEETWEEN)
=========================================================================*/
function s_scroll_element_fixed($st_scroll_element_id, $st_fixed_element_id, $st_range, $ch_element_id, $ch_element_className, $do_fix_className , $end_scroll_element_id, $end_range)
{
    //////////////////////////////////////////////////////////////
    //elementimizin scroll adresi
    function getPosition(element) {
        var yPosition = 0;
        while (element) {
            yPosition += (element.offsetTop + element.clientTop);
            element = element.offsetParent;
        }
        return {
            y: yPosition
        };
    }
    //Hazirda Scroll hardadi
    function getScroll() {
        return {
            y: document.documentElement.scrollTop || document.body.scrollTop
        };
    }
    //////////////////////////////////////////////////////////////

    //      Start ///////////////////////////////////
    var pos = getPosition(document.getElementById($st_scroll_element_id)),
        scroll = getScroll(),
        diff = (pos.y - scroll.y);
    if (!document.getElementById($ch_element_id).classList.contains($ch_element_className)){
        if (diff<$st_range)
        {
            document.getElementById($st_fixed_element_id).classList.add($do_fix_className);
        }
        else{
            document.getElementById($st_fixed_element_id).classList.remove($do_fix_className);
        }
    }
    else{
        document.getElementById($st_fixed_element_id).classList.remove($do_fix_className);
    }


    //    END  /////////////////////////////////
    var pos_end = getPosition(document.getElementById($end_scroll_element_id)),
        scroll_end = getScroll(),
        diff_end = (pos_end.y - scroll_end.y);
    if (!document.getElementById($ch_element_id).classList.contains($ch_element_className)){
        if (diff_end<$end_range)
        {
            document.getElementById($st_fixed_element_id).classList.remove($do_fix_className);
        }
    }
    else{
        document.getElementById($st_fixed_element_id).classList.remove($do_fix_className);
    }

}


/*=======================================================================
[5] Middle area ucun Acilan menu mob left kimi
=========================================================================*/
//
// var dropdown = document.getElementsByClassName("s_main_middle_content_item_btn");
// var i;
//
// for (i = 0; i < dropdown.length; i++) {
//     dropdown[i].addEventListener("click", function() {
//         // this.classList.toggle("s-nav-btn-active");
//         var dropdownContent = this.nextElementSibling;
//         if (dropdownContent.style.display === "block") {
//             dropdownContent.style.display = "none";
//         } else {
//             dropdownContent.style.display = "block";
//         }
//     });
// }



// /*=======================================================================
// SCROLL ASAGI AYRI IS YUXARI AYRI IS GORDURTMEK
// =========================================================================*/
/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
// var prevScrollpos = window.pageYOffset;
// window.onscroll = function() {
//     var currentScrollPos = window.pageYOffset;
//     if (prevScrollpos > currentScrollPos) {
//         document.getElementById("navbar").style.top = "0";
//     } else {
//         document.getElementById("navbar").style.top = "-50px";
//     }
//     prevScrollpos = currentScrollPos;
// }