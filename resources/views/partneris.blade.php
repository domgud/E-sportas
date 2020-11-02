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

        @foreach($allPartneriai as $data )

            <tr>
                <td>
                    {{$data->pavadinimas}}
                </td>
                <td>
                    {{$data->svetaine}}
                </td>
                <td>
                    {{$data->ikurimo_metai}}
                </td>
                <td>
                    {{$data->valstybe}}
                </td>
                <td>
                    {{$data->pagrindine_rinka}}
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

