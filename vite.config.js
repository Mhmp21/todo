import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
<<<<<<< HEAD
=======
import vue from '@vitejs/plugin-vue';
>>>>>>> 34415bd (yrexuytifvyuhuih)

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: ['resources/js/app.js'],
            refresh: true,
        }),
=======
            input: 'resources/js/app.js',
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
>>>>>>> 34415bd (yrexuytifvyuhuih)
    ],
});
