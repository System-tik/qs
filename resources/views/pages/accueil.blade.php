@extends('welcome')
@section('content')
    {{-- Diki met le code ici --}}
    <div class="bg-gray-100">
        <livewire:client.v-nav>
       {{--  <livewire:client.v-header>
        <livewire:client.v-listeproduits> --}}
        <livewire:client.v-detailproduit>
        <livewire:client.v-footer>

    </div>
   
@endsection