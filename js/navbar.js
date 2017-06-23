$( document ).ready(function() {
    $(function() {
        console.log("hi");
            $(".dropdown").on("click", function() {
                $('.dropdown-content').toggle();
            });
    });
});
$( document ).ready(function() {
    $(function() {
        console.log("hello");
            $("input.search-submit").on("click", function() {
                $('input.search-field').toggle();
            });
    });
});
$(function(){
        $('ul.nav-menu li a').each(function(){
            if ($(this).prop('href') == window.location.href) {
                $(this).addClass('activeon'); $(this).parents('li').addClass('active');
            }
        });
    });
/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "200px";
}
/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}