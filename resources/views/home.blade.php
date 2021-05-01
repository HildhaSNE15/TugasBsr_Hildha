@extends('adminlte::page')

@section('Hildha_Official', 'Dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header "><center>{{ __('SELAMAT DATANG DI HILDHA_OFFICIAL') }}</center></div>


                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
<div class="lightbox-gallery">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">MOBIL ANTIK MENGGOYAHKAN HATI</h2>
           
        </div>
        <div class="row photos">
            <div class="col-sm-6 col-md-4 col-lg-3 item">
            <a href="https://i.imgur.com/zmzERpe.jpg" data-lightbox="photos"><img class="img-fluid" src="https://i.imgur.com/zmzERpe.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item">
            <a href="https://i.imgur.com/gX11Vt5.jpg" data-lightbox="photos"><img class="img-fluid" src="https://i.imgur.com/gX11Vt5.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://i.imgur.com/pZcUS2Y.jpg" data-lightbox="photos"><img class="img-fluid" src="https://i.imgur.com/pZcUS2Y.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://i.imgur.com/06Ajq7f.jpg" data-lightbox="photos"><img class="img-fluid" src="https://i.imgur.com/06Ajq7f.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://i.imgur.com/zmzERpe.jpg" data-lightbox="photos"><img class="img-fluid" src="https://i.imgur.com/zmzERpe.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://i.imgur.com/gX11Vt5.jpg" data-lightbox="photos"><img class="img-fluid" src="https://i.imgur.com/gX11Vt5.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://i.imgur.com/pZcUS2Y.jpg" data-lightbox="photos"><img class="img-fluid" src="https://i.imgur.com/pZcUS2Y.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://i.imgur.com/06Ajq7f.jpg" data-lightbox="photos"><img class="img-fluid" src="https://i.imgur.com/06Ajq7f.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://i.imgur.com/zmzERpe.jpg" data-lightbox="photos"><img class="img-fluid" src="https://i.imgur.com/zmzERpe.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://i.imgur.com/gX11Vt5.jpg" data-lightbox="photos"><img class="img-fluid" src="https://i.imgur.com/gX11Vt5.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://i.imgur.com/pZcUS2Y.jpg" data-lightbox="photos"><img class="img-fluid" src="https://i.imgur.com/pZcUS2Y.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://i.imgur.com/06Ajq7f.jpg" data-lightbox="photos"><img class="img-fluid" src="https://i.imgur.com/06Ajq7f.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://i.imgur.com/zmzERpe.jpg" data-lightbox="photos"><img class="img-fluid" src="https://i.imgur.com/zmzERpe.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://i.imgur.com/gX11Vt5.jpg" data-lightbox="photos"><img class="img-fluid" src="https://i.imgur.com/gX11Vt5.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://i.imgur.com/pZcUS2Y.jpg" data-lightbox="photos"><img class="img-fluid" src="https://i.imgur.com/pZcUS2Y.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://i.imgur.com/06Ajq7f.jpg" data-lightbox="photos"><img class="img-fluid" src="https://i.imgur.com/06Ajq7f.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://i.imgur.com/zmzERpe.jpg" data-lightbox="photos"><img class="img-fluid" src="https://i.imgur.com/zmzERpe.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://i.imgur.com/gX11Vt5.jpg" data-lightbox="photos"><img class="img-fluid" src="https://i.imgur.com/gX11Vt5.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://i.imgur.com/pZcUS2Y.jpg" data-lightbox="photos"><img class="img-fluid" src="https://i.imgur.com/pZcUS2Y.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://i.imgur.com/06Ajq7f.jpg" data-lightbox="photos"><img class="img-fluid" src="https://i.imgur.com/06Ajq7f.jpg"></a></div>
        </div>
    </div>
</div>
@endsection
@section('footer')
<strong>CopyRight &copy; {{date('Y')}}
    <a href="#" target="_blank">HildhaSNE</a>.</strong> All Right reserved
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!')
</script>
@stop