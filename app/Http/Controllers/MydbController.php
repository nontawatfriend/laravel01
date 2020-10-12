<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MydbController extends Controller
{
    public function showalldata(){
        $strSQL = "select * from mytb1 ORDER BY ID ASC ";
        $_data = DB::select($strSQL);


        return view('showall',['_data'=>$_data]);
    }
    public function insert(Request $request){
        $id=$request->input('id');
        $fname=$request->input('fname');
        $lname=$request->input('lname');

        $chacklist = \DB::table('mytb1')->where('id', $id)
                ->get();
        $Count = count($chacklist);
        if($Count > 0 ){
           echo    "<link href=\'fonts/Kamit.css' rel=\'stylesheet'>";
           echo  "<div align=\"center\"><h1>มีไอดีซ้ำกันอยู่<br><a href=\"new\">>>> ทำรายการใหม่ <<<</a></h1></div>";
        }else{

        $strSQL="insert into mytb1 (id,fname,lname) values ('".$id."','".$fname."','".$lname."');";
        DB::insert($strSQL);
        
        return redirect()
        ->action('App\Http\Controllers\MydbController@showalldata');
        }
    }
    /* public function edit(Request $requests){
        $id=$requests->input('id');
        $fname=$requests->input('fname');
        $lname=$requests->input('lname');

        $strSQL="select mytb1 (id,fname,lname);";
        DB::insert($strSQL);

        return redirects()
        ->action('App\Http\Controllers\MydbController@showalldata');
    } */
/*     public function edit($id)
    {
        $strSQL = "select*from mytb1";
        $_data = DB::select($strSQL);
        return view('edits',['_data'=>$_data]);
    } */
    public function edit($id) {
        $_data = DB::select('select * from mytb1 where id ='.$id.'');
        return view('edits',['_data'=>$_data]);
    }
    public function edits(Request $request,$id) {


        $id_new = $request->input('id_new');
        $fname = $request->input('fname');
        $lname = $request->input('lname');

        /* $strSQL = "select id from mytb1 ";
        $strSQL = DB::select($strSQL); */
        $_data = DB::select('select id from mytb1 where id ='.$id.'');
        if($_data != $id_new){
        //$data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);
        //DB::table('student')->update($data);
        // DB::table('student')->whereIn('id', $id)->update($request->all());
        DB::update("update mytb1 set id='".$id_new."', fname='".$fname."', lname='".$lname."' where id='".$id."'");
        return redirect()->action('App\Http\Controllers\MydbController@showalldata');
        }
        else 
            echo "มีผู้ใช้ ID นี้แล้ว";
    }
    public function delete($id) {
        
        $delete = DB::delete('delete from mytb1 where id = ?',[$id]);
        // check data deleted or not
        if ($delete == 1) {
            $success = true;
            $message = "User deleted successfully";

        } else {
            $success = true;
            $message = "User not found";
        }
        //  Return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    
        //DB::delete('delete from mytb1 where id = ?',[$id]);
        //return redirect()->action('App\Http\Controllers\MydbController@showalldata');
    }
}