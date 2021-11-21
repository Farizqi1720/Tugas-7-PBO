<?php

namespace App\Http\Controllers;

use App\Models\Mhs;
use Illuminate\Http\Request;

class MhsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$mhs = Mhs::latest()->paginate(5);
		
		return view('mahasiswa.index',compact('mhs'))
			->with('i', (request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		$request->validate([
		'nama' => 'required',
		'nim' => 'required',
		'prodi' => 'required',
		'jurusan' => 'required',
		'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
		]);
		
		$input = $request->all();
		
		if ($image = $request->file('image')) {
			$direktoritujuan = 'image/';
			$pp = date('YmdHis') . "." . $image->getClientOriginalExtension();
			$image->move($direktoritujuan, $pp);
			$input['image'] = "$pp";
		}
		
		Mhs::create($input);
		
		return redirect()->route('Mahasiswa.index')
						->with('Sukses','Penambahan Sukses!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mhs  $mhs
     * @return \Illuminate\Http\Response
     */
    public function show(Mhs $mhs)
    {
        //
		return view('mahasiswa.show',compact('mhs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mhs  $mhs
     * @return \Illuminate\Http\Response
     */
    public function edit(Mhs $mhs)
    {
        //
		return view('mahasiswa.edit',compact('mhs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mhs  $mhs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mhs $mhs)
    {
        //
		$request->validate([
		'nama' => 'required',
		'nim' => 'required',
		'prodi' => 'required',
		'jurusan' => 'required'
	]);
	
	$input = $request->all();
	
	if($image = $request->file('image')) {
		$destinationPath = 'image/';
		$profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
		$image->move($destinationPath, $profileImage);
		$input['image'] = "$profileImage";
	}else{
		unset($input['image']);
	}
	
	$mhs->update($input);
	
	return redirect()->route('mahasiswa.index')
					->with('sukses','Data diupdate!');	
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mhs  $mhs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mhs $mhs)
    {
        //
		$mhs->delete($mhs->id);
		
		return redirect()->route('mahasiswa.index')
						->with('Sukses','Data telah dihapus!');
    }
}
