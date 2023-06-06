<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Models\Kendaraan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(){
		$data = Kendaraan::all();
	
		if($data){
			return ApiFormatter::createApi(200, 'Success', $data);
		}
		else{
			return ApiFormatter::createApi(400, 'Failed');
		}  
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		try {
			$kendaraan = Kendaraan::create([				
				'jenis' => $request->jenis,
				'merek' => $request->merek,
				'mesin' => $request->mesin,
				'suspensi' => $request->suspensi,
				'transmisi' => $request->transmisi,
				'tahun' => $request->tahun,
				'warna' => $request->warna,
				'harga' => $request->harga,
				'penumpang' => $request->penumpang,
				'tipe' => $request->tipe,
			]);

			$data = Kendaraan::where('_id', '=', $kendaraan->id)->get();
			if($data){
				return ApiFormatter::createApi(200, 'Success', $data);
			}
			else{
				return ApiFormatter::createApi(400, 'Failed');
			}  
		}
		catch(Exception $error) {
			return ApiFormatter::createApi(400, 'Failed');
		}


	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id){
		$data = Kendaraan::where('_id', '=', $id)->get();
		if($data){
			return ApiFormatter::createApi(200, 'Success', $data);
		}
		else{
			return ApiFormatter::createApi(400, 'Failed');
		}  
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id){
		try {
			$kendaraan = Kendaraan::findOrFail($id);

			$kendaraan->update([
				'jenis' => $request->jenis,
				'merek' => $request->merek,
				'mesin' => $request->mesin,
				'suspensi' => $request->suspensi,
				'transmisi' => $request->transmisi,
				'tahun' => $request->tahun,
				'warna' => $request->warna,
				'harga' => $request->harga,
				'penumpang' => $request->penumpang,
				'tipe' => $request->tipe,
			]);

			$data = Kendaraan::where('_id', '=', $kendaraan->id)->get();
			if($data){
				return ApiFormatter::createApi(200, 'Success', $data);
			}
			else{
				return ApiFormatter::createApi(400, 'Failed');
			}  
		}
		catch(Exception $error) {
			return ApiFormatter::createApi(400, 'Failed');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id){
		try {
			$kendaraan = Kendaraan::findOrFail($id);
			$data = $kendaraan->delete();
			if($data){
				return ApiFormatter::createApi(200, 'Success destroy data');
			}
			else{
				return ApiFormatter::createApi(400, 'Failed');
			}  
		}
		catch(Exception $error) {
			return ApiFormatter::createApi(400, 'Failed');
		}
	}
}
