?<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>student pdf</title>
</head>
<body>
    <h1> all pdf <h2>
 
        @foreach ($path as $url)
            {{$url['url']}}
            <a href="{{route("file.download",['path' => $url['url']])}}">
                |Download
              </div>  
        
            
        @endforeach

</body>
</html>