const plugin = require('tailwindcss/plugin');

module.exports = {
  mode: 'jit',
  purge: [
    './public/**/*.html',
    './src/**/*.{js,jsx,ts,tsx,vue}',
  ],
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
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
