<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\ejecucion_presupuestal;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EjecucionPresupuestalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $ejecucionpresupuestals = (new ejecucion_presupuestal)->newQuery();
        if(request()->has('search')){
            $ejecucionpresupuestals->where('denominacion', 'like', '%'.request()->input('search').'%');
        }

        if (request()->query('sort')) {
            $attribute = request()->query('sort');
            $sort_order = 'ASC';
            if (strncmp($attribute, '-', 1) === 0) {
                $sort_order = 'DESC';
                $attribute = substr($attribute, 1);
            }
            $ejecucionpresupuestals->orderBy($attribute, $sort_order);
        } else {
            $ejecucionpresupuestals->latest();
        }
        
        $ejecucionpresupuestals = $ejecucionpresupuestals->paginate(config('admin.paginate.per_page'))
                                ->onEachSide(config('admin.paginate.each_side'))
                                ->appends(request()->query());

        return Inertia::render('Admin/EjecucionPresupuestal/Index', [
            'ejecucionpresupuestals' => $ejecucionpresupuestals,
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
    public function show(ejecucion_presupuestal $ejecucion_presupuestal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ejecucion_presupuestal $ejecucion_presupuestal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ejecucion_presupuestal $ejecucion_presupuestal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ejecucion_presupuestal $ejecucion_presupuestal)
    {
        //
    }
}
