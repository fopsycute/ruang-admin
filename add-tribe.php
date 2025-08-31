
<?php include "header.php"; ?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Create Tribes & Groups</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Groups</li>
      <li class="breadcrumb-item active" aria-current="page">Create</li>
    </ol>
  </div>

  <div class="row">
    <div class="col-lg-10">
      <div class="card mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Group Details</h6>
        </div>
        <div class="card-body">
          <form action="process-group.php" method="POST" enctype="multipart/form-data">

            <!-- Group Name -->
            <div class="form-group mb-3">
              <label for="groupName">Group/Tribe Name</label>
              <input type="text" class="form-control" id="groupName" name="group_name" placeholder="Enter group name" required>
            </div>

            <!-- Group Description -->
            <div class="form-group mb-3">
              <label for="groupDescription">Group Description</label>
              <textarea class="form-control" id="groupDescription" name="group_description" rows="4" required></textarea>
            </div>

            <!-- Group Type -->
            <div class="form-group mb-3">
              <label for="groupType">Group Type</label>
              <select class="form-control" id="groupType" name="group_type" required>
                <option value="">Select</option>
                <option value="Open">Open (Anyone can join)</option>
                <option value="Closed">Closed (By approval/invitation)</option>
              </select>
            </div>

            <!-- Group Access -->
            <div class="form-group mb-3">
              <label>Group Access</label><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="group_access" id="freeAccess" value="Free" checked>
                <label class="form-check-label" for="freeAccess">Free</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="group_access" id="paidAccess" value="Paid">
                <label class="form-check-label" for="paidAccess">Paid Subscription</label>
              </div>
            </div>

            <!-- Paid Subscription Fields -->
            <div id="paidOptions" style="display:none;">
              <h6 class="text-primary mt-3">Subscription Fees</h6>
              <div class="form-group mb-2">
                <label for="fee1">1 Month (₦)</label>
                <input type="number" class="form-control" id="fee1" name="fee_1month" placeholder="Enter fee">
              </div>
              <div class="form-group mb-2">
                <label for="fee3">3 Months (₦)</label>
                <input type="number" class="form-control" id="fee3" name="fee_3months" placeholder="Enter fee">
              </div>
              <div class="form-group mb-2">
                <label for="fee6">6 Months (₦)</label>
                <input type="number" class="form-control" id="fee6" name="fee_6months" placeholder="Enter fee">
              </div>
              <div class="form-group mb-2">
                <label for="fee12">12 Months (₦)</label>
                <input type="number" class="form-control" id="fee12" name="fee_12months" placeholder="Enter fee">
              </div>
              <p class="small text-muted">
                Note: <strong>MARRIAGE.NG</strong> takes a 20% commission per payment.
              </p>
            </div>

            <!-- Categories -->
            <div class="form-group mb-3">
              <label for="categories">Categories</label>
              <select class="select2-multiple form-control" name="categories[]" multiple id="categories">
                <option value="Marriage">Marriage</option>
                <option value="Parenting">Parenting</option>
                <option value="Family">Family</option>
                <option value="Faith">Faith</option>
                <option value="Youth">Youth</option>
              </select>
            </div>

            <!-- Sub-Categories -->
            <div class="form-group mb-3">
              <label for="subCategories">Sub-Categories</label>
              <select class="select2-multiple form-control" name="subcategories[]" multiple id="subCategories">
                <option value="Pre-Marital">Pre-Marital</option>
                <option value="Communication">Communication</option>
                <option value="Conflict Resolution">Conflict Resolution</option>
                <option value="Finance">Finance</option>
                <option value="Parent Coaching">Parent Coaching</option>
              </select>
            </div>

            <!-- Rules -->
            <div class="form-group mb-3">
              <label for="rules">Group Rules & Guidelines (Optional)</label>
              <textarea class="form-control" id="rules" name="rules" rows="3" placeholder="State basic rules or expectations for members"></textarea>
            </div>

            <!-- Upload Banner -->
            <div class="form-group mb-3">
              <label for="banner">Upload Group Banner / Image</label>
              <input type="file" class="form-control" id="banner" name="banner" accept="image/png, image/jpeg">
              <small class="text-muted">Recommended size: 1200 x 600px (JPG/PNG)</small>
            </div>

            <!-- Submit -->
            <button type="submit" class="btn btn-primary">Create Group</button>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include "footer.php"; ?>

