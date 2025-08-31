<?php include "header.php"; ?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Create Event</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Events</li>
      <li class="breadcrumb-item active" aria-current="page">Create</li>
    </ol>
  </div>

  <div class="row">
    <div class="col-lg-10">
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Event Details</h6>
        </div>
        <div class="card-body">

          <!-- Title -->
          <div class="form-group">
            <label for="eventTitle">Title</label>
            <input type="text" class="form-control" id="eventTitle" placeholder="Enter event title">
          </div>

          <!-- Cover Image -->
             <div class="form-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
                  </div>

          <!-- Description -->
          <div class="form-group">
            <label for="eventDescription">Description</label>
            <textarea class="form-control" id="eventDescription" rows="4"></textarea>
          </div>

          <!-- Categories -->
          <div class="form-group">
            <label for="categories">Categories</label>
            <select class="select2-multiple form-control" name="categories[]" multiple="multiple" id="categories">
              <option value="Marriage">Marriage</option>
              <option value="Parenting">Parenting</option>
              <option value="Faith">Faith</option>
              <option value="Youth">Youth</option>
              <option value="Leadership">Leadership</option>
            </select>
          </div>

          <!-- Sub-Categories -->
          <div class="form-group">
            <label for="subCategories">Sub-Categories</label>
            <select class="select2-multiple form-control" name="subcategories[]" multiple="multiple" id="subCategories">
              <option value="Pre-Marital">Pre-Marital</option>
              <option value="Communication">Communication</option>
              <option value="Conflict Resolution">Conflict Resolution</option>
              <option value="Finance">Finance</option>
              <option value="Spiritual Growth">Spiritual Growth</option>
            </select>
          </div>

          <!-- Event Type -->
          <div class="form-group">
            <label for="eventType">Event Type</label>
            <select class="select2-single form-control" id="eventType" name="eventType">
              <option value="">Select</option>
              <option value="Webinar">Webinar</option>
              <option value="Workshop">Workshop</option>
              <option value="Seminar">Seminar</option>
              <option value="Retreat">Retreat</option>
              <option value="Marriage Conference">Marriage Conference</option>
              <option value="Parenting Class">Parenting Class</option>
              <option value="Faith-Based Program">Faith-Based Program</option>
              <option value="Online Course">Online Course</option>
              <option value="Virtual Support Group">Virtual Support Group</option>
              <option value="Other">Other</option>
            </select>
          </div>

          <!-- Target Audience -->
          <div class="form-group">
            <label for="audience">Target Audience</label>
            <select class="select2-multiple form-control" name="audience[]" multiple="multiple" id="audience">
              <option value="Singles">Singles</option>
              <option value="Engaged Couples">Engaged Couples</option>
              <option value="Married Couples">Married Couples</option>
              <option value="Parents">Parents</option>
              <option value="Faith Leaders">Faith Leaders</option>
              <option value="Counselors">Counselors</option>
              <option value="Teens/Youth">Teens/Youth</option>
              <option value="General Public">General Public</option>
            </select>
          </div>

            <!-- Start Date/Time -->
          <div class="form-group">
            <label for="startDate">Start Date/Time</label>
            <div class="input-group">
              <input type="text" class="form-control" id="startDate" placeholder="Select start date">
               <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                      </div>
              <input type="text" class="form-control clockpicker" id="startTime" placeholder="Select start time">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-clock"></i></span>
              </div>
            </div>
          </div>

          <!-- End Date/Time -->
          <div class="form-group">
            <label for="endDate">End Date/Time</label>
            <div class="input-group">
              <input type="text" class="form-control" id="endDate" placeholder="Select end date">
               <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                      </div>
              <input type="text" class="form-control clockpicker" id="endTime" placeholder="Select end time">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-clock"></i></span>
              </div>
            </div>
          </div>

          <!-- Delivery Format -->
          <div class="form-group">
            <label for="deliveryFormat">Delivery Format</label>
            <select class="select2-single form-control" id="deliveryFormat" name="deliveryFormat">
              <option value="">Select</option>
              <option value="Physical">Physical (In-person)</option>
              <option value="Online">Online (Webinar/Virtual)</option>
              <option value="Hybrid">Hybrid (Physical & Online)</option>
              <option value="Video">Video</option>
              <option value="Text">Text</option>
            </select>
          </div>

          <!-- Pricing -->
          <div class="form-group">
            <label for="pricing">Pricing</label>
            <select class="select2-single form-control" id="pricing" name="pricing">
              <option value="Donation">Donation</option>
              <option value="Free">Free</option>
              <option value="Paid">Paid</option>
            </select>
          </div>

          <!-- Paid Options (repeatable ticket fields) -->
          <div class="form-group">
            <label for="ticketName">Ticket Name</label>
            <input type="text" class="form-control" id="ticketName" placeholder="E.g., VIP, Standard">
          </div>
          <div class="form-group">
            <label for="ticketBenefits">Benefits</label>
            <textarea class="form-control" id="ticketBenefits" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="ticketPrice">Price</label>
            <input type="number" class="form-control" id="ticketPrice" placeholder="Enter ticket price">
          </div>
          <div class="form-group">
            <label for="ticketSeats">Number of Seats</label>
            <input type="number" class="form-control" id="ticketSeats" placeholder="Enter seats available">
          </div>

          <button type="button" class="btn btn-primary">Add More Tickets</button>
           <div class="form-group mt-3">
          <button type="button" class="btn btn-primary">Submit</button>
           </div>

        </div>
      </div>
    </div>
  </div>
</div>
<?php include "footer.php"; ?>
