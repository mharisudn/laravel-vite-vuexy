import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';
import legacy from '@vitejs/plugin-legacy';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        legacy({
            targets: ['defaults', 'not IE 11'],
        }),
    ],
    resolve: {
        alias: {
            '@themes': path.resolve(__dirname, 'public/theme/assets')
        }
    },
});
