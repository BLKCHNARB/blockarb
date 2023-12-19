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
                primary: {
                    DEFAULT: '#091F4B',
                    50: '#f6f9ff',
                    100: '#e8effc',
                    200: '#bbcff7',
                    300: '#8daff1',
                    400: '#608eec',
                    500: '#326ee6',
                    600: '#1955cd',
                    700: '#13429f',
                    800: '#0e2f72',
                },
                secondary: {
                    DEFAULT: '#F2B950',
                    100: '#fdf6e7',
                    200: '#fae3b8',
                    300: '#f6d088',
                    400: '#f3bd59',
                    500: '#efaa29',
                    600: '#d69010',
                    700: '#a6700c',
                    800: '#775009',
                }
            },

            borderRadius: {
                sb: "0.25rem"
            },

            backgroundImage: {
                'clients': "url('/public/images/clients.jpg')",
                'about' : "url('/public/images/about.jpg')"
            }

        },
        fontFamily: {
            // sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            roboto: ["Source Sans Pro", "sans-serif"],
            poppins: ["Poppins", "sans-serif"],
            amiri: ["amiri", "sans-serif"],
            gilroy: ["gilroy", "sans-serif"],
            cabinet: ["cabinet", "sans-serif"],
            isidora: ["isidora", "sans-serif"]
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
