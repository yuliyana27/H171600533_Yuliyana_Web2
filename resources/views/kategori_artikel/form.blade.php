@csrf
<<<<<<< HEAD

=======
 
>>>>>>> 2924708de52b48fac7e02a2c799fb68de35f0c40

 <div class="form-group row">
     <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

    <div class="col-md-6">
<<<<<<< HEAD

        {!! Form::text('nama', null,['calss'=>'form-control','required','autofocus']);!!}


     @error('nama')

=======
        <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autofocus>
    
     @error('nama')
     
>>>>>>> 2924708de52b48fac7e02a2c799fb68de35f0c40
     <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
         </span>
     @enderror
 </div>
</div>

<<<<<<< HEAD
    {!! Form::hidden('users_id', Auth::id());!!}

=======


        <input id="users_id" type="hidden" class="form-control @error('users_id') is-invalid @enderror" name="users_id" value="{{ Auth::id() }}" required autofocus>
    
>>>>>>> 2924708de52b48fac7e02a2c799fb68de35f0c40
     <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Simpan Data') }}
                                </button>
                                <a href="{!! route('kategori_artikel.index') !!}" class="btn btn-danger">
                                    {{ __('Batal') }}
                                </a>
                                </button>
                            </div>
                        </div>
 </div>
<<<<<<< HEAD
</div>
=======
</div>
>>>>>>> 2924708de52b48fac7e02a2c799fb68de35f0c40
