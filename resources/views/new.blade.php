@extends('layouts.master2') <!-- นำไฟล์เข้า -->
@section('title', 'Insert') <!-- กำหนดหัวเว็บชื่อ Homepage -->
@section('content')
        <div align="center">
        <hr>   
        <a href="showall">🏠 Show all data from mytb1 Back</a><h2> Insert new data <i class="fa fa-plus-circle"></i></h2>
        <hr>
            <form class="form-horizontal" method="post" action="{{url('insert')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-5 control-label">ID :</label>
                  <div class="col-sm-3">
                    <input type="text" name="id" maxlength="5" class="form-control" id="inputEmail3" placeholder="" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-5 control-label">FirtName :</label>
                  <div class="col-sm-3">
                    <input type="text" name="fname" class="form-control" id="inputPassword3" placeholder="" required="required">
                  </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-5 control-label">LastName :</label>
                    <div class="col-sm-3">
                      <input type="text" name="lname" class="form-control" id="inputEmail3" placeholder="" required="required">
                    </div>
                  </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-8">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-8">
                    <button type="submit" class="btn btn-default">Save</button>
                  </div>
                </div>
              </form>
              {{--<br>
                 <form method="post" action="{{url('insert')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label for="id">ID :</label>
                    <input type="text" name="id" calss="form-control">
                </div>
                <div class="form-group">
                    <label for="fname">FirtName :</label>
                    
                    <input type="text" name="fname" calss="form-control">
                </div>
                <div class="form-group">
                    <label for="lname">LastName :</label>
                    <input type="text" name="lname" calss="form-control">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
             --}}
        </div>
@endsection