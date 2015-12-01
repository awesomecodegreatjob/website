{{--

    @param Collection<Project> $projects

--}}

@extends('layouts.main') @section('content')
<!-- Header -->
<header>
	<div class="wrapper">
		<h1 class="text-center">Awesome Code, Great&nbsp;Job!</h1>
	</div>
</header>
<nav class="main">
	<ul class="no-bullet menu text-center">
		<li><a href="#about">About</a></li>
		<li><a href="#contact">Contact</a></li>
	</ul>
</nav>
<!-- Main Content -->
<div class="wrapper hero-padding">
	<div class="row">
		<aside class="columns medium-3 large-2">
			<h3 class="subheader">Projects</h3>
			<ul>
				<li><a href="#">Project 1</a></li>
				<li><a href="#">Project 2</a></li>
				<li><a href="#">Project 3</a></li>
			</ul>
		</aside>
		<main class="columns medium-9 large-10">
			<article class="intro">
				<h2 class="subheader">Lorem ipsum dolor sit amet.</h2>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
					dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</article>
		</main>
	</div>

</div>
<!-- About -->
<div id="about" class="about">
	<article>
		<h2 class="subheader">About</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
	</article>
</div>

<!-- Contact -->
<div id="contact" class="contact">
	<form>
		<h2 class="subheader">Contact Us</h2>
		<div class="row">
			<div class="input-group">
				<span class="input-group-label">Name</span>
				<input class="input-group-field" type="text" placeholder="Name">
			</div>
			<div class="input-group">
				<span class="input-group-label">Email</span>
				<input class="input-group-field" type="email" placeholder="Email">
			</div>
			<textarea name="message" rows="8" placeholder="Message"></textarea>
			<a href="" class="button">Submit</a>
		</div>
	</form>
</div>


<!-- Footer -->
<footer>
	<div class="wrapper text-center">
		<nav>
			<ul class="no-bullet menu text-center">
				<li><a href="#about">About <i class="icon-user" ></i></a></li>
				<li><a target="_blank" href="//github.com/awesomecodegreatjob">Github  <i class="icon-github"></i></a></li>
				<li><a href="#contact">Contact  <i class="icon-mail-alt"></i></a></li>
			</ul>
		</nav>
		<cite>&copy; 2015 Awesome Code, Great Job!</cite>
	</div>
</footer>
