<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url">
			<div class="row">
				<img width="1" height="1" src="https://beta.sandiegocounty.gov/uploads/2023/02/CoSD-site-logo.svg" class="img-fluid" alt="County of San Diego logo" decoding="async" style="width: 100px;height: auto;max-width: 100%;">
				<div class="logo__text">
					<span><b>county</b> of</span> 
					<span><b>san diego</b></span>
				</div>
				<!-- <span class="badge rounded-pill text-bg-success text-light" style="background-color: RGBA(119, 144, 66, var(--bs-bg-opacity, 1)) !important;padding: 5px;">TEMPLATE</span> -->
			</div>
		</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse main-navigation" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="https://www.sandiegocounty.gov/content/sdc/cosd/services.html">Services</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="https://www.sandiegocounty.gov/content/sdc/cosd/departments.html">Departments</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="https://www.countynewscenter.com/">News</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo get_post_type_archive_link('event') ?>">Events</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="https://www.countynewscenter.com/">Locations</a>
            </li>
        </ul>

        </div>
    </div>
</nav>