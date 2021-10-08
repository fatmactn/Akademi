@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('backend.employee.update', ['employee' => $employee]) }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">{{$errors->first()}}</div>
                        @endif
                        <div class="form-group">
                            <label>Ad Soyad</label>
                            <input type="text" name="nameSurname" class="form-control" value="{{ $employee->nameSurname }}">
                        </div>
                        <div class="form-group">
                            <label>degree</label>
                            <input type="text" name="degree" class="form-control" value="{{ $employee->degree }}">
                        </div>
                        <div class="form-group">
                            <label>Fotoğraf</label>
                            <img src="{{$employee->imageUrl}}" height="200"
                                 width="200">
                            <span class="input-group-addon" id="basic-addon2">
                                <input type="file" name="imageUrl" placeholder="Image :"></span>
                        </div>

                        <div class="form-group">
                            <label>Lİnkedin Linki</label>
                            <input type="text" name="linkedinUrl" class="form-control" value="{{ $employee->linkedinUrl }}">
                        </div>

                        <div class="form-group">
                            <input id="isEnable" name="status" @if($employee->status) checked @endif type="checkbox">
                            <label>Mezun mu? </label>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm btn-block"> Güncelle</button>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
