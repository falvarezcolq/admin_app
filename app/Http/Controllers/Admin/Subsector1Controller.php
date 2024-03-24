<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\subsector1;
use Illuminate\Http\Request;
use Inertia\Inertia;


class Subsector1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subsectores1 = (new subsector1)->newQuery();
        if(request()->has('search')){
            $subsectores1->where('denominacion', 'like', '%'.request()->input('search').'%');
        }

        if (request()->query('sort')) {
            $attribute = request()->query('sort');
            $sort_order = 'ASC';
            if (strncmp($attribute, '-', 1) === 0) {
                $sort_order = 'DESC';
                $attribute = substr($attribute, 1);
            }
            $subsectores1->orderBy($attribute, $sort_order);
        } else {
            $subsectores1->latest();
        }
        
        $subsectores1 = $subsectores1->paginate(config('admin.paginate.per_page'))
                                ->onEachSide(config('admin.paginate.each_side'))
                                ->appends(request()->query());

        return Inertia::render('Admin/SubSector1/Index', [
            'subsectores1' => $subsectores1,
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
    public function show(subsector1 $subsector1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(subsector1 $subsector1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, subsector1 $subsector1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(subsector1 $subsector1)
    {
        //
    }
}
