@extends('backend.layouts.app')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">İletişim Bilgileri</h3>
                </div>
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        @endif
                        @if(session('success'))
                            <div class="alert alert-success">
                                <i class="fa fa-check"></i>
                                {{session('success')}}
                            </div>
                        @endif
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <br> <br>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">  </th>
                            <th scope="col">Telefon </th>
                            <th scope="col">Mail</th>
                            <th scope="col">Adres</th>
                            <th scope="col">Harita Url</th>
                            <th scope="col">İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td> </td>
                                <td>{{$contact->phone}}</td>
                                <td>{{$contact->mail}}</td>
                                <td>{{$contact->address}}</td>
                                <td>{{$contact->mapUrl}}</td>
                                <td>
                                    <a href="{{route('backend.contact.edit',$contact->id)}}" class="btn btn-sm btn-primary">
                                        <i class="fa fa-pen"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>

@endsection
