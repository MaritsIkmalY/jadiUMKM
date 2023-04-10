import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/css/style.css",
                "resources/css/plugins/pe-icon-7-stroke.css",
                "resources/css/plugins/font-awesome.min.css",
                "resources/css/plugins/animate.min.css",
                "resources/css/plugins/swiper-bundle.min.css",
                "resources/css/plugins/odometer.min.css",
                "resources/css/plugins/nice-select.css",
                "resources/css/plugins/select2.min.css",
                "resources/css/plugins/ion.rangeSlider.min.css",
                "resources/js/vendor/modernizr-3.11.2.min.js",
                "resources/js/vendor/jquery-3.5.1.min.js",
                "resources/js/plugins/popper.min.js",
                "resources/js/plugins/bootstrap.min.js",
                "resources/js/plugins/swiper-bundle.min.js",
                "resources/js/plugins/ajax-contact.js",
                "resources/js/plugins/appear.js",
                "resources/js/plugins/odometer.min.js",
                "resources/js/plugins/jquery.nice-select.min.js",
                "resources/js/plugins/select2.min.js",
                "resources/js/plugins/ion.rangeSlider.min.js",
                "resources/js/plugins/jquery.zoom.min.js",
                "resources/js/main.js",
            ],
            refresh: true,
        }),
    ],
});
