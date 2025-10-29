import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
  plugins: [
    laravel({
      // On inclut explicitement le JS et le CSS
      input: [
        'resources/js/main.js',   // ton fichier principal Vue
        'resources/css/app.css'   // ton CSS Tailwind
      ],
      refresh: true, // permet le hot reload sur Blade et Vue
    }),
    vue(),
  ],
});
