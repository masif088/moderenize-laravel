import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: ['./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php', './vendor/laravel/jetstream/**/*.blade.php', './storage/framework/views/*.php', './resources/views/**/*.blade.php',],

    theme: {

        colors: {
            wishka: {200:"#DBE5F8",300:"#61708B",400:"#597FC1",500:"#465E89",600:"#3C4F71",700:"#314057"},
            blue: {
                200: "#EBF3FE", 300: "#539BFF", 400: "#4784d9", 500: "#ECF2FF", 600: "#5D87FF", 700: "#4f73d9",
            }, cyan: {
                400: "#E8F7FF", 500: "#49BEFF", 600: "#3ea2d9",
            }, teal: {
                400: "#E6FFFA", 500: "#13DEB9", 600: "#10bd9d",
            }, yellow: {
                400: "#FEF5E5", 500: "#FFAE1F", 600: "#d9941a",
            }, red: {
                400: "#FDEDE8", 500: "#FA896B", 600: "#d5745b",
            }, gray: {
                100: "#ebf1f6", 200: "#D2D2D2", 400: "#e5eaef", 500: "#5A6A85", 600: "#2a3547", 700: "#202936",
            }, transparent: "transparent", white: "#fff",black: "#c1c1c1",
        },

        fontFamily: {
            sans: ["Plus Jakarta Sans", "sans-serif"],
        }, borderRadius: {
            none: "0px", md: "7px", full: "50%", "2xl": "15px", "3xl": "9999px",
        }, extend: {
            boxShadow: {
                md: "rgba(145,158,171,0.2) 0px 0px 2px 0px,rgba(145,158,171,0.12) 0px 12px 24px -4px",
                xl: "inset 0 1px 2px rgba(90,106,133,0.075)",
            }, fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        }, container: {
            center: true, padding: "20px",
        },
    },


    variants: {}, plugins: [forms, typography, require("@tailwindcss/forms")({
        strategy: "base",
    }), require("@tailwindcss/typography"), require("preline/plugin"),],
};
