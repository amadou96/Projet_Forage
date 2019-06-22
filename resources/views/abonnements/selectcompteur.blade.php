@extends('layout.index')
@section('content')
    
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">SENFORAGE</h4>
                  <p class="card-category"> Selection du compteur pour le client
                      {{-- <a href="{{route('clients.create')}}"><div class="btn btn-warning">Nouveau Client <i class="material-icons">add</i></div></a>  --}}
                  </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="table-compteurs">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          NUMERO SERIE
                        </th>
                        <th>
                            CREATION
                        </th>
                        <th>
                          Selectionner
                          </th>
                      </thead>
                      <tbody>
                          
                      </tbody>
                     
                    </table>
                
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              
            </div>
          </div>
        </div>
      </div>
      @endsection

      @push('scripts')
      <script type="text/javascript">
      $(document).ready(function () {
          $('#table-compteurs').DataTable( { 
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('compteurs.list')}}",
            columns: [
                    { data: 'id', name: 'id' },
                    { data: 'numero_serie', name: 'numero_serie' },
                    { data: 'created_at', name: 'created_at' },
                    { data: null ,orderable: false, searchable: false}

                ],
                "columnDefs": [
                        {
                        "data": null,
                        "render": function (data, type, row) {
                        url_e =  "{!! route('abonnements.create',['compteur'=>'id-cptr','client'=>'idc'])!!}".replace('id-cptr', data.id).replace('idc',{{$client->id}});
                        return '<a href='+url_e+'  class=" btn btn-primary " ><i class="fa fa-check" aria-hidden="true"></i></a>';                        },
                        "targets": 3
                        },

                ],
              
          });
      });
      </script>

          
      @endpush