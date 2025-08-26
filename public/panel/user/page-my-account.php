<?php if (!is_user_logged_in()) {wp_redirect(home_url('/login'));} ?>
<!-- Header -->
<?php get_header() ?>
<?php
$user = wp_get_current_user();
$current_user_id = get_current_user_id();
$user_role = $user->roles[0];
$user_login = $user->user_login;
$panel_view = null;
if (isset($_GET['view'])){
$panel_view = $_GET['view'];
}
echo '<section class="lg:container lg:flex lg:items-start lg:gap-10 my-16">';
switch ($user_role) {
    case 'administrator':
        echo 'به زودی صفحه اختصاصی مدیریت راه اندازی خواهد شد';
        break;
    case 'customer':
        get_template_part( 'template/panel/user/aside','aside',$panel_view);
        if (isset($_GET['view'])){
            if ($panel_view == 'dashboard'){
                get_template_part( 'template/panel/user/dashboard');
            }
            if ($panel_view == 'authentication'){
                get_template_part( 'template/panel/user/authentication');
            }
            if ($panel_view == 'cart'){
                get_template_part( 'template/panel/user/cart');
            }
            if ($panel_view == 'ticket'){
                get_template_part( 'template/panel/user/ticket');
            }
            if ($panel_view == 'profile'){
                get_template_part( 'template/panel/user/profile');
            }
        } else {
            get_template_part( 'template/panel/user/dashboard');
        }
        break;
}
echo '</section>';
?>
<script>
    const panelLogout = document.querySelector('#panel-logout');
    panelLogout.addEventListener('click', () => {
        let logOutUrl = panelLogout.getAttribute('data-link');
        Swal.fire({
            text: "آیا می‌خواهید از حساب کاربری خود خارج شوید؟",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#003637",
            cancelButtonColor: "#d33",
            cancelButtonText: "لغو",
            confirmButtonText: "خروج از حساب",
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.replace(logOutUrl);
            }
        });
    })
</script>
<!-- Footer -->
<?php get_footer() ?>
