
   @extends('index')
   @section('title','All Todo')

   <div class="container mt-5 mb-5">
    @section('content')

        <div class="row justify-content-center">
            <div class="card w-50">
                <div class="card-header">
                    <h2 class="d-inline-block text-center">Todo List</h2>
                    <a href="/create" class="btn btn-primary float-right">Add Task <span class="badge badge-light"><i class="far fa-plus-square"></i></span></a>
                </div>
                <div class="card-body">
                    @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                    </div>
                    @endif
                    @if (session()->has('update'))
                    <div class="alert alert-dark alert-dismissible fade show" role="alert">
                        {{session('update')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                    </div>

                    @endif
                    @if (session()->has('destroy'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{session('destroy')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                    </div>

                    @endif

                    @if (session()->has('complited'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        {{session('complited')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                    </div>

                    @endif
                    <ul class="list-group">
                        @forelse ($todos as $todo)
                        <li class="list-group-item">{{$todo->title}}
                            <span class="float-right">
                                <a href="/{{$todo->id}}/delete" class="text-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </span>
                            <span class="float-right mr-2 ml-2">
                                <a href="/{{$todo->id}}/edit" class="text-success">
                                    <i class="far fa-edit"></i>
                                </a>
                            </span>
                            <span class="float-right">
                            <a href="/todo/{{$todo->id}}" class="text-info">
                                    <i class="far fa-eye"></i>
                                </a>
                            </span>
                            @if (!$todo->complited)

                            <span class="float-right mr-2">
                            <a href="/{{$todo->id}}/complited" class="text-secondary">
                                <i class="far fa-square"></i>
                                </a>
                            </span>
                            @else
                            <span class="float-right mr-2">
                            <a href="/{{$todo->id}}/incomplited" class="text-primary">
                                <i class="far fa-check-square"></i>
                                </a>
                            </span>

                            @endif



                        </li>
                        @empty
                        <p>There is no task to do</p>



                        @endforelse

                    </ul>

                </div>
            </div>
        </div>
    </div>

    @endsection




