@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('backend.officeImage.update', ['officeImage' => $officeImage]) }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label>Başlık</label>
                            <input type="text" name="title" class="form-control" value="{{ $officeImage->title }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Fotoğraf</label>
                            <input type="text"  class="form-control" value="{{ $officeImage->imageUrl }}" disabled>
                            <span class="input-group-addon" id="basic-addon2">
                                <input type="file" name="imageUrl" placeholder="Image :"></span>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm btn-block"> Güncelle</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
