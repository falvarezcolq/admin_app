<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\sector;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sectores = (new Sector)->newQuery();
        if(request()->has('search')){
            $sectores->where('denominacion', 'like', '%'.request()->input('search').'%');
        }

        if (request()->query('sort')) {
            $attribute = request()->query('sort');
            $sort_order = 'ASC';
            if (strncmp($attribute, '-', 1) === 0) {
                $sort_order = 'DESC';
                $attribute = substr($attribute, 1);
            }
            $sectores->orderBy($attribute, $sort_order);
        } else {
            $sectores->latest();
        }
        
        $sectores = $sectores->paginate(config('admin.paginate.per_page'))
                                ->onEachSide(config('admin.paginate.each_side'))
                                ->appends(request()->query());

        return Inertia::render('Admin/Sector/Index', [
            'sectores' => $sectores,
            'filters' => request()->all('search'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(sector $sector)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sector $sector)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sector $sector)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sector $sector)
    {
        //
    }
}
