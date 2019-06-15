@extends('layout.index')
@section('content')

<div class="content">
    <div class="card-header card-header-icon" data-background-color="rose">
        <a href="{{route('clients.create')}}" class="btn btn-success"  > <i class="fa fa-plus" ></i></a>
      </div> 
      
  <div class="row">
    <div class="col-12">
        <div class="col-lg-12 col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title"> LISTE DES CLIENTS</h4>
{{--                 <p class="card-category"> Clients
                  <a href="{{route('clients.create')}}"><div class="btn btn-warning">Nouveau Client <i class="material-icons">add</i></div></a> 
              </p> --}}
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="table-clients">
                    <thead class=" text-primary">
                      <tr>
                        <th>
                          ID
                        </th>
                        <th>
                          NOM
                        </th>
                        <th>
                          PRENOM
                        </th>
                        <th class="text-center">
                          EMAIL
                        </th>
                        <th class="text-center">
                            ACTIONS
                        </th>
                      </tr>
                    </thead>
{{--                     <tbody>
                      <tr>
                        <td>
                          Dakota Rice
                        </td>
                        <td>
                          Niger
                        </td>
                        <td>
                          Oud-Turnhout
                        </td>
                        <td>
                            <a class="btn btn-success btn-mod-user" > <i class="fa fa-edit"></i></a>
                            <a  class="btn btn-primary"><i class="fa fa-trash"></i></a>
                          </td>
                        <td class="text-center">
                          $36,738
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Minerva Hooper
                        </td>
                        <td>
                          Curaçao
                        </td>
                        <td>
                          Sinaai-Waas
                        </td>
                        <td>
                            <a class="btn btn-success btn-mod-user" > <i class="fa fa-edit"></i></a>
                            <a  class="btn btn-primary"><i class="fa fa-trash"></i></a>
                              </td>
                        <td class="text-center">
                          $23,789
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Sage Rodriguez
                        </td>
                        <td>
                          Netherlands
                        </td>
                        <td>
                          Baileux
                        </td>
                        <td>
                            <a class="btn btn-success btn-mod-user" > <i class="fa fa-edit"></i></a>
                            <a  class="btn btn-primary"><i class="fa fa-trash"></i></a>
                              </td>
                        <td class="text-center">
                          $56,142
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Philip Chaney
                        </td>
                        <td>
                          Korea, South
                        </td>
                        <td>
                          Overland Park
                        </td>
                        <td>
                            <a class="btn btn-success btn-mod-user" > <i class="fa fa-edit"></i></a>
                            <a  class="btn btn-primary"><i class="fa fa-trash"></i></a>
                              </td>
                        <td class="text-center">
                          $38,735
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Doris Greene
                        </td>
                        <td>
                          Malawi
                        </td>
                        <td>
                          Feldkirchen in Kärnten
                        </td>
                        <td>
                            <a class="btn btn-success btn-mod-user" > <i class="fa fa-edit"></i></a>
                            <a  class="btn btn-primary"><i class="fa fa-trash"></i></a>
                              </td>
                        <td class="text-center">
                          $63,542
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Mason Porter
                        </td>
                        <td>
                          Chile
                        </td>
                        <td>
                          Gloucester
                        </td>
                        <td>
                            <a class="btn btn-success btn-mod-user" > <i class="fa fa-edit"></i></a>
                            <a  class="btn btn-primary"><i class="fa fa-trash"></i></a>
                        </td>
                        <td class="text-center">
                          $78,615
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Jon Porter
                        </td>
                        <td>
                          Portugal
                        </td>
                        <td>
                          Gloucester
                        </td>
                        <td>
                            <a class="btn btn-success btn-mod-user" > <i class="fa fa-edit"></i></a>
                            <a  class="btn btn-primary"><i class="fa fa-trash"></i></a>
                            </td>
                        <td class="text-center">
                          $98,615
                        </td>
                      </tr>
                    </tbody> --}}
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
    $('#table-clients').DataTable( { 
      "processing": true,
      "serverSide": true,
      "ajax": "{{route('clients.list')}}",
      columns: [
              { data: 'id', name: 'id' },
              { data: 'user.name', name: 'user.name' },
              { data: 'user.firstname', name: 'user.firstname' },
              { data: 'user.email', name: 'user.email' },
              { data: null ,orderable: false, searchable: false}

          ],
          "columnDefs": [
                  {
                  "data": null,
                  "render": function (data, type, row) {
                  url_e =  "{!! route('clients.edit',':id')!!}".replace(':id', data.id);
                  url_d =  "{!! route('clients.destroy',':id')!!}".replace(':id', data.id);
                  return '<a href='+url_e+'  class=" btn btn-primary " ><i class="fa fa-edit"></i></a>'+
                  '<a class="btn btn-danger" href='+url_d+'><i class="fa fa-trash"></i></a>';
                  },
                  "targets": 4
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