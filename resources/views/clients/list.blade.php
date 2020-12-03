<table class="table table-striped table-bordered" id="table1" >
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Adress </th>
                                <th>Tel</th>
                                <th>Domaine</th>
                                <th > Actions </th>
                            </tr>
                            </thead>
                            <tbody>
                              @foreach($clients as $client)
                                  <tr>
                                    <td>{{$client->name}}</td>
                                    <td>{{$client->email}}</td>
                                    <td>{{$client->adress}}</td>
                                    <td>{{$client->tel}}</td>
                                    <td>{{$client->domaine}}</td>
                                    <td></td>
                                  </tr> 

                              @endforeach
                            </tbody>
                        </table>

