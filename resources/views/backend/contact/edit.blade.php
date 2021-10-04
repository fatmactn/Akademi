@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('backend.contact.update', ['contact' => $contact]) }}">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label>Telefon</label>
                            <input type="text" name="phone" class="form-control" value="{{ $contact->phone }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Mail</label>
                            <input type="text" name="mail" class="form-control" value="{{ $contact->mail }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Adres</label>
                            <textarea name="address" class="form-control" rows="4">{{ $contact->address }}</textarea>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Harita Url</label>
                            <input type="text" name="mapUrl" class="form-control" value="{{ $contact->mapUrl }}">
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
