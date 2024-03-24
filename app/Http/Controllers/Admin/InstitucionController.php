<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\institucion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use BalajiDharma\LaravelAdminCore\Requests\StoreInstitucionRequest;

class InstitucionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $institucions = (new institucion)->newQuery();
        if(request()->has('search')){
            $institucions->where('denominacion', 'like', '%'.request()->input('search').'%');
        }

        if (request()->query('sort')) {
            $attribute = request()->query('sort');
            $sort_order = 'ASC';
            if (strncmp($attribute, '-', 1) === 0) {
                $sort_order = 'DESC';
                $attribute = substr($attribute, 1);
            }
            $institucions->orderBy($attribute, $sort_order);
        } else {
            $institucions->latest();
        }
        
        $institucions = $institucions->paginate(config('admin.paginate.per_page'))
                                ->onEachSide(config('admin.paginate.each_side'))
                                ->appends(request()->query());

        return Inertia::render('Admin/Institucion/Index', [
            'institucions' => $institucions,
            'filters' => request()->all('search'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Admin/Permission/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInstitucionRequest $request)
    {
        Institucion::create($request->all());

        return redirect()->route('admin.permission.index')
            ->with('message', __('Institucion creado con exito.'));
    }
    /**
     * Display the specified resource.
     */
    public function show(institucion $institucion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(institucion $institucion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, institucion $institucion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(institucion $institucion)
    {
        //
    }
}
