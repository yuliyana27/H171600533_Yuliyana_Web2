@extends('Layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Kategori Galeri</div>

                    <div class="card-body">
<<<<<<< HEAD
                        {!! Form::open(['route' => 'kategori_galeri.store', 'method' => 'post']) !!}
                            @include('kategori_galeri.form')
                            {!! Form::close() !!}
=======
                        <form method="post" action="{!! route('kategori_galeri.store') !!}">
                            @include('kategori_galeri.form')
>>>>>>> 2924708de52b48fac7e02a2c799fb68de35f0c40


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection