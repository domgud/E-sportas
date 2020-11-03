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

        @foreach($allKomandos as $data )

            <tr>
                <td>
                    {{$data->pavadinimas}}
                </td>
                <td>
                    {{$data->valstybe}}
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

