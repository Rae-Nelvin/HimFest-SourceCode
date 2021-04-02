<h1>Upload File</h1>
<form  enctype="multipart/form-data" action="{{route('fileUpload')}}" method="POST">
    @csrf
    <input type="file" name="buktipembayaran"><br><br>
    <input type="hidden" name="teamid" value="{{ $LoggedUserInfo['id'] }}">
    <button type="submit">Upload File</button>
</form>