<nav class="navbar navbar-expand-lg navbar-dark py-3" id="mainNavbar">
    <div class="container">

        <a class="navbar-brand" href="<?= BASEURL; ?>">
            <span class="fw-bolder"><?= $data['profile']['brand'] ?></span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

            <ul class="navbar-nav mb-2 mb-lg-0 small fw-bolder">
                <?php foreach ($data['nav_links'] as $link_text => $url) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $url ?>"><?= $link_text ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <a href="" class="d-none d-lg-block">
                <img src="<?= BASEURL; ?>/img/github.png" alt="GitHub" style="width: 40px;">
            </a>

        </div>
    </div>
</nav>