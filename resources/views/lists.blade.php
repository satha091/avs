@extends('layout')
@section('content')

<div class="container">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <div style="margin-bottom: 20px">;
            <a href="{{ url('/') }}"><button class="btn btn-primary"> Add New</button></a>
        </div>
        <thead>
            <th>S.No</th>
            <th>Name</th>
            <th>Father Name</th>
            <th>DOB</th>
            <th>Age</th>
            <th>Native Place</th>
            <th>Address</th>
            <th>Telephone</th>
            <th>Job</th>
            <th>Qualification</th>
            <th>Wife Name</th>
            <th>No Male Child</th>
            <th>No Female Child</th>
            <th>Action</th>
        </thead>
        <tbody>
            @php
             $i=1;
            @endphp
            @foreach ($lists as $list)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $list->name }}</td>
                <td>{{ $list->father_name }}</td>
                <td>{{ $list->date_of_birth }}</td>
                <td>{{ $list->age }}</td>
                <td>{{ $list->native_place }}</td>
                <td>{{ $list->address }}</td>
                <td>{{ $list->telephone }}</td>
                <td>{{ $list->job_details }}</td>
                <td>{{ $list->qualification }}</td>
                <td>{{ $list->wife_name }}</td>
                <td>{{ $list->no_male_child }}</td>
                <td>{{ $list->no_female_child }}</td>
                <td><a href="">Show Details</a></td>
            </tr>
            @php
             $i++;
            @endphp

            @endforeach
        </tbody>
    </table>

</div>
@endsection
