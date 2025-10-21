import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true, // actualise automatiquement les pages Laravel lors de changements
    }),
    vue(), // support des fichiers .vue
  ],
  server: {
    hmr: {
      host: 'localhost', // utile si tu as des problèmes avec le hot reload
    },
  },
});
