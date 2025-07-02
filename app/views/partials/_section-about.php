<section id="about" class="py-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="row align-items-center mb-4">
                    <div class="col-auto">
                        <h2 class="display-5 fw-bolder m-0">About Me</h2>
                    </div>
                    <div class="col">
                        <hr class="section-divider">
                    </div>
                </div>

                <div class="row gx-5 align-items-center">
                    <div class="col-lg-4 text-center mb-4 mb-lg-0">
                        <div class="about-image-wrapper">
                            <img class="img-fluid rounded-circle" src="<?= BASEURL; ?>/img/gilang.png" alt="Gilang Aldiansyah">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="about-text">
                            <p><?= $data['profile']['bio_1'] ?></p>
                            <p><?= $data['profile']['bio_2'] ?></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>