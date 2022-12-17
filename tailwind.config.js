/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      boxShadow: {
        'hrlist': '-12px -6px 12px #dbeafe,12px -6px 12px #dbeafe, 0px 5px 12px black'
      },
      height: {
        'screen5': '83.333vh'
      },
    },
  },
  plugins: [],
}
