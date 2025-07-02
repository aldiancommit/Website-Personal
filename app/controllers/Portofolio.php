<?php
// File: app/controllers/Portofolio.php

class Portofolio extends Controller
{
    public function index()
    {
        // 1. Instantiate semua model yang dibutuhkan
        $profileModel = $this->model('ProfileModel');
        $projectModel = $this->model('ProjectModel');

        // 2. Ambil data menggunakan method spesifik
        $pageData = $profileModel->getPageData('Portfolio');
        
        // 3. Susun data untuk dikirim ke view
        $data = [
            'judul'      => $pageData['judul'],
            'header'     => $pageData['header'],
            'nav_links'  => $profileModel->getNavigation()['nav_links'],
            'profile'    => $profileModel->getProfile(),
            'project'    => $projectModel->getProject()
        ];

        // 4. Panggil semua view
        $this->view('partials/header', $data);
        $this->view('partials/navbar', $data);
        $this->view('portofolio/index', $data);
        $this->view('partials/footer', $data);
    }
}