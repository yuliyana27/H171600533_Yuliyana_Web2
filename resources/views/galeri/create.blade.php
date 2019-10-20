@extends('Layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Galeri</div>

                    <div class="card-body">
<<<<<<< HEAD
                         {!! Form::open(['route' => 'galeri.store', 'method' => 'post']) !!}
                            @include('galeri.form')
                       {!! Form::close() !!}
=======
                        <form method="post" action="{!! route('galeri.store') !!}">
                            @include('galeri.form')
>>>>>>> 2924708de52b48fac7e02a2c799fb68de35f0c40


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

<script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>

<script>
    $(document).ready(function()  {
        CKEDITOR.replace( 'isi' );

    });
</script>

@endsection