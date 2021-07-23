			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			  <div class="container">
			    <a class="navbar-brand" href="/">Larafirst</a>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarNav">
			      <ul class="navbar-nav">
			        <li class="nav-item">
			          <a class="nav-link {{ ($title==="Beranda") ? 'active' : '' }}" aria-current="page" href="/">Beranda</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link {{ ($title==="Kategori") ? 'active' : '' }}" href="/kategori">Kategori</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link {{ ($title==="Kontak") ? 'active' : '' }}" href="/kontak">Kontak</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link {{ ($title==="Tentang") ? 'active' : '' }}" href="/tentang">Tentang</a>
			        </li>
			      </ul>
			    </div>
			  </div>
			</nav>