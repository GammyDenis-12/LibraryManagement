<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <h3>Librabry Management System</h3>
        </div>
        <div class="d-flex align-items-start">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">User</button>
              <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Book</button>
            </div>
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                {{-- <table class="table table-primary table-bordered" >
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Full name</th>
                        <th scope="col">Email</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                      <tr>
                        <th scope="row">{{$user->id}}</th>
                        <th >{{$user->name}}</th>
                        <td>  {{ $user->email}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table> --}}

              </div>
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="table-data">
                <table class="table table-primary table-bordered" >
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Pages</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Isbn</th>
                        <th scope="col">Publish Date</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $data)
                      <tr>
                        <th scope="row">{{$data->id}}</th>
                        <td>  {{ $data->title}}</td>
                        <td> {{ $data->Pages}}</td>
                        <td> {{ $data->Rating}}</td>
                        <td> {{$data->isbn}}</td>
                        <td> {{ $data->publishDate}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                  <div class="d-flex">
                   
                    {{-- {!! ->paginate(10)->withQueryString();!!} --}}
                    {{ $books->links() }}


                    
                </div>
                  {{-- {!! $data->withQueryString()->links('pagination::bootstrap-5') !!} --}}
              </div>
            </div>
          </div>
    </div>
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script
  src="https://code.jquery.com/jquery-3.6.3.min.js"
  integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
  crossorigin="anonymous"></script> --}}
      {{-- <script>
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
      </script> --}}

     <script type="text/javascript">
           //pagination 
           
        //   $(document).on('click','.pagination a', function(e){
        //     e.preventDefault();
        //     let page = $(this).attr('href').split('page=')[1]
        //     record(page)
        //   })
      
        //   function record(page){
        //       $.ajax({
        //           url:"/ajax-paginate?page" + page,
        //           success:function(res){
        //               $('.table-data').html(res);
        //           }
        //       })
        //   }

//         $(document).ready(function(){
	
//     $(document).on('click', '.pagination a', function(event){
//         event.preventDefault(); 
//         var page = $(this).attr('href').split('page=')[1];
//         fetch_user_data(page);
//     });

//     function fetch_user_data(page)
//     {
//         $.ajax({
//             url:"/ajax-paginate?page"+page,
//             success:function(data)
//             {
//                 $('.table-data').html(data);
//             }
//         });
//     }	 
// });
      
      </script> 
</body>
</html>