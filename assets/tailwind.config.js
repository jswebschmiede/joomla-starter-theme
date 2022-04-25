const _ = require("lodash");
const theme = require("../theme.json");
const defaultTheme = require("tailwindcss/defaultTheme");
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

module.exports = {
	content: [
		"../**.php",
		"../**/**.php",
		"./src/js/**.js",
		"./src/**/*.{html,js}",
		"./node_modules/tw-elements/dist/js/**/*.js",
		"./safelist.txt",
	],
	theme: {
		container: {
			padding: {
				DEFAULT: "1rem",
				sm: "2rem",
				lg: "0rem",
			},
		},
		extend: {
			fontFamily: {
				sans: ["Mulish", ...defaultTheme.fontFamily.sans],
				highlight: ["Bangers, cursive"],
			},
			colors: tailpress.colorMapper(
				tailpress.theme("settings.color.palette", theme)
			),
			fontSize: tailpress.fontSizeMapper(
				tailpress.theme("settings.typography.fontSizes", theme)
			),
		},
		screens: {
			xs: "480px",
			sm: "600px",
			md: "782px",
			lg: tailpress.theme("settings.layout.contentSize", theme),
			xl: tailpress.theme("settings.layout.wideSize", theme),
			"2xl": "1440px",
		},
	},
	plugins: [
		require("@tailwindcss/typography"),
		require("tailwind-scrollbar"),
		require("tw-elements/dist/plugin"),
		// require("tailwind-scrollbar-hide"),
		require("@tailwindcss/forms"),
		tailpress.tailwind,
	],
};
