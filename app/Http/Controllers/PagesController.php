<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
/*
    set : updateallbus();
    insert
    select

*/


class PagesController extends Controller
{
    

    public function login(){

        return view('login');
    }
    public function register(){
        return view('register');
    }

    public function sign_up(Request $req){
        $name = $req->input('name');
        $email = $req->input('email');
        $password = $req->input('password');
        $address = $req->input('address');
        $contact = $req->input('contact');
        $gender = $req->input('gender');
        $age = $req->input('age');

        $conn = mysqli_connect("localhost", "root", "", "bus_management");
        $query = mysqli_query($conn, "insert into passenger values('','$name','$email','$password','$address','$contact','$gender','$age')");
        $msg = 'Registraton Successfully Done';
        return view('login')->with('this_will_be_used_as_variable_in_views',$msg);

    }


    public function check_login(Request $req){
        $email = $req->input('email');
        $password = $req->input('password');
        $_SESSION['email'] = $email;

        $conn = mysqli_connect("localhost", "root", "", "bus_management");
        $query = mysqli_query($conn, "select * from passenger where p_email='$email' and p_password='$password'");
        $query_num_rows = mysqli_num_rows($query);
        if($query_num_rows > 0){
            $data = mysqli_fetch_array($query);
            return view('index')->with("data",$data);
        }
        else{
            
            $msg = 'Wrong email or password !!!';
            return view('login')->withMsg($msg);

        }
        
    }


    public function buslist(Request $req){
        $start = $req->input('start_point');
        $destination = $req->input('destination_point');

        return view('buslist')->withStart($start)->withDestination($destination);
    }

    public function busdetails($busno=null,$seatno=null){
        return view('busdetails', compact('busno','seatno'));
    }


    public function updateallbus(Request $req){
        $conn = mysqli_connect("localhost", "root", "", "bus_management");
        $query = mysqli_query($conn, "update bus set b_avail_seat='1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,'");
        return view('admin')->withMsg('Successfully Updated All Bus');		
    }
}
