<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Barang;
use App\Tranksaksi;
use App\Tranksaksis;
use App\Suppliyer;
class create extends Controller
{
    public function index(){
      $content['data'] = Barang::limit(3)->get();
      $content['suppliyer'] = Suppliyer::all();
      $content['data'] = Barang::paginate(3);
      return view('admin',$content);
    }
    public function create(Request $request){
      $file = $request->file('gambar');
		    $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'image';
		    $file->move($tujuan_upload,$nama_file);
      $barang = new Barang;
      $barang->nama_barang = $request->nama;
      $barang->jumlah_barang = $request->jumlah;
      $barang->harga_barang = $request->harga;
      $barang->gambar=$nama_file;
      $barang->suppliyer_id=$request->suppliyer;
      $barang->save();

      return redirect()->back();
    }
    public function Transaksi(Request $request){
      $tranksaksi= new Tranksaksi;
      $tranksaksi->nama_barang=$request->namas;
      $tranksaksi->jumlah_barang=$request->jumlahs;
      $tranksaksi->harga_satuan=$request->harga_satuan;
      $tranksaksi->total_harga=$request->total;
      $tranksaksi->save();

      return redirect()->back();
    }
    public function Transaksis(Request $request){

        $message=[
          'required'=>'jumlah pembelian tidak boleh kosong'
        ];
        request()->validate([
          'jumlahs'=>'required'
        ],$message);

      $item= Barang::find($request->nama_barang);
      $tranksaksis= new Tranksaksis;
      // dd($request);
      $tranksaksis->id_barang_cart=$item->id;
      $tranksaksis->nama_barang=$item->nama_barang;
      $tranksaksis->jumlah_barang=$request->jumlahs;
      $tranksaksis->harga_satuan=$request->harga_satuan;
      $tranksaksis->total_harga=$request->jumlahs * $request->harga_satuan;
      // dd($tranksaksis);
      $tranksaksis->save();

      return redirect()->back();
    }

    public function belibahan(){
      $data['belibahan']= Barang::all();
      $data['cart'] = Tranksaksis::all();
      return view('beli_bahan', $data);
    }
    public function create_petugas(Request $request){

      $message=[
        'required'=>'attribut belum dimasukkan atau diisi',
        'max'=>'maksimal memasukkan 13 angka',
        'min'=>'minimal memasukkan 9 angka'
      ];
      request()->validate([
        'nama_petugas'=>'required',
        'no_telepon'=>'required|min:9|max:13',
        'alamat'=>'required'
      ],$message);

      $suppliyer= new Suppliyer;
      $suppliyer->nama_suppliyer=$request->nama_petugas;
      $suppliyer->alamat_suppliyer=$request->alamat;
      $suppliyer->no_telp=$request->no_telepon;
      $suppliyer->save();

      return redirect()->back();
    }
    public function delete($id){
      $barang= Barang::find($id);
      $barang->delete();

      return redirect()->back();
    }
    public function delete_2($id){
      $barang= tranksaksis::find($id);
      $barang->delete();

      return redirect()->back();
    }
    public function edit($id){
      $data['barang'] = Barang::find($id);
      $data['suppliyer'] = Suppliyer::all();
        return view('edit',$data);
    }
    public function update($id, Request $request){

      $barang = Barang::find($id);
      $gambar = $request->gambar_1;

      if ($request->gambar_1){
        $nama_file = time()."_".$gambar->getClientOriginalName();
        $tujuan_upload='image';
        $gambar->move($tujuan_upload,$nama_file);
        if ($barang->gambar !=null) {
            $lokasi_file = public_path()."\\image\\".$barang->gambar;
            unlink($lokasi_file);
        }
        $barang->gambar=$nama_file;
      }
      $barang->nama_barang= $request->nama;
      $barang->jumlah_barang=$request->jumlah;
      $barang->harga_barang=$request->harga;
      $barang->suppliyer_id=$request->suppliyer;
      $barang->save();

      return redirect('admin');
    }

    public function edit_2($id){

      $data['cart'] = tranksaksis::find($id);

        return view('updateBarang',$data);
    }

    public function update_2($id, Request $request){

      $tranksaksis = tranksaksis::find($id);
      $tranksaksis->jumlah_barang=$request->jumlah_2;
      $tranksaksis->total_harga = $tranksaksis->harga_satuan * $request->jumlah_2;
      $tranksaksis->save();

      return redirect('beli_bahan');
    }
    public function home2(){
      $data['barang']= Barang::all();
      return view('home2', $data);

    }

    public function bayar(Request $request)
    {
        foreach (Tranksaksis::All() as $bayar) {
        $tranksaksi= new Tranksaksi;
        $tranksaksi->id_barang=$bayar->id_barang_cart;
        $tranksaksi->nama_barang=$bayar->nama_barang;
        $tranksaksi->jumlah_barang=$bayar->jumlah_barang;
        $tranksaksi->harga_satuan=$bayar->harga_satuan;
        $tranksaksi->total_harga=$bayar->total_harga;
        $tranksaksi->save();
        $bayar->delete();
}
        return redirect('beli_bahan');
    }

    public function petugas() {
      $data = Suppliyer::all();

      return view('petugas',['data' => $data]);
    }
    public function contact(Request $request){


    }
}
