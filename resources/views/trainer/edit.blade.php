@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <form action="{{route('trainers.update', $trainer)}}" method="POST">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Vardas</label>

                            <div class="col-md-6">

                                <input id="name" type="text" class="form-control" name="name" value="{{$trainer->name}}" required>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lastname" class="col-md-2 col-form-label text-md-right">Pavardė</label>

                            <div class="col-md-6">

                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{$trainer->lastname}}" required>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age" class="col-md-2 col-form-label text-md-right">Amžius</label>

                            <div class="col-md-6">

                                <input id="age" type="number" class="form-control" name="age" value="{{$trainer->age}}" required>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nationality" class="col-md-2 col-form-label text-md-right">Pilietybė</label>

                            <div class="col-md-6">

                                <input id="nationality" type="text" class="form-control" name="nationality" value="{{$trainer->nationality}}" required>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="team" class="col-md-2 col-form-label text-md-right">Komanda</label>
                            <div class="col-md-6">
                                <select name="team" id="team">
                                    @foreach($teams as $team)

                                        @if($trainer->team_id===$team->id)
                                            <option value="{{$team->id}}" selected="selected">{{$team->name}} </option>
                                        @else
                                            <option value="{{$team->id}}">{{$team->name}} </option>
                                        @endif
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Atnaujinti
                        </button>
                        <a href="{{route('trainers.index')}}"> <button type="button" class="btn btn-warning float-left">Atgal</button> </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
