@extends('layouts.app')
@section('content')
    <table width="100%">
        <thead>
        <tr style="background-color: yellow">
            <th>
                Vardas
            </th>
            <th>
                Pavarde
            </th>

        </tr>
        </thead>

        <tbody>

        @foreach($players as $data )

            <tr>
                <td>
                    {{$data->name}}
                </td>
                <td>
                    {{$data->lastname}}
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

