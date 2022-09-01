
@extends('layouts.dashLayout')
@section('content1')
    <div class="card-body">
        <div class="e-table">
            <div class="table-responsive table-lg mt-3">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="align-top">
                            <div
                                class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0">
                                <input type="checkbox" class="custom-control-input" id="all-items">
                                <label class="custom-control-label" for="all-items"></label>
                            </div>
                        </th>
                        <th class="">Id</th>
                        <th class="min-width">Name</th>
                        <th>Actions</th>

                    </tr>
                    </thead>
                    <tbody>
                    {{--                    @if (isset($categories))--}}
                    @foreach($categories as $item)
                        <tr>
                            <td class="align-middle">
                                <div
                                    class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
                                    <input type="checkbox" class="custom-control-input" id="item-2">
                                    <label class="custom-control-label" for="item-2"></label>
                                </div>
                            </td>

                            <td>{{$item->id}}</td>
                            <td>{{$item->category_name}}</td>
                            <td class="text-center align-middle">
                                <div class="btn-group align-top">
                                    <button class="btn btn-sm btn-outline-secondary badge" type="button"
                                            data-toggle="modal"  data-target="#edit-form-modal<?php echo $item['id'] ?>"><a href=""></a>Edit
                                    </button>
                                    <div class="modal fade" role="dialog" tabindex="-1" id="edit-form-modal<?php echo $item['id'] ?>">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Category</h5>
                                                    <button type="button" class="close" data-dismiss="modal">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <div class="py-1">
                                                        <form action="{{route('categories.update',$item->id)}}" method="POST">
                                                            @csrf
                                                            @method('PUT')

                                                            <div class="form-group">
                                                                <input id="" type="text" class="form-control" name="category_name" value="{{$item->category_name}}" required
                                                                       placeholder="Category name" autofocus>
                                                            </div>


                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-primary btn-block">Save Data</button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{route('categories.destroy', $item->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-sm btn-danger" type="submit"><i
                                                class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    {{--                    @endif--}}
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">
                <ul class="pagination mt-3 mb-0">
                    <li class="disabled page-item"><a href="#" class="page-link">‹</a></li>
                    <li class="active page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">›</a></li>
                    <li class="page-item"><a href="#" class="page-link">»</a></li>
                </ul>
            </div>
        </div>
    </div>

@endsection
{{--section create category--}}
@section('content2')
    <div class="col-12 col-lg-3 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="text-center px-xl-3">
                    <button class="btn btn-success btn-block" type="button" data-toggle="modal"
                            data-target="#user-form-modal">New Category
                    </button>
                </div>
                <hr class="my-3">
                <div class="e-navlist e-navlist--active-bold">
                    <ul class="nav">
                        <li class="nav-item active"><a href=""
                                                       class="nav-link"><span>All</span>&nbsp;<small>/&nbsp;32</small></a>
                        </li>
                        <li class="nav-item"><a href=""
                                                class="nav-link"><span>Active</span>&nbsp;<small>/&nbsp;16</small></a>
                        </li>
                        <li class="nav-item"><a href=""
                                                class="nav-link"><span>Selected</span>&nbsp;<small>/&nbsp;0</small></a>
                        </li>
                    </ul>
                </div>
                <hr class="my-3">
                <div>
                    <div class="form-group">
                        <label>Date from - to:</label>
                        <div>
                            <input id="dates-range" class="form-control flatpickr-input"
                                   placeholder="01 Dec 17 - 27 Jan 18" type="text" readonly="readonly">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Search by Name:</label>
                        <div><input class="form-control w-100" type="text" placeholder="Name" value=""></div>
                    </div>
                </div>
                <hr class="my-3">
                <div class="">
                    <label>Status:</label>
                    <div class="px-2">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="user-status"
                                   id="users-status-disabled">
                            <label class="custom-control-label" for="users-status-disabled">Disabled</label>
                        </div>
                    </div>
                    <div class="px-2">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="user-status"
                                   id="users-status-active">
                            <label class="custom-control-label" for="users-status-active">Active</label>
                        </div>
                    </div>
                    <div class="px-2">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="user-status" id="users-status-any"
                                   checked="">
                            <label class="custom-control-label" for="users-status-any">Any</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{--section create & edit--}}
@section('content3')
    <div class="modal fade" role="dialog" tabindex="-1" id="user-form-modal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Category</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="py-1">
                        <form action="{{route('categories.store')}}" method="POST">
                            @csrf

                            <div class="form-group">
                                <input id="" type="text" class="form-control" name="category_name" required
                                       placeholder="Category name" autofocus>
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Create</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--edit category--}}

@endsection


