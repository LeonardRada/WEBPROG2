<div class="card-body">
  <form action="book-view/results.php" method="post">
    <div class="form-group">
      <label for="searchType">Choose Search Type</label>
      <select class="form-control" id="searchType" name="searchType">
        <option value="author">Author</option>
        <option value="title">Title</option>
        <option value="isbn">ISBN</option>
      </select>
    </div>
    <div class="form-group">
      <label for="searchTerm">Search Term</label>
      <input type="text" id="searchTerm" name="searchTerm"
        class="form-control" placeholder="Search Term"/>
    </div>
    <div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
