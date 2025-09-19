<?php include "header.php"; ?>
<div class="container">
  <div class="page-inner">
    <div class="page-header">
      <h3 class="fw-bold mb-3">Edit Blog Post</h3>
    </div>

    <div class="row">
      <div class="col-md-12">

        <div class="card">
          <div class="card-header">
            <div class="card-title">Blog</div>
          </div>
          <div class="card-body">

            <!-- Blog Title -->
            <div class="form-group">
              <label for="blogTitle">Title</label>
              <input type="text" class="form-control" id="blogTitle" placeholder="Enter blog title">
            </div>

            <!-- Cover Image -->
            <div class="form-group">
              <label for="blogCover">Cover Image</label>
              <input type="file" class="form-control" id="blogCover" accept="image/*">
            </div>

            <!-- Content -->
            <div class="form-group">
              <label for="blogContent">Content</label>
              <textarea id="blogContent" class="form-control" rows="8" placeholder="Write your blog content here..."></textarea>
            </div>

            <!-- Categories -->
            <div class="form-group">
              <label for="blogCategories">Categories</label>
              <select id="blogCategories" name="categories[]" class="form-control select2-multiple" multiple>
                <option value="Marriage">Marriage</option>
                <option value="Parenting">Parenting</option>
                <option value="Faith">Faith</option>
                <option value="Youth">Youth</option>
                <option value="Health">Health</option>
                <option value="Finance">Finance</option>
              </select>
            </div>

            <!-- Sub-Categories -->
            <div class="form-group">
              <label for="blogSubcategories">Sub-Categories</label>
              <select id="blogSubcategories" name="subcategories[]" class="form-control select2-multiple" multiple>
                <option value="Pre-Marital Counseling">Pre-Marital Counseling</option>
                <option value="Conflict Resolution">Conflict Resolution</option>
                <option value="Parent Coaching">Parent Coaching</option>
                <option value="Teen Mentorship">Teen Mentorship</option>
                <option value="Financial Planning">Financial Planning</option>
                <option value="Health & Wellness">Health & Wellness</option>
              </select>
            </div>

            <!-- Tags -->
            <div class="form-group">
              <label for="blogTags">Tags</label>
              <input type="text" id="blogTags" class="form-control" placeholder="Add tags (comma separated)">
            </div>

         

            <!-- Submit Button -->
            <button class="btn btn-primary">Submit Blog</button>

          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<?php include "footer.php"; ?>