<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AuthorController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index(): View {
        //
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View {
        //
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAuthorRequest $request): RedirectResponse {
        //
        Author::create($request->all());
        return back()->with('created', 'Author created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author): View {
        //
        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAuthorRequest $request, Author $author): RedirectResponse {
        //
        $author->update($request->all());
        return back()->with('updated', 'Author updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author): RedirectResponse {
        //
        $author->delete();
        return back()->with('deleted', 'Author deleted successfully!');
    }
}
