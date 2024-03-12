@extends('layouts.main')

@section('title', 'Home')

@section('main-content')
    <h1 class="text-center my-5">
        Laravel Migration Seeder Factory</h1>

    <ul class="list-group">
        @forelse ($trains as $train)
            <div class="list-group my-3">
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <h5><strong>{{ $train->firm }}</strong></h5>
                        <div>
                            <small
                                class="d-block text-end @if ($train['deleted']) text-decoration-line-through @endif">Train:
                                <strong>{{ $train->train_code }}</strong></small>
                            <small
                                class="d-block text-end @if ($train['deleted']) text-decoration-line-through @endif">Vagon:
                                <strong>{{ $train->vagon_number }}</strong></small>
                        </div>
                    </div>
                    @if ($train['deleted'])
                        <h6 class="text-danger">
                            Treno cancellato
                        </h6>
                    @else
                        @if ($train['on_time'])
                            <p class="text-warning">
                                In ritardo
                            </p>
                        @else
                            <p class="text-success">
                                In orario
                            </p>
                        @endif
                    @endif
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-light">
                    <div class="d-flex justify-content-between">
                        <p class="mb-1 @if ($train['deleted']) text-decoration-line-through @endif">Departure:
                            <strong>{{ $train->departure_city }}</strong> at
                            {{ $train->departure_time }}
                        </p>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-light">
                    <div class="d-flex justify-content-between">
                        <p class="mb-1 @if ($train['deleted']) text-decoration-line-through @endif">Arrival:
                            <strong>{{ $train->arrival_city }}</strong> at
                            {{ $train->arrival_time }}
                        </p>
                    </div>
                </a>
            </div>
        @empty
            <h3>Non ci sono treni in partenza</h3>
        @endforelse
    </ul>
@endsection
