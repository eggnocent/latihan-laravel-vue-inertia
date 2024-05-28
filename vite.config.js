import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import path from 'path';

export default defineConfig({
    plugins: [vue()],
    resolve: {
        alias: {
            '@': path.resolve(__dirname, './resources/js'),
        },
    },
    server: {
        watch: {
            usePolling: true,
        },
    },
    build: {
        outDir: 'public/build',
        rollupOptions: {
            input: {
                app: 'resources/js/app.js',
            },
        },
    },
});
