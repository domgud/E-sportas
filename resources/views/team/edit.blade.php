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
                    <form action="{{route('teams.update', $team)}}" method="POST">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Pavadinimas</label>

                            <div class="col-md-6">

                                <input id="name" type="text" class="form-control" name="name" value="{{ $team->name }}">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="country" class="col-md-2 col-form-label text-md-right">Šalis</label>

                            <div class="col-md-6">

                                <input id="country" type="text" class="form-control" name="country" value="{{ $team->country }}">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="year" class="col-md-2 col-form-label text-md-right">Įkūrimo metai</label>

                            <div class="col-md-6">

                                <input id="year" type="number" class="form-control" name="year" value="{{ $team->year }}">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="owner" class="col-md-2 col-form-label text-md-right">Savininkas</label>
                            <div class="col-md-6">
                                <select name="owner" id="owner">
                                    @foreach($owners as $owner)
                                        @if($owner->id===$team->owner->id)
                                            <option selected value="{{$owner->id}}">{{$owner->name}} </option>
                                        @else
                                            <option value="{{$owner->id}}">{{$owner->name}} </option>
                                        @endif

                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="partners" class="col-md-2 col-form-label text-md-right">Partneriai</label>

                            <div class="col-md-6">

                                @foreach($partners as $partner)
                                    <div class="form-check">
                                        <label>{{$partner->name}}</label>
                                        <input type="checkbox" name="partners[]" value="{{$partner->id}}"
                                               @if($team->partners->pluck('id')->contains($partner->id)) checked @endif>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Išsaugoti
                        </button>
                        <a href="{{route('teams.index')}}"> <button type="button" class="btn btn-warning float-left">Atgal</button> </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
