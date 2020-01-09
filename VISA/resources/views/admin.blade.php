
<!DOCTYPE html>
 
<html lang="en">
<head>
<title>visa</title>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">

</head>
      <body>
      <br><br>
         <div class="container">
        
                      
            <table class="table table-bordered" id="laravel_datatable">
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
                     <th>motif</th>
                     <th>action</th>
                     
                  </tr> </thead></table> </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src=" https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src=" https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>                
   <script >
   $(document).ready( function () {
    //var myTable=
   var tab= $('#laravel_datatable').DataTable({
    
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
                    {"visible": false , data: 'nom_pays', name: 'destination_id', searchable: false },
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
                   { data: 'motif', name: 'motif' },
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
$(document).on('click', '.delete', function(){
 demande_id = $(this).attr('id');
 $.ajax({
  url:"demande/rejet/"+demande_id,
  success:function(data)
  {
    $('#laravel_datatable').DataTable().ajax.reload();
    alert('visa rejete');
  }});
});
$(document).on('click', '.edit', function(){
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
