<?php
// File: app/controllers/Home.php

class Home extends Controller
{
    public function index()
    {
        // 1. Instantiate model satu kali
        $profileModel = $this->model('ProfileModel');

        // 2. Ambil data menggunakan method spesifik
        $pageData = $profileModel->getPageData('Home');
        
        // 3. Susun data untuk dikirim ke view
        $data = [
            'judul'     => $pageData['judul'],
            'nav_links' => $profileModel->getNavigation()['nav_links'],
            'profile'   => $profileModel->getProfile()
        ];

        // 4. Panggil semua view
        $this->view('partials/header', $data);
        $this->view('partials/navbar', $data);
        $this->view('home/index', $data);
        $this->view('partials/footer');
    }
}