const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

/* for backend*/
mix.styles([
    'public/global/css/icons/icomoon/styles.css',
    'public/global/css/icons/fontawesome/styles.min.css',
    'public/global/css/bootstrap.min.css',
    'public/global/css/bootstrap_limitless.min.css',
    'public/global/css/layout.min.css',
    'public/global/css/components.min.css',
    'public/global/css/colors.min.css',
    'public/global/css/toastr.css',
], 'public/admin/css/backend.css');


mix.scripts([
    'public/global/js/main/jquery.min.js',
    'public/global/js/main/bootstrap.bundle.min.js',
    'public/global/js/plugins/extensions/jquery_ui/widgets.min.js',
    'public/global/js/plugins/loaders/blockui.min.js',
    'public/global/js/plugins/tables/datatables/datatables.min.js',
    'public/global/js/plugins/forms/selects/select2.min.js',
    'public/global/js/plugins/forms/styling/uniform.min.js',
    'public/global/js/toastr.min.js',
    'public/global/js/jquery.form.js',
    'public/global/js/app.js',
    'public/global/js/demo_pages/datatables_advanced.js',
    'public/global/js/plugins/uploaders/dropzone.min.js'
], 'public/admin/js/backend.js');



/* for frontend*/

mix.styles([
    'public/frontend/fonts/icomoon/style.css',
    'public/frontend/css/bootstrap.min.css',
    'public/frontend/css/jquery-ui.css',
    'public/frontend/css/owl.carousel.min.css',
    'public/frontend/css/owl.theme.default.min.css',
    'public/frontend/css/jquery.fancybox.min.css',
    'public/frontend/css/bootstrap-datepicker.css',
    'public/frontend/fonts/flaticon/font/flaticon.css',
    'public/frontend/css/aos.css',
    'public/frontend/css/style.css',
    'public/frontend/css/custom.css'
], 'public/css/frontend.css');


mix.scripts([
    'public/frontend/js/jquery-3.3.1.min.js',
    'public/frontend/js/jquery-migrate-3.0.1.min.js',
    'public/frontend/js/jquery-ui.js',
    'public/frontend/js/popper.min.js',
    'public/frontend/js/bootstrap.min.js',
    'public/frontend/js/owl.carousel.min.js',
    'public/frontend/js/jquery.stellar.min.js',
    'public/frontend/js/jquery.countdown.min.js',
    'public/frontend/js/bootstrap-datepicker.min.js',
    'public/frontend/js/jquery.easing.1.3.js',
    'public/frontend/js/aos.js',
    'public/frontend/js/jquery.fancybox.min.js',
    'public/frontend/js/jquery.sticky.js',
    'public/frontend/js/main.js'
], 'public/js/frontend.js');