<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index(): View {
        //
        $admins = Admin::all();
        return view('admins.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View {
        //
        return view('admins.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdminRequest $request): RedirectResponse {
        //
        Admin::create($request->all());
        return back()->with('created', 'Admin created successsfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin): View {
        //
        // dd($admin);
        return view('admins.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdminRequest $request, Admin $admin): RedirectResponse {
        //
        $admin->update($request->all());
        return back()->with('updated', 'Admin updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin): RedirectResponse {
        //
        $admin->delete();
        return back()->with('deleted', 'Admin deleted successfully!');
    }
}
