@extends('layouts.app')
@section('content')

    <div class="card-body">

        <table class="table">
            <thead>
            <tr>
                <th scope="col">Vardas</th>
                <th scope="col">Pavardė</th>

            </tr>
            </thead>
            <tbody>
            @foreach($owners as $data)
                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->lastname}}</td>

                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    </div>
@endsection

