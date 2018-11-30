@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Level 1</div>
                <div class="card-header">Level 2</div>
                <div class="card-header">Level 3</div>
                <div class="card-header">Level 4</div>
                <div class="card-header">Level 5</div>

                <!-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div> -->
            </div>
            <a href="adduser" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">เพื่อผู้ใช้งาน</a>
        </div>
    </div>
</div>
    <table class="table table-bordered table-striped"> 
        <tr> 
            <th>ห้อง</th>
            <th>อุณหภูมิคอยล์เย็น</th>
            <th>ความชื้นสัมพัทธ์</th>
            <th>อุณหภูมิห้อง</th>
            <th>แรงดันคอยล์เย็น</th>
            <th>กระแสคอยล์เย็น</th>
            <th>กระแสคอยล์ร้อน</th>
            <th>ความเร็วลม</th>
            <th>ประสิทธิภาพ</th>
            <th>สถานะ</th>
            <th>ส่วนควบคุม</th>
        </tr> 
        @foreach($statusairs as $row) 
        <tr> 
            <td>{{$row['RoomNo']}}</td> 
            <td>{{$row['CoolTemp']}}</td> 
            <td>{{$row['Humidity']}}</td> 
            <td>{{$row['RoomTemp']}}</td> 
            <td>{{$row['VoltCool']}}</td> 
            <td>{{$row['CurrentCool']}}</td> 
            <td>{{$row['CurrentHot']}}</td> 
            <td>{{$row['WindSpeed']}}</td> 
            <td>{{$row['Performance']}}</td> 
            <td>{{$row['PowerStatus']}}</td> 
        </tr> 
        @endforeach 
    </table> 
@endsection
