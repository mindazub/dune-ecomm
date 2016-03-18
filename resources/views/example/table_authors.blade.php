<div class="panel panel-default">
    <div class="panel-heading" style="font-size: 1.5em"><strong>Authors</strong></div>
        <table class="table">
                    <thead>
                      <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($authors as $author)
                      <tr>
                        <td>{{ $author->name }}</td>
                        <td>{{ $author->surname }}</td>
                        <td>{{ $author->email }}</td>
                      </tr>
                    @endforeach
                    </tbody>
        </table>
</div>