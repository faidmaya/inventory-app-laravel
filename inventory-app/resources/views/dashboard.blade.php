@extends('layouts.seodash')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4>Dashboard</h4>
                    <p>
                        Halo <b>{{ auth()->user()->name }}</b>,
                        kamu login sebagai <b>{{ auth()->user()->role }}</b>.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection