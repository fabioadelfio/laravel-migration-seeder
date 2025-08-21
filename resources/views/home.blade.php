@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-dark table-striped text-center train-board-table">
        <thead>
            <tr>
                <th>Azienda</th>
                <th>Partenza</th>
                <th>Arrivo</th>
                <th>Orario Partenza</th>
                <th>Orario Arrivo</th>
                <th>Codice</th>
                <th>Carrozze</th>
                <th>In Orario</th>
                <th>Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trains as $train)
            <tr>
                <td>{{ $train->azienda }}</td>
                <td>{{ $train->stazione_partenza }}</td>
                <td>{{ $train->stazione_arrivo }}</td>
                <td>{{ \Carbon\Carbon::parse($train->orario_partenza)->format('H:i d/m/Y') }}</td>
                <td>{{ \Carbon\Carbon::parse($train->orario_arrivo)->format('H:i d/m/Y') }}</td>
                <td>{{ $train->codice_treno }}</td>
                <td>{{ $train->totale_carrozze }}</td>
                <td>{{ $train->in_orario ? '✅' : '⏱️' }}</td>
                <td>{{ $train->cancellato ? '❌' : '✔️' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection