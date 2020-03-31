@extends('index')
@section('title','todo'.$todo->id)
@section('content')
<div class="container mt-5 mb-5">
    <div class="card justify-content-center">
        <div class="card-header text-center">
            Edit Todo
        </div>
        <div class="card-body">
            <form method="POST" action="/todos/{{$todo->id}}">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @csrf
                <div class="form-group">
                <input type="text" class="form-control"  name="title" value="{{$todo->title}}"  placeholder="Enter Title task">

                </div>

                <div class="form-group">
                    <textarea class="form-control text-left" name="discription"  placeholder="task description" rows="3">{{$todo->discription}}</textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary w-50">Update</button>

                </div>
            </form>
        </div>
    </div>
</div>


@endsection
