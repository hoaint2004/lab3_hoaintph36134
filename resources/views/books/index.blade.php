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
            {{-- <a class="navbar-brand" href="#">Logo</a> --}}
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
        <h1>Danh sách Sách</h1>
        <a href="{{route('book.create')}}" class="btn btn-success">Create</a>

        <table>
            <tr>
                <th scope="">#ID</th>
                <th scope="">Title</th>
                <th scope="">Thumbnail</th>
                <th scope="">Author</th>
                <th scope="">Publisher</th>
                <th scope="">Publication</th>
                <th scope="">Price</th>
                <th scope="">Quantity</th>
                <th scope="">Category Name</th>
            </tr>

            @foreach ($books as $book )
                <tr>
                    <th scope="row">{{$book->id}}</th>
                    <td>{{$book->title}}</td>
                    <td>
                        <img src="{{$book->thumbnail}}" alt="" width="60">
                    </td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->publisher}}</td>
                    <td>{{$book->publication}}</td>
                    <td>{{$book->price}}</td>
                    <td>{{$book->quantity}}</td>
                    <td>{{$book->name}}</td>
                    <td>
                        <a href="{{route('book.edit', $book->id)}}" class="btn btn-success">Sửa</a>
                        <form action="{{ route('book.destroy', $book->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa sản phẩm này không?')">Xóa</button>
                </form>
                    </td>
                </tr>
            @endforeach
        </table>

    </main>

    <footer class="bg-light py-4">
        <div class="container text-center">
            <p>&copy; 2024 Website bán sách</p>
        </div>
    </footer>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>