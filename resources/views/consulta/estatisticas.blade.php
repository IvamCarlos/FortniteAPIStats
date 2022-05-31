<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fortnite API</title>
    <script src="https://use.fontawesome.com/2884a73c4a.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>

</head>
<body>

    <div class="container">
        <img src="{{ $resultado->avatar }}" style="width: 100px; height: 100px;">
        <h1><b>{{ $resultado->epicUserHandle }}</b></h1>
        @if($resultado->platformName == 'kbm')
            <p><b>Plataforma: </b> {{ 'PC' }}</p>
        @elseif($resultado->platformName == 'gamepad')
            <p><b>Plataforma: </b> {{ 'Console' }}</p>
        @elseif($resultado->platformName == 'touch')
            <p><b>Plataforma: </b> {{ 'Celular' }}</p>
        @endif
    </div>

        <div class="row">
            <div class="col">
                <div class="card text-white bg-dark" style="width: 30rem;">
                    <div class="card-header bg-primary">
                    SOLO
                    </div>
                    @if($resultado->stats->p2->trnRating->displayValue >= "0" && $resultado->stats->p2->trnRating->displayValue <= "1,499")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/scout.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Scout</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->p2->trnRating->rank }}</p>
                            </div>
                        </div>
                    @elseif($resultado->stats->p2->trnRating->displayValue >= "1,500" && $resultado->stats->p2->trnRating->displayValue <= "2,999")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/ranger.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Ranger</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->p2->trnRating->rank }}</p>
                            </div>
                        </div>
                    @elseif($resultado->stats->p2->trnRating->displayValue >= "3,000" && $resultado->stats->p2->trnRating->displayValue <= "3,999")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/agent.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Agent</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->p2->trnRating->rank }}</p>
                            </div>
                        </div>
                    @elseif($resultado->stats->p2->trnRating->displayValue >= "4,000" && $resultado->stats->p2->trnRating->displayValue <= "4,499")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/epic.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Epic</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->p2->trnRating->rank }}</p>
                            </div>
                        </div>
                    @elseif($resultado->stats->p2->trnRating->displayValue >= "4,500" && $resultado->stats->p2->trnRating->displayValue <= "5,000")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/legend.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Legend</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->p2->trnRating->rank }}</p>
                            </div>      
                        </div>
                    @elseif($resultado->stats->p2->trnRating->displayValue > "5,000")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/top500.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Top 500</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->p2->trnRating->rank }}</p>
                            </div>      
                        </div>
                    @endif
                    <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>Vitórias</b></p>
                        <p class="card-text"><b>Eliminações</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->p2->top1->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->p2->kills->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>Vitória %</b></p>
                        <p class="card-text"><b>K/D</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->p2->winRatio->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->p2->kd->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>TOP 10</b></p>
                        <p class="card-text"><b>TOP 25</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->p2->top10->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->p2->top25->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>TEMPO JOGADO</b></p>
                        <p class="card-text"><b>MÉDIA DE TEMPO JOGADO</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->p2->minutesPlayed->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->p2->avgTimePlayed->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>KPM</b></p>
                        <p class="card-text"><b>KPG</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->p2->kpm->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->p2->kpg->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>SCORE POR PARTIDA</b></p>
                        <p class="card-text"><b>SCORE POR MINUTO</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->p2->scorePerMatch->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->p2->scorePerMin->displayValue }}</p>
                    </div>

                    <p class="card-text"><b>SCORE</b></p>
                    <p class="card-text">{{ $resultado->stats->p2->score->displayValue }}</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card text-white bg-dark" style="width: 30rem;">
                    <div class="card-header bg-success">
                    DUO
                    </div>
                    @if($resultado->stats->p10->trnRating->displayValue >= "0" && $resultado->stats->p10->trnRating->displayValue <= "1,499")
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <img src="{{ asset('IMG/scout.png') }}" style="width: 50px; height: 50px;">
                        </div>
                        <div class="col-md-3">
                            <p>TRN Rating: Scout</p>
                        </div>
                        <div class="col-md-3">
                            <p>Rank: {{ isset($resultado->stats->p10->trnRating->rank) ? $resultado->stats->p10->trnRating->rank : ''  }}</p>
                        </div>
                    </div>
                    @elseif($resultado->stats->p10->trnRating->displayValue >= "1,500" && $resultado->stats->p10->trnRating->displayValue <= "2,999")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/ranger.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Ranger</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->p10->trnRating->rank }}</p>
                            </div>
                        </div>
                    @elseif($resultado->stats->p10->trnRating->displayValue >= "3,000" && $resultado->stats->p10->trnRating->displayValue <= "3,999")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/agent.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Agent</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->p10->trnRating->rank }}</p>
                            </div>
                        </div>
                    @elseif($resultado->stats->p10->trnRating->displayValue >= "4,000" && $resultado->stats->p10->trnRating->displayValue <= "4,499")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/epic.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Epic</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->p10->trnRating->rank }}</p>
                            </div>
                        </div>
                    @elseif($resultado->stats->p10->trnRating->displayValue >= "4,500" && $resultado->stats->p10->trnRating->displayValue <= "5,000")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/legend.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Legend</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->p10->trnRating->rank }}</p>
                            </div>      
                        </div>
                    @elseif($resultado->stats->p10->trnRating->displayValue > "5,000")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/top500.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Top 500</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->p10->trnRating->rank }}</p>
                            </div>      
                        </div>
                    @endif
                    <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>Vitórias</b></p>
                        <p class="card-text"><b>Eliminações</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->p10->top1->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->p10->kills->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>Vitória %</b></p>
                        <p class="card-text"><b>K/D</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->p10->winRatio->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->p10->kd->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>TOP 5</b></p>
                        <p class="card-text"><b>TOP 12</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->p10->top5->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->p10->top12->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>TEMPO JOGADO</b></p>
                        <p class="card-text"><b>MÉDIA DE TEMPO JOGADO</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->p10->minutesPlayed->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->p10->avgTimePlayed->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>KPM</b></p>
                        <p class="card-text"><b>KPG</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->p10->kpm->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->p10->kpg->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>SCORE POR PARTIDA</b></p>
                        <p class="card-text"><b>SCORE POR MINUTO</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->p10->scorePerMatch->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->p10->scorePerMin->displayValue }}</p>
                    </div>

                    <p class="card-text"><b>SCORE</b></p>
                    <p class="card-text">{{ $resultado->stats->p10->score->displayValue }}</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card text-white bg-dark" style="width: 30rem;">
                    <div class="card-header bg-info">
                    SQUADS
                    </div>
                    @if($resultado->stats->p9->trnRating->displayValue >= "0" && $resultado->stats->p9->trnRating->displayValue <= "1,499")
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <img src="{{ asset('IMG/scout.png') }}" style="width: 50px; height: 50px;">
                        </div>
                        <div class="col-md-3">
                            <p>TRN Rating: Scout</p>
                        </div>
                        <div class="col-md-3">
                            <p>Rank: {{ $resultado->stats->p9->trnRating->rank }}</p>
                        </div>
                    </div>
                    @elseif($resultado->stats->p9->trnRating->displayValue >= "1,500" && $resultado->stats->p9->trnRating->displayValue <= "2,999")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/ranger.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Ranger</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->p9->trnRating->rank }}</p>
                            </div>
                        </div>
                    @elseif($resultado->stats->p9->trnRating->displayValue >= "3,000" && $resultado->stats->p9->trnRating->displayValue <= "3,999")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/agent.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Agent</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->p9->trnRating->rank }}</p>
                            </div>
                        </div>
                    @elseif($resultado->stats->p9->trnRating->displayValue >= "4,000" && $resultado->stats->p9->trnRating->displayValue <= "4,499")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/epic.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Epic</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->p9->trnRating->rank }}</p>
                            </div>
                        </div>
                    @elseif($resultado->stats->p9->trnRating->displayValue >= "4,500" && $resultado->stats->p9->trnRating->displayValue <= "5,000")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/legend.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Legend</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->p9->trnRating->rank }}</p>
                            </div>      
                        </div>
                    @elseif($resultado->stats->p9->trnRating->displayValue > "5,000")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/top500.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Top 500</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->p9->trnRating->rank }}</p>
                            </div>      
                        </div>
                    @endif
                    <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>Vitórias</b></p>
                        <p class="card-text"><b>Eliminações</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->p9->top1->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->p9->kills->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>Vitória %</b></p>
                        <p class="card-text"><b>K/D</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->p9->winRatio->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->p9->kd->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>TOP 3</b></p>
                        <p class="card-text"><b>TOP 6</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->p9->top3->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->p9->top6->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>TEMPO JOGADO</b></p>
                        <p class="card-text"><b>MÉDIA DE TEMPO JOGADO</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->p9->minutesPlayed->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->p9->avgTimePlayed->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>KPM</b></p>
                        <p class="card-text"><b>KPG</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->p9->kpm->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->p9->kpg->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>SCORE POR PARTIDA</b></p>
                        <p class="card-text"><b>SCORE POR MINUTO</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->p9->scorePerMatch->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->p9->scorePerMin->displayValue }}</p>
                    </div>

                    <p class="card-text"><b>SCORE</b></p>
                    <p class="card-text">{{ $resultado->stats->p9->score->displayValue }}</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card text-white bg-dark" style="width: 30rem;">
                    <div class="card-header bg-danger">
                    TRIOS
                    </div>
                    @if($resultado->stats->trios->trnRating->displayValue >= "0" && $resultado->stats->trios->trnRating->displayValue <= "1,499")
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <img src="{{ asset('IMG/scout.png') }}" style="width: 50px; height: 50px;">
                        </div>
                        <div class="col-md-3">
                            <p>TRN Rating: Scout</p>
                        </div>
                        <div class="col-md-3">
                            <p>Rank: {{ $resultado->stats->trios->trnRating->rank }}</p>
                        </div>
                    </div>
                    @elseif($resultado->stats->trios->trnRating->displayValue >= "1,500" && $resultado->stats->trios->trnRating->displayValue <= "2,999")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/ranger.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Ranger</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->trios->trnRating->rank }}</p>
                            </div>
                        </div>
                    @elseif($resultado->stats->trios->trnRating->displayValue >= "3,000" && $resultado->stats->trios->trnRating->displayValue <= "3,999")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/agent.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Agent</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->trios->trnRating->rank }}</p>
                            </div>
                        </div>
                    @elseif($resultado->stats->trios->trnRating->displayValue >= "4,000" && $resultado->stats->trios->trnRating->displayValue <= "4,499")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/epic.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Epic</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->trios->trnRating->rank }}</p>
                            </div>
                        </div>
                    @elseif($resultado->stats->trios->trnRating->displayValue >= "4,500" && $resultado->stats->trios->trnRating->displayValue <= "5,000")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/legend.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Legend</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->trios->trnRating->rank }}</p>
                            </div>      
                        </div>
                    @elseif($resultado->stats->trios->trnRating->displayValue > "5,000")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/top500.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Top 500</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->trios->trnRating->rank }}</p>
                            </div>      
                        </div>
                    @endif
                    <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>Vitórias</b></p>
                        <p class="card-text"><b>Eliminações</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->trios->top1->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->trios->kills->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>Vitória %</b></p>
                        <p class="card-text"><b>K/D</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->trios->winRatio->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->trios->kd->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>TOP 3</b></p>
                        <p class="card-text"><b>TOP 6</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->trios->top3->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->trios->top6->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>TEMPO JOGADO</b></p>
                        <p class="card-text"><b>MÉDIA DE TEMPO JOGADO</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->trios->minutesPlayed->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->trios->avgTimePlayed->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>KPM</b></p>
                        <p class="card-text"><b>KPG</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->trios->kpm->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->trios->kpg->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>SCORE POR PARTIDA</b></p>
                        <p class="card-text"><b>SCORE POR MINUTO</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->trios->scorePerMatch->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->trios->scorePerMin->displayValue }}</p>
                    </div>

                    <p class="card-text"><b>SCORE</b></p>
                    <p class="card-text">{{ $resultado->stats->trios->score->displayValue }}</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card text-white bg-dark" style="width: 30rem;">
                    <div class="card-header bg-secondary">
                    LTM
                    </div>
                    <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>Vitórias</b></p>
                        <p class="card-text"><b>Eliminações</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->ltm->top1->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->ltm->kills->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>Vitória %</b></p>
                        <p class="card-text"><b>K/D</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->ltm->winRatio->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->ltm->kd->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>TEMPO JOGADO</b></p>
                        <p class="card-text"><b>MÉDIA DE TEMPO JOGADO</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->ltm->minutesPlayed->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->ltm->avgTimePlayed->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>KPM</b></p>
                        <p class="card-text"><b>KPG</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->ltm->kpm->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->ltm->kpg->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>SCORE POR PARTIDA</b></p>
                        <p class="card-text"><b>SCORE POR MINUTO</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->ltm->scorePerMatch->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->ltm->scorePerMin->displayValue }}</p>
                    </div>

                    <p class="card-text"><b>SCORE</b></p>
                    <p class="card-text">{{ $resultado->stats->ltm->score->displayValue }}</p>
                    </div>
                </div>
            </div>

            <div class="col mt-5">
                <div class="card text-white bg-dark" style="width: 30rem;">
                    <div class="card-header bg-secondary">
                     SOLO (ATUAL)
                    </div>
                    @if($resultado->stats->curr_p2->trnRating->displayValue >= "0" && $resultado->stats->curr_p2->trnRating->displayValue <= "1,499")
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <img src="{{ asset('IMG/scout.png') }}" style="width: 50px; height: 50px;">
                        </div>
                        <div class="col-md-3">
                            <p>TRN Rating: Scout</p>
                        </div>
                        <div class="col-md-3">
                            <p>Rank: {{ $resultado->stats->curr_p2->trnRating->rank }}</p>
                        </div>
                    </div>
                    @elseif($resultado->stats->curr_p2->trnRating->displayValue >= "1,500" && $resultado->stats->curr_p2->trnRating->displayValue <= "2,999")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/ranger.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Ranger</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->curr_p2->trnRating->rank }}</p>
                            </div>
                        </div>
                    @elseif($resultado->stats->curr_p2->trnRating->displayValue >= "3,000" && $resultado->stats->curr_p2->trnRating->displayValue <= "3,999")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/agent.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Agent</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->curr_p2->trnRating->rank }}</p>
                            </div>
                        </div>
                    @elseif($resultado->stats->curr_p2->trnRating->displayValue >= "4,000" && $resultado->stats->curr_p2->trnRating->displayValue <= "4,499")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/epic.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Epic</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->curr_p2->trnRating->rank }}</p>
                            </div>
                        </div>
                    @elseif($resultado->stats->curr_p2->trnRating->displayValue >= "4,500" && $resultado->stats->curr_p2->trnRating->displayValue <= "5,000")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/legend.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Legend</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->curr_p2->trnRating->rank }}</p>
                            </div>      
                        </div>
                    @elseif($resultado->stats->curr_p2->trnRating->displayValue > "5,000")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/top500.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Top 500</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->curr_p2->trnRating->rank }}</p>
                            </div>      
                        </div>
                    @endif
                    <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>Vitórias</b></p>
                        <p class="card-text"><b>Eliminações</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->curr_p2->top1->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->curr_p2->kills->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>Vitória %</b></p>
                        <p class="card-text"><b>K/D</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->curr_p2->winRatio->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->curr_p2->kd->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>TOP 10</b></p>
                        <p class="card-text"><b>TOP 25</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->curr_p2->top10->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->curr_p2->top25->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>TEMPO JOGADO</b></p>
                        <p class="card-text"><b>MÉDIA DE TEMPO JOGADO</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->curr_p2->minutesPlayed->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->curr_p2->avgTimePlayed->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>KPM</b></p>
                        <p class="card-text"><b>KPG</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->curr_p2->kpm->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->curr_p2->kpg->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>SCORE POR PARTIDA</b></p>
                        <p class="card-text"><b>SCORE POR MINUTO</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->curr_p2->scorePerMatch->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->curr_p2->scorePerMin->displayValue }}</p>
                    </div>

                    <p class="card-text"><b>SCORE</b></p>
                    <p class="card-text">{{ $resultado->stats->curr_p2->score->displayValue }}</p>
                    </div>
                </div>
            </div>

            <div class="col mt-5">
                <div class="card text-white bg-dark" style="width: 30rem;">
                    <div class="card-header bg-secondary">
                    SQUADS (ATUAL)
                    </div>
                    @if($resultado->stats->curr_p9->trnRating->displayValue >= "0" && $resultado->stats->curr_p9->trnRating->displayValue <= "1,499")
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <img src="{{ asset('IMG/scout.png') }}" style="width: 50px; height: 50px;">
                        </div>
                        <div class="col-md-3">
                            <p>TRN Rating: Scout</p>
                        </div>
                        <div class="col-md-3">
                            <p>Rank: {{ $resultado->stats->curr_p9->trnRating->rank }}</p>
                        </div>
                    </div>
                    @elseif($resultado->stats->curr_p9->trnRating->displayValue >= "1,500" && $resultado->stats->curr_p9->trnRating->displayValue <= "2,999")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/ranger.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Ranger</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->curr_p9->trnRating->rank }}</p>
                            </div>
                        </div>
                    @elseif($resultado->stats->curr_p9->trnRating->displayValue >= "3,000" && $resultado->stats->curr_p9->trnRating->displayValue <= "3,999")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/agent.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Agent</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->curr_p9->trnRating->rank }}</p>
                            </div>
                        </div>
                    @elseif($resultado->stats->curr_p9->trnRating->displayValue >= "4,000" && $resultado->stats->curr_p9->trnRating->displayValue <= "4,499")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/epic.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Epic</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->curr_p9->trnRating->rank }}</p>
                            </div>
                        </div>
                    @elseif($resultado->stats->curr_p9->trnRating->displayValue >= "4,500" && $resultado->stats->curr_p9->trnRating->displayValue <= "5,000")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/legend.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Legend</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->curr_p9->trnRating->rank }}</p>
                            </div>      
                        </div>
                    @elseif($resultado->stats->curr_p9->trnRating->displayValue > "5,000")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/top500.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Top 500</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->curr_p9->trnRating->rank }}</p>
                            </div>      
                        </div>
                    @endif
                    <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>Vitórias</b></p>
                        <p class="card-text"><b>Eliminações</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->curr_p9->top1->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->curr_p9->kills->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>Vitória %</b></p>
                        <p class="card-text"><b>K/D</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->curr_p9->winRatio->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->curr_p9->kd->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>TOP 3</b></p>
                        <p class="card-text"><b>TOP 6</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->curr_p9->top3->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->curr_p9->top6->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>TEMPO JOGADO</b></p>
                        <p class="card-text"><b>MÉDIA DE TEMPO JOGADO</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->curr_p9->minutesPlayed->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->curr_p9->avgTimePlayed->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>KPM</b></p>
                        <p class="card-text"><b>KPG</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->curr_p9->kpm->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->curr_p9->kpg->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>SCORE POR PARTIDA</b></p>
                        <p class="card-text"><b>SCORE POR MINUTO</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->curr_p9->scorePerMatch->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->curr_p9->scorePerMin->displayValue }}</p>
                    </div>

                    <p class="card-text"><b>SCORE</b></p>
                    <p class="card-text">{{ $resultado->stats->curr_p9->score->displayValue }}</p>
                    </div>
                </div>
            </div>

            <div class="col mt-5">
                <div class="card text-white bg-dark" style="width: 30rem;">
                    <div class="card-header bg-secondary">
                    TRIOS
                    </div>
                    @if($resultado->stats->curr_trios->trnRating->displayValue >= "0" && $resultado->stats->curr_trios->trnRating->displayValue <= "1,499")
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <img src="{{ asset('IMG/scout.png') }}" style="width: 50px; height: 50px;">
                        </div>
                        <div class="col-md-3">
                            <p>TRN Rating: Scout</p>
                        </div>
                        <div class="col-md-3">
                            <p>Rank: {{ $resultado->stats->curr_trios->trnRating->rank }}</p>
                        </div>
                    </div>
                    @elseif($resultado->stats->curr_trios->trnRating->displayValue >= "1,500" && $resultado->stats->curr_trios->trnRating->displayValue <= "2,999")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/ranger.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Ranger</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->curr_trios->trnRating->rank }}</p>
                            </div>
                        </div>
                    @elseif($resultado->stats->curr_trios->trnRating->displayValue >= "3,000" && $resultado->stats->curr_trios->trnRating->displayValue <= "3,999")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/agent.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Agent</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->curr_trios->trnRating->rank }}</p>
                            </div>
                        </div>
                    @elseif($resultado->stats->curr_trios->trnRating->displayValue >= "4,000" && $resultado->stats->curr_trios->trnRating->displayValue <= "4,499")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/epic.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Epic</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->curr_trios->trnRating->rank }}</p>
                            </div>
                        </div>
                    @elseif($resultado->stats->curr_trios->trnRating->displayValue >= "4,500" && $resultado->stats->curr_trios->trnRating->displayValue <= "5,000")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/legend.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Legend</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->curr_trios->trnRating->rank }}</p>
                            </div>      
                        </div>
                    @elseif($resultado->stats->curr_trios->trnRating->displayValue > "5,000")
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <img src="{{ asset('IMG/top500.png') }}" style="width: 50px; height: 50px;">
                            </div>
                            <div class="col-md-3">
                                <p>TRN Rating: Top 500</p>
                            </div>
                            <div class="col-md-3">
                                <p>Rank: {{ $resultado->stats->curr_trios->trnRating->rank }}</p>
                            </div>      
                        </div>
                    @endif
                    <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>Vitórias</b></p>
                        <p class="card-text"><b>Eliminações</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->curr_trios->top1->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->curr_trios->kills->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>Vitória %</b></p>
                        <p class="card-text"><b>K/D</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->curr_trios->winRatio->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->curr_trios->kd->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>TOP 10</b></p>
                        <p class="card-text"><b>TOP 25</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->curr_p2->top10->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->curr_p2->top25->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>TEMPO JOGADO</b></p>
                        <p class="card-text"><b>MÉDIA DE TEMPO JOGADO</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->curr_trios->minutesPlayed->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->curr_trios->avgTimePlayed->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>KPM</b></p>
                        <p class="card-text"><b>KPG</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->curr_trios->kpm->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->curr_trios->kpg->displayValue }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="card-text"><b>SCORE POR PARTIDA</b></p>
                        <p class="card-text"><b>SCORE POR MINUTO</b></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">{{ $resultado->stats->curr_trios->scorePerMatch->displayValue }}</p>
                        <p class="card-text">{{ $resultado->stats->curr_trios->scorePerMin->displayValue }}</p>
                    </div>

                    <p class="card-text"><b>SCORE</b></p>
                    <p class="card-text">{{ $resultado->stats->curr_trios->score->displayValue }}</p>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
