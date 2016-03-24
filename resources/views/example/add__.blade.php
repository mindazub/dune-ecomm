

<form action="{{ url('home') }}" method="POST" class="form-horizontal">
            {!! csrf_field() !!}

<div class="panel panel-default">
    <div class="panel-heading" style="font-size: 1.5em"><strong>ADD</strong></div>
        <table class="table">
                    
                    <tbody>
                    
                      <tr>
                        <td><input type="text" class="form-control" placeholder="Title" size="12" name="title"></td>
                        <td><input type="text" class="form-control" placeholder="Author name" size="6" name="name"></td>
                        <td><input type="text" class="form-control" placeholder="Author surname" size="6" name="surname"></td>
                        <td><input type="text" class="form-control" placeholder="Price" size="4" name="price"></td>
                        <td><input type="text" class="form-control" placeholder="Your Price" size="4" name=your_price></td>
                        <td><input type="text" class="form-control" placeholder="ISBN" size="10"></td>                 
                        <td><input type="text" class="form-control" placeholder="QTY" size="4"></td>                 
                      </tr>
                      <tr>
                      	<td><button type="submit" class="btn btn-large btn-success">Add Book</button></td>
                      </tr>
                   
                    </tbody>
        </table>
</div>
           
</form>