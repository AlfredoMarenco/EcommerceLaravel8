@extends('layouts.template')

@section('css')
    <style>
        .colors {
            width: 25px;
            height: 25px;
            border-radius: 25%;
        }

        .sizes {
            width: 25px;
            height: 25px;
            border: 2px solid black;
            border-radius: 25%;
        }

        .sizes-label {
            font-size: 13px;
            margin-top: -27px;
            margin-left: 3px;
        }

        input[type="checkbox"] {
            appearance: none;
        }

        input[type="checkbox"]:checked {
            border: 2px solid rgb(62, 163, 31);
            margin-left: 9px;
            margin-bottom: 1px;
            width: 7px;
        }

    </style>
@endsection

@section('content')

    @livewire('products')

@endsection
