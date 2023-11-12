
@extends('templates.layout')


@section('content')


    @if(!empty($teams))
    <div class="col-lg-6 grid-margin stretch-card">

    @component('components.card', ['card_title'=>'Serie A'])

    <table class="table">
        <thead>
            <tr class="">
            <th>{{$title}}</th>
            <th>Team</th>
            <th>Points</th>
            </tr>
            </thead>

        @foreach($teams as $team)
        <tr style="{{$loop->first ?'color:green':''}}{{$loop->last ?'color:red':''}}">
            <td style='width:10%'>{{$loop->iteration}}</td>
            <td style='width:70%'>{{$team['name']}}</td>
            <td style='width:20%'>{{$team['points']}}</td>
        </tr>
    @endforeach
    </table>

    @endcomponent

    </div>
    @endif

    <div><x-alert :info="'Pollo'"/></div>
@stop


