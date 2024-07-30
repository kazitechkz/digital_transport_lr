/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
		"./resources/**/*.blade.php",
		 "./resources/**/*.js",
		 "./resources/**/*.vue",
		 "./vendor/robsontenorio/mary/src/View/Components/**/*.php",
        './vendor/rappasoft/laravel-livewire-tables/resources/views/**/*.blade.php',
	],
  theme: {
    extend: {},
  },
  plugins: [
		require("daisyui")
	],
}

