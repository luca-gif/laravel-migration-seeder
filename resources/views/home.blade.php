@extends('layouts.main')

<ul>
    <div class="row justify-content-center">
        @foreach ($trains as $train)
            <div class="col-4 card">
                <li>Azienda: {{ $train->azienda }}</li>
                <li>Stazione di partenza: {{ $train->stazione_di_partenza }}</li>
                <li>Stazione di arrivo: {{ $train->stazione_di_arrivo }}</li>
                <li>Orario di Partenza: {{ $train->orario_di_partenza }}</li>
                <li>Orario di arrivo: {{ $train->orario_di_arrivo }}</li>
                <li>Codice treno: {{ $train->codice_treno }}</li>
                <li>Numero carrozze: {{ $train->numero_carrozze }}</li>
                <li>In orario?:
                    @if ($train->is_canceled === 1)
                        <span>No</span>
                    @else
                        @if ($train->on_time === 1)
                            <span>Si</span>
                        @else
                            <span>No</span>
                        @endif
                    @endif
                </li>
                <li>Cancellato?:
                    @if ($train->is_canceled === 1)
                        <span>Si</span>
                    @else
                        <span>No</span>
                    @endif
                </li>
            </div>
        @endforeach
    </div>
</ul>
