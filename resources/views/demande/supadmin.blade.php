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
 
  <li role="presentation"  class="active"><a href="#ambassades" aria-controls="ambassades" role="tab" data-toggle="tab">liste des ambassades</a></li>
  <li role="presentation"><a href="#admin" aria-controls="admin" role="tab" data-toggle="tab">liste des admins</a></li>
  <li role="presentation"><a href="#pays" aria-controls="pays" role="tab" data-toggle="tab">liste Pays</a></li>
  <li role="presentation"><a href="#logement" aria-controls="logement" role="tab" data-toggle="tab">liste Logement</a></li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="ambassades">
  <div class="container">    
     <br /> <br />
     <div align="right">
      <button type="button" name="create_record3" id="create_record3" class="btn btn-success btn-sm">une autre ambassade</button>
     </div>
     <br />
   <div class="table-responsive">
    <table id="user_table3" class="table table-bordered table-striped" width="100%">
     <thead>
      <tr>
       <th width="50%">ambassade</th>        
      <th width="50%">Action</th>
      </tr>
     </thead>
    </table>
   </div>
   <br />
   <br />
  </div>

<div id="formModal3" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ajouter une autre ambassade</h4>
        </div>
        <div class="modal-body">
         <span id="form_result3"></span>
         <form method="post" id="sample_form3" class="form-horizontal">
          @csrf
          <div class="form-group">
            <label class="control-label col-md-4" >Ambassade: </label>
            <div class="col-md-8">
             <input type="text" name="ambassade" id="ambassade" class="form-control" />
            </div>
           </div>
         
        
                <br />
                <div class="form-group" align="center">
                 <input type="hidden" name="action3" id="action3" value="Add" />
                 <input type="hidden" name="hidden_id3" id="hidden_id3" />
                 <input type="submit" name="action_button3" id="action_button3" class="btn btn-warning" value="Add" />
                </div>
         </form>
        </div>
     </div>
    </div>
</div>

<div id="confirmModal3" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">Confirmation</h2>
            </div>
            <div class="modal-body">
                <h4 align="center" style="margin:0;">etes vous sur de supprimer?</h4>
            </div>
            <div class="modal-footer">
             <button type="button" name="ok_button3" id="ok_button3" class="btn btn-danger">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

  </div>
  <div role="tabpanel" class="tab-pane" id="admin">
  <br><br>
  <div style="width:50%; background-color:lightblue; float: right; height:370px;">
  <table class="table">
  <thead>
    <tr>
        <th  scope="col"><strong>NAME</strong></th>
        <th  scope="col"><strong> EMAIL</strong></th>
        <th  scope="col"><strong>AMBASSADE</strong></th>
    </tr>
</thead>
<tbody>
@foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->ambassade->ambassade??''}}</td>
           
          
        </tr>
        @endforeach
        </tbody>
</table>
  </div>
  <div style="width:45%; background-color:lightblue; float: left;">
  <br><br>
    <div class="row justify-content-center" >
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('Register') }}</div>
                 
                <div class="card-body">
                    <form method="POST" action="/admin/traitement">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <select name="ambassade_id" id="ambassade_id" class="form-control mb-4" >
      <option value="" hidden >choisir l'ambassade</option>
     @foreach($ambassade as $key => $value)
      <option value="{{$key}}">{{$value}}</option>
     @endforeach
        </select>
<br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
</div>
<div role="tabpanel" class="tab-pane" id="pays">
  <div class="container">    
     <br><br>
     <div align="right">
      <button type="button" name="create_record" id="create_record" class="btn btn-success btn-sm">un aute pays</button>
     </div>
     <br />
   
    <table id="user_table" class="table table-bordered" width="100%">
     <thead>
      <tr>
       <th width="50%">PAYS</th>
       <th width="50%">Action</th>
      </tr>
     </thead></table></div>
<div id="formModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ajouter un autre type</h4>
        </div>
        <div class="modal-body">
         <span id="form_result"></span>
         <form method="post" id="sample_form" class="form-horizontal">
          @csrf
          <div class="form-group">
            <label class="control-label col-md-4" >Nom Pays: </label>
            <div class="col-md-8">
             <input type="text" name="nom_pays" id="nom_pays" class="form-control" />
            </div>
           </div>
           <select name="ambassade_id" id="ambassade_id" class="form-control mb-4" >
      <option value="" hidden >choisir l'ambassade</option>
     @foreach($ambassade as $key => $value)
      <option value="{{$key}}">{{$value}}</option>
     @endforeach
        </select>
                <br />
                <div class="form-group" align="center">
                 <input type="hidden" name="action" id="action" value="Add" />
                 <input type="hidden" name="hidden_id" id="hidden_id" />
                 <input type="submit" name="action_button" id="action_button" class="btn btn-warning" value="Add" />
                </div>
         </form>
        </div>
     </div>
    </div>
