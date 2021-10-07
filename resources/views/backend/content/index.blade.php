@extends('backend.layouts.app')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">İçerikler</h3>
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
                    <h5 class="card-title">
                        <a href="{{route('backend.content.create')}}" class="btn btn-sm btn-primary">
                            <i class="fa fa-plus"></i>
                            İçerik Ekle
                        </a>
                    </h5>
                    <br> <br>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">ID </th>
                            <th scope="col">Başlık </th>
                            <th scope="col">İçerik</th>
                            <th scope="col">Durum</th>
                            <th scope="col">İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($contents as $content)
                            <tr>
                                <td>{{$content->id}}</td>
                                <td>{{$content->title}}</td>
                                <td>{{$content->content}}</td>
                                <td>{{$content->status}}</td>
                                <td>
                                    <a href="{{route('backend.content.edit',$content->id)}}" class="btn btn-sm btn-primary">
                                        <i class="fa fa-pen"></i>
                                    </a>
                                    <a href="{{route('backend.content.destroy',$content->id)}}" class="btn btn-sm btn-danger">
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
