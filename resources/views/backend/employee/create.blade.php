@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('backend.employee.store') }}">
                        @csrf
                        <div>
                            <label>Ad Soyad</label>
                            <input type="text" name="nameSurname" class="form-control" value="{{ old('nameSurname') }}">
                        </div>
                        <div>
                            <label>Degree</label>
                            <input type="text" name="degree" class="form-control" value="{{ old('degree') }}">
                        </div>
                        <div>
                            <label>Fotoğraf</label>
                            <input type="text" name="imageUrl" class="form-control" value="{{ old('imageUrl') }}">
                        </div>
                        <div>
                            <label>linkedin Linki</label>
                            <input type="text" name="linkedinUrl" class="form-control" value="{{ old('linkedinUrl') }}">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm btn-block"> Kaydet</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
