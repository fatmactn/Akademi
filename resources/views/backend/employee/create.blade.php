@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('backend.employee.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">{{$errors->first()}}</div>
                        @endif
                        <div>
                            <label>Ad Soyad</label>
                            <input type="text" name="nameSurname" class="form-control" value="{{ old('nameSurname') }}">
                        </div>
                        <div>
                            <label>Yetki</label>
                            <input type="text" name="degree" class="form-control" value="{{ old('degree') }}">
                        </div>
                        <div class="form-group">
                            <label>Fotoğraf</label>
                            <input type="text"  class="form-control" name="imageUrl" value="{{ old('imageUrl')  }}" disabled>
                            <span class="input-group-addon" id="basic-addon2"><input type="file" name="imageUrl" placeholder="Image :"></span>
                        </div>
                        <div>
                            <label>linkedin Linki</label>
                            <input type="text" name="linkedinUrl" class="form-control" value="{{ old('linkedinUrl') }}">
                        </div>
                        <div class="form-group">
                            <input id="isEnable" name="status" @if(old('status')) checked @endif type="checkbox">
                            <label>Mezun mu? </label>
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
