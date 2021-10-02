<form action="uploaded" method="POST" enctype="multipart/form-data" name="formName" >
    @csrf
    <input type="file" name="file"><br><br>
    <button stype="button"> Upload File</button>
</form>