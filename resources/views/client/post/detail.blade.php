@extends('client.template.layout')
@section('content')
<style>
    .blog{
        width: 50%!important;
    }
</style>
 <!-- Start Blog Details Area -->
 <section class="htc__blog__details bg__white ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-xs-3"></div>
                <div class="col-xs-6 col-lg-6">
                <div class="htc__blog__details__wrap">
                    <div class="ht__bl__thumb">
                        <img src="{{asset($baiviet->bv_hinhanh)}}" alt="blog images">
                    </div>
                    <h2>{{$baiviet->bv_tieude}}</h2>
                    <div class="bl__dtl">
                        <p>{{$baiviet->bv_noidung}}</p>
                    </div>
                    
                </div>
            </div>  
            <div class="col-xs-3"></div> 
            
        </div>
    </div>
</section>
<!-- End Blog Details Area -->
@endsection
