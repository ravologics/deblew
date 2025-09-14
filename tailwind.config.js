import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                greenish: {
                    DEFAULT: '#005d47',
                    50:  "#e6f4f1",
                    100: "#cce9e3",
                    200: "#99d3c8",
                    300: "#66bdaa",
                    400: "#33978c",
                    500: "#00715e", // slightly lighter than DEFAULT
                    600: "#005d47", // base color
                    700: "#004236",
                    800: "#002e24",
                    900: "#001a12",
                },
            },
        },
    },

    plugins: [forms],
};
