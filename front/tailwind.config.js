/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {},
    colors: {
      'tekken-dark-blue' : "#0D1C30",
      'tekken-red' : '#DD1D5B',
      'tekken-light-gray' : '#D9D9D9',
      'tekken-sky-blue' : '#E8FFFF'
    },
  },
  plugins: [],
}
