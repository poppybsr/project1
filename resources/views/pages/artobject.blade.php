@extends('pages.master_artobject')
@section('title','Artobject')
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
                                                <th> picture </th>
                                                <th> ID </th>
                                                <th> Name </th>
                                                <th> Year </th>
                                                <th> Description </th>
                                                <th> Artist </th>


                                        </tr>
                                </thead>
                                        @foreach($artobjects as $row) 
                                                <tr>
                                                <td width = 100px><img src= {{$row['picture']}}></td> 
                                                <td> {{$row['object_id']}} </td>  
                                                <td> {{$row['title']}} </td>  
                                                <td> {{$row['year']}} </td>  
                                                <td> {{$row['description']}} </td>  
                                                <td> {{$row['Artist_name']}} </td>          
                                        </tr>
                                        @endforeach  
                        </table>
        </body>
@endsection
