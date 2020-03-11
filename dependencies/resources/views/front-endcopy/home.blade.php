@extends('layout.default')
@section('style')
<link rel="stylesheet" href="{{ asset('css/page.css')}}" >
@endsection
@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="banner-home w-100 mb-2">
                <img class="w-100" src="{{asset('images/header_football.png')}}">
             </div>
             <div class="banner-home-mobile w-100 mb-2">
                    <img class="w-100" src="{{asset('images/online-casino.png')}}">
                 </div>
        </div>
    </div>
<div class="container pt-4" style="background-color:#060606">
    <div class="row ">
        <div class="col-lg-6 mb-2">
                <iframe class="w-100 h-video" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
        </div>
        <div class="col-lg-6 mb-2">
                <iframe class="w-100 h-video" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
        </div>
    </div>
</div> 
<div class="container pt-4" style="background-color:#060606">
         <div class="row ">
            <div class="col-lg-6">
                <div class="content-editor"></div>
             </div>
            <div class="col-lg-6">
                <div class="content-editor"></div>
            </div>
        </div>
 </div> 
<div class="container pt-4" style="background-color:#060606">
        <div class="row">
           <div class="col-lg-12 mb-2">
               <div class="content-editor"></div>
            </div>
       </div>
</div> 
<div class="container pt-4" style="background-color:#060606">
    <div class="row">
         <div class="col-lg-4 mb-2">
            <img class="w-100" src="{{asset('images/online-casino.png')}}">
         </div>
        <div class="col-lg-4 mb-2">
            <img class="w-100" src="{{asset('images/online-football.png')}}">
        </div>
        <div class="col-lg-4 mb-2">
            <img class="w-100" src="{{asset('images/online-huay.png')}}">
        </div>
       </div>
</div> 
<div class="container pt-4" style="background-color:#060606">
        <div class="row">
             <div class="col-lg-6 mb-2">
                <img class="w-100" src="{{asset('images/online-casino.png')}}">
             </div>
            <div class="col-lg-6 mb-2">
                <img class="w-100" src="{{asset('images/online-football.png')}}">
            </div>
        </div>
 </div> 
 <div class="container pt-4" style="background-color:#060606">
        <div class="row">
             <div class="col-lg-12 text-center mb-2">
                <img class="mw-100" src="{{asset('images/online-casino.png')}}">
             </div>
        </div>
 </div> 

@endsection