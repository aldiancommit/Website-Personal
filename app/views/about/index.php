<div class="main-content-card content-wrapper">
    <?php
        // Memanggil komponen "About" dari dalam view utama
        // dan meneruskan data yang relevan
        $this->view('partials/_section-about', $data);

        // Memanggil komponen "Skills" dari dalam view utama
        // dan meneruskan data yang relevan
        $this->view('partials/_section-skills', $data);
    ?>
</div>