</div>

<div id="confirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">Confirmation</h2>
            </div>
            <div class="modal-body">
                <h4 align="center" style="margin:0;">etes vous sur de supprimer?</h4>
            </div>
            <div class="modal-footer">
             <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>


  
  <br><br> <br><br>
  </div>
  <div role="tabpanel" class="tab-pane" id="logement">
  <div class="container">    
     <br />
 
     <br />
     <div align="right">
      <button type="button" name="create_record1" id="create_record1" class="btn btn-success btn-sm">un autre type de logement</button>
     </div>
     <br />
   <div class="table-responsive">
    <table id="user_table1" class="table table-bordered table-striped" width="100%">
     <thead>
      <tr>
       <th width="50%">typelogement</th>
                
                <th width="50%">Action</th>
      </tr>
     </thead>
    </table>
   </div>
   <br />
   <br />
  </div>
  

<div id="formModal1" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ajouter un autre type</h4>
        </div>
        <div class="modal-body">
         <span id="form_result1"></span>
         <form method="post" id="sample_form1" class="form-horizontal">
          @csrf
          <div class="form-group">
            <label class="control-label col-md-4" >Type Logement: </label>
            <div class="col-md-8">
             <input type="text" name="typelogement" id="typelogement" class="form-control" />
            </div>
           </div>
         
        
                <br />
                <div class="form-group" align="center">
                 <input type="hidden" name="action1" id="action1" value="Add" />
                 <input type="hidden" name="hidden_id1" id="hidden_id1" />
                 <input type="submit" name="action_button1" id="action_button1" class="btn btn-warning" value="Add" />
                </div>
         </form>
        </div>
     </div>
    </div>
</div>

<div id="confirmModal1" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">Confirmation</h2>
            </div>
            <div class="modal-body">
                <h4 align="center" style="margin:0;">etes vous sur de supprimer?</h4>
            </div>
            <div class="modal-footer">
             <button type="button" name="ok_button1" id="ok_button1" class="btn btn-danger">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

</div>

  </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
 
//ambassade
$(document).ready(function(){

$('#user_table3').DataTable({
 processing: true,
 serverSide: true,
 ajax: {
  url: "{{ route('ambassade.index') }}",
 },
 columns: [
  {
   data: 'ambassade',
   name: 'ambassade'
  },
  {
   data: 'action',
   name: 'action',
   orderable: false
  }
 ]
});

$('#create_record3').click(function(){
 $('.modal-title').text('ajouter une ambassade');
 $('#action_button3').val('Ajouter');
 $('#action3').val('Add');
 $('#form_result3').html('');
 $('#formModal3').modal('show');
});
$('#sample_form3').on('submit', function(event){
 event.preventDefault();
 var action_url = '';
 if($('#action3').val() == 'Add')
 {
  action_url = "{{ route('ambassade.store') }}";
 }
 if($('#action3').val() == 'Edit')
 {
  action_url = "{{ route('ambassade.update') }}";
 }

 $.ajax({
  url: action_url,
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
    $('#sample_form3')[0].reset();
    $('#user_table3').DataTable().ajax.reload();
   }
   $('#form_result3').html(html);
  }
 });
});

$(document).on('click', '.edit2', function(){
 var id = $(this).attr('id');
 $('#form_result3').html('');
 $.ajax({
  url :"/ambassade/"+id+"/edit",
  dataType:"json",
  success:function(data)
  {
   $('#ambassade').val(data.result.ambassade);
   $('#hidden_id3').val(id);
   $('.modal-title').text('Modifier ambassade');
   $('#action_button3').val('Edit');
   $('#action3').val('Edit');
   $('#formModal3').modal('show');
  }
 })
});

var user_id;

$(document).on('click', '.delete2', function(){
 user_id = $(this).attr('id');
 $('#confirmModal3').modal('show');
});

