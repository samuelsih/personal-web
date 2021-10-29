module.exports = {
    purge: [
        './resources/views/**/*.blade.php',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
      extend: {
        fontFamily: {
          base: "'Montserrat', 'serif'",
        },

        colors: {
          'text-primary': '#1f2937',
          'text-secondary': '#1d4ed8',
          'text-third': '#ffc72c',
          'text-white': '#e5e7eb',

          'bg-secondary': '#1d4ed8',
          'bg-third': '#93c5fd',
        },
      },
    },
    variants: {
      extend: {},
    },
    plugins: [
        // require('@tailwindcss/typography')
    ],
  };
