<?php

class SkillModel {
    // Data untuk Tech Stack
    private $techStack = [
        [
            'name' => 'HTML',
            'icon_url' => 'https://upload.wikimedia.org/wikipedia/commons/6/61/HTML5_logo_and_wordmark.svg',
            'style' => '' // Tidak perlu style tambahan
        ],
        [
            'name' => 'CSS',
            'icon_url' => 'https://upload.wikimedia.org/wikipedia/commons/d/d5/CSS3_logo_and_wordmark.svg',
            'style' => ''
        ],
        [
            'name' => 'PHP',
            'icon_url' => 'https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg',
            'style' => ''
        ],
        [
            'name' => 'Javascript',
            'icon_url' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Unofficial_JavaScript_logo_2.svg',
            'style' => ''
        ],
        [
            'name' => 'Laravel',
            'icon_url' => 'https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg',
            'style' => ''
        ],
        [
            'name' => 'Codeigniter',
            'icon_url' => BASEURL .'/img/codeigniter.png',
            'style' => '' // Style khusus untuk logo ini
        ],
        // Tambahkan skill lainnya di sini
    ];

    // Data untuk Tools
    private $tools = [
        [
            'name' => 'Git',
            'icon_url' => 'https://upload.wikimedia.org/wikipedia/commons/3/3f/Git_icon.svg',
            'style' => ''
        ],
        [
            'name' => 'VS Code',
            'icon_url' => 'https://upload.wikimedia.org/wikipedia/commons/9/9a/Visual_Studio_Code_1.35_icon.svg',
            'style' => ''
        ],
        // Tambahkan tools lainnya di sini
    ];

    // Metode untuk mengambil data Tech Stack
    public function getTechStack() {
        return $this->techStack;
    }

    // Metode untuk mengambil data Tools
    public function getTools() {
        return $this->tools;
    }
}