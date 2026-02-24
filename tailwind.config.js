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
        "crimson": "#dc2626"
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

