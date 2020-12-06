@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <form action="{{route('partners.store')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Pavadinimas</label>

                            <div class="col-md-6">

                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="country" class="col-md-2 col-form-label text-md-right">Šalis</label>

                            <div class="col-md-6">

                                <input id="country" type="text" class="form-control" name="country" value="{{ old('country') }}" required>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="items" class="col-md-2 col-form-label text-md-right">Rinka</label>

                            <div class="col-md-6">

                                <input id="items" type="text" class="form-control" name="items" value="{{ old('items') }}" required>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="website" class="col-md-2 col-form-label text-md-right">Svetainė</label>

                            <div class="col-md-6">

                                <input id="website" type="text" class="form-control" name="website" value="{{ old('website') }}" required>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="year" class="col-md-2 col-form-label text-md-right">Įkūrimo metai</label>

                            <div class="col-md-6">

                                <input id="year" type="number" class="form-control" name="year" value="{{ old('year') }}" required>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age" class="col-md-2 col-form-label text-md-right">Komandos</label>

                            <div class="col-md-6">

                                @foreach($teams as $team)
                                    <div class="form-check">
                                        <label>{{$team->name}}</label>
                                        <input type="checkbox" name="teams[]" value="{{$team->id}}">
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Išsaugoti
                        </button>
                        <a href="{{route('partners.index')}}"> <button type="button" class="btn btn-warning float-left">Atgal</button> </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
