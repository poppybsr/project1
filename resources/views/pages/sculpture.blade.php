@extends('pages.master_painttype')
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
                                                <th> Picture </th>
                                                <th> Description </th>
                                        </tr>
                                </thead>
                                        @foreach($sculptures as $row) 
                                                <tr>
                                                <td width = 100px><img src= {{$row['art_picture']}}></td> 
                                                <td> Material : {{$row['material']}}  <br><br>
                                                 Height : {{$row['height']}} , Weight {{$row['weight']}} <br><br>
                                                 Style : {{$row['style']}} </td>          
                                        </tr>
                                        @endforeach  
                        </table>
        </body>
@endsection
