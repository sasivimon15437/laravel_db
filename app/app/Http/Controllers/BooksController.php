<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BooksModel;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //เป้น Medthod แรกที่ laravel เรียกใช้ผ่าน Controller
    public function index()
    {
        //SELECT * FROM Books
        $books = BooksModel::latest()->get();
        return view('books.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //เป้น Medthod ที่ใช้เรียกแบบฟอร์มบันทึกข้อมูล
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //บันทึกข้อมูลลงในฐานข้อมูลเป้น Medthod ที่ใช้บันทึกข้อมูลลงในฐานข้อมูลจากการเรียกใช้ของแบบฟอร์มบันทึกข้อมูล
    public function store(Request $request)
    {
        $books = new BooksModel;

        $request->validate([
            'Book_ID' => 'required',
            'Title' => 'required',
            'PID' => 'required',
            'Price' => 'required'
        ]);

        $books -> Book_ID  = $request->Book_ID;
        $books -> Title  = $request->Title;
        $books -> PID  = $request->PID;
        $books -> Price  = $request->Price;
        $books ->save();
        return redirect()->route('books.index')
                         ->with('success,Books created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //เป้น Medthod ใช้แสดงผลหรือแสดงรายละเอียดของข้อมูล
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //เป้น Medthod ที่ใช้เรียกแบบฟอร์มแก้ไขข้อมูล
    public function edit($id)
    {
        $book = BooksModel::find($id);
        return view ('books.edit',compact ('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //เป้น Medthod ที่ใช้แก้ไขข้อมูลในฐานข้อมูล จะถูกเรียกจากแบบฟอร์มแก้ไขข้อมูล
    public function update(Request $request, $id)
    {
        $books = BooksModel::find($id);

        $request->validate([
            'Book_ID' => 'required',
            'Title' => 'required',
            'PID' => 'required',
            'Price' => 'required'
        ]);

        $books -> Book_ID  = $request->Book_ID;
        $books -> Title  = $request->Title;
        $books -> PID  = $request->PID;
        $books -> Price  = $request->Price;
        $books ->update();
        return redirect()->route('books.index')
                         ->with('success,Books updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //เป้น Medthod ที่ใช้ลบข้อมูล
    public function destroy($id)
    {
        $books = BooksModel::find($id);
        $books->delete();
        return redirect()->route('books.index')
                         ->with('success','Book delete successfully.');
    }

    }

