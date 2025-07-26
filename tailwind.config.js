import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                primary: "#eddbce",
                secondary: "#be185d",
                nail: {
                    charcoal: "#94959A",
                    "light-grey": "#D2D3D4",
                    "warm-beige": "#EAE8E5",
                    "rose-gold": "#DCBBB3",
                    "blush-pink": "#F2E2D9",
                    "warm-white": "#FFFFFF",
                    cream: "#F8F6F0",
                    "text-dark": "#5A5A5A",
                },
                rose: {
                    50: "#fdf2f8",
                    100: "#fce7f3",
                    200: "#fbcfe8",
                    300: "#f9a8d4",
                    400: "#f472b6",
                    500: "#ec4899",
                    600: "#DCBBB3",
                    700: "#be185d",
                    800: "#9d174d",
                    900: "#831843",
                },
            },
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        forms,
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
