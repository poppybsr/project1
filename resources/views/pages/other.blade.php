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
                                        @foreach($others as $row) 
                                                <tr>
                                                <td width = 100px><img src= {{$row['art_picture']}}></td> 
                                                <td> Type : {{$row['Otype']}}  <br><br>
                                                 Style : {{$row['Ostyle']}} </td>          
                                        </tr>
                                        @endforeach  
                        </table>
        </body>
@endsection
