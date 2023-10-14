<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Http\Requests\StoreLanguageRequest;
use App\Http\Requests\UpdateLanguageRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class LanguageController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index(): View {
        //
        $languages = Language::all();
        return view('languages.index', compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View {
        //
        return view('languages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLanguageRequest $request): RedirectResponse {
        //
        Language::create($request->all());
        return back()->with('created', 'Language created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Language $language)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Language $language): View {
        //
        return view('languages.edit', compact('language'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLanguageRequest $request, Language $language): RedirectResponse {
        //
        $language->update($request->all());
        return back()->with('updated', 'Language updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Language $language): RedirectResponse {
        //
        $language->delete();
        return back()->with('deleted', 'Language deleted successfully!');
    }
}
