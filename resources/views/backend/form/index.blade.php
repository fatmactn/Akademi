
@extends('backend.layouts.app')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Başvurular</h3>
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
                            <th scope="col">Özgeçmiş</th>
                            <th scope="col">Linkedin Url</th>
                            <th scope="col">İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($forms as $form)
                            <tr>
                                <td>{{$form->id}}</td>
                                <td>{{$form->nameSurname}}</td>
                                <td>{{$form->mail}}</td>
                                <td><a href="{{asset($form->resumePath)}}" target="_blank"> Cv
                                        <i class="fa fa-file"></i>
                                    </a> </td>
                                <td><a href="https://www.linkedin.com/in/{{$form->linkedinUrl}}" target="_blank">{{$form->linkedinUrl}}</a> </td>
                                <td>
                                    <a href="{{route('backend.form.destroy',$form->id)}}" class="btn btn-sm btn-danger">
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

















