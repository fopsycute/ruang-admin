
<?php include "header.php"; ?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">List My Products & Services</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Products & Services</li>
      <li class="breadcrumb-item active" aria-current="page">New Listing</li>
    </ol>
  </div>

  <div class="row">
    <div class="col-lg-10">
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Section 1: Product or Service Details</h6>
        </div>
        <div class="card-body">

          <!-- Listing Title -->
          <div class="form-group">
            <label for="listingTitle">Listing Title</label>
            <input type="text" class="form-control" id="listingTitle" placeholder="Enter product or service title">
          </div>

          <!-- Categories -->
          <div class="form-group">
            <label for="categories">Categories</label>
            <select class="select2-multiple form-control" name="categories[]" multiple="multiple" id="categories">
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
            <label for="subCategories">Sub-Categories</label>
            <select class="select2-multiple form-control" name="subcategories[]" multiple="multiple" id="subCategories">
              <option value="Books">Books</option>
              <option value="Coaching">Coaching</option>
              <option value="Workshops">Workshops</option>
              <option value="Courses">Courses</option>
              <option value="Counseling">Counseling</option>
              <option value="Events">Events</option>
            </select>
          </div>

          <!-- Description -->
          <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" rows="4" placeholder="What it is, how it works, why it matters"></textarea>
          </div>

          <!-- Product or Service -->
          <div class="form-group">
            <label>Is this a Product or a Service?</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="type" id="product" value="Product">
              <label class="form-check-label" for="product">Product</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="type" id="service" value="Service">
              <label class="form-check-label" for="service">Service</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="type" id="both" value="Both">
              <label class="form-check-label" for="both">Both</label>
            </div>
          </div>

        </div>
      </div>

      <!-- Section 2: Pricing -->
      <div class="card mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Section 2: Pricing</h6>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label for="pricingType">Pricing Type</label>
            <select class="select2-single form-control" id="pricingType" name="pricingType">
              <option value="Starting Price">Starting Price</option>
              <option value="Price Range">Price Range</option>
              <option value="Custom Quote">Custom Quote</option>
            </select>
          </div>

          <div class="form-group">
            <label for="price">Price (NGN)</label>
            <input type="number" class="form-control" id="price" placeholder="Enter price">
          </div>

          <div class="form-group">
            <label for="pricingNotes">Pricing Notes (Optional)</label>
            <textarea class="form-control" id="pricingNotes" rows="3"></textarea>
          </div>
        </div>
      </div>

      <!-- Section 3: Availability & Capacity -->
      <div class="card mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Section 3: Availability & Capacity</h6>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label for="availability">Availability</label>
            <select class="select2-single form-control" id="availability" name="availability">
              <option value="Always Available">Always Available</option>
              <option value="By Appointment">By Appointment</option>
              <option value="Limited Slot">Limited Slot</option>
              <option value="Seasonal">Seasonal</option>
            </select>
          </div>

          <div class="form-group">
            <label for="capacity">Capacity/Volume (Optional)</label>
            <input type="number" class="form-control" id="capacity" placeholder="e.g., 100 units, 20 clients">
          </div>

          <div class="form-group">
            <label>Do you offer home delivery or in-person service?</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="delivery" id="yesDelivery" value="Yes">
              <label class="form-check-label" for="yesDelivery">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="delivery" id="noDelivery" value="No">
              <label class="form-check-label" for="noDelivery">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="delivery" id="dependsDelivery" value="Depends">
              <label class="form-check-label" for="dependsDelivery">Depends on location</label>
            </div>
          </div>

          <div class="form-group">
            <label for="serviceCoverage">Service Coverage</label>
            <select class="select2-multiple form-control" name="coverage[]" multiple="multiple" id="serviceCoverage">
              <option value="Local">Local</option>
              <option value="Statewide">Statewide</option>
              <option value="Nationwide">Nationwide</option>
              <option value="International">International</option>
            </select>
          </div>
        </div>
      </div>

      <!-- Section 4: Media & Files -->
      <div class="card mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Section 4: Media & Files</h6>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label for="productImages">Upload Product Images or Service Flyers</label>
         <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="productImages[]" multiple accept="image/*">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
            <small class="form-text text-muted">
              Free - 1 | Classic - 5 | Enterprise - 15 | Premium - Unlimited
            </small>
          </div>

           <div class="form-group">
                       <label for="videos">Upload Videos (Optional)</label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="productVideos[]" multiple accept="video/*">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
                       <small class="form-text text-muted">
              Max 3 videos (50MB each). Free - 1 | Classic - 5 | Enterprise - 15 | Premium - Unlimited
            </small>
                    </div>
                 

        </div>
      </div>

      <button type="submit" class="btn btn-primary">Submit Listing</button>

    </div>
  </div>
</div>
<?php include "footer.php"; ?>
