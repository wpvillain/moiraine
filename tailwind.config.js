/** @type {import('tailwindcss').Config} config */
// import flowbite from 'flowbite/plugin.js';
const config = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
        sm: '2rem',
        lg: '4rem',
        xl: '5rem',
        '2xl': '6rem',
      }
    },
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1300px',
      'xl': '1280x',
      '2xl': '1536px'
    },
    fontFamily: {
      'body': ['"Inconsolata"', 'Serif'],
      'heading': ['"Poppins"', "Inconsolata"],
    },
    extend: {
      colors: {
        'black-100': '#0c1c2e',
        'black-200': '#000',
        'grey': '#414141',
        'off-white': '#e6ecef',
        'blue': '#2d80e2',
        'red': '#e95941',
        'yellow': '#fed15a',
        'cyan': '#71e2df',
      },
      spacing: {
        '16': '4.375rem'
      },
      fontSize: {
        'xs':'.9375rem',
        '2xl':'1.5625rem',
        '4xl':'2.5rem',
        '6vw': '6vw',
        '9vw': '9vw',
        '12vw': '12vw'
      }
    },
  },
  plugins: [
    // flowbite,
  ],
};

export default config;
