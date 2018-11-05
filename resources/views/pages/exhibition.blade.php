@extends('pages.master_exhibition')
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
                                                <th> Name</th>
                                                <th> Start</th>
                                                <th> End</th>

                                        </tr>
                                </thead>
                                        @foreach($exhibitions as $row) 
                                                <tr>  
                                                <td> {{$row['Exname']}} </td>
                                                <td> {{$row['start_date']}} </td>  
                                                <td> {{$row['end_date']}} </td>          
                                        </tr>
                                        @endforeach  
                        </table>
        </body>
@endsection
