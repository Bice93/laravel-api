@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row py-4">
            <div class="col-6 offset-md-3">
                <form action="{{ route('admin.tags.store') }}" method="POST">
                    @csrf
                    @include('admin.tags.includes.form')
                </form>
            </div>
        </div>
    </div>
@endsection