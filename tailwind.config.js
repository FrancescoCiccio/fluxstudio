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
        container: {
            maxWidth: {
                '2xl': '1280px'
            }
        },
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    400: '#666666',
                    600: '#414141',
                    900: '#212121'
                },
                secondary: {
                    400: '#F6FAFA',
                    900: '#E6E9E9',
                }
            },
        },
    },

    plugins: [forms],
};
