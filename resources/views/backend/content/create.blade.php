@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('backend.content.store') }}">
                        @csrf
                        <div class="form-group">
                            <label>Başlık</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>İçerik</label>
                            <textarea name="content" class="form-control" rows="4">{{ old('content') }}</textarea>
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