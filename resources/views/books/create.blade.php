<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Danh sách</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Trang chủ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Giới thiệu</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container my-5">
        <div class="container">
            <h1>Thêm Mới Book</h1>
            <form action="{{ route('book.store') }}" method="POST">
                @csrf  {{--    chặn token --}}
                <div class="mb-3">
                    <label for="" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Url Thumbnail</label>
                    <input type="text" name="thumbnail" class="form-control" id="" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Author</label>
                    <input type="text" name="author" class="form-control" id="" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Pulisher</label>
                    <input type="text" name="publisher" class="form-control" id="" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Pulication_Date</label>
                    <input type="date" name="publication" class="form-control" id="" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Price</label>
                    <input type="text" name="price" step="0.1" class="form-control" id="" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Quantity</label>
                    <input type="text" name="quantity" class="form-control" id="" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Category Name</label>
                    <select name="category_id" class="form-control" id="">
                        @foreach ($categories as $cate )
                            <option value="{{$cate->id}}">
                                {{$cate->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Thêm Mới </button>
                    <a href="{{route('book.index')}}" class="btn btn-success">List</a>
                </div>
            </form>
    </main>

    <footer class="bg-light py-4">
        <div class="container text-center">
            <p>&copy; 2024 Website bán sách</p>
        </div>
    </footer>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>