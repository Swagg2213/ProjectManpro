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
                slideInFromLeft: {
                    '0%': { transform: 'translateX(-100%)' },
                    '100%': { transform: 'translateX(0)' },
                },
                slideInFromRight: {
                    '0%': { transform: 'translateX(100%)' },
                    '100%': { transform: 'translateX(0)' },
                },
            },
            animation: {
                'slide-left-infinite': 'slide-left 30s linear infinite',
                slideInLeft: 'slideInFromLeft 1s ease-out forwards',
                slideInRight: 'slideInFromRight 1s ease-out forwards',
            },
        },
    },
    plugins: [],
};
