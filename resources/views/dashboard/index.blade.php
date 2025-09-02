@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
  <div class="row">
    <div class="col-lg-8 d-flex align-items-strech">
      <x-card title="Sales Overview">
        <div id="chart"></div>
      </x-card>
    </div>

    <div class="col-lg-4">
      <x-card title="Yearly Breakup">
        <div id="breakup"></div>
      </x-card>
    </div>
  </div>
@endsection