@extends('layout.index')
@section('content')

<div class="content">
{{--     <div class="card-header card-header-icon" data-background-color="rose">
        <a href="{{route('consommations.create')}}" class="btn btn-success"  > <i class="fa fa-plus" ></i></a>
      </div>  --}}
      
  <div class="row">
    <div class="col-12">
        <div class="col-lg-12 col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title"> LISTE DES CONSOMMATIONS: {{App\Consommation::count()}}</h4>
{{--                 <p class="card-category"> Clients
                  <a href="{{route('clients.create')}}"><div class="btn btn-warning">Nouveau Client <i class="material-icons">add</i></div></a> 
              </p> --}}
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="table-consommations">
                    <thead class=" text-primary">
                      <tr>
                        <th>
                            ID
                          </th>
                          <th>
                            Valeur
                          </th>
                          <th>
                            Date
                          </th>
                          <th>
                              Compteur
                            </th>
                          <th>
                            Agent
                          </th>
                          <th>
                            Date Limite Facture
                          </th> 
                          
                        <th class="text-center">
                            ACTIONS
                        </th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript">
$(document).ready(function () {
    $('#table-consommations').DataTable( { 
      "processing": true,
      "serverSide": true,
      "ajax": "{{route('consommations.list')}}",
      columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'valeur',
                        name: 'valeur'
                    },
                    {
                        data: 'date',
                        name: 'date'
                    },
                    {
                        data: 'compteur.numero_serie',
                        name: 'compteur.numero_serie'
                    },
                  
                    {
                        data: 'compteur.abonnement.client.user.firstname',
                        name: 'client.user.firstname'
                    },
                    {
                        data: 'facture.date_limite',
                        name: 'facture.date_limite'
                    },  
                    {
                        data: null,
                        orderable: false,
                        searchable: false
                    }

          ],
          "columnDefs": [
                  {
                  "data": null,
                  "render": function (data, type, row) {
                  url_e =  "{!! route('consommations.edit',':id')!!}".replace(':id', data.id);
                  url_d =  "{!! route('consommations.destroy',':id')!!}".replace(':id', data.id);
                  return '<a href='+url_e+'  class=" btn btn-primary " ><i class="fa fa-edit"></i></a>'+
                  '<a class="btn btn-danger" href='+url_d+'><i class="fa fa-trash"></i></a>';
                  },
                  "targets": 6
                  },
              // {
              //     "data": null,
              //     "render": function (data, type, row) {
              //         url =  "{!! route('clients.edit',':id')!!}".replace(':id', data.id);
              //         return check_status(data,url);
              //     },
              //     "targets": 1
              // }
          ],
        
    });
});
</script>

    
@endpush