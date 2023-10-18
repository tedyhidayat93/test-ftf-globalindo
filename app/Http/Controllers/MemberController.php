<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function list() {
        $members = Member::get();
        return view('list', compact('members'));
    }

    public function form() {
        return view('form');
    }

    public function store(Request $request) {
        try {
            DB::transaction(function () use ($request) {
                Member::create([
                    'handphone' => $request->handphone,
                    'nama' => $request->nama,
                    'alamat' => $request->alamat,
                    'agama' => $request->agama,
                    'hobby' => implode(', ', $request->hobby),
                    'thn_lahir' => $request->thn_lahir,
                    'umur' => $request->umur,
                    'created_at' => date('Y-m-d H:i:s'),
                ]);
            });
            return back()->with('success', 'Berhasil menyimpan data.');
        } catch (\Throwable $th) {
            return back()->with('error', 'Maaf terjadi kesalahan.');
        }
    }
}
