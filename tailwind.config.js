import filamentPreset from "./vendor/filament/support/tailwind.config.preset";


/** @type {import("tailwindcss").Config} */
export default {
    presets: [filamentPreset],
    content: [],
    theme: {
        extend: {
            screens: {
                sm: "400px",
                md: "700px",
                lg: "1024px",
                xl: "1280px",
                "2xl": "1440px",
                "3xl": "1680px",
                "4xl": "1920px",
            },
        },
    },
    plugins: [],
};

