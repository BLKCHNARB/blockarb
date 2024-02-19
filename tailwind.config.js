const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                gray_40: '#FAFAFA',
                gray_50: '#F6F7F9',
                gray_100: '#E2E6EC',
                gray_200: '#D4DAE2',
                blue_100: '#E8EDFF',
                blue_300: '#476FFC',
                blue_600: '#194BFB',
                blue_800: '#1744E4',
                black_200: '#96989E',
                black_400: '#666A72',
                black_600: '#484D56',
                black_800: '#1A202C',
                black_900: '#1A1C1E',
                neutral_800: '#170F49',
                success: '#22C55E',
                failed: '#FF4747',
                warning: '#FACC15',
            },

            fontSize: {
                xxs: "",
                xs: "",
                s: "0.75rem", //12px
                sm: "0.875rem", //14px
                base: "1rem", //16px
                md: "1.125rem", //18px
                lg: "1.25rem", //20px
                xl: "1.5rem", //24px
                xxl: "2rem", //32px
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
