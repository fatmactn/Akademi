@extends('backend.layouts.app')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">İletişim Formları</h3>
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
                            <th scope="col">ID </th>
                            <th scope="col">Ad-Soyad </th>
                            <th scope="col">Mail</th>
                            <th scope="col">Konu</th>
                            <th scope="col">Mesaj</th>
                            <th scope="col">İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($contactforms as $contactform)
                            <tr>
                                <td>{{$contactform->id}}</td>
                                <td>{{$contactform->name}}</td>
                                <td>{{$contactform->mail}}</td>
                                <td>{{$contactform->subject}}</td>
                                <td>{{$contactform->message}}</td>
                                <td>
                                    <a href="{{route('backend.contact-form.destroy',$contactform->id)}}" class="btn btn-sm btn-danger">
                                        <i class="fa fa-times"></i>
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
