<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'id' => 1,
                'title' => 'National',
                'description' => 'A membership website portal for architect members.',
                'technologies' => ['Laravel 10', 'Bootstrap v5.3', 'MySQL'],
            ],
            [
                'id' => 2,
                'title' => 'Chapters',
                'description' => 'A membership website portal for membership dues collection, events registrations, missions, and rewards.',
                'technologies' => ['Laravel 10', 'Bootstrap v5.3', 'MySQL'],
            ],
            [
                'id' => 3,
                'title' => 'Construct Pro',
                'description' => 'A website & mobile app for monitoring your constructions tasks, and recording invoices, expenses, and daily reports.',
                'technologies' => ['Laravel 10', 'Bootstrap v5.3', 'MySQL', 'React Native', 'Expo', 'Nativewind'],
            ],
            [
                'id' => 4,
                'title' => 'DMPR',
                'description' => 'Mobile App for inspection and evaluation of structures affected by disasters.',
                'technologies' => ['Laravel 10', 'Bootstrap v5.3', 'MySQL', 'React Native', 'Expo', 'Nativewind'],
            ],
            [
                'id' => 5,
                'title' => 'Ringke',
                'description' => 'E-commerce website for selling cellphone accessories.',
                'technologies' => ['Shopify', 'Plugin'],
            ],
            [
                'id' => 6,
                'title' => 'KRAH',
                'description' => 'A mobile application for pipes measurement.',
                'technologies' => ['React Native', 'Expo', 'Nativewind'],
            ],
            [
                'id' => 7,
                'title' => 'CardKo',
                'description' => 'A website & mobile app for creating digital business cards.',
                'technologies' => ['Laravel 10', 'Bootstrap v5.3', 'MySQL', 'React Native', 'Expo', 'Nativewind'],
            ],
            [
                'id' => 8,
                'title' => 'Events',
                'description' => 'A website for events registration',
                'technologies' => ['Laravel 10', 'Bootstrap v5.3', 'MySQL'],
            ],
            [
                'id' => 9,
                'title' => 'TechnoCon',
                'description' => 'A website for events registration specifically on TechnoCon members.',
                'technologies' => ['Laravel 10', 'Bootstrap v5.3', 'MySQL'],
            ],
        ];

        return view('portfolio.index', compact('projects'));
    }

    public function show($id)
    {
        // Find project by id (you can move this to a database later)
        $projects = $this->getProjects();
        $project = collect($projects)->firstWhere('id', $id);

        if (!$project) {
            abort(404, 'Project not found');
        }

        return view('portfolio.show', compact('project'));
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|min:10',
        ]);

        // Send email logic here
        // Mail::to('your-email@example.com')->send(new ContactMail($validated));

        return back()->with('success', 'Thank you for your message! I will get back to you soon.');
    }

    private function getProjects()
    {
        return [
            [
                'id' => 1,
                'title' => 'National',
                'description' => 'A membership website portal for architect members.',
                'image' => 'projects/national.png',
                'technologies' => ['Laravel 10', 'Bootstrap v5.3', 'MySQL'],
                'features' => [
                    'Admin & Member dashboard',
                    'User authentication and profiles',
                    'Generate certificates',
                    'QR Code Generation',
                    'Content Management',
                ]
            ],
            [
                'id' => 2,
                'title' => 'Chapters',
                'description' => 'A membership website portal for membership dues collection, events registrations, missions, and rewards.',
                'image' => 'projects/membership-portal.png',
                'technologies' => ['Laravel 10', 'Bootstrap v5.3', 'MySQL'],
                'features' => [
                    'Admin & Member dashboard',
                    'User authentication and profiles',
                    'Generate certificates',
                    'Missions & Activities',
                    'QR Code Generation',
                    'Rewards & Points System',
                ]
            ],
            [
                'id' => 3,
                'title' => 'Construct Pro',
                'description' => 'A website & mobile app for monitoring your constructions tasks, and recording invoices, expenses, and daily reports.',
                'image' => 'projects/construct-pro.png',
                'technologies' => ['Laravel 10', 'Bootstrap v5.3', 'MySQL', 'React Native', 'Expo', 'Nativewind'],
                'features' => [
                    'SuperAdmin, Project Manager, Admin, & Member dashboard',
                    'User authentication and profiles',
                    'Invoice Management',
                    'Expense Tracking',
                    'Daily Reports',
                    'Web & Mobile Access',
                    'Centralized Project Dashboard',
                    'Data History & Records',
                ]
            ],
            [
                'id' => 4,
                'title' => 'DMPR',
                'description' => 'A website and mobile app for inspection and evaluation of structures affected by disasters.',
                'image' => 'projects/dmpr-website.png',
                'technologies' => ['Laravel 10', 'Bootstrap v5.3', 'MySQL', 'React Native', 'Expo', 'Nativewind'],
                'features' => [
                    'GPS Location Tagging',
                    'Admin & Member dashboard',
                    'User authentication and profiles',
                    'Inspector & Role Management',
                    'Web & Mobile Access',
                ]
            ],
            [
                'id' => 5,
                'title' => 'Ringke',
                'description' => 'E-commerce website for selling cellphone accessories.',
                'image' => 'projects/ringke.png',
                'technologies' => ['Shopify', 'Plugin'],
                'features' => [
                    'Product catalog with categories and filters',
                    'Shopping cart and wishlist functionality',
                    'Secure payment processing on paymongo',
                    'Order management and tracking',
                    'Admin dashboard for inventory management',
                    'User authentication and profiles'
                ]
            ],
            [
                'id' => 6,
                'title' => 'KRAH',
                'description' => 'A mobile application for pipes measurement.',
                'image' => 'projects/white-bg.jpg',
                'technologies' => ['React Native', 'Expo', 'Nativewind'],
                'features' => [
                    'Pipe Dimension Measurement',
                    'Measurement Input & Calculator',
                    'Unit Conversion',
                    'Pipe Type Selection',
                    'Offline Access',
                    'User-Friendly Interface',
                ]
            ],
            [
                'id' => 7,
                'title' => 'CardKo',
                'description' => 'A website & mobile app for creating digital business cards.',
                'image' => 'projects/white-bg.jpg',
                'technologies' => ['Laravel 10', 'Bootstrap v5.3', 'MySQL', 'React Native', 'Expo', 'Nativewind'],
                'features' => [
                    'Digital Business Card Builder',
                    'Custom Design & Branding',
                    'QR Code Generation',
                    'One-Tap Contact Saving',
                    'Admin & User dashboard',
                    'User authentication and profiles'
                ]
            ],
            [
                'id' => 8,
                'title' => 'Events',
                'description' => 'A website for events registration.',
                'image' => 'projects/white-bg.jpg',
                'technologies' => ['Laravel 10', 'Bootstrap v5.3', 'MySQL'],
                'features' => [
                    'Event Browsing',
                    'Payment Integration',
                    'QR Code Generation',
                    'Admin & Member dashboard',
                    'User authentication and profiles'
                ]
            ],
            [
                'id' => 9,
                'title' => 'TechnoCon',
                'description' => 'A website for events registration specifically on TechnoCon members.',
                'image' => 'projects/white-bg.jpg',
                'technologies' => ['Laravel 10', 'Bootstrap v5.3', 'MySQL'],
                'features' => [
                    'Event Browsing',
                    'Payment Integration',
                    'QR Code Generation',
                    'Admin & Member dashboard',
                    'User authentication and profiles'
                ]
            ],
        ];
    }
}
