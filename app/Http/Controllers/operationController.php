<?php

namespace App\Http\Controllers;

use App\Models\operation;
use App\Models\Pivot\operation_product;
use App\User;
use Illuminate\Http\Request;

class operationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Product.productop');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'rquantity' => 'required'
        ]);
        $operation = new operation;
        $user = \Auth::user()->id;
        $operation->user_id = $user;
        $operation->save();
        $here = $operation->id;
        $operationp = new operation_product;
        $operationp->operation_id = $here;
        $operationp->product_name = $request->name;
        $operationp->rquantity = $request->rquantity;
        $operationp->user_id = $user;
        $operationp->save();
        dd($operation);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
