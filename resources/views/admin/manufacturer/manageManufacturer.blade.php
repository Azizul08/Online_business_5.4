@extends('admin.master')
@section('content')

<hr/>
<h3 class="text-center text-success">{{ Session::get('message') }}</h3>
<hr/>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Manufacturer Name</th>
            <th>Manufacturer Description</th>
            <th>Publication Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($manufacturers as $manufacturer)
        <tr> 
            <th scope="row">{{$manufacturer->id}}</th>
            <td>{{$manufacturer->manufacturerName}}</td>
            <td>{{$manufacturer->manufacturerDescription}}</td>
            <td>{{ $manufacturer->publicationStatus == 1 ? 'Published'  : 'Unpublished'}}</td>
            <td>
                <a href="{{url('/manufacturer/edit/'.$manufacturer->id)}}" class="btn btn-success">
                    <span class="glyphicon glyphicon-edit"></span>
                </a>
                <a href="{{url('/manufacturer/delete/'.$manufacturer->id)}}" class="btn btn-danger" onclick="return confirm('Are You Sure To Delete This');">
                    <span class="glyphicon glyphicon-trash"></span>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection
