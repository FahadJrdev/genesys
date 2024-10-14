import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "selector",
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                brand: "#D705F2",
                hoverBrand: "#d605f2aa",
                inverterBrand: "28FA0D",
                primaryFont: "#F0FAE2",
                oppositeContrastFont: "#000000",
                primaryBg: "#0F051D",
                oppositeContrastBg: "#FFFFFF",
                secondaryBg: "#39393E",
                tertiaryBg: "#1D1D22",
                light: {
                    primaryFont: "#0F051D",
                    oppositeContrastFont: "#FFFFFF",
                    primaryBg: "#F0FAE2",
                    oppositeContrastBg: "#000000",
                    secondaryBg: "#C6C6C1",
                    tertiaryBg: "#E2E2DD",
                },
            },
            width: {
                "custom-header": "calc(100vw - 295px)",
                "sidebar-width": "250px",
                "navbar-width": "240px",
            },
            height: {
                "custom-nav": "calc(100vh - 2rem)",
            },
            boxShadow: {
                drop: "0px 4px 10px #00072D",
            },
            backgroundImage: {
                "search-back-gradient": "linear-gradient(90deg, #3C2148 0%, #914FAE 100%);",
                "card-gradient-bg" : "linear-gradient(180deg, #3C2148 0%, #310370 100%);",
            },
            gridTemplateColumns: {
                "custom-fit": "repeat(auto-fit, minmax(100px, 1fr))",
                "responsive-fit": "repeat(auto-fit, minmax(200px, 1fr))",
            },
        },
    },

    plugins: [
        forms,
        require("tailwind-scrollbar"),
        function ({ addBase, theme }) {
            addBase({
                ":root": {
                    "--color-brand": theme("colors.brand"),
                    "--color-primary-font": theme("colors.primaryFont"),
                    "--color-primary-bg": theme("colors.primaryBg"),
                    "--color-secondary-bg": theme("colors.secondaryBg"),
                    "--color-tertiary-bg": theme("colors.tertiaryBg"),
                },
                ".light": {
                    "--color-primary-font": theme("colors.light.primaryFont"),
                    "--color-primary-bg": theme("colors.light.primaryBg"),
                    "--color-secondary-bg": theme("colors.light.secondaryBg"),
                    "--color-tertiary-bg": theme("colors.light.tertiaryBg"),
                },
            });
        },
    ],
};
