@extends('backend.layouts.app')

@section('content')
<?php $title = 'Employee'?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Çalışanlar</h3>
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
                        <a href="{{route('backend.employee.create')}}" class="btn btn-sm btn-primary">
                            <i class="fa fa-plus"></i>
                            Personel Ekle
                        </a>
                    </h5>
                    <br> <br>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">ID </th>
                            <th scope="col">Ad Soyad </th>
                            <th scope="col">degree</th>
                            <th scope="col">Resim</th>
                            <th scope="col">Linkedin Adresi</th>
                            <th scope="col">Aktiflik</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($employees as $employee)
                            <tr>
                                <td>{{$employee->id}}</td>
                                <td>{{$employee->nameSurname}}</td>
                                <td>{{$employee->degree}}</td>
                                <td>{{$employee->imageUrl}}</td>
                                <td>{{$employee->linkedinUrl}}</td>
                                <td>{{$employee->status}}</td>
                                <td>
                                    <a href="{{route('backend.employee.edit',$employee->id)}}" class="btn btn-sm btn-primary">
                                        <i class="fa fa-pen"></i>
                                    </a>
                                    <a href="{{route('backend.employee.destroy',$employee->id)}}" class="btn btn-sm btn-danger">
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
