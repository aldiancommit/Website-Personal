<?php

class ProjectModel
{
    private $project = [
        [
            'name' => 'Personal Website',
            'bio' => 'My personal website. I created this website to display my profile, skills and projects. As well as my place to try new technology.',
            'image' => BASEURL . '/img/porto-web.png',
            'tech' => 'PHP-Native',
            'framework' => 'Bootstrap'
        ],
        [
            'name' => 'Sistem informasi pendaftaran mahasiswa baru',
            'bio' => 'A website that has a responsive display to make it easier for Muslims to read the Quran from anywhere.',
            'image' => BASEURL . '/img/sim_pmb.png',
            'tech' => 'PHP-Native',
            'framework' => 'Bootstrap'
        ],
        [
            'name' => 'Sistem informasi monitoring skripsi',
            'bio' => 'A website that has a responsive display to make it easier for Muslims to read the Quran from anywhere.',
            'image' => BASEURL . '/img/sims.png',
            'tech' => 'PHP-Native',
            'framework' => 'Bootstrap'
        ],
    ];


    public function getProject()
    {
        return $this->project;
    }
}
