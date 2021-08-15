@extends('layout.main')

@section('content')
home
{{var_dump($data)}}
{{session('jwt_token')}}
@endsection
