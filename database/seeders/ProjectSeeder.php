<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        // Clear existing projects first
        Project::truncate();

        $projects = [
            [
                'title' => 'National',
                'slug' => 'national',
                'description' => 'A membership website portal for architect members.',
                'image' => 'projects/national.png',
                'technologies' => ['Laravel 10', 'Livewire', 'Bootstrap v5.3', 'MySQL'],
                'features' => [
                    'Admin & Member dashboard',
                    'User authentication and profiles',
                    'Generate certificates',
                    'QR Code Generation',
                    'Content Management',
                ],
                'is_featured' => true,
                'order' => 1,
            ],
            [
                'title' => 'Chapters',
                'slug' => 'chapters',
                'description' => 'A membership website portal for membership dues collection, events registrations, missions, and rewards.',
                'image' => 'projects/membership-portal.png',
                'technologies' => ['Laravel 10', 'Livewire', 'Bootstrap v5.3', 'MySQL'],
                'features' => [
                    'Admin & Member dashboard',
                    'User authentication and profiles',
                    'Generate certificates',
                    'Missions & Activities',
                    'QR Code Generation',
                    'Rewards & Points System',
                ],
                'is_featured' => true,
                'order' => 2,
            ],
            [
                'title' => 'Construct Pro',
                'slug' => 'construct-pro',
                'description' => 'A website & mobile app for monitoring your constructions tasks, and recording invoices, expenses, and daily reports.',
                'image' => 'projects/construct-pro.png',
                'technologies' => ['Laravel 10', 'Livewire', 'Bootstrap v5.3', 'MySQL', 'React Native', 'Expo', 'Nativewind'],
                'features' => [
                    'SuperAdmin, Project Manager, Admin, & Member dashboard',
                    'User authentication and profiles',
                    'Invoice Management',
                    'Expense Tracking',
                    'Daily Reports',
                    'Web & Mobile Access',
                    'Centralized Project Dashboard',
                    'Data History & Records',
                ],
                'is_featured' => true,
                'order' => 3,
            ],
            [
                'title' => 'DMPR',
                'slug' => 'dmpr',
                'description' => 'A website and mobile app for inspection and evaluation of structures affected by disasters.',
                'image' => 'projects/dmpr-website.png',
                'technologies' => ['Laravel 10', 'Livewire', 'Bootstrap v5.3', 'MySQL', 'React Native', 'Expo', 'Nativewind'],
                'features' => [
                    'GPS Location Tagging',
                    'Admin & Member dashboard',
                    'User authentication and profiles',
                    'Inspector & Role Management',
                    'Web & Mobile Access',
                ],
                'is_featured' => true,
                'order' => 4,
            ],
            [
                'title' => 'Ringke',
                'slug' => 'ringke',
                'description' => 'An E-commerce website for selling cellphone accessories.',
                'image' => 'projects/ringke.png',
                'technologies' => ['Shopify', 'Plugin'],
                'features' => [
                    'Product catalog with categories and filters',
                    'Shopping cart and wishlist functionality',
                    'Secure payment processing on paymongo',
                    'Order management and tracking',
                    'Admin dashboard for inventory management',
                    'User authentication and profiles'
                ],
                'is_featured' => true,
                'order' => 5,
            ],
            [
                'title' => 'KRAH',
                'slug' => 'krah',
                'description' => 'Data visualization dashboard with interactive charts, export capabilities, and real-time data monitoring.',
                'image' => 'projects/white-bg.jpg',
                'technologies' => ['React Native', 'Expo', 'Nativewind'],
                'features' => [
                    'Pipe Dimension Measurement',
                    'Measurement Input & Calculator',
                    'Unit Conversion',
                    'Pipe Type Selection',
                    'Offline Access',
                    'User-Friendly Interface',
                ],
                'is_featured' => true,
                'order' => 6,
            ],
            [
                'title' => 'CardKo',
                'slug' => 'cardko',
                'description' => 'A website & mobile app for creating digital business cards.',
                'image' => 'projects/white-bg.jpg',
                'technologies' => ['Laravel 10', 'Livewire', 'Bootstrap v5.3', 'MySQL', 'React Native', 'Expo', 'Nativewind'],
                'features' => [
                    'User & Account Features',
                    'Digital Business Card Creation',
                    'Sharing & Networking',
                    'Contact Management',
                    'NFC Card Integration',
                    'Responsive design for mobile viewing'
                ],
                'is_featured' => true,
                'order' => 7,
            ],
            [
                'title' => 'Events',
                'slug' => 'events',
                'description' => 'A website for events registration.',
                'image' => 'projects/white-bg.jpg',
                'technologies' => ['Laravel 10', 'Livewire', 'Bootstrap v5.3', 'MySQL'],
                'features' => [
                    'Event Browsing',
                    'Payment Integration',
                    'QR Code Generation',
                    'Admin & Member dashboard',
                    'User authentication and profiles'
                ],
                'is_featured' => true,
                'order' => 8,
            ],
            [
                'title' => 'TechnoCon',
                'slug' => 'technocon',
                'description' => 'A website for events registration specifically on TechnoCon members.',
                'image' => 'projects/white-bg.jpg',
                'technologies' => ['Laravel 10', 'Livewire', 'Bootstrap v5.3', 'MySQL'],
                'features' => [
                    'Event Browsing',
                    'Payment Integration',
                    'QR Code Generation',
                    'Admin & Member dashboard',
                    'User authentication and profiles'
                ],
                'is_featured' => true,
                'order' => 9,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
