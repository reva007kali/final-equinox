import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                inter:['Inter', 'sans-serif'],
            },
            colors: {
                primary: "#04306a", // Custom primary color (blue)
                secondary: "#5dc5ea", // Custom secondary color (purple)
                third: "#c1a469", // Custom accent color (yellow)
            },
        },
    },

    plugins: [forms],
};
