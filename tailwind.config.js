/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resource/views/**/*.{blade.php,js}"],
  theme: {
    screens: {
      'xs': '360px',
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
    },
    extend: {},
  },
  plugins: [
    require("daisyui"),
    require('tailwindcss-debug-screens')
  ],
}
