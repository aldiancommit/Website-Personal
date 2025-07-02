<?php

class ProfileModel
{
    // 1. Definisikan data sebagai properti kelas, bukan di dalam method.
    // Ini lebih efisien karena data tidak dibuat ulang setiap kali method dipanggil.
    private $profileData = [
        'brand' => 'Aldiancommit();',
        'nama' => 'Gilang Aldiansyah',
        'pekerjaan' => [
            'Web Developer',
            'Software Engineer',
            'Data Analyst'
        ],
        'gambar' => BASEURL . '/img/gilang.png'
    ];

    private $pageContentData = [
        'judul' => [
            'Home' => 'Halaman Utama',
            'About' => 'Tentang Saya',
            'Portfolio' => 'Portofolio Saya'
        ],
        'header' => [
            'About' => [
                'title' => 'About Me',
                'subtitle' => 'A brief story about my journey'
            ],
            'Portfolio' => [
                'title' => 'Past Project Experience',
                'subtitle' => 'Explore the projects I\'ve worked on so far'
            ]
        ],
        'nav_links' => [
            'Home'       => BASEURL . '/',
            'About'      => BASEURL . '/about',
            'Portofolio' => BASEURL . '/portofolio'
        ]
    ];


    /**
     * Mengembalikan data profil yang sudah dirakit dan siap pakai.
     * Jauh lebih efisien dan logis.
     */
    public function getProfile()
    {
        // 2. Ambil pekerjaan pertama sebagai pekerjaan utama.
        $pekerjaanUtama = $this->profileData['pekerjaan'][0];
        $namaLengkap = $this->profileData['nama'];

        // 3. Rakit data profil yang bersih dan spesifik.
        return [
            'brand'           => $this->profileData['brand'],
            'nama'            => $namaLengkap,
            'pekerjaan'       => $this->profileData['pekerjaan'],
            'pekerjaan_utama' => $pekerjaanUtama,
            'gambar'          => $this->profileData['gambar'],
            'bio_1'           => "Hi! I am {$namaLengkap}, a {$pekerjaanUtama} with a passion for creating functional, responsive web applications that provide great user experiences.",
            'bio_2'           => "I believe that every line of code is an opportunity to solve a problem and build something useful. Outside of coding, I enjoy exploring new technologies and contributing to the open-source community."
        ];
    }

    /**
     * Method getter spesifik untuk data navigasi.
     */
    public function getNavigation()
    {
        return [
            'nav_links' => $this->pageContentData['nav_links']
        ];
    }
    
    /**
     * Method getter spesifik untuk data halaman (judul & header).
     * @param string $pageName Nama halaman (e.g., 'Home', 'About', 'Portfolio')
     * @return array
     */
    public function getPageData($pageName)
    {
        return [
            'judul'  => $this->pageContentData['judul'][$pageName] ?? 'Default Title',
            'header' => $this->pageContentData['header'][$pageName] ?? []
        ];
    }
}