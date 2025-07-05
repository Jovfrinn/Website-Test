<?php
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;

function initial(){
        $data = Siswa::where('user_id', Auth::user()->id)->first() ? Siswa::where('user_id', Auth::user()->id)->first() : null; 
        return $data;
}