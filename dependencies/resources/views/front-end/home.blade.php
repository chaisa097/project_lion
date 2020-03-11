@extends('layout.default')
@section('style')
<link rel="stylesheet" href="{{ asset('front-ends-assets/css/page.css')}}" >
@endsection
@section('seo')
<title>{{$seo->seo_title}}</title>
<meta name="description" content="{{$seo->seo_description}}">
<meta name="keywords" content="{{$seo->seo_keyword}}">
<meta property="og:title" content="{{$seo->seo_title}}">
<meta property="og:description" content="{{$seo->seo_description}}">
<meta property="og:image" content="{{config('app.url_backend')}}/media/seo/{{$seo->seo_image}}">
@endsection
@section('content')
@foreach($datas->widgets as $data)
@if($data->widget_type == 1)
<div>
<div class="container py-3" style="background-color:{{$data->bg_color}}" >
        <div class="row">
            @foreach($data->items as $item )
            <div class="col-lg-{{12/$data->amount_column}}">
                <div class="content-editor">
                        {!!$item->content!!}
                </div>
            </div>
            @endforeach
    </div>
</div> 
</div>
@endif
@if($data->widget_type == 2)
@if($data->status == 2)
@foreach($data->items as $item )
<div class="container-fluid fix-z-index" >
    <div class="row">
        <div class="col-lg-12 p-0" >
        <div class="banner-home w-100 mb-2">
        <a href="{{$item->link!=null? $item->link:'#'}}" target="_blank">
        <img class="w-100" alt="{{$item->img_alt}}" src="{{config('app.url_backend')}}/media/widget/{{$item->image}}">
        </a>
         </div>
         <div class="banner-home-mobile w-100 mb-2">
          <a href="{{$item->link!=null? $item->link:'#'}}" target="_blank">
            <img class="w-100" alt="{{$item->img_alt}}" src="{{config('app.url_backend')}}/media/widget/{{$item->image}}">
            </a>
        </div>
        </div>
    </div>
</div>
@endforeach
@endif
@endif
@if($data->widget_type == 2)
@if($data->status != 2)
<div class="container py-3" style="background-color:{{$data->bg_color}}">
        <div class="row">
            @foreach($data->items as $item )
             <div class="col-lg-{{12/$data->amount_column }} mb-lg-0 mb-2">
                <a href="{{$item->link!=null? $item->link:'#'}}" target="_blank">
                <img class="w-100" alt="{{$item->img_alt}}" src="{{config('app.url_backend')}}/media/widget/{{$item->image}}">
                </a>
             </div>
             @endforeach
           </div>
    </div> 
@endif
@endif
@if($data->widget_type == 3)
<div class="container py-3" style="background-color:{{$data->bg_color}}">
        <div class="row">
            @foreach($data->items as $item)
            <div class="col-lg-{{12/$data->amount_column }}">
                <?php $link = explode("=", $item->youtube_link); ?>
                 <iframe class="w-100 h-video " src="https://www.youtube.com/embed/{{$link[count($link)-1]}}">
                </iframe>
            </div>
            @endforeach
        </div>
    </div> 
@endif
@if($data->widget_type == 4)
<div class="container py-3" style="background-color:{{$data->bg_color}}">
        <div class="row">
            @foreach($data->items as $item)
           <div class="col-lg-6 {{$data->amount_column == 1 ? 'order-lg-1 order-1':'order-1 order-lg-2' }} align-self-center mb-lg-0  mb-4">
               <div class="content-editor">
                    {!!$item->content!!}
              </div>
           </div>
           <div class="col-lg-6 {{$data->amount_column == 1 ? 'order-lg-2 order-2':'order-2 order-lg-1'}} mb-lg-0  mb-4">
               <a href="{{$item->link!=null? $item->link:'#'}}" target="_blank">
                <img class="w-100" alt="{{$item->img_alt}}" src="{{config('app.url_backend')}}/media/widget/{{$item->image}}">
                </a>
            </div>
           @endforeach
       </div>
