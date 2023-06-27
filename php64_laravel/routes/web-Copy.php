<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
        -Route cos cacs trangj thai
            - Get :su dung cho phuong thuc get
            -POST : suử dug cho phương thức POST
            - ANY : sử dung cho cả get,push

*/
// url :/php64
Route::get('php64', function () {
    echo "<h1> Helllo php 64</h1>";
});
Route::get('php64/hello', function () {
    echo "<h1> Helllo 2023</h1>";
});
// // truyền biến lên url
// //url :truyenbien/bien1/bien2
// Route::get('truyenbien/{bien1}/{bien2}', function ($bien1,$bien2) {
//     echo "<h1>$bien1 $bien2</h1>";
// });
// co the dat ten cho route
// url /dat-ten-route
// Route::get('dat-ten-route', function () {
//     echo "<h1>route name : test1</h1>";
// })->name('test1');
// Route::get('den-route' function () {
//     return redirect(route('test1'));
// });
// // url /view1
Route::get('view1', function () {
    $data =array("hoten"=>"Nguyen van A","email"=>"nvagdgsdgsds");
    // hamf truyeenf duwx lieeuj ra view  :sẽ biến array vào hàm view , khi đó bên trong hàm view sẽ sử lý : sử
    // dung hàm extract để biến tên key thành tên biến
    return view("php64.file_view1",$data);
});
Route::get('view2', function () {
    
    return view("php64.file_view2");
});
Route::get('view3', function () {
    
    return view("php64.file_view3");
});
Route::get('view4', function () {
    
    return view("php64.file_view4");
});
//form trong blade engine
//url :view-form
Route::get('view5-form', function () {
    
    return view("php64.file_view5");
});
Route::post('view5-form-post', function () {
    
    return view("php64.file_view5");
});
// sau khi thuc hien nut submit thif trang se o trang thai push

Route::get('upload', function () {
    return view('php64.form-upload');
});
Route::post('upload-post', function () {
    echo request()-> get("name");
    if(request()->hasFile('photo')){
        echo "string";
       $file_name = request()-> file('photo')->getClientOriginalName();
       $file_extension = request()->file('photo')->getClientOriginalExtension();
       echo "<h1>ten file : $file_name:</h1>";
       echo "<h1>Đuôi  file : $file_extension</h1>";
       request()->file('photo')->move('upload',$file_name);
    }
});

Route::get('session1', function () {
    // xóa toàn bộ session
    session()->flush();
    // tạo biến session
    session()->put("name","Nguyen Van A");
    session()->put("email","nva$");
    $name=session()->get('name');
    $email=session()->get('email');
    echo "<h1> Name: $name- email :$email</h1>";

});
Route::get('session2', function () {

    // xóa toàn bộ session
    session()->flush();
    // tạo biến session
    $sinh_vien= ["hoten"=>"Nguyen Van A","email"=>"nva jhj","lop"=>"php64"];

    session()->push('sinh_vien',$sinh_vien);
    $sv = session()->get('sinh_vien');
    // hàm dd xuát ra kiến trúc
    echo "<pre>";
    print_r($sv);
    echo "</pre>";
    foreach($sv as $value){
        echo $value["hoten"];
    }
});
Route::get('read', function () {
    //session()->flush();
    // if(session()->has('sinh_vien')==false)
    //     session()->push('sinh_vien',[]);
    $sinh_vien = session()->get('sinh_vien');
    return view('php64.read',['sinh_vien'=>$sinh_vien]);
});
Route::get('create', function () {
    return view('php64.form-sinh-vien');    
});
Route::post('create-post', function () {
    $name = request()->get('name');
    $email = Request::get('email');
    Session::push('sinh_vien',['hoten'=>$hoten,'email'=$email]);

    return redirect(url('read'));

});
// /muốn sử dụng controller nào cần phải khai báo nó ở file này
use App\Http\Controllers\CustomersController;
//read
Route::get('read',[CustomersController::class,'read']);
//create
Route::get('create',[CustomersController::class,'create']);
//create post
Route::post('create-post',[CustomersController::class,'createPost']);
//update
Route::get('update/{id}',[CustomersController::class,'update']);
//update post
Route::post('update-post/{id}',[CustomersController::class,'updatePost']);
//delete
Route::get('delete/{id}',[CustomersController::class,'delete']);
