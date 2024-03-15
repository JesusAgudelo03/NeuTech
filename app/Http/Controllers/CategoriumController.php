<?php

namespace App\Http\Controllers;

use App\Models\Categorium;
use Illuminate\Http\Request;

/**
 * Class CategoriumController
 * @package App\Http\Controllers
 */
class CategoriumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria = Categorium::paginate();

        return view('categorium.index', compact('categoria'))
            ->with('i', (request()->input('page', 1) - 1) * $categoria->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorium = new Categorium();
        return view('categorium.create', compact('categorium'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Categorium::$rules);

        $categorium = Categorium::create($request->all());

        return redirect()->route('categoria.index')
            ->with('success', 'Categorium created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorium = Categorium::find($id);

        return view('categorium.show', compact('categorium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorium = Categorium::find($id);

        return view('categorium.edit', compact('categorium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Categorium $categorium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorium $categorium)
    {
        request()->validate(Categorium::$rules);

        $categorium->update($request->all());

        return redirect()->route('categoria.index')
            ->with('success', 'Categorium updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $categorium = Categorium::find($id)->delete();

        return redirect()->route('categoria.index')
            ->with('success', 'Categorium deleted successfully');
    }
}
