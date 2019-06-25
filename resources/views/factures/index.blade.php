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
                <h4 class="card-title"> LISTE DES FACTURES: {{App\Facture::count()}}</h4>
{{--                 <p class="card-category"> Clients
                  <a href="{{route('clients.create')}}"><div class="btn btn-warning">Nouveau Client <i class="material-icons">add</i></div></a> 
              </p> --}}
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="table-factures">
                    <thead class=" text-primary">
                      <tr>
                        <th>
                            ID
                          </th>
                          <th>
                            Montant
                          </th>
                          <th>
                            Date LIMITE
                          </th>
                          <th>
                            NOM CLIENT
                          </th>
                          <th>
                            PRENOM CLIENT 
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
    $('#table-factures').DataTable( { 
      "processing": true,
      "serverSide": true,
      "ajax": "{{route('factures.list')}}",
      columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'montant',
                        name: 'montant'
                    },
                    {
                        data: 'date_limite',
                        name: 'date_limite'
                    },
                    {
                        data: 'user.name',
                        name: 'user.name'
                    },
                    {
                        data: 'user.firstname',
                        name: 'user.firstname'
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
                  url_e =  "{!! route('factures.edit',':id')!!}".replace(':id', data.id);
                  url_d =  "{!! route('factures.destroy',':id')!!}".replace(':id', data.id);
                  return '<a href='+url_e+'  class=" btn btn-primary " ><i class="fa fa-edit"></i></a>'+
                  '<a class="btn btn-danger" href='+url_d+'><i class="fa fa-trash"></i></a>';
                  },
                  "targets": 5
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