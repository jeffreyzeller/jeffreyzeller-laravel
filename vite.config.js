import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";
// Imagemin
import viteImagemin from '@vheemstra/vite-plugin-imagemin';
import imageminMozjpeg from 'imagemin-mozjpeg';
import imageminWebp from 'imagemin-webp';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        viteImagemin({
            plugins: {
                jpg: imageminMozjpeg({ quality: 80 }),
            },
            makeWebp: {
                plugins: {
                    jpg: imageminWebp({ quality: 80 }),
                },
            },
        }),
        tailwindcss(),
    ],
    server: {
        cors: true,
    },
});