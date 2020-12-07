<table class="table table-striped table-bordered table-responsive" id="table1" >
                            <thead>
                            <tr>
                                <th>Ref</th>
                                <th>Name</th>
                                <th>Num </th>
                                <th>Type</th>
                                <th > Date </th>
                                <th > action </th>
                            </tr>
                            </thead>
                            <tbody>
                              @foreach($client->dossiers as $dossier)
                                  <tr>
                                    <td>{{$dossier->ref}}</td>
                                    <td>{{$dossier->name}}</td>
                                    <td>{{$dossier->num}}</td>
                                    <td>{{$dossier->type}}</td>
                                   
                                    <td>{{$dossier->date}}</td>
                                    <td>
                                      <a href="{{route('images.index',$dossier)}}">
                                         <i class="material-icons">fullscreen</i> 
                                      </a>
                                           
                                    </td>
                                  </tr> 

                              @endforeach
                            </tbody>
                        </table>
                        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.js
"></script>