import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';


export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss({

            content: [
                './resources/**/*.blade.php',
                './resources/**/*.js',
                './resources/**/*.vue',
            ],

            theme: {
                extend: {
                    fontFamily: {
                        'opensans': ['Open Sans', 'sans-serif'], 
                    },
                    colors: {
                        "theme-dark-green": "#28728F",

                    },
                },
            },
            plugins: [],
        }),

    ],
});
