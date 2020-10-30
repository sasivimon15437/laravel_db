@extends('books.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">แก้ข้อมูลหนังสือ</div>

                <div class="card-body">
                    <form method="post" action="{{ route('books.update',$book->id) }}" class="form-horizontal">
                    @csrf
                    @method("PUT")
                    <div class="row">
                        <label class="col-sm-4 col-form-label"><strong>รหัสหนังสือ:</strong></label>
                        <div class="col-sm-8">
                          <div class="form-group">
                          <input type="text" name="Book_ID" Value= "{{$book->Book_ID}}" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-4 col-form-label"><strong>ชื่อหนังสือ:</strong></label>
                        <div class="col-sm-8">
                          <div class="form-group">
                          <input type="text" name="Title" Value= "{{$book->Title}}" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-4 col-form-label"><strong>สำนักพิมพ์:</strong></label>
                        <div class="col-sm-8">
                          <div class="form-group">
                          <input type="text" name="PID" Value= "{{$book->PID}}"class="form-control">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <label class="col-sm-4 col-form-label"><strong>ราคาหนังสือ:</strong></label>
                        <div class="col-sm-8">
                          <div class="form-group">
                          <input type="text" name="Price" Value= "{{$book->Price}} "class="form-control">
                          </div>
                        </div>
                      </div>                                                                                                           
                      <div class="card-footer ml-auto mr-auto" align=center>
                        <button type="reset" class="btn btn-primary">ยกเลิก</button>
                        <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                      </div>
                    </form>
                </div>

            </div>
            </div>

    </div>
</div>
@endsection