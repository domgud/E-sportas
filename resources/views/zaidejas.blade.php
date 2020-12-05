@extends('layouts.app')
@section('content')

    <div class="card-body">

        <table class="table">
            <thead>
            <tr>
                <th scope="col">Vardas</th>
                <th scope="col">Pavardė</th>
                <th scope="col">Pozicija</th>
                <th scope="col">Slapyvardis</th>
                <th scope="col">Tautybė</th>
                <th scope="col">Prisijungė</th>
                <th scope="col">Komanda</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($players as $data)
                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->lastname}}</td>
                    <td>{{$data->position}}</td>
                    <td>{{$data->nick}}</td>
                    <td>{{$data->nationality}}</td>
                    <td>{{$data->joined}}</td>
                    <td>{{$data->team->name}}</td>
                    <td>
                        <a href="{{route('players.edit', $data->id)}}"> <button type="button" class="btn btn-primary float-left">Redaguoti</button> </a>
                        <form action="{{route('players.destroy', $data)}}" method="POST" class="float-left">
                            @csrf
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-warning">Šalinti</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        {{ $players->links() }}
        <a href="{{route('players.create')}}"> <button type="button" class="btn btn-primary float-left">Pridėti</button> </a>
    </div>
    </div>
@endsection

