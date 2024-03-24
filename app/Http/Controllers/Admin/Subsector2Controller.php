<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\subsector2;
use Illuminate\Http\Request;
use Inertia\Inertia;


class Subsector2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $subsectores2 = (new subsector2)->newQuery();
        if(request()->has('search')){
            $subsectores2->where('denominacion', 'like', '%'.request()->input('search').'%');
        }

        if (request()->query('sort')) {
            $attribute = request()->query('sort');
            $sort_order = 'ASC';
            if (strncmp($attribute, '-', 1) === 0) {
                $sort_order = 'DESC';
                $attribute = substr($attribute, 1);
            }
            $subsectores2->orderBy($attribute, $sort_order);
        } else {
            $subsectores2->latest();
        }
        
        $subsectores2 = $subsectores2->paginate(config('admin.paginate.per_page'))
                                ->onEachSide(config('admin.paginate.each_side'))
                                ->appends(request()->query());

        return Inertia::render('Admin/SubSector2/Index', [
            'subsectores2' => $subsectores2,
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
    public function show(subsector2 $subsector2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(subsector2 $subsector2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, subsector2 $subsector2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(subsector2 $subsector2)
    {
        //
    }
}
