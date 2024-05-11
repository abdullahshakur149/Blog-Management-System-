import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/style.css',
                'resources/css/main.css',
                'resources/js/app.js',
                'resources/js/main-index.js',

            ],
            refresh: true,
        }),
    ],
});
