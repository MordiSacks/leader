/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './resources/views/**/*.blade.php',
        './resources/builds/default/css/**/*.{css}',
        './resources/builds/default/js/**/*.{vue,js}',
    ],
    plugins: [],
    theme: {
        extend: {},
    },
};
