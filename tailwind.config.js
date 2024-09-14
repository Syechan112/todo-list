/** @type {import('tailwindcss').Config} */
export default {
  content: [
        "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors: {
            'custom-cream' : '#FEF9D9',
            'custom-cream-2' : '#FADFA1',
        },
    },
  },
  plugins: [],
}

