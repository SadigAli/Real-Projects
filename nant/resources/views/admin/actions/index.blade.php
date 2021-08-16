@extends('admin.layouts.layout')
@section('content')
    @if (Session::has('success_message'))
        <div class="toast" role="alert" style="opacity: 1; width: 100%" aria-live="assertive" aria-atomic="true">
            <div class="toast-body">
                {!! Session('success_message') !!}
                <button type="button" class="ml-2 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endif
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-between">
                    <h3 class="card-title ml-3">Sosial Actions</h3>
                    <a href="{{ route('create-action') }}" class="btn btn-success mr-3">Create</a>
                </div>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Settings</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($actions as $action)
                                <tr>
                                    <th>{{ $action->id }}</th>
                                    <td>{{ $action->{'title_' . App::getLocale()} }}</td>
                                    <td>
                                        @if(Str::length($action->{'description_' . App::getLocale()})>50)
                                            {{ Str::substr($action->{'description_' . App::getLocale()},0,50) }}...
                                            @else
                                            {{ $action->{'description_' . App::getLocale()} }}
                                        @endif
                                    </td>                                    <td>
                                        <img src="{{ asset('storage/images/actions') . '/' . $action->image }}"
                                            alt="img">
                                    </td>
                                    <td>
                                        <a href="/admin-user/action/edit/{{ $action->id }}"
                                            class="btn btn-primary mr-2"><i class="mdi mdi-table-edit"></i></a>
                                        <a href="/admin-user/action/delete/{{ $action->id }}"
                                            class="btn btn-danger mx-2"><i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
