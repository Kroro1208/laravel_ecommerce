@props(['status' => 'info']);

@php
    if ($status == 'info') {
        $bgColor = 'bg-blue-500';
    }
    if ($status == 'error') {
        $bgColor = 'bg-red-500';
    }
@endphp

@if (session('message'))
    <div class="{{ $bgColor }} w-1/2 mx-auto p-2 rounded text-white text-center">
        {{ session('message') }}
    </div>
@endif