module.exports = {
  purge: [],
  darkMode: 'class',
  theme: {
    extend: {},
  },
  variants: {
    extend: {
      textOpacity: ['dark'],
      animation: ['hover', 'focus'],
      boxDecorationBreak: ['hover', 'focus'],
      transitionProperty: ['responsive', 'motion-safe', 'motion-reduce'],
      backgroundColor: ['checked'],
      borderColor: ['checked'],
    },
  },
  plugins: [],
}
