<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="row flex-lg-nowrap">
        <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
            <div class="card p-3">
                <div class="e-navlist e-navlist--active-bg">
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link px-2 active" href="#"><i class="fa fa-fw fa-bar-chart mr-1"></i><span>Overview</span></a></li>
                        <li class="nav-item"><a class="nav-link px-2" href="https://www.bootdey.com/snippets/view/bs4-crud-users" target="__blank"><i class="fa fa-fw fa-th mr-1"></i><span>CRUD</span></a></li>
                        <li class="nav-item"><a class="nav-link px-2" href="https://www.bootdey.com/snippets/view/bs4-edit-profile-page" target="__blank"><i class="fa fa-fw fa-cog mr-1"></i><span>Settings</span></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="e-tabs mb-3 px-3">
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link active" href="{{route('categories.index')}}">Categories</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{route('products.index')}}">Products</a></li>
                    <li class="nav-item"> <a class="btn  badge-success" href="{{route('main')}}">Back To Shop</a></li>

                </ul>
            </div>

            <div class="row flex-lg-nowrap">
                <div class="col mb-3">
                    <div class="e-panel card">
                        @yield('content1')
{{--                        {{$content1}}--}}
                    </div>
                </div>
                    @yield('content2')
{{--                {{$content2}}--}}
            </div>

            <!-- User Form Modal -->
            @yield('content3')
{{--            {{$content3}}--}}
        </div>
    </div>
</div>


<style type="text/css">
    body{
        margin-top:20px;
        background:#f8f8f8
    }
</style>

<script type="text/javascript">

</script>
</body>
</html>
