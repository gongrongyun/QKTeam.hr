@extends('Layouts.app')

@section('content')
    <table class="table" id="member">
        <thead>
        <tr>
            <th>姓名</th>
            <th>学号</th>
            <th>扣扣</th>
        </tr>
        </thead>
        <tbody>
        @if(isset($members))
        @foreach($members as $member)
            <tr class="infor_stu" onclick="location.href='<?php echo e(route('introduce',[$member->id])); ?>';">
                <td>{{$member->name}}</td>
                <td>{{$member->studentId}}</td>
                <td>{{$member->qq}}</td>
            </tr>
        @endforeach
        @endif
    </table>
    <style type="text/css">
        .infor_stu:hover{
            background-color: #a1f7ff;
        }
    </style>
@endsection