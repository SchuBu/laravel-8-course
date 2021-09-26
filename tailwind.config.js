const colors = require('tailwindcss/colors')

module.exports = {
    mode: 'jit',
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                lime: colors.lime,
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/line-clamp'),
    ],
}
