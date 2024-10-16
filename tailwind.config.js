/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{js,jsx,ts,tsx}", "*.php", "./**/*.php"],
  theme: {
    extend: {
      fontFamily: {
        "open-sans": [
          "'Open Sans'",
          "ui-sans-serif",
          "system-ui",
          "sans-serif",
        ],
        poppins: ["'Poppins'", "ui-sans-serif", "system-ui", "sans-serif"],
        bakbakOne: ["Bakbak One", "sans-serif"],
      },
    },
  },
  plugins: [],
};
