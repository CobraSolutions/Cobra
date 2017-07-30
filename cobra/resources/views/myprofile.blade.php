@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Mijn profiel</div>
              <div class="panel-body">

            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>
                   <div class=" col-md-9 col-lg-9 ">
                     <table class="table table-user-information">
                       <tbody>
                         <tr>
                           <td>Gebruikersnaam:</td>
                           <td>Test</td>
                         </tr>
                         <tr>
                           <td>Naam</td>
                           <td>{{Auth::user()->name}}</td>
                         </tr>
                         <tr>
                           <td>Voornaam</td>
                           <td>leeg</td>
                         </tr>
                         <tr>
                           <td>Email</td>
                           <td>{{Auth::user()->email}}</td>
                         </tr>
                         <tr>
                           <td>Geslacht</td>
                           <td>Vrouwelijk</td>
                         </tr>
                         <tr>
                            <td>Telefoonnummer</td>
                            <td>0488490979</td>
                         </tr>
                       </tbody>
                     </table>

                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
