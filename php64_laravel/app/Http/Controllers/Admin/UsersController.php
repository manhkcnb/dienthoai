<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//sử dụng query builder
use DB;
//đối tượng mã hóa password
use Hash;

class UsersController extends Controller
{
    public function read(Request $request){
        //lấy các bản ghi, phân 4 bản ghi trên 1 trang
        $data = DB::table("users")->orderBy("id","desc")->paginate(4);
        return view("admin.users.read",["data"=>$data]);
    }
    public function update(Request $request,$id){
        //lấy 1 bản ghi
        $record = DB::table("users")->where("id","=",$id)->first();
        //tạo biến $action để đưa vào thuộc tính action của form
        $action = url('backend/users/update-post/'.$id);
        return view("admin.users.create_update",["record"=>$record,"action"=>$action]);
    }
    public function updatePost(Request $request,$id){
        $name = $request->get("name");
        //có thể dùng cách khác để lấy giá trị
        $email = request("email");
        $password = $request->get("password");
        //update name
        DB::table("users")->where("id","=",$id)->update(["name"=>$name]);
        //nếu password không rỗng thì update password
        if($password != ""){
            //mã hóa password
            $password = Hash::make($password);
            DB::table("users")->where("id","=",$id)->update(["password"=>$password]);
        }
        return redirect(url('backend/users'));
    }
    public function create(Request $request){
        //tạo biến $action để đưa vào thuộc tính action của form
        $action = url('backend/users/create-post');
        return view("admin.users.create_update",["action"=>$action]);
    }
    public function createPost(Request $request){
        $name = $request->get("name");
        //có thể dùng cách khác để lấy giá trị
        $email = request("email");
        $password = $request->get("password");
        $password = Hash::make($password);
        //update name
        DB::table("users")->insert(["name"=>$name,"email"=>$email,"password"=>$password]);
        return redirect(url('backend/users'));
    }
    public function delete(Request $request,$id){
        //xóa bản ghi
        $record = DB::table("users")->where("id","=",$id)->delete();
        return redirect(url('backend/users'));
    }
}
