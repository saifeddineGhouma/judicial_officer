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

   <!-- Basic Validation -->
   <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Creatio new Client</h2>
                            <div class="text-right" >
                                <a href="{{route('clients.index')}}">
                                <button class="btn btn-success">
                                    list societe
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
                            <form id="form_validation" action="{{route('clients.store')}}" method="POST">
                            {{ csrf_field() }}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" required>
                                        <label class="form-label">Name</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="adress" required>
                                        <label class="form-label">Adress</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10">
                                    <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="emails[]" required>
                                        <label class="form-label">Email</label>
                                    </div>
                                    
                                </div>
                                    </div>
                                    <div class="col-md-2">
                                    <button  type="button" class="btn btn-success" onclick="addFeild()">
                                             <div class="demo-google-material-icon"> <i class="material-icons">add</i>  </div>
                                    </button>
                                    </div>
                                </div>
                               
                                <!--------->
                                <div id="newRow"></div>

                                
                                <!----------------->
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="tel" class="form-control" name="tel" required>
                                        <label class="form-label">Telephone</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="tel" class="form-control" name="domaine" required>
                                        <label class="form-label">Domaine</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="description" cols="30" rows="5" class="form-control no-resize" required>comment </textarea>
                                        <label class="form-label">Description</label>
                                    </div>
                                </div>
                               
                                
                                
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>

                          

                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->

@stop
<script src="{{asset('prencipal/plugins/jquery/jquery.min.js')}}"></script>

<script type="text/javascript">
    // add row
  
  function addFeild()
  {
  /*  var html = '';
        html += '<div id="inputFormRow">';
        html += '<div class="form-group form-float">';
        html += '<div class="form-line">';

        html += '<input type="text" name="emails[]" class="form-control" autocomplete="off">';
        html +='<label class="form-label">Email</label>'
        
        html += '<div class="col-md-12">';
        html += '<button id="removeRow" type="button" class="btn btn-danger">-</button>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        html += '</div>';*/
        var html = '';

        html += '<div id="inputFormRow">';
        html += '<div class=" mb-3 form-line" >';
        html += '<input type="text" name="emails[]" class="form-control m-input" placeholder="Enter other email" autocomplete="off">';
        html += '<div class="input-group-append">';
        html += '<button id="removeRow" type="button" class="btn btn-danger">-</button>';
        html += '</div>';
        html += '</div>';

        $('#newRow').append(html);
  }
    

    // remove row
    $(document).on('click', '#removeRow', function () {
        $(this).closest('#inputFormRow').remove();
    });
</script>