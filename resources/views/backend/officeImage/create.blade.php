@extends('backend.layouts.app')
<?php $title = 'Office Image Create'?>
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('backend.officeImage.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">{{$errors->first()}}</div>
                        @endif
                        <div class="form-group">
                            <label>Fotoğraf Başlığı</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>İçerik</label>
                            <textarea name="content" class="form-control" rows="4">{{ old('content') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Fotoğraf</label>
                            <input type="text"  class="form-control" value="{{ old('imageUrl')  }}" disabled>
                            <span class="input-group-addon" id="basic-addon2"><input type="file" name="imageUrl" placeholder="Image :" ></span>
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
