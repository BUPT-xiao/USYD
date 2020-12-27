@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                        <div class="col-auto" style="color: Dodgerblue;">
                            <div id="nav" class="second_nav" class="list-group">
                                <a id="infoBtn" class="list-group-item list-group-item-action" href="/home/general"><i class="fas fa-info"></i>&nbsp;General</a>
                                <a id="infoBtn" class="list-group-item list-group-item-action" href="/home"><i class="fas fa-info"></i>&nbsp;INFO5990</a>
                                <a id="infoBtn" class="list-group-item list-group-item-action" href="/home"><i class="fas fa-info"></i>&nbsp;COMP5318</a>
                                <a id="infoBtn" class="list-group-item list-group-item-action" href="/home"><i class="fas fa-info"></i>&nbsp;COPM5349</a>
                                <a id="infoBtn" class="list-group-item list-group-item-action" href="/home"><i class="fas fa-info"></i>&nbsp;COMP9007</a>
                                <a id="infoBtn" class="list-group-item list-group-item-action" href="/home"><i class="fas fa-info"></i>&nbsp;COMP9120</a>
                                <a id="infoBtn" class="list-group-item list-group-item-action" href="/home"><i class="fas fa-info"></i>&nbsp;INFO5992</a>
                                <a id="infoBtn" class="list-group-item list-group-item-action" href="/home"><i class="fas fa-info"></i>&nbsp;INFO6007</a>
                            </div>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>


@endsection
