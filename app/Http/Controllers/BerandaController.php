<?php
namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;
use DB;

class BerandaController extends Controller
{
    public function index()
    {
        $barangs = Barang::select(
                DB::raw("COUNT(*) as count"),
                DB::raw("namabarang"),
                DB::raw("MONTHNAME(tglmasuk) as bulan")
            )
            ->whereYear('tglmasuk', date('Y'))
            ->groupBy(DB::raw("Month(tglmasuk)"), 'namabarang', 'tglmasuk') 
            ->get();
    
        $labels = $barangs->pluck('bulan');
        $data = $barangs->pluck('count');
    
        return view('welcome', compact('labels', 'data'));
    }
}