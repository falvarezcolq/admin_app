<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\cat_programatica;
use Illuminate\Http\Request;
use Inertia\Inertia;


class CatProgramaticaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catprogramaticas = (new cat_programatica)->newQuery();
        if(request()->has('search')){
            $catprogramaticas->where('denominacion', 'like', '%'.request()->input('search').'%');
        }

        if (request()->query('sort')) {
            $attribute = request()->query('sort');
            $sort_order = 'ASC';
            if (strncmp($attribute, '-', 1) === 0) {
                $sort_order = 'DESC';
                $attribute = substr($attribute, 1);
            }
            $catprogramaticas->orderBy($attribute, $sort_order);
        } else {
            $catprogramaticas->latest();
        }
        
        $catprogramaticas = $catprogramaticas->paginate(config('admin.paginate.per_page'))
                                ->onEachSide(config('admin.paginate.each_side'))
                                ->appends(request()->query());

        return Inertia::render('Admin/CatProgramatica/Index', [
            'catprogramaticas' => $catprogramaticas,
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
    public function show(cat_programatica $cat_programatica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cat_programatica $cat_programatica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cat_programatica $cat_programatica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cat_programatica $cat_programatica)
    {
        //
    }
}
