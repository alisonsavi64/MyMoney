import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        colors: {
            baseBlue: '#417FBB',       // Main color (R65 G127 B187)
            lightBlue: '#82AFD6',      // Lighter shade
            darkBlue: '#204C70',       // Darker shade
            complementaryOrange: '#BB7D41', // Complementary color
            coolBlue: '#416BBB',       // Analogous cool blue
            teal: '#41BB9B',           // Analogous teal
            neutralGray: '#C8C8C8',   // Neutral gray
            white: '#FFFFFF', // White
            black: '#000000'
        },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
};
