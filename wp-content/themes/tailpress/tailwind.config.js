const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

module.exports = {
    content: [
        './*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt'
    ],
    theme: {
      extend: {
        colors: {
          'primary': '#222A30',
          'secondary': '#888888',
          'tertiary': '#F8F7F1',
          'quaternary': '#92C6FD',
          'grey': '#F0F0F0',
          'black': '#000000',
          'white': '#FFFFFF',
          'pastal-green': {
            DEFAULT: '#10B981',
            '50': '#8CF5D2',
            '100': '#79F3CB',
            '200': '#53F0BC',
            '300': '#2EEDAE',
            '400': '#13DF9B',
            '500': '#10B981',
            '600': '#0C855D',
            '700': '#075239',
            '800': '#031E15',
            '900': '#000000'
          },
        },
      },
      fontFamily: {
        'header': ['Lora', 'Helvetica', 'sans-serif'],
        'body': ['Montserrat', 'Helvetica', 'sans-serif'],
      },
    },
    plugins: [
        tailpress.tailwind
    ]
};
