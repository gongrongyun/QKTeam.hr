@extends('Layouts.app')

@section('content')
    <table class="table" id="member">
        <thead>
        <tr>
            <th>姓名</th>
            <th>学号</th>
            <th>学院</th>
            <th>专业</th>
            <th>扣扣</th>
            <th>邮箱</th>
            <th>电话</th>
        </tr>
        </thead>
        <tbody>
        @if(isset($members))
        @foreach($members as $member)
            <tr>
                <td>
                    <a href="{{route('introduce',[$member->id])}}">
                        {{$member->name}}
                    </a>
                </td>
                <td>{{$member->studentId}}</td>
                <td>{{$member->college}}</td>
                <td>{{$member->profession}}</td>
                <td>{{$member->qq}}</td>
                <td>{{$member->email}}</td>
                <td>{{$member->phoneNumber}}</td>
            </tr>
        @endforeach
        @endif
    </table>
@endsection