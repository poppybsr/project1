@extends('pages.master_painttype')
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
                                                <th> Picture </th>
                                                <th> Description </th>
                                        </tr>
                                </thead>
                                        @foreach($paints as $row) 
                                                <tr>
                                                <td width = 100px><img src= {{$row['art_picture']}}></td> 
                                                <td> Type : {{$row['paint_type']}}  <br><br>
                                                 Material : {{$row['drawn_on']}} <br><br>
                                                 Style : {{$row['Pstyle']}} </td>          
                                        </tr>
                                        @endforeach  
                        </table>
        </body>
@endsection
