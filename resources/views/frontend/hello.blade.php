@extends('layouts.master')
@section('content')
    Hi there peeps

    @endsection

@push('scripts')
    <scriot>
        SCRIPT HERE!
    </scriot>
@endpush

@push('css')
    <style>
        .hello {
            color: #ffffff;
        }
    </style>
    @endpush