<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Inertia\Inertia;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Features/Index');
    }

    /**
     * Display the specified resource.
     */
    public function show(/*Feature $feature*/)
    {
        return Inertia::render('Features/Show');
    }
}
