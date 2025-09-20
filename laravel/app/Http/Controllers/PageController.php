<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $portfolio = [
            'name' => 'CHARLIE MER LIBATOD',
            'title' => 'ASPIRING WEB DEV',
            'bio' => 'I am passionate about learning and building modern web applications...',
            'profile_image' => '/assets/charls1.jpg',
            'location' => 'GLOBAL RECIPROCAL COLLEGES',
            'Skills' => 'Laravel, PHP, HTML, CSS, JAVASCRIPT',
            'projects' => [
                [
                    'name' => 'Calendar',
                    'description' => 'I developed a responsive and user-friendly calendar website for managing events and schedules. Users can easily add, edit, and delete events, with customizable views and reminders. Built with HTML, CSS, JavaScript.',
                    'image' => 'assets/calendar.png',
                    'technologies' => ['HTML', 'CSS', 'JavaScript'],
                    'demo_url' => 'https://charlie22-dev.github.io/calendar/',
                    'github_url' => 'https://github.com/charlie22-dev/calendar.git'
                ],
                [
                    'name' => 'Appreciation letter',
                    'description' => 'I created a platform where users can easily craft personalized appreciation letters for colleagues, friends, or loved ones. The website features customizable templates, allowing users to write heartfelt messages with ease. Built with HTML, CSS, JavaScript, and React, it offers an intuitive interface and a smooth user experience. Users can customize text, fonts, and layout, making each letter truly unique. This project highlights my ability to design user-friendly interfaces and deliver functional web applications with personal touch.',
                    'image' => 'assets/appre.png',
                    'technologies' => ['HTML', 'CSS', 'JavaScript'],
                    'demo_url' => 'https://charlie22-dev.github.io/appreciation-letterv2/',
                    'github_url' => 'https://github.com/charlie22-dev/appreciation-letterv2.git'
                ],
                [
                    'name' => 'First Portfolio',
                    'description' => 'This was my first attempt at creating a personal portfolio to showcase my skills and projects as a beginner web developer. Built with HTML and CSS, it features a simple, clean design with sections for my work, contact details, and background. The project helped me learn essential web development concepts like layout design, responsive design, and basic web structure. Despite being a beginner project, it was an important stepping stone in my development journey. This portfolio reflects my growth as a web developer and my commitment to continuous learning.',
                    'image' => 'assets/first.png',
                    'technologies' => ['HTML', 'CSS'],
                    'demo_url' => 'https://charlie22-dev.github.io/charls-dev/',
                    'github_url' => 'https://github.com/charlie22-dev/mywebsite-dev.git'
                ]
            ],
            'experience' => [
                [
                    'position' => 'STUDENT',
                    'School' => 'GLOBAL RECIPROCAL COLLEGES',
                    'period' => '2024-2025',
                    'description' => 'Passionate student who wanted to learn web development'
                ]
            ],
            'email' => 'malinaocharlie74@gmail.com',
            'phone' => '09279132322',
        ];

        return view('index', compact('portfolio'));
    }
}
    
