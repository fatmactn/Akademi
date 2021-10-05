@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('backend.employee.update', ['employee' => $employee]) }}">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label>Ad Soyad</label>
                            <input type="text" name="nameSurname" class="form-control" value="{{ $employee->nameSurname }}">
                        </div>
                        <div class="form-group">
                            <label>degree</label>
                            <input type="text" name="degree" class="form-control" value="{{ $employee->degree }}">
                        </div>


                        <div class="form-group">
                            <label>Resim adresi</label>
                            <input type="text" name="imageUrl" class="form-control" value="{{ $employee->imageUrl }}">
                        </div>
                        <div class="form-group">
                            <label>Lİnkedin Linki</label>
                            <input type="text" name="linkedinUrl" class="form-control" value="{{ $employee->linkedinUrl }}">
                        </div>

                        <div class="form-group">
                            <input id="isEnable" name="status" @if($employee->status) checked @endif type="checkbox">
                            <label>Yayınlanacak mı? </label>
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
