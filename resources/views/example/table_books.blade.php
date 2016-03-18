<div class="panel panel-default">
    <div class="panel-heading" style="font-size: 1.5em"><strong>Books</strong></div>
        <table class="table">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Price</th>
                        <th>ISBN</th>
                        <th>Qt.</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($books as $book)
                      <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author->name }}&nbsp{{ $book->author->surname }}</td>
                        <td>{{ $book->price }}</td>
                        <td>{{ $book->isbn }}</td>
                        <td>15</td>
                        <td><button type="button" class="btn btn-sm btn-success"><i class="fa fa-shopping-cart"></i></button></button></td>
                      </tr>
                    @endforeach
                    </tbody>
        </table>
</div>