<form action="" method="post">
  <fieldset>
    <legend>Add a new book</legend>
    <div class="inputLeftSide">
      <p>
        <label for="title">Title*</label></br>
        <input type="text" name="title" value="" id="title" placeholder="Title" required/>
      </p>
      <p>
        <label for="author">Author*</label><br/>
        <input type="text" name="author" value="" id="author" placeholder="Author" required />
      </p>
      <p>
        <label for="isbn">ISBN*</label><br/>
        <input type="text" name="isbn" value="" id="isbn" placeholder="ISBN" required/>
      </p>
    </div>
    <div class="inputRightSide">
      <p>
        <label for="description">Description*</label><br/>
        <textarea name="description" id="description" cols="30" rows="10" placeholder="Add a description"></textarea>
      </p>
      <p>
        <label for="image">Image*</label><br/>
        <input type="file" name="uploadFile" id="uploadFile">
      </p>
    </div>
  </fieldset>
</form>