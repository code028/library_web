// tailwind.config.js
module.exports = {
  content: ["./components/**/*.{php,js}", "./pages/**/*.{php,js}", "./**/*.{php,js}"],
  media: false, // or 'media' or 'class'
  theme: {
    extend: {
      animation: {
        "spin-slow": "spin 3s linear infinite",
      },
    },
  },
  variants: {},
  plugins: [require("@tailwindcss/forms")],
};
