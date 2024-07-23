/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './public/*.html',
    './public/assets/js/*.js'
  ],
  darkMode: 'class',
  theme: {
    extend: {
      boxShadow: {
        'box-shadow': '0 4px 24px 0px rgba(0, 0, 0, 0.1)',
        'submenu-shadow': '0 1px 8px 0px rgba(0, 0, 0, 0.1)',
      },
      dropShadow: {
        'box-shadow': '0 1px 8px rgba(0, 0, 0, 0.1)',
        'box-shadow-2': '0 -7px 3px rgba(0, 0, 0, 0.1)',
      },
      colors: {
        "primary": {
          100: "#FFA767",
          200: "#FF994D",
          300: "#FF8A34",
          400: "#FF7C1A",
          500: "#FF6D01",
          600: "#E66201",
          700: "#CC5701",
          800: "#B34C01",
          900: "#994101",
          950: "#803701"
        },
        "secondary": {
          100: "#B298F6",
          200: "#936EF2",
          300: "#8459F1",
          400: "#7445EF",
          500: "#6530ED",
          600: "#5B2BD5",
          700: "#5126BE",
          800: "#4722A6",
          900: "#3D1D8E",
          950: "#28135F"
        },
        "nav-link": {
          "normal": "#0A184A",
          "hover": "#0e2368"
        }
      },
      keyframes: {
        off: {
          '0%, 100%': { transform: 'rotate(-3deg) scale(1.2)' },
          '50%': { transform: 'rotate(3deg) scale(1)' },
        },
        scale: {
          '0%': { transform: 'scale(1.1)', opacity: '1' },
          '100%': { transform: 'scale(1)', opacity: '.9' },
        },
        type: {
          '0%': { visible: 'visible', opacity: '1' },
          '100%': { visible: 'hidden', opacity: '0' },
        },
        play: {
          '0%': {transform: 'translate(-50%, -50%) scale(0.2)', opacity: 0},
          '50%': {opacity: 0.9},
          '100%': {transform: 'translate(-50%, -50%) scale(0.9)', opacity: 0},
        }
      },
      animation: {
        off: 'off 1s ease-in-out infinite',
        scale: 'scale .5s ease-in-out alternate infinite',
        type: 'type .5s ease-in-out alternate infinite',
        play: 'play 3s ease-in-out infinite',
      },
      fontFamily: {
        "light-yekanbakh" : "light-yekanbakh",
        "regular-yekanbakh" : "regular-yekanbakh",
        "medium-yekanbakh" : "medium-yekanbakh",
        "bold-yekanbakh" : "bold-yekanbakh",
        "heavy-yekanbakh" : "heavy-yekanbakh",
        "fat-yekanbakh" : "fat-yekanbakh",
      },
      spacing: {
        "30" : "7.5rem"
      },
      container: {
      center: true,
      padding: {
        DEFAULT: '1.5rem',
        lg: '0.625rem',
      },
      },
    },
    screens: {
      'xs': '480px',
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px'
    },
    fontSize: {
      xs: ['.75rem', '1.7'],
      sm: ['0.875rem', '1.7'],
      base: ['1rem', '1.7'],
      lg: ['1.125rem', '1.7'],
      xl: ['1.25rem', '1.7'],
      '2xl': ['1.5rem', '1.7'],
      '3xl': ['1.875rem', '1.7'],
      'heavy-h1': ['80px',{lineHeight: '70px', fontWeight: '900',}],
      'heavy-h2': ['60px',{lineHeight: '76px', fontWeight: '900',}],
      'heavy-h3': ['40px',{lineHeight: '58px', fontWeight: '900',}],
      'heavy-h4': ['30px',{lineHeight: '42px', fontWeight: '900',}],
      'heavy-h5': ['24px',{lineHeight: '46px', fontWeight: '900',}],
      'heavy-h6': ['20px',{lineHeight: '36px', fontWeight: '900',}],
      'heavy-b1': ['16px',{lineHeight: '20px', fontWeight: '900',}],
      'heavy-c1': ['14px',{lineHeight: '22px', fontWeight: '900',}],
      'heavy-c2': ['18px',{lineHeight: 'auto', fontWeight: '900',}],
      'heavy-s1': ['12px',{lineHeight: '18px', fontWeight: '900',}],
      'heavy-t1': ['10px',{lineHeight: '16px', fontWeight: '900',}],
      'heavy-a1': ['18px',{lineHeight: '40px', fontWeight: '900',}],

      'bold-h1': ['80px',{lineHeight: '70px', fontWeight: '700',}],
      'bold-h2': ['60px',{lineHeight: '60px', fontWeight: '700',}],
      'bold-h3': ['40px',{lineHeight: '44px', fontWeight: '700',}],
      'bold-h4': ['30px',{lineHeight: '34px', fontWeight: '700',}],
      'bold-h5': ['24px',{lineHeight: '38px', fontWeight: '700',}],
      'bold-h6': ['20px',{lineHeight: '24px', fontWeight: '700',}],
      'bold-b1': ['16px',{lineHeight: '32px', fontWeight: '700',}],
      'bold-b2': ['18px',{lineHeight: '38px', fontWeight: '700',}],
      'bold-c1': ['14px',{lineHeight: '22px', fontWeight: '700',}],
      'bold-s1': ['12px',{lineHeight: '18px', fontWeight: '700',}],
      'bold-t1': ['10px',{lineHeight: '16px', fontWeight: '700',}],

      'medium-h1': ['80px',{lineHeight: '70px', fontWeight: '500',}],
      'medium-h2': ['60px',{lineHeight: '60px', fontWeight: '500',}],
      'medium-h3': ['40px',{lineHeight: '44px', fontWeight: '500',}],
      'medium-h4': ['30px',{lineHeight: '34px', fontWeight: '500',}],
      'medium-h5': ['24px',{lineHeight: '28px', fontWeight: '500',}],
      'medium-h6': ['20px',{lineHeight: '24px', fontWeight: '500',}],
      'medium-b1': ['16px',{lineHeight: '34px', fontWeight: '500',}],
      'medium-b3': ['14px',{lineHeight: '26px', fontWeight: '500',}],
      'medium-b4': ['22px',{lineHeight: '44px', fontWeight: '500',}],
      'medium-b5': ['20px',{lineHeight: '40px', fontWeight: '500',}],
      'medium-c1': ['14px',{lineHeight: '26px', fontWeight: '500',}],
      'medium-s1': ['12px',{lineHeight: '18px', fontWeight: '500',}],
      'medium-t1': ['10px',{lineHeight: '16px', fontWeight: '500',}],

      'regular-h1': ['80px',{lineHeight: '70px', fontWeight: '400',}],
      'regular-h2': ['60px',{lineHeight: '60px', fontWeight: '400',}],
      'regular-h3': ['40px',{lineHeight: '44px', fontWeight: '400',}],
      'regular-h4': ['30px',{lineHeight: '34px', fontWeight: '400',}],
      'regular-h5': ['24px',{lineHeight: '28px', fontWeight: '400',}],
      'regular-h6': ['20px',{lineHeight: '24px', fontWeight: '400',}],
      'regular-b1': ['16px',{lineHeight: '20px', fontWeight: '400',}],
      'regular-b2': ['18px',{lineHeight: '24px', fontWeight: '400',}],
      'regular-b3': ['18px',{lineHeight: '40px', fontWeight: '400',}],
      'regular-c1': ['14px',{lineHeight: '22px', fontWeight: '400',}],
      'regular-s1': ['12px',{lineHeight: '18px', fontWeight: '400',}],
      'regular-t1': ['10px',{lineHeight: '16px', fontWeight: '400',}],

      'light-h1': ['80px',{lineHeight: '70px', fontWeight: '300',}],
      'light-h2': ['60px',{lineHeight: '60px', fontWeight: '300',}],
      'light-h3': ['40px',{lineHeight: '44px', fontWeight: '300',}],
      'light-h4': ['30px',{lineHeight: '34px', fontWeight: '300',}],
      'light-h5': ['24px',{lineHeight: '28px', fontWeight: '300',}],
      'light-h6': ['20px',{lineHeight: '24px', fontWeight: '300',}],
      'light-b1': ['16px',{lineHeight: '20px', fontWeight: '300',}],
      'light-c1': ['14px',{lineHeight: '22px', fontWeight: '300',}],
      'light-s1': ['12px',{lineHeight: '18px', fontWeight: '300',}],
      'light-t1': ['10px',{lineHeight: '16px', fontWeight: '300',}],
    }
  },
  plugins: [
    function ({ addVariant }) {
      addVariant('child', '& > *');
      addVariant('child-hover', '& > *:hover');
      addVariant('child-second', '& > * > *');
      addVariant('child-third', '& > * > * > *');
      addVariant('child-third-a', '& > * > * > a');
      addVariant('child-third-ul', '& > * > * > ul');
    },
    require('tailwind-scrollbar-hide'),
    require('@xpd/tailwind-3dtransforms'),
    require("tailwindcss-animation-delay")
  ],
}

