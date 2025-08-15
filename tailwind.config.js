import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
        './resources/css/**/*.css',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                inter: ['Inter', 'sans-serif'],
                sinfony: ['Sinfony', 'sans-serif'],
            },
            colors: {
                'light-bg': '#d5e9fd',
                'dark-bg': '#041440',
                'black-50': 'rgba(0, 0, 0, 0.5)',
                'white-50': 'rgba(255, 255, 255, 0.5)',
                'dark-link': '#7dc0cf',
                'switch-light-bg': '#ccc',
                'switch-circle': '#ffffff',
                'switch-icon-yellow': '#ffc107',
                'purple-dark': '#6a11cb',
                'blue-main': '#2575fc',
                'purple-light': '#976cc5',
                'whatsapp-green': '#25D366',

                // Nuevos colores del footer
                'footer-blue': '#206ef6',
                'footer-text-dark': '#333333', // Usaremos un valor sólido para facilitar la lectura
                'footer-dark-blue': '#08277a',

                // Colores para los íconos sociales del formulario (mapeo de Bootstrap)
                'form-primary': '#007bff', // Usado para Facebook
                'form-info': '#17a2b8',    // Usado para Twitter
                'form-danger': '#dc3545',  // Usado para Instagram
                'form-dark': '#343a40',    // Usado para LinkedIn
            },
            boxShadow: {
                'navbar-custom': '0 4px 6px rgba(0, 0, 0, 0.5)',
                'switch-custom': '0 2px 4px rgba(104, 56, 56, 0.2)',
                'whatsapp-custom': '0 4px 8px #000000',
            },
        },
    },
    plugins: [forms],
};
