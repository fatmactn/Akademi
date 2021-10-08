@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('backend.content.update', ['content' => $content]) }}">
                        @method('POST')
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">{{$errors->first()}}</div>
                        @endif
                        <div class="form-group">
                            <label>Başlık</label>
                            <input type="text" name="title" class="form-control" value="{{ $content->title }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>İçerik</label>
                            <textarea name="content" class="form-control" rows="4">{{ $content->content }}</textarea>
                        </div>
                        <br>
                        <div class="form-group">
                            <input id="isEnable" name="status" @if($content->status) checked @endif type="checkbox">
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
