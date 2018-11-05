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
                                                <th> picture </th>
                                                <th> Name</th>
                                                <th> Born</th>
                                                <th> Died</th>
                                                <th> country </th>
                                                <th> epoch </th>
                                                <th> style</th>
                                                <th> description </th>

                                        </tr>
                                </thead>
                                        @foreach($artists as $row) 
                                                <tr>
                                                <td><img src= {{$row['artist_picture']}}></td> 
                                                <td> {{$row['name']}} </td>  
                                                <td width = 125px> {{$row['date_born']}} </td>  
                                                <td width = 125px> {{$row['date_died']}} </td>  
                                                <td> {{$row['country']}} </td>  
                                                <td> {{$row['epoch']}} </td>
                                                <td> {{$row['main_style']}} </td>  
                                                <td> {{$row['description']}} </td>          
                                        </tr>
                                        @endforeach  
                        </table>
        </body>
@endsection
