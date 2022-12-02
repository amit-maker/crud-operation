<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>author</title>

        
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            
              
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

            <form class="d-flex">
              
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit" style="margin-right: 50px">Search</button>
            </form>
            </nav>

            </div>

            
          <div class="container" align="center" style="padding-top: 100px;">
          <div class="container" align="center" style="padding-top:30px;">

          
        
                      
                          <h1 style="padding-bottom: 50px;">Author </h1>
                          
                              <h4 class="card-text">BlogName: {{ $author->blogname }}</h4>
                              <p class="card-text">Title: {{$author->title}}</p>
                              <p class="card-text">Descriptions: {{$author->discription}}</p>
                              <p class="card-text">Image: {{$author->image}}</p>
                              <p class="card-text">Date: {{$author->date}}</p>
                              <p class="card-text">Summary: {{$author->summary}}</p>
                              <p class="card-text">Author Name: {{$author->authorname}}</p>
                              <p class="card-text">Status: {{$author->status}}</p>

                          
                        
        </div>

        </div>
        
    </body>
</html>