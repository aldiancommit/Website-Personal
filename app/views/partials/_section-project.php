    <section class="portfolio py-2">
        <div class="section-header">
            <h2><?= $data['header']['title'] ?></h2>
            <p><?= $data['header']['subtitle'] ?></p>
        </div>

        <div class="projects-grid">
            <?php foreach ($data['project'] as $project) : ?>
                <div class="project-card">
                    <div class="card-image">
                        <img src="<?= $project['image']  ?>" alt="Personal Website Project">
                    </div>
                    <div class="card-content">
                        <h3><?= $project['name'] ?></h3>
                        <p><?= $project['bio'] ?></p>
                        <div class="card-tags">
                            <span><?= $project['tech'] ?></span>
                            <span><?= $project['framework'] ?></span>
                        </div>
                        <!-- <div class="card-links">
                            <a href="#" aria-label="GitHub Repository"><i class="bi bi-github"></i></a>
                            <a href="#" aria-label="Live Demo"><i class="bi bi-box-arrow-up-right"></i></a>
                        </div> -->
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>