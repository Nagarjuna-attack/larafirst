			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			  <div class="container">
			    <a class="navbar-brand" href="/">Larafirst</a>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarNav">
			      <ul class="navbar-nav">
			        <li class="nav-item">
			          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Beranda</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link {{ Request::is('kategori') ? 'active' : '' }}" href="/kategori">Kategori</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link {{ Request::is('kontak') ? 'active' : '' }}" href="/kontak">Kontak</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link {{ Request::is('tentang') ? 'active' : '' }}" href="/tentang">Tentang</a>
			        </li>
			      </ul>
			      <ul class="navbar-nav ms-auto">
			      	@auth
			      	<li class="nav-item dropdown">
			          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			            Welcome  {{ auth()->user()->name }}
			          </a>
			          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
			            <li><a class="dropdown-item" href="/dashboard">Dashboar</a></li>
			            <li><hr class="dropdown-divider"></li>
			            <li>
			            	<form action="/logout" method="post">
			            		@csrf
			            		<button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-left"></i> Logout</button>
			            	</form>
			          </ul>
			        </li>
			      	@else
			      	<li class="nav-item">
			      		<a href="/login" class="nav-link {{ ($title==="Login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
			      	</li>
			      	@endauth
			      </ul>
			    </div>
			  </div>
			</nav>