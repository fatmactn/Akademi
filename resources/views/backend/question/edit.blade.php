@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('backend.question.update', ['question' => $question]) }}">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label>Soru</label>
                            <input type="text" name="question" class="form-control" value="{{ $question->question }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Cevap</label>
                            <textarea name="answer" class="form-control" rows="4">{{ $question->answer }}</textarea>
                        </div>
                        <br>
                        <div class="form-group">
                            <input id="isEnable" name="status" @if($question->status) checked @endif type="checkbox">
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
