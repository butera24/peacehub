import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/sass/resources.scss',
                'resources/sass/app.scss',
                'resources/sass/services.scss',
                'resources/sass/about.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
