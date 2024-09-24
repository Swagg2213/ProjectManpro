/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                montserrat: ["Inter", "sans-serif"],
            },
            keyframes: {
                'slide-left': {
                  from: { transform: 'translateX(0)' },
                  to: { transform: 'translateX(-30%)' },
                },
            },
            animation: {
                'slide-left-infinite': 'slide-left 10s linear infinite',
            },   
        },
    },
    plugins: [],
};