</div> 
@endif
@if($data->widget_type == 5)
<div class="container py-3" style="background-color:{{$data->bg_color}}">
        <div class="row">
            @foreach($data->items as $item)
           <div class="col-lg-6 {{$data->amount_column == 1 ? 'order-1':'order-2' }} align-self-center">
               <div class="content-editor">
                    {!!$item->content!!}
              </div>
           </div>
           <div class="col-lg-6 {{$data->amount_column == 1 ? 'order-2':'order-1'}}">
                <?php $link2 = explode("=", $item->youtube_link); ?>
                <iframe class="w-100 h-video " src="https://www.youtube.com/embed/{{$link2[count($link2)-1]}}">
                </iframe>
            </div>
            @endforeach
       </div>
</div> 
@endif
@endforeach
<div class="container-fluid fixed-top tap-color">
    <div class="">
            <div class="py-2 posit">
                    <a href="#">
                    <button class="btn btn-register">สมัครสมาขิก </button>
                    </a>
                    {{-- <a href="#">
                     <button class="btn btn-register">เข้าสู่เว็บไซค์ </button
                    </a> --}}
                </div>
    </div>
</div>
@if($seo->slug == 'home')
<div class="container">
    <div class="row mb-2">
            <div class="col-lg-12 ">
            <h1>ธนาคารที่รองรับ</h1>
            </div>
    </div>
    <div class="row my-4"> 
        <div class="col-md-2 col-sm-4 col-6">
                <div class="client"> 
                    <a href="https://www.scbeasy.com/v1.4/site/presignon/index.asp" title="เติมเครดิต แทงหวย ธนาคารไทยพาณิชย์"> 
                    <img class="mw-100" src="https://www.raklotto.com/assets/themes/default/images/bank/bank-scb.jpg" alt="เติมเครดิต แทงหวย ธนาคารไทยพาณิชย์">
                     </a>
                </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6">
                <div class="client"> 
                    <a href="https://online.kasikornbankgroup.com/K-Online/login.jsp?lang=th" title="เติมเครดิต แทงหวย ธนาคารกสิกรไทย"> 
                <img  class="mw-100" src="https://www.raklotto.com/assets/themes/default/images/bank/bank-kbank.jpg" alt="เติมเครดิต แทงหวย ธนาคารกสิกรไทย"> 
                     </a>
                </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6">
                <div class="client"> 
                    <a href="https://ibanking.bangkokbank.com/SignOn.aspx" title="เติมเครดิต แทงหวย ธนาคารกรุงเทพ"> 
                        <img  class="mw-100" src="https://www.raklotto.com/assets/themes/default/images/bank/bank-bbl.jpg" alt="เติมเครดิต แทงหวย ธนาคารกรุงเทพ"> 
                    </a>
                </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6">
                <div class="client"> 
                    <a href="https://www.ktbnetbank.com/consumer/" title="เติมเครดิต แทงหวย ธนาคารกรุงไทย"> 
                    <img  class="mw-100" src="https://www.raklotto.com/assets/themes/default/images/bank/bank-ktb.jpg" alt="เติมเครดิต แทงหวย ธนาคารกรุงไทย">
                 </a>
                </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6">
                <div class="client">
                     <a href="https://www.krungsrionline.com/BAY.KOL.WebSite/Common/Login.aspx?language=TH" title="เติมเครดิต แทงหวย ธนาคารกรุงศรีอยุธยา"> 
                        <img  class="mw-100" src="https://www.raklotto.com/assets/themes/default/images/bank/bank-krungsri.jpg" alt="เติมเครดิต แทงหวย ธนาคารกรุงศรีอยุธยา"> 
                    </a>
                </div>
              </div>
         <div class="col-md-2 col-sm-4 col-6">
                <div class="client"> 
                    <a href="https://www.tmbdirect.com/tmb/kdw1.12.4#_frmIBPreLogin" title="เติมเครดิต แทงหวย ธนาคารทหารไทย">
                     <img class="mw-100" src="https://www.raklotto.com/assets/themes/default/images/bank/bank-tmb.jpg" alt="เติมเครดิต แทงหวย ธนาคารทหารไทย">
                    </a>
                 </div>
            </div>
    </div>
</div>
@endif
@endsection