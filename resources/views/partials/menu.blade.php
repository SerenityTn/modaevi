<nav class="navbar navbar-findcond navbar-fixed-top">
    <div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">ASMA MODAEVI</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="{{ route('admin.index') }}">Espace Admin</a></li>
			</ul>
			<form class="navbar-form navbar-right search-form" role="search">
				<input type="text" class="form-control" placeholder="Chercher" />
			</form>
		</div>
	</div>
</nav>
