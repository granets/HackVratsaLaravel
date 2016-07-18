@extends('layout.nosidebar')
@section('content')
    <div>

        <table id="teams-table" class="table table-hover table-responsive" style="background-color: white;
  -moz-box-shadow:    1px 1px 1px 1px #ccc;
  -webkit-box-shadow: 1px 1px 1px 1px #ccc;
  box-shadow:         1px 1px 1px 1px #ccc;">
            <thead>
            <tr>
                <th>Лого</th>
                <th>Име на отбора</th>
                <th>Категория</th>
                <th>Технология</th>
                <th>Мото</th>
                <th>Виж повече</th>
            </tr>
            </thead>
            <tbody>
            @foreach($teams as $team)
                <tr>
                    <td>
                        @if($team->team_thumbnail)
                            <img src='uploads/{{$team->team_thumbnail}}' alt='logo' style='width:100%; max-width: 150px;' >
                    </td>
                    @else
                        <img src='uploads/crow.png' alt='logo' style='width:100%; max-width: 150px;'>
                        </td>
                    @endif
                    <td> {{$team->team_name}}</td>
                    <td> {{$team->category}}</td>
                    <td>{{$team->technologies}}</td>
                    <td>{{$team->team_moto}}</td>
                    <td><a href="{{url('team')}}" class="btn btn-info">Виж</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

@endsection