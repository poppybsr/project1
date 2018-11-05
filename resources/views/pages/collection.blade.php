@extends('pages.master_artist')
@section('content')
        <style>
      img{
        width: 200px ;
      }
        </style> 
        <body style="padding:70px 20px;">
                
                <table class="table table-bordered table-striped">
                                <thead>
                                        <tr>
                                                <th> Picture</th> 
                                                <th> Name</th>
                                                <th> Type</th>
                                                <th> Description</th>
                                                <th> Address</th>
                                                <th> Phone</th>
                                                <th> Contact</th>
                                                                                       </tr>
                                </thead>
                                        @foreach($collections as $row) 
                                                <tr>  
                                                        <td width = 100px><img src= {{$row['art_picture']}}></td> 
                                                        <td> {{$row['name']}} </td>  
                                                        <td> {{$row['Ctype']}} </td>  
                                                        <td> {{$row['description']}} </td>  
                                                        <td> {{$row['address']}} </td>  
                                                        <td> {{$row['phone']}} </td>    
                                                        <td> {{$row['contact_person']}} </td>        
                                        </tr>
                                        @endforeach  
                        </table>
        </body>
@endsection
