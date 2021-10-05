@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('backend.officeImage.store') }}">
                        @csrf
                        <div class="form-group">
                            <label>Fotoğraf Başlığı</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Fotoğraf Url</label>
                            <textarea name="imageUrl" class="form-control" rows="4">{{ old('imageUrl') }}</textarea>
                        </div>


                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm btn-block"> Kaydet</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
