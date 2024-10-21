/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./pages/**/*.{html,js}",
        "./components/**/*.{html,js}",
        "./src/**/*.{html,js}",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                montserrat: ["Inter", "sans-serif"],
            },
            keyframes: {
                'slide-left': {
                  from: { transform: 'translateX(0)' },
                  to: { transform: 'translateX(-10%)' },
                },
            },
            animation: {
                'slide-left-infinite': 'slide-left 20s linear infinite',
            },
        },
    },
    plugins: [],
};
