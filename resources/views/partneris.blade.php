@extends('layouts.app')
@section('content')
    <table width="100%">
        <thead>
        <tr style="background-color: yellow">
            <th>
                Pavadinimas
            </th>
            <th>
                Svetaine
            </th>
            <th>
                Ikurimo metai
            </th>
            <th>
                Valstybe
            </th>
            <th>
                Pagrindine rinka
            </th>
        </tr>
        </thead>

        <tbody>
        @foreach($partners as $data )

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
        @endforeach
        </tbody>
    </table>
@endsection

