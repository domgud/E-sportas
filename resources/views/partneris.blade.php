@extends('layouts.app')
@section('content')

    <div class="card-body">

        <table class="table">
            <thead>
            <tr>
                <th scope="col">Pavadinimas</th>
                <th scope="col">Įkūrimo metai</th>
                <th scope="col">Valstybė</th>
                <th scope="col">Rinka</th>
                <th scope="col">Svetainė</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($partners as $data)
                <tr>
                        <td>{{$data->name}}</td>
                    <td>{{$data->year}}</td>
                    <td>{{$data->country}}</td>
                    <td>{{$data->items}}</td>
                    <td>{{$data->website}}</td>
                    <td>
                        <a href="{{route('partners.edit', $data->id)}}"> <button type="button" class="btn btn-primary float-left">Redaguoti</button> </a>
                        <form action="{{route('partners.destroy', $data)}}" method="POST" class="float-left">
                            @csrf
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-warning">Šalinti</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        <a href="{{route('partners.create')}}"> <button type="button" class="btn btn-primary float-left">Pridėti</button> </a>
    </div>
    </div>
@endsection

