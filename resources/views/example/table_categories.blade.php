<div class="panel panel-default">
    <div class="panel-heading" style="font-size: 1.5em"><strong>Categories</strong></div>
        <table class="table">
                    <thead>
                      <tr>
                        <th>Category</th>
                        <th>Product ID</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                      <tr>
                        <td><a href="/video/{{ $category->name }}">{{ $category->name }}</a></td>
                        <td>{{ $category->product_id }}</td>
                      </tr>
                    @endforeach
                    </tbody>
        </table>
</div>