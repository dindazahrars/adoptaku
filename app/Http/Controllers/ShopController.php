<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
Use App\Shop;
use Validator;


class ShopController extends Controller
{
    public function index(Request $request)
    {
        $shop = Shop::paginate(3);
        $filterKeyword = $request->get('keyword');
        if ($filterKeyword)
        {
            $shop = Shop::where('nama','LIKE',"%$filterKeyword%")->paginate(1);
        }
        return view('shop.index', compact('shop'));
    }//end method

    public function create()
    {

        return view('shop.create');
    }//end method

    public function store(Request $request)
    {
        $data = $request->all();
        $validasi = Validator::make($data,[
            'namashop'=>'required|max:255',
            'alamatshop'=>'required|max:255',
            'emailshop'=>'required|email|max:255|unique:Shop',
            'fax'=>'required|max:255',

        ]);
        if($validasi->fails())
        {
            return redirect()->route('shop.create')->withInput()->withErrors($validasi);
        }

        Shop::create($data);
        return redirect()->route('shop.index');
    }//end method

    public function destroy($id)
    {
        $data = Shop::findOrFail($id);
        $data->delete();
        return redirect()->route('shop.index');
    }//end method


    public function show($id)
    {
        $shop = Shop::findOrFail($id);
        return view('shop.show',compact('shop'));
    }//end method


    public function edit($id)
    {
        $shop = Shop::findOrFail($id);
        return view('shop.edit',compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    $shop = Shop::findOrFail($id);
    $data = $request->all();
    $validasi = Validator::make($data,[
            'namashop'=>'required|max:255',
            'alamatshop'=>'required|max:255',
            'email'=>'required|email|max:255',
            //'username'=>'required|max:100|unique:users,username,'.$id,
            'fax'=>'required|max:255'
        ]);
        if($validasi->fails())
        {
            return redirect()->route('shop.create',[$id])->withErrors($validasi);
        }
        if($request->input('password'))
        {
            $data['password'] = bcrypt($data['password']);
       }
         else
         {
              $data = Arr::except($data,['password']);
         }
          $shop->update($data);
          //Alert::toast('Berhasil di edit','success');
          return redirect()->route('shop.index');
       }
}

?>
