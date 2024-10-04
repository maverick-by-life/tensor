/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/*.php'],
  theme: {
    colors: {
      black: '#171717',
      dark: '#212121',
      orange: '#be713c',
      cream: '#f5e2c3',
      white: '#ffffff',
      grey: '#bdbdbd',
    },
    borderRadius: {
      twenty: '20px',
      full: '9999px',
    },
    extend: {
      backgroundImage: {
        play: "url('../img/play.svg')",
      },
    },
  },
  plugins: [],
};
