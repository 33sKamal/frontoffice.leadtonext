
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

const hostName = 'leadtonext.test';

export default defineConfig({
    server: {
        hmr: {
            host: hostName,
        },
        host: hostName,
        port: 5173,
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/pdfPrinf.js',
                'resources/js/call-center-app.js',

                // Front office assets
                'resources/js/frontoffice/app/app.js',


                
            ],
            refresh: [
                'routes/**',
                'resources/views/**',
                'lang/**',
                'app/**',
                'resources/js/**',
                'resources/css/**',
            ],
        }),

        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
            'media-library-pro-vue3-attachment': '/vendor/spatie/laravel-medialibrary-pro/resources/js/media-library-pro-vue3-attachment',
            'media-library-pro-vue3-collection': '/vendor/spatie/laravel-medialibrary-pro/resources/js/media-library-pro-vue3-collection',

        },
    },
    // build: {
    //     manifest: true,
    // },
});

