/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',  // tous les fichiers Blade
    './resources/**/*.js',         // tous les fichiers JS
    './resources/**/*.vue',        // tous les fichiers Vue
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Instrument Sans', 'ui-sans-serif', 'system-ui', 'sans-serif'],
      },
      colors: {
        // Tu peux ajouter tes couleurs personnalisées ici
        primary: '#5A67D8',
        secondary: '#F6E05E',
      },
    },
  },
  plugins: [],
};
