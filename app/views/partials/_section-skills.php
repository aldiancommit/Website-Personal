<section id="skills" class="pt-4 pb-5">
        <div class="container px-4">
            <div class="row align-items-center mb-5">
                <div class="col-auto">
                    <h2 class="display-5 fw-bolder m-0">Skills</h2>
                </div>
                <div class="col">
                    <hr class="section-divider-skill">
                </div>
            </div>

            <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-tech-tab" data-bs-toggle="pill" data-bs-target="#pills-tech" type="button" role="tab" aria-controls="pills-tech" aria-selected="true">Tech Stack</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-tools-tab" data-bs-toggle="pill" data-bs-target="#pills-tools" type="button" role="tab" aria-controls="pills-tools" aria-selected="false">Tools</button>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-tech" role="tabpanel" aria-labelledby="pills-tech-tab">
                    <div class="row g-4">

                        <?php foreach ($data['tech_stack'] as $skill) : ?>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="skill-card">
                                    <img src="<?= $skill['icon_url']; ?>" alt="<?= $skill['name']; ?>" class="skill-icon" style="<?= $skill['style']; ?>">
                                    <span><?= $skill['name']; ?></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-tools" role="tabpanel" aria-labelledby="pills-tools-tab">
                    <div class="row g-4">

                        <?php foreach ($data['tools'] as $tool) : ?>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="skill-card">
                                    <img src="<?= $tool['icon_url']; ?>" alt="<?= $tool['name']; ?>" class="skill-icon" style="<?= $tool['style']; ?>">
                                    <span><?= $tool['name']; ?></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
</section>