@extends('layouts.prencipal')

@section('contenu')
@if(Session::has('success'))
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
 swal({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success",
  button: "OK",
});
  
</script>

@endif
  <!-- Advanced Form Example With Validation -->
  <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Creation Dossier Pour : {{$client->name}}</h2>
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
                            <form id="wizard_with_validation" action="{{route('dossier.store')}}" method="POST"enctype="multipart/form-data">
                            {{ csrf_field() }}
                            
                            <h3>Dossier Information</h3>
                                <input type="hidden" class="form-control" name="client_id" value="{{$client->id}}" >

                                <fieldset>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="ref" required>
                                            <label class="form-label">Reference*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name" required>
                                            <label class="form-label">Name*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="num" required>
                                            <label class="form-label">Num*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="contre" required>
                                            <label class="form-label">Contre*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="type" required>
                                            <label class="form-label">Type*</label>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="date" class="form-control" name="date" required>
                                            <label class="form-label">Date*</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <textarea name="comment" cols="30" rows="3" class="form-control no-resize" required></textarea>
                                            <label class="form-label">Comment*</label>
                                        </div>
                                    </div>
                                    
                                    
                                </fieldset>

                                <h3>Dossier Files</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="file" name="file[]" class="form-control"  multiple="multiple" required>
                                            <label class="form-label">Files*</label>
                                        </div>
                                    </div>
                                   
                                </fieldset>

                                <h3>Dossier Facture</h3>
                                <fieldset>
                                <div class="form-group form-float">
                                        <div class="form-line">
                                            <input min="10" type="number" name="price" class="form-control" required>
                                            <label class="form-label">Price*</label>
                                        </div>
                                        <div class="help-info">The warning step will show up if age is less than 18</div>
                                    </div>
                                    <button type="submit" class="btn btn-block btn-lg btn-success waves-effect">SUCCESS</button>

                                </fieldset>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Form Example With Validation -->


@stop