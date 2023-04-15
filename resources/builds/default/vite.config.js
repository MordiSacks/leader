import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/builds/default/js/app.js'],
            refresh: true,
        }),
        vue({template: {transformAssetUrls: {base: null, includeAbsolute: false}}}),
    ],
    css: {
        postcss: {
            plugins: [
                require('tailwindcss')({config: 'resources/builds/default/tailwind.config.js'}),
                require('autoprefixer'),
            ],
        },
    },
});
