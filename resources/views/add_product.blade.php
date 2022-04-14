<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class=container>
        <div class="row">
         <h1 class="text-center">Upload Products</h1>
        <hr>
        <div class="card">
            <div class="card-header">
                <h4 class=display-3>Fill in the card below</h4>
                <div class="card-body">
                    <form action="/save-products" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <labe1 for="title" class="form-label">Product name</label>
                                <input type="text" class="form-control" id="title" name="title"/>

                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price"/>
                        </div>
                        <div class="mb-3">
                            <label for="qty" class="form-quantity">Quantity</label>
                            <input type="number" class="form-control" id="qty" name="qty"/>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-description">description</label>
                            <textarea  class="form-control" id="description" name="description"></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="image" class="form-image">Upload image</label><br>
                            <input type="file" class="form-control" id="image" name="image"/>
                         <div class="mb-3" style="padding-top:2%;">
                         <button class="btn btn-primary" type="submit">Submit</button>   
                        </div>   
                        </div>

                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
    
   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>