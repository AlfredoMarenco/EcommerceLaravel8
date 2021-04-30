@extends('layouts.bajce')

@section('content')
   @livewire('products', ['products' => $products])
@endsection
