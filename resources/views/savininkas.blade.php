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

        @foreach($allSavininkai as $data )

            <tr>
                <td>
                    {{$data->vardas}}
                </td>
                <td>
                    {{$data->pavarde}}
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

