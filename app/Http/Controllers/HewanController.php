<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Arr;
use App\Hewan;
use Illuminate\Support\Facades\Storage;
use Validator;
use Storange;

class HewanController extends Controller
{
    public function index(Request $request)
    {
        $hewan = Hewan::paginate(3);
        $filterKeyword = $request->get('keyword');
        if ($filterKeyword)
        {
            $hewan = Hewan::where('name','LIKE',"%$filterKeyword%")->paginate(1);
        }
        return view('hewan.index', compact('hewan'));
    }//end method

    public function create()
    {

        return view('hewan.create');
    }//end method

    public function store(Request $request)
    {
        $data = $request->all();
        $validasi = Validator::make($data,[
            'foto'=>'required|image|mimes:jpeg,jpg,png|max:10000',
            'jenishewan'=>'required|max:255',
            'ras'=>'required|max:255',
            'jenis'=>'required|max:255',
            'umur'=>'required|max:255',

        ]);

        if($validasi->fails())
        {
            return redirect()->route('hewan.create')->withInput()->withErrors($validasi);
        }
        $foto = $request->file('foto');
        $extention = $foto->getClientOriginalExtension();
            if($request->file('foto')->isValid()){
             $namafoto = "foto/".date('YmdHis').".".$extention;
             $upload_path = 'uploads/foto';
             $request->file('foto')->move($upload_path,$namafoto );
             $data['foto'] = $namafoto;

        Hewan::create($data);

        return redirect()->route('hewan.index');
            }
    }//end method

    public function destroy($id)
    {
        $data = hewan::findOrFail($id);
        $data->delete();
        return redirect()->route('hewan.index');
    }//end method


    public function show($id)
    {
        $hewan = Hewan::findOrFail($id);
        return view('hewan.show',compact('hewan'));
    }//end method


    public function edit($id)
    {

        $hewan = Hewan::findOrFail($id);
        return view('hewan.edit',compact('hewan'));
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
        $hewan = Hewan::findOrFail($id);
        $input = $request->all();
        $validasi = Validator::make($input,[
            'foto'=>'required|image|mimes:jpeg,jpg,png|max:10000',
            'jenishewan'=>'required|max:255',
            'ras'=>'required|max:255',
            'jenis'=>'required|max:255',
            'umur'=>'required|max:255',

        ]);
        if($validasi->fails())
        {
            return redirect()->route('hewan.edit',[$id])->withErrors($validasi);
        }

if($request->hasFile('foto')) {
    if($request->file('foto')->isValid())
    {

        Storage::disk('upload')->delete($hewan->id);
        $foto = $request->file('foto');
        $extention = $foto->getClientOriginalExtension();
        $namafoto = "foto/".date('YmdHis').".".$extention;
        $upload_path = 'uploads/foto';
        $request->file('foto')->move($upload_path,$namafoto );
        $input['foto'] = $namafoto;
       }
    }

        $hewan->update($input);
        // alert()->success('Berhasil di edit','success');
        toast('berhasil edit','success');
        return redirect()->route('hewan.index');



}
}
?>
