/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.css",
        "./app/Livewire/*.php",
    ],
    theme: {
        extend: {},
    },
    plugins: [require("@tailwindcss/typography")],
};
