import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    server: {
        hmr: {
            host: 'localhost',
        },
        port: 5173,
        host: true,
    },
  plugins: [
      vue(),
      laravel({
          input: ["resources/css/app.css", "resources/js/app.js"],
          refresh: true,
      }),
  ],
});
