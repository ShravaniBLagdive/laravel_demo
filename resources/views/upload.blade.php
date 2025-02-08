<div>
    <h1>Simple Form to understand api and call it in reactjs</h1>

    <form action="/upload" method="POST" enctype="multitype/form-data">
        {{ csrf_field() }}
        {{-- @method("get") --}}
        <Label>Enter id :</Label>
        <input type="number" name="id">
        <br><br>
        <Label>Enter name :</Label>
        <input type="text" name="name">
        <br><br>
        
        <button>List</button>
        <button>Add Admin</button>
        <button>Update Admin</button>
        <button>Delete Admin</button><br><br>
        <input type="file" name="file" id="" />
        <button>Upload File</button><br><br>
    </form>
</div> 
