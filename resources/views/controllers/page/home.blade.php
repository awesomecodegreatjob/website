@extends('layouts.main') @section('content')
<!-- Header -->
<header>
	<div class="wrapper">
		<h1 class="text-center">Awesome Code, Great Job!</h1>
	</div>
</header>
<!-- Main Content -->
<div class="wrapper">
	<div class="row">
		<aside class="columns medium-6 large-2">
			<h3 class="subhead">Projects</h3>
			<ul>
				<li><a href="#">Project 1</a></li>
				<li><a href="#">Project 2</a></li>
				<li><a href="#">Project 3</a></li>
			</ul>
		</aside>
		<main class="columns medium-6 large-10">
			<article class="intro">
				<h2 class="subhead">Lorem ipsum dolor sit amet.</h2>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
					dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</article>
		</main>
	</div>
</div>
<!-- Footer -->
<footer>
	<div class="wrapper">
		&copy; 2015 Awesome Code, Great Job!
	</div>
</footer>

@endsection
