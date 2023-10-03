/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.php", // Todos los archivos PHP en cualquier subcarpeta de "src"
    "./src/*.php",    // Archivos PHP directamente en "src"
    "./*.php"         // Archivos PHP directamente en la raíz del proyecto
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
