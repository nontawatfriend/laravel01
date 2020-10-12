@extends('layouts.master2') <!-- นำไฟล์เข้า -->
@section('title', 'Tableall') <!-- กำหนดหัวเว็บชื่อ Homepage -->
@section('content')
<!-- csrf-token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
        <div align="center">
        <hr>   
        <h2>Show all data from mytb1 👦</h2>
        <hr>
            {{-- <table border="1"> --}}
                <h4><a href="{{url('new')}}" class="btn btn-primary" >Insert new record <i class="fa fa-plus-circle"></i></a></h4>
        </div>
                <table id="example" class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr style="background-color: #9c76b3">
                    <th><h4>ID</h4></th>
                    <th><h4>FirtName</h4></th>
                    <th><h4>LastName</h4></th>
                    <th><h4>แก้ไขข้อมูล</h4></th>
                    <th><h4>ลบข้อมูล</h4></th>
                    </tr>
                </thead>
                @if(count($_data)>0)
                <tbody>
                    @foreach($_data as $rec)
                    <tr>
                        <td>{{$rec->id}}</td>
                        <td>{{$rec->fname}}</td>
                        <td>{{$rec->lname}}</td>
                        <td><a href="edit/{{$rec->id}}" class="btn btn-warning">Change <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                        <td><button  onclick="deleteConfirmation({{$rec->id}})" class="btn btn-danger">Remove <i class="fa fa-trash" aria-hidden="true"></i></button></td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>FirtName</th>
                        <th>LastName</th>
                        <th>แก้ไข</th>
                        <th>ลบ</th>
                    </tr>
                </tfoot>
            </table>
       
                @endif
        
                <script type="text/javascript">
                    function deleteConfirmation(id) {
                    swal({
                        title: "ลบข้อมูล",
                        /* text: "ยืนยันที่จะลบ?", */
                        type: "error",
                        reverseButtons: !0,
                        cancelButtonText: "ยกเลิก",
                        confirmButtonText: "ตกลง 👌",
                        showCancelButton: !0
                    }).then(function (e) {
                        if (e.value === true) {
                        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                        $.ajax({
                            type: 'POST',
                            url: "{{url('/delete')}}/" + id,
                            data: {_token: CSRF_TOKEN},
                            dataType: 'JSON',
                            success: function (results) {
                                window.location = "showall";
                                /* if (results.success === true) {
                                swal("ลบข้อมูลแล้ว!", results.message, "success"),
                                        window.location.href = "showall";
                                    //window.location = "showall";
                                } else {
                                swal("เกิดข้อผิดพลาด!", results.message, "error");
                                } */
                            }
                        });
                        } else {
                        e.dismiss;
                        }
                    }, function (dismiss) {
                    return false;
                    })
                    }
                    </script>
@endsection