<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>author</title>

        <!-- Fonts -->
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />

        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> 

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            *{
              
              text-decoration: none;
              list-style: none;
              /*color: white;*/
              

            }
            li{
              margin-left: 40px;
              display: inline-block;
              margin-left: 30px;
              color: black;
            }

            a{
              color: white;
              text-decoration: none;
              
            }
        </style>   
        
    </head>

    <body>
        <div>
          <div>
            <nav class="navbar navbar-dark bg-dark">
              <div style="display: inline-block; ">

              <ul style="display: inline-block;">
                <li><a href="{{ url('/') }} " >Home</a></li>
          
              </ul>
              </div>

            <form action="" class="d-flex">
              
              <input class="form-control me-2" type="search" name="search" placeholder="Search">
              <button class="btn btn-outline-success" type="search" >Search</button>
            </form>
            </nav>

            </div>

            <div>
              
              <button class="btn btn-primary" type="submit" style="margin: 50px; float:right; "><a href="{{ url('/create') }} " style="color: white; ">+ Create</a>
                </button>
            
            </div>

          <div class="container" align="center" style="padding-top: 100px;">
          <div class="container" align="center" style="padding-top:30px;">

          <div class="main-panel">
            <div class="row ">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      
                      <div class="table-responsive">
                        <div class="container mt-3">
                          <h2 style="padding-bottom: 50px;">Author Table</h2>
                          <table class="table">
                            <thead>
                              <tr>
                                
                                <th scope="col">Id</th>
                                <th scope="col">BlogName</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Date</th>
                                <th scope="col">Summary</th>
                                <th scope="col">Author Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>

                              </tr>
                            </thead>

                              @foreach($author as $authors)
                                <tbody>
                                  <tr>
                                    
                                    <td>{{ $authors->id }}</td>
                                    <td>{{ $authors->blogname }}</td>
                                    <td>{{ $authors->title }}</td>
                                    <td>{{ $authors->description }}</td>
                                    <td><img src="{{ asset('storage/images/' . $authors->image) }}" style="height: 50px; width: 50px; "  ></td>
                                    <td>{{ $authors->date }}</td>
                                    <td>{{ $authors->summary }}</td>
                                    <td>{{ $authors->authorname }}</td>
                                    <td><input data-id="{{$authors->id}}" class="toggle-class" name="status" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Publish" data-off="Unpublish" {{ $authors->status ? 'checked' : '' }}></td>

                                    <td>
                                      <a href="/author-show/{{$authors->id }}"><button class="btn btn-info">View</button></a></td>
                                    <td>
                                      <a href="/author-edit/{{ $authors->id }}"><button class="btn btn-primary">Edit</button></a></td>
                                    <td>
                                      <a href="/author-delete/{{ $authors->id }}"><button class="btn btn-danger">Delete</button></a>
                                    </td>
                                    
                                    
                                  </tr>
                                </tbody>
                              @endforeach
                          </table>
                          </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
        </div>

        </div>
        
    </body>
  <script>
   $(function() { 
           $('.toggle-class').change(function() { 
           var status = $(this).prop('checked') == true ? 1 : 0;  
           var author_id = $(this).data('id');  
           $.ajax({ 
    
               type: "GET", 
               dataType: "json", 
               url: '/status/update ' , 
               data: {'status': status, 'author_id': author_id}, 
               success: function(data){ 
               console.log(data.success) 
            } 
         }); 
      }) 
   }); 
  </script>  

</html>
