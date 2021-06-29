module.exports = {
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: "class", // or 'media' or 'class'
    theme: {
        fontFamily: {
            playfair: ["Playfair Display"],
            poppins: ["Poppins", "sans-serif"],
        },
        extend: {
            colors: {
                accentBlack: "#2B2B28",
                accentOrange: "#F59828",
                accentOrangeHover: "#FFAF4F",
                accentCyan: "#3BBABE",
                accentCyanHover: "#48D9DE",
                accentDarkGray: "#67675D",
                accentDarkBlue: "#152C5B",
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [require("@tailwindcss/forms")],
};
