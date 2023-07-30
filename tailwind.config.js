const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        colors: {
            unyu: "#fdf4ff",
            oyen: "#ffe5d0",
        },
        extend: {
            fontFamily: {
                sans: ["Poppins", ...defaultTheme.fontFamily.sans],
            },
        },
    },
    daisyui: {
        themes: [
            {
                mytheme: {
                    primary: "#570df8",

                    secondary: "#f000b8",

                    accent: "#1dcdbc",

                    neutral: "#2b3440",

                    "base-100": "#ffffff",

                    info: "#3abff8",

                    success: "#36d399",

                    warning: "#fbbd23",

                    error: "#f87272",
                },
            },
        ],
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("daisyui"),
        require("flowbite/plugin"),
    ],
    variants: {
        extend: {
            display: ["group-focus"],
            opacity: ["group-focus"],
            inset: ["group-focus"],
        },
    },
};
