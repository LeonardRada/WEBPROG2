<!-- HOMEWORK 6 ADD BOOK FEATURE ADDED TO BOOK CATALOG -->
<div class="card-body">
  <form action="book-view/process-book-add.php" method="post">
    <div class="form-group">
      <label for="bookTitle">Book Title</label>
      <input id="bookTitle" name="bookTitle" class="form-control" type="text"/>
    </div>

    <div class="form-group">
      <label for="authorName">Author Name</label>
      <input id="authorName" name="authorName" class="form-control" type="text"/>
    </div>

    <div class="form-group">
      <label for="ISBN">ISBN</label>
      <input id="ISBN" name="ISBN" class="form-control" type="text"/>
    </div>

    <div class="form-group">
      <label for="pic_url">Image URL</label>
      <input id="pic_url" name="pic_url" class="form-control" type="text"/>
    </div>

    <br>
    <div><button class="btn btn-primary" type="submit">Submit</button></div>
  </form>
</div>
