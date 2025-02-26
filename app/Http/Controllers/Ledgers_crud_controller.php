<?php

namespace App\Http\Controllers;

use App\Models\Ledgers;
use Illuminate\Http\Request;

class Ledgers_crud_controller extends Controller
{
    // นี่คือฟังก์ชันที่ใช้ในการแสดงข้อมูลทั้งหมด
    public function index() {
        $data['ledgers'] = Ledgers::orderBy('id', 'desc')->paginate(5);
        return view('ledgers.index', $data);
    }

    // นี่คือหน้าที่ใช้ในการสร้างข้อมูล
    public function create() {
        return view('ledgers.create');
    }

    public function store(Request $request) {
        $request->validate([
            'type' => 'required',
            'list_name' => 'required',
            'amount' => 'required',
            'payment_date' => 'required',
            'created_date' => 'required',
            'update_date' => 'required',
        ]);

        $ledgers = new Ledgers;
        $ledgers->type = $request->type;
        $ledgers->list_name = $request->list_name;
        $ledgers->amount = $request->amount;
        $ledgers->payment_date = $request->payment_date;
        $ledgers->save();
        return redirect()->route('ledgers.index')->with('success', 'ledgers has been created successfully.');
    }
}
