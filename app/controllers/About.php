<?php
// File: app/controllers/About.php

class About extends Controller
{
    public function index()
    {
        // 1. Instantiate semua model yang dibutuhkan
        $profileModel = $this->model('ProfileModel');
        $skillModel = $this->model('SkillModel');

        // 2. Ambil data menggunakan method spesifik
        $pageData = $profileModel->getPageData('About');
        
        // 3. Susun data untuk dikirim ke view
        $data = [
            'judul'      => $pageData['judul'],
            'header'     => $pageData['header'],
            'nav_links'  => $profileModel->getNavigation()['nav_links'],
            'profile'    => $profileModel->getProfile(),
            'tech_stack' => $skillModel->getTechStack(),
            'tools'      => $skillModel->getTools()
        ];

        // 4. Panggil semua view
        $this->view('partials/header', $data);
        $this->view('partials/navbar', $data);
        $this->view('about/index', $data);
        $this->view('partials/footer');
    }
}