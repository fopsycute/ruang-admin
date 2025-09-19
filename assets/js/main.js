
$(document).ready(function () {

  // For normal single select dropdowns
  $('.select2-single').select2();

  // For single select dropdowns with placeholder
  $('.select2-single-placeholder').select2({
    placeholder: "Select a Province",
    allowClear: true
  });

  // For multiple select dropdowns
  $('.select2-multiple').select2();
  
});
