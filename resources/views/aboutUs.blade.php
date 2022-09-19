@extends('layouts.default')
@section('title', 'About Us')

@section('content')
    <h1>this is about page</h1>
@endsection

@section('aboutusFooter')
    <h4>Footer Section</h4>
@endsection


@push('javascript')
    <script>
        $(document).ready(function() {
            alert("this is about page");
        });
    </script>
@endpush
