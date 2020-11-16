@extends('layouts.app')
@section('content')

    <div class="card-body">

        <table class="table">
            <thead>
            <tr>
                <th scope="col">Pavadinimas</th>
                <th scope="col">Valstybė</th>

            </tr>
            </thead>
            <tbody>
            @foreach($teams as $data)
                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->country}}</td>

                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    </div>
@endsection

