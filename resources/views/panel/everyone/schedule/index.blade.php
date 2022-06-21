@extends('layouts.app')

@section('title')
    Sekcje - GrandiosoApp
@endsection

@section('custom-style')

@endsection

@section('content-header')
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-sm-10">
                <h1 class="m-0">Grafik prób i koncertów</h1>
            </div><!-- /.col -->
            <div class="col-sm-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item">Orkiestra Grandioso Radom</li>
                        <li class="breadcrumb-item active" aria-current="page">Sekcje</li>
                    </ol>
                </nav>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <!-- <div class="row"> -->
                            <!-- <div class="col-sm-5">
                                <h3 class="font-weight-bold mb-2">
                                    <i class="fas fa-info-circle"></i> Najważniejsze informacje
                                </h3>
                            </div> -->
                            <!--col-->
                            <!-- <div class="col text-end">
                                <a href="{{ route('roles.create') }}" class="btn btn-outline-success"><i class="fas fa-plus"></i> Dodaj</a>
                            </div> -->
                        <!-- </div> -->
                        <!--row-->

                        <div class="row mt-4">
                            <div class="elo">
                                <?php
                                    $start = 1;
                                    $end = 7;

                                    $date = null;
                                    $date = empty($date) ? Carbon::yesterday() : Carbon::createFromDate($y, $m, $d);
                                    $startOfCalendar = $date->copy()->firstOfMonth()->startOfWeek(Carbon::MONDAY);
                                    $endOfCalendar = $date->copy()->lastOfMonth()->endOfWeek(Carbon::SUNDAY);
                                    $dni = ['Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota', 'Niedziela'];
                                ?>



                                @for($a = 0; $a <= 2; $a++)
                                    @php
                                        if($a > 0){
                                            $start = $start + $end;
                                            $end = $end+$end;
                                        }
                                    @endphp
                                    {{ $a }}
                                    {{ $start }}
                                    <div class="elo-header">
    									<div class="row">
    										<?php
                                            // for($i = $start; $i<=$end; $i++):
                                            //
                                            //
                                            //     $dates[$i] = mktime(0, 0, 0, date("m"), date("d")+$i, date("Y"));
                                            //
                                            //     $tyd[$i] = $dni[(date('w', $dates[$i]))];
                                            //
                                            //     $data[$i] = date('d.m.Y',$dates[$i]);
                                            while($startOfCalendar <= $endOfCalendar):
                                                $extraClass = $startOfCalendar->format('m') != $date->format('m') ? 'dull' : '';
                                                $extraClass .= $startOfCalendar->isToday() ? ' today' : '';
                                            ?>
    											<div class="col-2">
    												<div class="card border bg-dark mb-2">
    													<div class="card-body text-center">

    															<!-- <div class="pb-3">
    																<p class="fw-bold ">XX.XX.XXXX - XX.XX.XXXX</p>
    															</div>
    															<div class="">
    																<a href="" class="btn btn-outline-success btn-lg">
    																	<i class="fas fa-chevron-left"></i>
    																</a>
    																<a href="" class="btn btn-outline-success btn-lg">
    																	<i class="fas fa-chevron-right"></i>
    																</a>
    															</div> -->
                                                                <h4 class="">
                                                                    {{ $extraClass  }}
                                                                    {{ $startOfCalendar->format('j') }}

    															</h4>
    															<p class="text-muted">{{ $startOfCalendar->format('l') }}</p>

    															<!-- ' : 'btn-info') -->
    															<!-- btn btn-sm btn-danger -->
    															<!-- ' fa-exclamation-triangle: 'fa-question-circle') + ' -->
    															<!-- <a href="" class="btn btn-outline-success btn-lg">Wybierz</a><br> -->
    															<!-- <button class="btn btn-sm btn-danger" onClick="uwagaDyspo()">
    																<i class="fas fa-exclamation-triangle"></i>
    															</button> -->

    													</div>
    												</div>
    											</div>
                                                @php
                                                    $startOfCalendar->addDay();
                                                @endphp
    										@endwhile
    									</div>
    								</div>
                                    <div class="elo-body">

    										<div class="row  mb-4">
    											@for($i=1; $i<=7; $i++)
    												<div class="col-sm">
    													<div class="card border bg-dark mb-2">
    														<div class="card-body text-center py-2">
                                                                <p class="py-5">
                                                                    <!-- Button trigger modal -->
                                                                    <button type="button" class="btn btn-link text-danger" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                                                                        <i class="far fa-calendar-minus fa-3x mb-3 mt-4"></i>
                                                                    </button>
                                                                </p>



    														</div>
    													</div>
    												</div>
    											@endfor
    										</div>
    								</div>
                                @endfor
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
