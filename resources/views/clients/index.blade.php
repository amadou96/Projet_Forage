@extends('layout.index')
@section('content')

<div class="content">
    <div class="card-header card-header-icon" data-background-color="rose">
        <a href="./cli" class="btn btn-success"  > <i class="fa fa-plus" ></i></a>
      </div>
      
  <div class="row">
    <div class="col-12">
        <div class="col-lg-12 col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title"> LISTE DES CLIENTS</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th>
                          Name
                        </th>
                        <th>
                          Country
                        </th>
                        <th>
                          City
                        </th>
                        <th class="text-center">
                            Actions
                        </th>
                        <th class="text-center">
                          Salary
                        </th>
                      </tr>
                    </thead>
                    <tbody>
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
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
    </div>
  </div>
</div>
@endsection