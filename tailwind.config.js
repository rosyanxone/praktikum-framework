/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            'Poppins': [],
        },
        extend: {
            animation: {
                'scroll': 'scroll 16s linear infinite'
            },
            keyframes: {
                scroll: {
                    '0%': {transform: 'translateX(0)'},
                    '100%': {transform: 'translateX(calc(-350px * 8))'},
                }
            }
        }
    },
    plugins: [],
}

