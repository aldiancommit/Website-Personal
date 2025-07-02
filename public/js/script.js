const typingElement = document.getElementById("typing-effect");

if (typingElement) {
  const stringData = typingElement.dataset.strings;

  if (stringData) {
    const pekerjaanStrings = JSON.parse(stringData);

    const options = {
      strings: pekerjaanStrings, // Ambil data dari variabel global
      typeSpeed: 70,
      backSpeed: 25,
      loop: true,
    };

    const typed = new Typed("#typing-effect", options);
  }
}

// Menunggu seluruh halaman dimuat terlebih dahulu
document.addEventListener("DOMContentLoaded", function () {
  // 1. Pilih semua link navigasi di dalam menu burger
  const navLinks = document.querySelectorAll(
    "#navbarSupportedContent .nav-link"
  );

  // 2. Pilih elemen menu yang bisa collapse
  const menuCollapseElement = document.getElementById("navbarSupportedContent");

  // 3. Buat instance dari komponen Collapse Bootstrap
  const bsCollapse = new bootstrap.Collapse(menuCollapseElement, {
    toggle: false, // Opsi ini agar menu tidak langsung toggle saat inisialisasi
  });

  // 4. Tambahkan event listener untuk setiap link
  navLinks.forEach(function (link) {
    link.addEventListener("click", function () {
      // Cek apakah menu sedang terbuka (memiliki kelas 'show')
      if (menuCollapseElement.classList.contains("show")) {
        // Jika ya, panggil fungsi hide() dari instance collapse
        bsCollapse.hide();
      }
    });
  });
});
