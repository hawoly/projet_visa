<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>visa</title>
  <style>
   .onglet
{
        display:inline-block;
        margin-left:3px;
        margin-right:3px;
        padding:3px;
        border:1px solid black;
        cursor:pointer;
}
.onglet a
{
        color:#000000;
        text-decoration:none;
}
.onglet_n
{
        background:#bbbbbb;
        border-bottom:1px solid black;
}
.onglet_y
{
        background:#dddddd;
        border-bottom:0px solid black;
        padding-bottom:4px;
}
.contenu
{
        background-color:#dddddd;
        border:0px solid black;
        margin-top:-1px;
        padding:5px;
}
ul
{
        margin-top:0px;
        margin-bottom:0px;
        margin-left:-10px
}
h1
{
        margin:0px;
        padding:0px;
}
 </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
 <br><br>
 <div class="onglets_html">
        <div class="onglets">
            <div class="onglet_n onglet"><a href="{{ url('admin') }}">liste demande</a></div>
            <div class="onglet_y onglet"><a href="{{ url('destinations') }}">Pays</a></div>
            <div class="onglet_n onglet"><a href="{{ url('logements') }}">Type de logement</a></div>
            <div class="onglet_n onglet"><a href="{{ url('recours') }}">recours</a></div>
        
        </div>
        <div class="contenu">
  <div class="container">    
     <br />
 
     <br />
     <div align="right">
      <button type="button" name="create_record" id="create_record" class="btn btn-success btn-sm">un aute pays</button>
     </div>
     <br />
   <div class="table-responsive">
    <table id="user_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th width="35%">PAYS</th>
                
                <th width="30%">Action</th>
      </tr>
     </thead>
    </table>
   </div>
   <br />
   <br />
  </div>
  </div>
 </body>
</html>

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
                <h4 align="center" style="margin:0;">Are you sure you want to remove this data?</h4>
            </div>
            <div class="modal-footer">
             <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>


<script>
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
    $('.modal-title').text('Edit Record');
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
   beforeSend:function(){
    $('#ok_button').text('Deleting...');
   },
   success:function(data)
   {
    setTimeout(function(){
     $('#confirmModal').modal('hide');
     $('#user_table').DataTable().ajax.reload();
     
    }, 2000);
   }
  })
 });

});
</script>
