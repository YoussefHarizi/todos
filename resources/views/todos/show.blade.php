@extends('index')
@section('title','Todo'.$todo_id->id)
@section('content')
<div class="container mt-5 mb-5">
    <h2 class="text-center text-info mb-4">{{$todo_id->title}}</h2>
    <div class="card">
        <div class="card-header">
            <span>Details</span>
        <span class="badge badge-warning float-right">{{boolval($todo_id->complited)?'complited':'incomplited'}}</span>
        </div>
        <div class="card-body">

            <p class="card-text">{{$todo_id->discription}}</p>
        </div>
    </div>
</div>
@endsection
