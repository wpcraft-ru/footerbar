<script>
	export let name;
</script>

<main>
	<h1>Bottom bar</h1>

	<div class='bottom-bar'>

		<button>1</button>
		<button>2</button>
		<button>3</button>
	
	</div>
</main>

<style type="text/scss">
	main {
		text-align: center;
		padding: 1em;
		max-width: 240px;
		margin: 0 auto;
	}

	h1 {
		color: #ff3e00;
		text-transform: uppercase;
		font-size: 4em;
		font-weight: 100;
	}

	@media (min-width: 640px) {
		main {
			max-width: none;
		}
	}
</style>