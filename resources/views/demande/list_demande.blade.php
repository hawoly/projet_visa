<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>sama Visa</title>
<style>
header.masthead1 {
    text-align: center;
    color: white;
    background-image: url("../img/visa1.jpg");
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-position: center center;
    background-size: cover;
    height: 100px;
  }
  .c{
    position: absolute;
  right: 0px;
  width: 300px;
  list-style-type: none;
  padding: 10px;   
  }
  .t{
    font-size:20px;
    background-color:#000;
    height:100px;
  }
</style>
  <link href="css/agency.min.css" rel="stylesheet"> 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
 <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
  <script src=" https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
 <script src=" https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>           
 </head>
 <body id="page-top">
  <!-- Navigation -->  <header class="masthead1">
  <nav class="navbar navbar-expand-lg navbar-dark " id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">visa</a>
      <div class="collapse navbar-collapse " id="navbarResponsive">           
            <ul class="navbar-nav text-uppercase ml-auto c">
            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </ul>
      </div>
    </div>
  </nav>  
  </header>

<br>
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">liste demande</a></li>
  <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">liste des RV</a></li>
  <li role="presentation"><a href="#setting" aria-controls="setting" role="tab" data-toggle="tab">liste des recours</a></li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="home">
  <div class="container">
                       <br><br>
             <table class="table table-bordered" width="100%" id="laravel_datatable">
                <thead>
                   <tr>
                       <th>id</th>
                       <th>nom</th>
                      <th>prenom</th>
                      <th>date naissance</th>
                      <th>lieu naissance</th>
                      <th>adresse</th>
                      <th>tel</th>
                      <th>motif demande</th>
                      <th>destination</th>
                      <th>typelogement</th>
                      <th>date prevu depart</th>
                      <th>lieu residence</th>
                      <th>duree sejour</th>
                      <th> photo personnel</th>
                      <th> photo personnel</th>
                      <th> photo personnel</th>                
                      <th>action</th>     
                   </tr> </thead></table> </div> 
                   
<div id="formModal2" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
  <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ajouter motif du rejet</h4>
        </div>
        <div class="modal-body">
         <span id="form_result2"></span>
         <form method="post" id="sample_form2" class="form-horizontal">
          @csrf
          <div class="form-group">
            <label class="control-label col-md-4" >MOTIF: </label>
            <div class="col-md-8">
             <input type="text" name="motif_reponse" id="motif_reponse" class="form-control" />
            </div>
           </div>
                <br />
                <div class="form-group" align="center">
                 <input type="hidden" name="action2" id="action2" value="Add" />
                 <input type="hidden" name="hidden_id2" id="hidden_id2"  />
                 <input type="submit" name="action_button2" id="action_button2" class="btn btn-warning" value="Add" />
                </div>
         </form>
        </div>
     </div>
    </div>
</div>
  </div>
  <!-- -->
  <div role="tabpanel" class="tab-pane" id="settings">  <br>
  <table class="table">
  <thead>
    <tr><th  scope="col"><strong>NOM</strong></th>
        <th  scope="col"><strong> DATE RV</strong></th>
        <th  scope="col"><strong>HEURE RV</strong></th>
        <th  scope="col"><strong>ACTION</strong></th></tr>
</thead>
<tbody>
@if(!empty($rv))
@foreach ($rv as $r)
<tr> <td>{{$r->User->name??''}}</td>
            <td>{{$r->daterv}}</td>
            <td>{{$r->heurerv}}</td>
          <td><a href="{{route('confirm_rv',['id'=>$r->id])}}" class="btn btn-primary btn-sm">confirmer</a></td> </tr>
 @endforeach
 @endif    
        </tbody>
</table> <br><br><br><br><br><br> 
  </div>
  <div role="tabpanel" class="tab-pane" id="setting">  <br>
  <table class="table">
  <thead>
    <tr><th  scope="col"><strong>NOM</strong></th>
        <th  scope="col"><strong> DESCRIPTION</strong></th>
        <th  scope="col"><strong>PHOTO PERSONNEL</strong></th>
        <th  scope="col"><strong>ACTION</strong></th></tr>
