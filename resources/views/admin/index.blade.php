@extends('admin.layout.main')
@section('title',__("str.Dashboard"))
@section('description',__("str.Dashboard"))
@section('author',__("str.Dashboard"))
@section('keywords',__("str.Dashboard"))
@section('copyright',__("str.Dashboard"))
@section('css')
@endsection
@section('content')
   Welcome
@endsection
@section('js')
    <script src="{{ asset('assets/admin/js/admin/dashboard/dashboard.js') }}" defer></script>
@endsection
