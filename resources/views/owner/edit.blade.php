@extends('layouts.app')

@section('content')
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{route('owners.update', $owner)}}" method="POST">
                        @csrf
                        {{method_field('PUT')}}
                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">Vardas</label>

                                <div class="col-md-6">

                                    <input id="name" type="text" class="form-control" name="name" value="{{ $owner->name }}">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lastname" class="col-md-2 col-form-label text-md-right">Pavardė</label>

                                <div class="col-md-6">

                                    <input id="lastname" type="text" class="form-control" name="lastname" value="{{ $owner->lastname }}">

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="age" class="col-md-2 col-form-label text-md-right">Amžius</label>

                                <div class="col-md-6">

                                    <input id="age" type="number" class="form-control" name="age" value="{{ $owner->age }}">

                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Atnaujinti
                            </button>
                            <a href="{{route('owners.index')}}"> <button type="button" class="btn btn-warning float-left">Atgal</button> </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
