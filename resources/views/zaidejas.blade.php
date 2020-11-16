@extends('layouts.app')
@section('content')

    <div class="card-body">

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Vardas</th>
                <th scope="col">Pavardė</th>
                <th scope="col">Pozicija</th>
                <th scope="col">Slapyvardas</th>
                <th scope="col">Pilietybė</th>
                <th scope="col">Prisijungė</th>
            </tr>
            </thead>
            <tbody>
            @foreach($players as $data)
                <tr>
                    <th scope="row">{{$data->id}}</th>
                    <td>{{$data->name}}</td>
                    <td>{{$data->lastname}}</td>
                    <td>{{$data->position}}</td>
                    <td>{{$data->nick}}</td>
                    <td>{{$data->nationality}}</td>
                    <td>{{$data->joined}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>
        {{ $players->links() }}
    </div>
    </div>
@endsection

