<?php
namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::orderBy('id', 'desc')->paginate(20);
        return view('barang.index', compact('barangs'))->with('i', (request()->input('page', 1) - 1) * 20);
    }
    
    public function create()
    {
        return view('barang.create');
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'namabarang' => 'required',
            'jumlah' => 'required',
            'tglmasuk' => 'required',
        ]);

        Barang::create([
            'namabarang' => $request->namabarang,
            'jumlah' => $request->jumlah,
            'tglmasuk' => $request->tglmasuk,
            ]);
        return redirect()->route('barang.index')
                        ->with('success','Data berhasil disimpan.');
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit(Barang $barang)
    {
        return view('barang.edit',compact('barang'));
    }
    
    public function update(Request $request, Barang $barang)
    {
        $this->validate($request,[
            'namabarang' => 'required',
            'jumlah' => 'required',
            'tglmasuk' => 'required',
        ]);
      
        $barang->update($request->all());
        return redirect()->route('barang.index')
                        ->with('success','Data berhasil dirubah');
    }
    
    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index')
        ->with('success','Data berhasil dihapus');
    }
}

