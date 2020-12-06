@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <form action="{{route('trainers.store')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Vardas</label>

                            <div class="col-md-6">

                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lastname" class="col-md-2 col-form-label text-md-right">Pavardė</label>

                            <div class="col-md-6">

                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age" class="col-md-2 col-form-label text-md-right">Amžius</label>

                            <div class="col-md-6">

                                <input id="age" type="number" class="form-control" name="age" value="{{ old('age') }}" required>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nationality" class="col-md-2 col-form-label text-md-right">Pilietybė</label>

                            <div class="col-md-6">

                                <input id="nationality" type="text" class="form-control" name="nationality" value="{{ old('nationality') }}" required>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="team" class="col-md-2 col-form-label text-md-right">Komanda</label>
                            <div class="col-md-6">
                                <select name="team" id="team">
                                    @foreach($teams as $team)

                                        <option value="{{$team->id}}">{{$team->name}} </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Pridėti
                        </button>
                        <a href="{{route('trainers.index')}}"> <button type="button" class="btn btn-warning float-left">Atgal</button> </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
