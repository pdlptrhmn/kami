@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="{{ url('/home') }}">Administrator SM</a></li>
                <li class="active">data foto</li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Data Iklan Motor</h2>
                </div>
                <div class="panel-body">
        
                    <p><a class="btn btn-default" href="{{ route('Iklan.create') }}">Tambah</a></p>
                    {!! $html->table(['class'=>'table-striped']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
{!! $html->scripts() !!}
@endsection