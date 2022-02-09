<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
       // $users = DB::select('select * from users');
        /*foreach ($users as $user){ 
            echo $user->name;
        }*/

        //$results = DB::select('select * from users where id = :id', ['id' => 1]);
        //print_r($results);
    
        /*DB deki mevcut kayıtları güncellemek için :*/
        /*$affected = DB::update(
            'update users set email = `esat@escapeyazilim.com` where name = ?', ['Me']
        );*/

        //DB deki mevcut kayıtlatı silmek için:
        //$deleted = DB::deleted('delete from users');

        //Birden Çok DB bağlantısı kullanma:
        //DB::connection('sqlite')->select(...);

        //DB de sadece tek bir satır almak için 'first', 'value', 'find' yönetemi kullannılabilir:
        /*$user = DB::table('users')->where('name', 'Esat Serdar')->first();
        dd( $user->enroller_id);*/

        /*$user = DB::table('users')->where('name', 'Esat Serdar')->value('sponsor_id');
        print_r($user);*/

        //Verileri yığın halinde yüklüyor (Örnek 100)
        /*DB::table('users')->orderBy('id')->chunk(100, function($users){
            foreach($users as $user){
                echo $user->id . $user->name . '<br>';
                return false;
            }
        });*/

        return view('welcome');
    }

}
