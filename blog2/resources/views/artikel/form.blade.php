@csrf

<div class="form-group row">
        <label for="judul" class="col-md-2 col-form-label text-md-right">{{ __('Judul') }}</label>

            <div class="col-md-10">
                 {!! Form::text('judul', null, ['class'=>"form-control", 'required', 'autofocus']); !!}
                  @error('judul')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                 @enderror
            </div>
       </div> 

       <div class="form-group row">
        <label for="kategori_artikel_id" class="col-md-2 col-form-label text-md-right">{{ __('Kategori Artikel') }}</label>
            
            <div class="col-md-10">
                 {!! Form::select('kategori_artikel_id',$kategoriArtikel, null,["class"=>"form-control","required"]) !!}

                  @error('kategori_artikel_id')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
            </div>
       </div>

    <div class="form-group row">
        <label for="isi" class="col-md-2 col-form-label text-md-right">{{ __('Isi') }}</label>

            <div class="col-md-10">
                    {!! Form::textarea('isi', null, ['class'=>'form-control']); !!}


                  @error('isi')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
            </div>
       </div>

      
       {!! Form::hidden('users_id', Auth::id()); !!}

                               
     <div class="form-group row mb-0">
          <div class="col-md-10 offset-md-2">
              <button type="submit" class="btn btn-primary">
                {{ __('Simpan Data') }}
            </button>
            <a href="{!! route('artikel.index') !!}" class="btn btn-danger">
                {{ __('batal') }}
            </a>
             </div>
        </div>