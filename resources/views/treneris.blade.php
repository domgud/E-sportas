@extends('layouts.app')
@section('content')

    <div class="card-body">

        <table class="table">
            <thead>
            <tr>
                <th scope="col">Vardas</th>
                <th scope="col">Pavardė</th>
                <th scope="col">Amžius</th>
                <th scope="col">Pilietybė</th>
                <th scope="col">Komanda</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($trainers as $data)
                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->lastname}}</td>
                    <td>{{$data->age}}</td>
                    <td>{{$data->nationality}}</td>
                    <td>{{$data->team->name}}</td>
                    <td>
                        <a href="{{route('trainers.edit', $data->id)}}"> <button type="button" class="btn btn-primary float-left">Redaguoti</button> </a>
                        <form action="{{route('trainers.destroy', $data)}}" method="POST" class="float-left">
                            @csrf
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-warning">Šalinti</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        <a href="{{route('trainers.create')}}"> <button type="button" class="btn btn-primary float-left">Pridėti</button> </a>
    </div>
    </div>
@endsection

