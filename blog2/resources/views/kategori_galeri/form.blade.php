@csrf

<div class="form-group row">
     <label for="nama" class="col-md-2 col-form-label text-md-right">{{ __('Nama') }}</label>

     <div class="col-md-6">

         {!! Form::text('nama', null, ['class'=>"form-control", 'required', 'autofocus']); !!}

         @error('nama')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
         @enderror
    </div>
</div>

{!! Form::hidden('users_id', Auth::id()); !!}

<div class="col-md-6">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Simpan Data') }}
                                </button>
                                <a  href="{!! route('kategori_galeri.index') !!}" class="btn btn-danger">
                                    {{ __('Batal') }}
                                </a>
              
                            </div>
                        </div>