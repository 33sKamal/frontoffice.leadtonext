
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

const hostName = 'localhost';

export default defineConfig({
    // server: {
    //     hmr: {
    //         host: hostName,
    //     },
    //     host: hostName,
    //     port: 5173,
    // },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',

                'resources/js/front-office/webflow.0770ec808.js',
                // 'resources/js/front-office/gsap.min.js',
                'resources/js/front-office/ScrollTrigger.min.js',
                'resources/js/front-office/SplitText.min.js',
                'resources/js/front-office/MotionPathPlugin.min.js',
                'resources/js/front-office/main.js',
                
                'resources/css/front-office/main.css',

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

