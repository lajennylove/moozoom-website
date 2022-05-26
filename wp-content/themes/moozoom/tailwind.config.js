module.exports = {
    content: ['./**/*.php', './**/*.html', './safelist.txt' ],
	mode: 'jit',
	theme: {
		extend: {
			lineHeight: {
				'extra-loose': '2.5',
				'12': '3rem',
				'14': '3.5rem',
				'16': '4rem',
			  },
			colors: {
				'violet-700': '#6500FF',
				'purple-700': '#6500FF',
				'black': '#333333',
			},
		},
	},
	variants: {
		extend: {},
	},
	plugins: [],
}
