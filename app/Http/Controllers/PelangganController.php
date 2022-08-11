<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
Use App\Pelanggan;
use Validator;


class PelangganController extends Controller
{
    public function index(Request $request)
    {
        $pelanggan = Pelanggan::paginate(3);
        $filterKeyword = $request->get('keyword');
        if ($filterKeyword)
        {
            $pelanggan = Pelanggan::where('nama','LIKE',"%$filterKeyword%")->paginate(1);
        }
        return view('pelanggan.index', compact('pelanggan'));
    }//end method

    public function create()
    {

        return view('pelanggan.create');
    }//end method

    public function store(Request $request)
    {
        $data = $request->all();
        $validasi = Validator::make($data,[
            'nama'=>'required|max:255',
            'alamat'=>'required|max:255',
            'email'=>'required|email|max:255|unique:pelanggan',
            'telpon'=>'required|max:255',

        ]);
        if($validasi->fails())
        {
            return redirect()->route('pelanggan.create')->withInput()->withErrors($validasi);
        }

        Pelanggan::create($data);
        return redirect()->route('pelanggan.index');
    }//end method

    public function destroy($id)
    {
        $data = Pelanggan::findOrFail($id);
        $data->delete();
        return redirect()->route('pelanggan.index');
    }//end method


    public function show($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.show',compact('pelanggan'));
    }//end method


    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.edit',compact('pelanggan'));
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
    $pelanggan = Pelanggan::findOrFail($id);
    $data = $request->all();
    $validasi = Validator::make($data,[
            'nama'=>'required|max:255',
            'alamat'=>'required|max:255',
            'email'=>'required|email|max:255',
            //'username'=>'required|max:100|unique:users,username,'.$id,
            'telpon'=>'required|max:255'
        ]);
        if($validasi->fails())
        {
            return redirect()->route('pelanggan.create',[$id])->withErrors($validasi);
        }
        if($request->input('password'))
        {
            $data['password'] = bcrypt($data['password']);
       }
         else
         {
              $data = Arr::except($data,['password']);
         }
          $pelanggan->update($data);
          //Alert::toast('Berhasil di edit','success');
          return redirect()->route('pelanggan.index');
       }
}

?>
