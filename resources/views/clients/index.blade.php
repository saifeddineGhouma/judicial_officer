@extends('layouts.prencipal')

@section('contenu')
<div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                List SOCIETE
                                
                            </h2>
                            <div class="text-right" >
                                <a href="{{route('clients.create')}}">
                                <button class="btn btn-success">
                                    add new societe
                                </button>
                                </a>
                            </div>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                        <div id="childList"></div>
                        </div>
                    </div>
                </div>
            </div>
            @include('clients.js.index')

@stop