</thead>
<tbody>
@if(!empty($recou))
@foreach($recou as $r)
     <tr> <td>{{$r->User->name??''}}</td>
            <td>{{$r->description}}</td>
            <td><img src="{{$r->photo_personnel ? asset($r->photo_personnel) : asset('uploads/personnel/default.png')}}" 
           alt="{{$r->name}}" width="50"></td>
           <td><a href="{{route('recour',['id'=>$r->User_id])}}" class="btn btn-primary btn-sm">voir</a></td> </tr>
 @endforeach
 @endif    
        </tbody>
</table> <br><br><br><br><br><br> 
  </div>
                 
 
     
</div>
<br><br><br><br><br>

<footer class="footer t">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4 ">
          <span class="copyright text-warning">Copyright &copy; Your Website 2019</span>
        </div>
       
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

       <br><br>
 
       <script >
    $(document).ready( function () {
     //var myTable=
     $('#laravel_datatable').DataTable({
     
        processing: true,
            serverSide: true,
            ajax: "{{ url('demande-list') }}",
            columns: [
                     {"visible": false, data: 'id', name: 'id' },
                     { data: 'name', name: 'demandeur_id' ,searchable: false},
                     { data: 'prenom', name: 'prenom' },
                     { data: 'date_naissance', name: 'date_naissance' },
                     { data: 'lieu_naissance', name: 'lieu_naissance' },
                     { data: 'adresse', name: 'adresse' },
                     { data: 'tel', name: 'tel' },      
                     { data: 'motif_demande', name: 'motif_demande' },
                     { data: 'nom_pays', name: 'destination_id'},
                     { "visible": false ,data: 'typelogement', name: 'logement_id', searchable: false },                 
                     { "visible": false , data: 'date_prevu_depart', name: 'date_prevu_depart' },
                     { "visible": false , data: 'lieu_residence', name: 'lieu_residence' },
                     {"visible": false , data: 'duree_sejour', name: 'duree_sejour' },
                     {"visible": false , data: 'photo_personnel', name: 'photo_personnel',
                       "render": function(data, type, row) {
                          return '<img src="'+data+'" width="150" height="50" align="center"/><br><br>';
                    } },
                    { "visible": false ,data: 'photo_passport', name: 'photo_passport',
                       "render": function(data, type, row) {
                          return '<img src="'+data+'" width="150" height="50" align="center"/><br><br>';
                    } },
                    {"visible": false , data: 'releve_banvaire', name: 'releve_banvaire',
                       "render": function(data, type, row) {
                          return '<img src="'+data+'"  width="150" height="50" align="center"/><br><br>';
                    } },
                   
                    { data: 'action', name: 'action' },
                   
                     ],
         responsive: {
             details: {
                 display: $.fn.dataTable.Responsive.display.modal( {
                     header: function ( row ) {
                         return 'INFORMATION DETAILLEE DE: '+row.data().prenom;
                     }
                 } ),
                 renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                     tableClass: 'table'
                 } )
             }
         }    
     } );
 } );
 
 var demande_id;
 $(document).on('click', '.rejet', function(){
  $('#formModal2').modal('show');
  $('#sample_form2').on('submit', function(event){
 event.preventDefault();
 demande_idd = $(this).attr('id');
 var action_ur = '';
 if($('#action2').val() == 'Add')
 {
  action_ur = "{{ url('demande/reponse')}}";
 }
 $.ajax({
  url: action_ur,
  method:"POST",
  data:$(this).serialize(),
  dataType:"json",
  success:function(data)
  {
   var html = '';
   if(data.errors)
   {
    html = '<div class="alert alert-danger">';
    for(var count = 0; count < data.errors.length; count++)
    {
     html += '<p>' + data.errors[count] + '</p>';
    }
    html += '</div>';
   }
   if(data.success)
   {
    html = '<div class="alert alert-success">' + data.success + '</div>';
    $('#sample_form2')[0].reset();
  
   }
   $('#form_result2').html(html);
 
  }
 });
});
demande_id = $(this).attr('id');
  $.ajax({
  url:"demande/rejet/"+demande_id,
   success:function(data)
   { 
     $('#laravel_datatable').DataTable().ajax.reload();
   }});
  
  
 });

 
 $(document).on('click', '.accept', function(){
  demande_id = $(this).attr('id');
  $.ajax({
   url:"demande/accept/"+demande_id,
   success:function(data)
   {
     $('#laravel_datatable').DataTable().ajax.reload();
     alert('visa accepte');
   }});
 });



   </script>
    
  
 
  </body>
  </html>