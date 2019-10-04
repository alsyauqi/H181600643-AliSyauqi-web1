@csrf

<div class="form-group row">
     <label for="nama" class="col-md-2 col-form-label text-md-right">{{ __('Nama') }}</label>

     <div class="col-md-6">
         <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autofocus>

         @error('nama')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
         @enderror
    </div>
</div>


<input id="users_id" type="hidden" class="form-control @error('users_id') is-invalid @enderror" name="users_id" value="{{ Auth::id() }}" required autofocus>

<div class="col-md-6">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Simpan Data') }}
                                </button>
                                <a  href="{!! route('kategori_berita.index') !!}" class="btn btn-danger">
                                    {{ __('Batal') }}
                                </a>
              
                            </div>
                        </div>