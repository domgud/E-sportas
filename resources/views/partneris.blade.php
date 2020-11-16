@extends('layouts.app')
@section('content')

    <div class="card-body">

        <table class="table">
            <thead>
            <tr>
                <th scope="col">Pavadinimas</th>
                <th scope="col">Svetainė</th>
                <th scope="col">Metai</th>
                <th scope="col">Valstybė</th>
                <th scope="col">Rinka</th>

            </tr>
            </thead>
            <tbody>
            @foreach($partners as $data)
                <tr>
                <tr>
                    <td>
                        {{$data->name}}
                    </td>
                    <td>
                        {{$data->website}}
                    </td>
                    <td>
                        {{$data->year}}
                    </td>
                    <td>
                        {{$data->country}}
                    </td>
                    <td>
                        {{$data->items}}
                    </td>

                </tr>

                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    </div>
@endsection

