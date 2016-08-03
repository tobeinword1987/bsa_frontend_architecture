<script type="text/html" id="create-book-template">
    <form>
        <input class="form-control" name="id" type="hidden" value="">
        <div class="form-group">
            <label for="">Title</label>
            <input class="form-control" id="title" name="title" type="text" value="<%- title %>">
        </div>
        <div class="form-group">
            <label for="">Author</label>
            <input class="form-control" name="author" type="text" value="<%- author %>">
        </div>
        <div class="form-group">
            <label for="">Year</label>
            <input class="form-control" name="year" type="text" value="<%- year %>">
        </div>
        <div class="form-group">
            <label for="">Genre</label>
            <input class="form-control" name="genre" type="text" value="<%- genre %>">
        </div>
        <input class="btn btn-primary js-save" type="submit" value="Save">
    </form>
    <div class="js-errors"></div>
</script>