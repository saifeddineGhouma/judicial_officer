@extends('layouts.prencipal')

@section('contenu')
<div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                GALLERY
                                <small>All pictures taken from <a href="https://unsplash.com/" target="_blank">unsplash.com</a></small>
                            </h2>
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
                            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="{{asset('prencipal/images/image-gallery/1.jpg')}}" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="{{asset('prencipal/images/image-gallery/thumb/thumb-1.jpg')}}">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="{{asset('prencipal/images/image-gallery/2.jpg')}}" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="{{asset('prencipal/images/image-gallery/thumb/thumb-2.jpg')}}">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="{{asset('prencipal/images/image-gallery/3.jpg')}}" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="{{asset('prencipal/images/image-gallery/thumb/thumb-3.jpg')}}">
                                    </a>
                                </div>
                               
                               
                               
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@stop