$('#ok_button3').click(function(){
 $.ajax({
  url:"ambassade/destroy/"+user_id,
  success:function(data)
  {
   setTimeout(function(){
    $('#confirmModal3').modal('hide');
    $('#user_table3').DataTable().ajax.reload();
   });
  }
 })
});

});
//pays


$(document).ready(function(){

$('#user_table').DataTable({
 processing: true,
 serverSide: true,
 ajax: {
  url: "{{ route('destination.index') }}",
 },
 columns: [
  {
   data: 'nom_pays',
   name: 'nom_pays'
  },
  {
   data: 'action',
   name: 'action',
   orderable: false
  }
 ]
});

$('#create_record').click(function(){
 $('.modal-title').text('ajouter un pays');
 $('#action_button').val('Ajouter');
 $('#action').val('Add');
 $('#form_result').html('');
 $('#formModal').modal('show');
});
$('#sample_form').on('submit', function(event){
 event.preventDefault();
 var action_url = '';
 if($('#action').val() == 'Add')
 {
  action_url = "{{ route('destination.store') }}";
 }
 if($('#action').val() == 'Edit')
 {
  action_url = "{{ route('destination.update') }}";
 }

 $.ajax({
  url: action_url,
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
    $('#sample_form')[0].reset();
    $('#user_table').DataTable().ajax.reload();
   }
   $('#form_result').html(html);
  }
 });
});

$(document).on('click', '.edit', function(){
 var id = $(this).attr('id');
 $('#form_result').html('');
 $.ajax({
  url :"/destination/"+id+"/edit",
  dataType:"json",
  success:function(data)
  {
   $('#nom_pays').val(data.result.nom_pays);
   $('#hidden_id').val(id);
   $('.modal-title').text('Modifier pays');
   $('#action_button').val('Edit');
   $('#action').val('Edit');
   $('#formModal').modal('show');
  }
 })
});

var user_id;

$(document).on('click', '.delete', function(){
 user_id = $(this).attr('id');
 $('#confirmModal').modal('show');
});

$('#ok_button').click(function(){
 $.ajax({
  url:"destination/destroy/"+user_id,
  success:function(data)
  {
   setTimeout(function(){
    $('#confirmModal').modal('hide');
    $('#user_table').DataTable().ajax.reload();
   });
  }
 })
});

});
//logemenet
$(document).ready(function(){

$('#user_table1').DataTable({
 processing: true,
 serverSide: true,
 ajax: {
  url: "{{ route('logement.index') }}",
 },
 columns: [
  {
   data: 'typelogement',
   name: 'typelogement'
  },
  {
   data: 'action',
   name: 'action',
   orderable: false
  }
 ]
});

$('#create_record1').click(function(){
 $('.modal-title').text('ajouter un type de logement');
 $('#action_button1').val('Ajouter');
 $('#action1').val('Add');
 $('#form_result1').html('');

 $('#formModal1').modal('show');
});

$('#sample_form1').on('submit', function(event){
 event.preventDefault();
 var action_url = '';

 if($('#action1').val() == 'Add')
 {
  action_url = "{{ route('logement.store') }}";
 }

 if($('#action1').val() == 'Edit')
 {
  action_url = "{{ route('logement.update') }}";
 }

 $.ajax({
  url: action_url,
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
    $('#sample_form1')[0].reset();
    $('#user_table1').DataTable().ajax.reload();
   }
   $('#form_result1').html(html);
  }
 });
});

$(document).on('click', '.edit1', function(){
 var id = $(this).attr('id');
 $('#form_result1').html('');
 $.ajax({
  url :"/logement/"+id+"/edit",
  dataType:"json",
  success:function(data)
  {
   $('#typelogement').val(data.result.typelogement);
   $('#hidden_id1').val(id);
   $('.modal-title').text('Modifier type logement');
   $('#action_button1').val('Edit');
   $('#action1').val('Edit');
   $('#formModal1').modal('show');
  }
 })
});

var user_id1;

$(document).on('click', '.delete1', function(){
 user_id1 = $(this).attr('id');
 $('#confirmModal1').modal('show');
});

$('#ok_button1').click(function(){
 $.ajax({
  url:"logement/destroy/"+user_id1,
  success:function(data)
  {
   setTimeout(function(){
    $('#confirmModal1').modal('hide');
    $('#user_table1').DataTable().ajax.reload();
   
   });
  }
 })
});

});
   </script>
    
  
 
  </body>
  </html>