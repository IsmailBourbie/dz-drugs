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
          600: "#4C566A",
          900: "#2E3440"
        },
        'slate': {
          100: "#ECEFF4"
        }
      },
    },
    backgroundImage: {
      'medical-pattern': "url('/images/shapes/bg.svg')",
      'medical-pattern-dark': "url('/images/shapes/bg-dark.svg')",
    },
    zIndex: {
      'back': '-1',
    }
  },
  plugins: [],
  darkMode: 'class',
}