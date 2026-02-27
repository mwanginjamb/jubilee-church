/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './views/**/*.php',
    './widgets/**/*.php',
    './web/js/**/*.js',
  ],
  darkMode: "class",
  theme: {
    extend: {
      colors: {
        "primary": "#135bec",
        "sky-accent": "#0ea5e9",
        "crimson-cta": "#DC143C",
        "background-light": "#f6f6f8",
        "background-dark": "#101622",

        // --- statement of faith page uses these aliases ---
        // map them to the same values so both names work
        "sky-blue": "#0ea5e9",   // alias for sky-accent
        "crimson": "#dc2626",   // alias for crimson-cta
      },
      fontFamily: {
        "display": ["Manrope", "sans-serif"]
      },
      borderRadius: {
        "DEFAULT": "0.25rem",
        "lg": "0.5rem",
        "xl": "0.75rem",
        "full": "9999px"
      },

    },
  },
  plugins: [],
}

