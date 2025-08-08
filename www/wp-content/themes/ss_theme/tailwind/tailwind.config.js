const plugin = require('tailwindcss/plugin');
const defaultTheme = require('tailwindcss/defaultTheme');
// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files trigger a rebuild.
		'./theme/**/*.php',
	],
	theme: {
		container: {
			center: true,
			padding: '1rem',
		},

		// Extend the default Tailwind theme.
		extend: {
			colors: {
				danger: '#DC4C64',
				primary: {
					DEFAULT: '#00C9A9',
				},
				secondary: {
					DEFAULT: '#333333',
					100: '#003B3E',
					200: '#E3DBD8',
				},
				'ss-green': {
					DEFAULT: '#003b3e',
				},
				'ss-light-gray': {
					DEFAULT: '#6B6B6B',
					100: '#F4F4F4',
					200: '#F5FDFC',
				},

				'ss-light-green': {
					DEFAULT: '#F0FCFA',
					100: '#F9FFFE',
				},
			},
			screens: {
				'2xl': '1312px',
			},
			fontFamily: {
				base: ['Poppins', 'sans-serif'],
				lead: ['Inter', 'sans-serif'],
				icomoon: ['icomoon'],
			},
		},
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Add Tailwind Typography (via _tw fork).
		require('@_tw/typography'),

		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson'),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require('@tailwindcss/forms'),
		// require('@tailwindcss/aspect-ratio'),
		// require('@tailwindcss/container-queries'),
	],
};