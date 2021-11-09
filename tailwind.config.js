const colors = require('tailwindcss/colors');

module.exports = {
  mode: "jit",
  purge: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
		extend: {
			screens: {
				'xs' : '500px',
				'2lg': '1100px',
				'3xl': '1921px'
			},
			height: {
				'min': 'min-content',
				'max': 'max-content',
				'inherit': 'inherit',
				'initial': 'initial'
			},
			minHeight: {
				'min': 'min-content',
				'max': 'max-content'
			},
			width: {
				'inherit': 'inherit',
				'initial': 'initial'
			},
			animation: {
				'spin-fast': 'spin .5s linear infinite'
			},
			inset: {
				'inherit': 'inherit',
				'initial': 'initial'
			},
			padding: {
				'3.75': '15px',
				'-3.75': '-15px'
			},
			margin: {
				'3.75': '15px',
				'-3.75': '-15px'
			}
		},
		colors: {
			transparent: 'transparent',
			current: 'currentColor',
			black: colors.black,
      white: colors.white,
			blueGray: colors.blueGray,
			coolGray: colors.coolGray,
			gray: colors.gray,
			trueGray: colors.trueGray,
			warmGray: colors.warmGray,
			red: colors.red,
			orange: colors.orange,
			amber: colors.amber,
			yellow: colors.yellow,
			lime: colors.lime,
			green: colors.green,
			emerald: colors.emerald,
			teal: colors.teal,
			cyan: colors.cyan,
			sky: colors.sky,
			blue: colors.blue,
			indigo: colors.indigo,
			violet: colors.violet,
			purple: colors.purple,
			fuchsia: colors.fuchsia,
			pink: colors.pink,
			rose: colors.rose,
		},
	},
	plugins: [
		require('@tailwindcss/line-clamp')
	],
};
