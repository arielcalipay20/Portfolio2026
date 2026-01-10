<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class PortfolioController extends Controller
{
    public function index()
    {
        // Get all featured projects, ordered
        $projects = Project::featured()->ordered()->get();

        return view('portfolio.index', compact('projects'));
    }

    public function show($slug)
    {
        // Find project by slug
        $project = Project::where('slug', $slug)->firstOrFail();

        return view('portfolio.show', compact('project'));
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:3|max:1000',
        ]);

        try {
            Mail::to('your-email@gmail.com')->send(
                new ContactFormMail(
                    $validated['name'],
                    $validated['email'],
                    $validated['message']
                )
            );

            toast('Thank you for your message! I will get back to you soon.', 'success')
                ->position('top')
                ->timerProgressBar();

            return back();
        } catch (\Exception $e) {
            toast('Sorry, something went wrong. Please try again later.', 'error')
                ->position('top')
                ->timerProgressBar();

            return back();
        }
    }
}
