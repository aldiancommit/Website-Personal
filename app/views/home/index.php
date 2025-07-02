    <!-- HOME-SECTION -->
    <main class="content-wrapper">
        <header class="simple-header">

            <div class="text-content">
                <p class="greeting mb-2">Hello World, I'm</p>
                <h1 class="display-6 fw-bolder mb-3 gradient-text"><?= $data['profile']['nama'] ?></h1>

                <div class="display-4 fs-2 fw-bolder mb-3 gradient-text">
                    <span id="typing-effect" data-strings='<?= json_encode($data['profile']['pekerjaan'] ?? []); ?>'>
                    </span>
                </div>

                <p class="lead mb-5">Selamat datang di website saya.</p>

            </div>

            <div class="profile-image">
                <img class="img-fluid rounded-circle shadow-lg" src="<?= $data['profile']['gambar'] ?>" alt="Gilang Aldiansyah">
            </div>

        </header>
    </main>
    <!-- END -->