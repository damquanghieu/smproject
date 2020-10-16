@extends('layout.index')
@section('title')
<title>Thêm môn học</title>
@endsection
@section('content')
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h3 class="m-0 font-weight-bold text-primary">Thêm mới môn học</h3>
            </div>
            <div class="card-body">
              @if(count($errors)>0)
                      <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                          {{$err}}<br>
                        @endforeach
                      </div>
                    @endif

              <form action="{{asset('admin/themmonhoc')}}" method="POST">
                {!!csrf_field() !!}
                <div class="form-group">
                  <label >Tên môn học:<span style="color: red;">*</span></label>
                  <input type="text" class="form-control" placeholder="Vd: Toán 10" name="name" >
                </div>
                <div class="form-group">
                  <label >Mô tả:</label>
                  <input type="text" class="form-control" placeholder="Vd: Toán 10" name="description" >
                </div>
                <div class="form-group">
                  <select class="mdb-select md-form" name="gradeid" >
                    <option value="" disabled selected>Chọn khối học</option>
                    @foreach($grade as $gr)
                    <option value="{{$gr['id']}}">{{$gr['name']}}</option>
                    @endforeach
                  </select><span style="color: red;">   *</span> 
                </div>
                <p>Thông tin "<span style="color: red;">*</span>" không được để trống.</p>                   
                <button type="submit" class="btn btn-primary">Chấp nhận</button>
              </form>
            </div>
          </div>
@endsection