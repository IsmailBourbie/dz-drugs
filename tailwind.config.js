module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'gray': {
          600: "#4C566A"
        },
      },
    },
    backgroundImage: {
      'medical-pattern': "url('/images/shapes/bg.svg')",
    },
    zIndex: {
      'back': '-1',
    }
  },
  plugins: [],
}