@extends('backend.layouts.app')
<?php $title = 'User'?>
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Users Table</h3>
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
                            <th scope="col">İsim </th>
                            <th scope="col">Email</th>
                            <th scope="col">Durum</th>
                            <th scope="col">İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->status}}</td>
                                <td>
                                    <a href="{{route('backend.user.update',['user'=>$user])}}" class="btn btn-sm btn-primary">
                                        <i class="fa fa-pen"></i>
                                    </a>
                                    <a href="{{route('backend.user.destroy',$user->id)}}" class="btn btn-sm btn-danger">
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
