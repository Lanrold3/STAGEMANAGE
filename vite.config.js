import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/assets/css/style.css',
                'resources/assets/js/bootstrap.bundle.min.js',
                'resources/assets/js/bootstrap.min.js.map',
                'resources/assets/js/main.js',
                'resources/assets/js/aos.js',
                'resources/assets/vendor/animate.css/animate.compat.css',
                'resources/assets/vendor/animate.css/animate.css',
                'resources/assets/vendor/animate.css/animate.min.css',
                'resources/assets/vendor/aos/aos.css',
                'resources/assets/vendor/aos/aos.js',
                'resources/assets/vendor/bootstrap/css/boootstrap.min.css',
                'resources/assets/vendor/bootstrap/js/boootstrap.min.js',
                'resources/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
                'resources/assets/vendor/bootstrap-icons/fonts/bootstrap-icons.woff',
                'resources/assets/vendor/bootstrap-icons/fonts/bootstrap-icons.woff2',
                'resources/assets/vendor/bootstrap-icons/bootstrap-icons.css',
                'resources/assets/vendor/bootstrap-icons/bootstrap-icons.json',
                'resources/assets/vendor/boxicons/css/boxicons.min.css',
                'resources/assets/vendor/glightbox/css/glightbox.min.css',
                'resources/assets/vendor/remixicon/remixicon.css',
                'resources/assets/vendor/swiper/swiper-bundle.min.css',
                'assets/vendor/aos/aos.js',
                'assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
                'assets/vendor/glightbox/js/glightbox.min.js',
                'assets/vendor/isotope-layout/isotope.pkgd.min.js',
                'assets/vendor/swiper/swiper-bundle.min.js',
                'assets/vendor/waypoints/noframework.waypoints.js',
                'assets/vendor/php-email-form/validate.js',
                'assets/js/main.js',
            ],
            refresh: true,
        }),
    ],
});
