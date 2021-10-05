@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('backend.officeImage.update', ['officeImage' => $officeImage]) }}">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label>Başlık</label>
                            <input type="text" name="title" class="form-control" value="{{ $officeImage->title }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Url</label>
                            <textarea name="imageUrl" class="form-control" rows="4">{{ $officeImage->imageUrl }}</textarea>
                        </div>
                        <br>
                        <div class="form-group">
                            <input id="isEnable" name="status" @if($officeImage->status) checked @endif type="checkbox">
                            <label>Yayınlanacak mı? </label>
                        </div>
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
