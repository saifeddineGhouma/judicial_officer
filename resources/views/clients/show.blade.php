@extends('layouts.prencipal')

@section('contenu')
<div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-3">
                    <div class="card profile-card">
                        <div class="profile-header"></div>
                        <div class="profile-body">
                           
                            <div class="content-area">
                                <h3>{{-- $client->name --}}</h3>
                                <p>{{$client->domaine}}</p>
                                <p>{{$client->adress}}</p>
                            </div>
                        </div>
                        <div class="profile-footer">
                            <ul>
                                <li>
                                    <span>Email</span>
                                    <span>{{$client->email}}</span>
                                </li>
                                <li>
                                    <span>Tel</span>
                                    <span>{{$client->tel}}</span>
                                </li>
                                <li>
                                    <span>dossier</span>
                                    <span>{{$client->dossiers->count()}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                   
                </div>
                <div class="col-xs-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">mes dossiers</a></li>
                                                         </ul>

                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="home">
                                       <div class="row">
                                            @include('clients.client_dossier')
                                       </div>
                                       
                                       
                                    </div>
                                  
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@stop