@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('backend.question.store') }}">
                        @csrf
                        <div class="form-group">
                            <label>Soru</label>
                            <input type="text" name="question" class="form-control" value="{{ old('question') }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Cevap</label>
                            <textarea name="answer" class="form-control" rows="4">{{ old('answer') }}</textarea>
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
