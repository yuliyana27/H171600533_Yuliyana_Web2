@extends('Layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Artikel</div>

                    <div class="card-body">
<<<<<<< HEAD
                         {!! Form::open(['route' => 'artikel.store', 'method' => 'post']) !!}
                            @include('artikel.form')
                       {!! Form::close() !!}
                            
                        </form>
=======
                        <form method="post" action="{!! route('artikel.store') !!}">
                            @include('artikel.form')


>>>>>>> 2924708de52b48fac7e02a2c799fb68de35f0c40
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
<<<<<<< HEAD
@section('scripts')

<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
=======

@section('scripts')

<script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
>>>>>>> 2924708de52b48fac7e02a2c799fb68de35f0c40

<script>
    $(document).ready(function()  {
        CKEDITOR.replace( 'isi' );

    });
</script>

<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 2924708de52b48fac7e02a2c799fb68de35f0c40
