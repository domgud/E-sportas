@extends('layouts.app')
@section('content')
    <table width="100%">
        <thead>
        <tr style="background-color: yellow">
            <th>
                Pavadinimas
            </th>
            <th>
                Valstybe
            </th>

        </tr>
        </thead>

        <tbody>

        @foreach($teams as $data )

            <tr>
                <td>
                    {{$data->name}}
                </td>
                <td>
                    {{$data->country}}
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

