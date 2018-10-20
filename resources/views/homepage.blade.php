@extends('header.header')

<p> Home page data </p>

@section('sidebar')
    <p>Hello World</p>
@show


<table>
    <tr>
        <th>name</th>
        <th>email</th>
        <th>bio</th>
    </tr>
    @foreach($profile as $attribute)
        <tr>
            <td>{{$attribute['first_name'].$attribute['last_name'] }}</td>
            <td>{{ $attribute['email'] }}</td>
            <td>{{ $attribute['bio'] }}</td>
        </tr>
    @endforeach
</table>