/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  
  ],
  theme: {
    fontFamily: { 
      'OpenSans' : ['Open Sans', 'sans-serif'],
      'Kanit' : ['Kanit', 'sans-serif'],

    },
    screens: {
    'xs': '200px',
    '2xs': '500px',
    'sm': '770px',
    // => @media (min-width: 640px) { ... }

    'md': '800px',
    // => @media (min-width: 768px) { ... }

    'lg': '1024px',
    // => @media (min-width: 1024px) { ... }

    'xl': '1311px',
    // => @media (min-width: 1280px) { ... }

    '2xl': '1536px',
    // => @media (min-width: 1536px) { ... }
  },
    extend: {},
  },
  plugins: [],
}
