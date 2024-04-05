<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>NRF Admin</title>
    <!-- plugins:css -->

    <link
      rel="stylesheet"
      href="{{asset('admin/vendors/ti-icons/css/themify-icons.css')}}"
    />
    <link
      rel="stylesheet"
      href="{{asset('admin/vendors/css/vendor.bundle.base.css')}}"
    />
    <link
      rel="stylesheet"
      href="{{asset('admin/themify-icons/themify-icons.min.css')}}"
    />
    <link
      rel="stylesheet"
      href="{{asset('admin/css/vertical-layout-dark/all.min.css')}}"
    />
    {{--
    <link
      rel="stylesheet"
      href="{{asset('admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}"
    />
    --}}
    <link
      rel="stylesheet"
      href="{{asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}"
    />

    {{-- CSS plugin datepicker --}}
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"
    />

    <!--<link rel="stylesheet" href="{{asset('admin/vendors/dropzone/dropzone.css')}}"> -->
    <link
      rel="stylesheet"
      href="{{asset('admin/vendors/jquery-bar-rating/fontawesome-stars-o.css')}}"
    />
    <link
      rel="stylesheet"
      href="{{asset('admin/vendors/jquery-bar-rating/fontawesome-stars.css')}}"
    />

    <link
      rel="stylesheet"
      href="{{asset('admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}"
    />

    <link
      rel="stylesheet"
      href="{{asset('admin/css/vertical-layout-dark/style.css')}}"
    />
    <link
      rel="stylesheet"
      href="{{asset('admin/css/vertical-layout-dark/style_update.css')}}"
    />
    <link
      rel="stylesheet"
      href="{{asset('admin/css/vertical-layout-dark/test.css')}}"
    />
    <!-- endinject -->
    <link
      rel="shortcut icon"
      href="{{asset('storage/logo/nrf_logo.png')}}"
    />
    <style>
      #preloader {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #1e1e2f;
        z-index: 9999;
        height: 100%;
      }

      #loader {
        /*border: 16px solid #f3f3f3;
            border-top: 16px solid #115087;*/
        background-color: #fff !important;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        animation: loading 0.5s infinite;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -25;
        margin-left: -25;
      }

      @keyframes loading {
        0% {
          transform: scale(0.1);
        }

        100% {
          transform: scale(1.2);
        }
      }

      .custom-select-sm {
        background: #1e1e2f !important;
        color: white !important;
      }

      .drp-calendar,
      .drp-calendar *,
      .drp-buttons {
        background: #1e1e2f !important;
      }

      .drp-calendar .in-range {
        background: #248afd !important;
      }

      .calendar-table {
        border: none !important;
      }
    </style>
  </head>
  <body>
    <div id="preloader">
      <div id="loader"></div>
    </div>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      @include('layouts.app_nav')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div id="right-sidebar" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
            <li class="nav-item">
              <a
                class="nav-link active"
                id="todo-tab"
                data-bs-toggle="tab"
                href="#todo-section"
                role="tab"
                aria-controls="todo-section"
                aria-expanded="true"
                >TO DO LIST</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                id="chats-tab"
                data-bs-toggle="tab"
                href="#chats-section"
                role="tab"
                aria-controls="chats-section"
                >CHATS</a
              >
            </li>
          </ul>
        </div>
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          @include('layouts.app_sidebar')
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">@yield('content')</div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('layouts.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{asset('admin/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('admin/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->

    <!-- close -->
    <!--<script src="{{asset('admin/js/off-canvas.js')}}"></script>
  <script src="{{asset('admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('admin/js/template.js')}}"></script>
  <script src="{{asset('admin/js/settings.js')}}"></script>
  <script src="{{asset('admin/js/todolist.js')}}"></script> -->

    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('admin/js/dashboard.js')}}"></script>
    <script src="{{asset('admin/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('admin/js/data-table.js')}}"></script>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"
      integrity="sha512-pdCVFUWsxl1A4g0uV6fyJ3nrnTGeWnZN2Tl/56j45UvZ1OMdm9CIbctuIHj+yBIRTUUyv6I9+OivXj4i0LPEYA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>


    <script src="{{asset('admin/vendors/jsgrid/jsgrid.min.js')}}"></script>

    {{-- datepicker js --}}
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"
    ></script>

    <script src="{{asset('admin/js/js-grid.js')}}"></script>
    <script src="{{asset('admin/js/db.js')}}"></script>
    <!-- End custom js for this page-->

    <!-- close -->
    <!--<script src="{{asset('admin/js/off-canvas.js')}}"></script>
  <script src="{{asset('admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('admin/js/template.js')}}"></script>
  <script src="{{asset('admin/js/settings.js')}}"></script>
  <script src="{{asset('admin/js/todolist.js')}}"></script>-->

    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- close -->
    <!-- <script src="{{asset('admin/js/formpickers.js')}}"></script>
  <script src="{{asset('admin/js/form-addons.js')}}"></script>
  <script src="{{asset('admin/js/x-editable.js')}}"></script>
  <script src="{{asset('admin/js/dropify.js')}}"></script>
  <script src="{{asset('admin/js/dropzone.js')}}"></script>
  <script src="{{asset('admin/js/jquery-file-upload.js')}}"></script>
  <script src="{{asset('admin/js/formpickers.js')}}"></script>
  <script src="{{asset('admin/js/form-repeater.js')}}"></script>
  <script src="{{asset('admin/js/inputmask.js')}}"></script> -->
    {{-- sweetalert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript">
        		$(window).on('load', function() {
                  $('#preloader').delay(350).fadeOut('slow');
              });

//

             $(document).ready(function() {
                  $(document).on('change', '.status-select', function() {
                      var formData = $(this).closest('form').serialize();
                      var orderId = $(this).closest('form').find('input[name="order_id"]').val();

                      $.ajax({
                          url: "{{ route('update_status') }}",
                          type: "POST",
                          data: formData,
                          success: function(data) {
                          	var newStatus = data.status;

          					if (newStatus === "success") {
            						filteredData = "success";
                              	badge="success";
          					} else if (newStatus === "pending") {
            						filteredData = "pending";
                              	badge="warning";
          					} else if (newStatus === "delivering") {
            						filteredData = "delivering";
                              	badge ="primary";
          					}else if(newStatus === "confirmed"){
                            		filteredData = "confirmed";
                                badge="info";
                                sendConfirmationEmail(orderId);
                          	}else {
           						          filteredData = "cancelled";
                              	badge="danger";
                                cancelConfirmationEmail(orderId);
          					}
      						var newSpan = '<span class="badge badge-pill badge-' + badge + '">' + filteredData + '</span>';

      						var badge_name='#badge-' + orderId;
          					$(badge_name + ' span').replaceWith(newSpan);

                          	$('.' + orderId).val(newStatus)
                          	Swal.fire({
        							title: 'Order Status Updated!',
        							icon: 'success',
        							confirmButtonText: 'OK'
      						});
                          },
                          error: function(xhr, textStatus, errorThrown) {
                              console.log(xhr.responseText);
                          }
                      });
                  });
              });
            function increaseProductQuantity(orderId) {
                alert(orderId);
            }
			$(document).ready(function() {
        $(document).on('change', '.pstatus-select', function() {
            var formData = $(this).closest('form').serialize();
            var orderId = $(this).closest('form').find('input[name="product_id"]').val();

            $.ajax({
                url: "{{ route('pupdate_status') }}",
                type: "POST",
                data: formData,
                success: function(data) {
                  Swal.fire({
            title: 'Product Status Updated!',
            icon: 'success',
            confirmButtonText: 'OK'
        });

          },
          error: function(xhr, textStatus, errorThrown) {
              console.log(xhr.responseText);
          }
                      });
                  });
              });

              $('#product').change(function(){
                  var product_id = $(this).val();

                  $.ajax({
                      url: "{{url('getProductInfo')}}?product_id=" + product_id,
                      method: "GET",
                      success: function (data) {
                          console.log(data);

                          $('#price').val(data.price);
                          $('#discount').val(data.item_discount);
                      }
                  });
              });

              // update status mail
              function sendConfirmationEmail(orderId) {
              $.ajax({
                  url: "{{ route('send_confirmation_email') }}",
                  type: "POST",
                  data: { order_id: orderId },
                  success: function(response) {
                      Swal.fire({
                          title: 'Email Sent!',
                          icon: 'success',
                          confirmButtonText: 'OK'
                      });
                  },
                  error: function(xhr, textStatus, errorThrown) {
                      console.error(xhr.responseText);
                  }
              });
          }
          function cancelConfirmationEmail(orderId) {
              $.ajax({
                  url: "{{ route('send-cancel-email') }}",
                  type: "POST",
                  data: { order_id: orderId },
                  success: function(response) {
                      Swal.fire({
                          title: 'Email Sent!',
                          icon: 'success',
                          confirmButtonText: 'OK'
                      });
                  },
                  error: function(xhr, textStatus, errorThrown) {
                      console.error(xhr.responseText);
                  }
              });
          }


              //get customer info
              $('#customer_id').change(function(){
                  var customer_id = $(this).val();
                  console.log(customer_id);

                  if(customer_id){
                      $.ajax({
                          type: "GET",
                          url: "{{url('getCustomerInfo')}}?customer_id=" + customer_id,
                          success: function(res){
                              console.log(res);

                              $('#phone_primary').val(res.phone_primary);
                              $('#phone_secondary').val(res.phone_secondary);
                              $('#division_id').val(res.division_id);
                              $('#district_id').val(res.district_name);
                              $('#township_id').val(res.township_name);
                              $('#address').val(res.address);
                          }
                      });
                  }
              });

              $(function(){
                  $('.division').hide();
                  $('.district').hide();
                  $('.township').hide();
                  $('.home_no').hide();
                  $('.street').hide();
                  $('.address').hide();
                  $('.customer_name').hide();
                  $('.phone_primary').hide();
                  $('.phone_secondary').hide();
                  $('.old_division').hide();
                  $('.old_district').hide();
                  $('.old_township').hide();

                  $('.customer_select').change(function(){
                      if(this.value == ''){
                          $('.customer_name').show();
                          $('.division').show();
                          $('.district').show();
                          $('.township').show();
                          $('.home_no').show();
                          $('.street').show();
                          $('.address').show();
                          $('.phone_primary').show();
                          $('.phone_secondary').show();
                      }else{
                          $('.address').show();
                          $('.phone_primary').show();
                          $('.phone_secondary').show();
                          $('.old_division').show();
                          $('.old_district').show();
                          $('.old_township').show();
                      }
                  })
              })

              $(document).on("change keyup blur", "#discount", function(){
                  var original_price = $('#price').val();
                  var discount = $('#discount').val();
                  var decimal = (discount/100).toFixed(2);
                  var multiply = original_price * decimal;
                  var discount_price = original_price - multiply;
                  $('#discount_price').val(discount_price);
              });

              $(document).on("change keyup blur", "#quantity", function(){
                  var quantity = $('#quantity').val();
                  var discount_price = $('#discount_price').val();

                  var total_price = discount_price * quantity;
                  $('#total_price').val(total_price);
              });

              //getDistrict
              $("#division_id").change(function () {
                  var division_id = $(this).val();
                  console.log($("#division_id").val());
                  if (division_id) {
                      $.ajax({
                          type: "GET",
                          url: "{{url('getDistrict')}}?division_id=" + division_id,
                          success: function (res) {

                              if (res) {

                                  $("#district_id").empty();
                                  $("#district_id").append(
                                      '<option value="">Select District</option>'
                                  );
                                  $.each(res, function (key, value) {
                                      console.log(value);
                                      $("#district_id").append(
                                          '<option value="' + key + '">' + value + '</option>'
                                      );
                                  });
                              } else {
                                  $("#district_id").empty();
                              }
                          },
                      });
                  } else {
                      $("#division_id").empty();
                      $("#district_id").empty();
                  }
              });

              //getTwonship
              $("#district_id").change(function () {
                  var district_id = $(this).val();
                  if (district_id) {
                      $.ajax({
                          type: "GET",
                          url: "{{url('getTownship')}}?district_id=" + district_id,
                          success: function (res) {
                              if (res) {
                                  $("#township_id").empty();
                                  $("#township_id").append(
                                      '<option value="">Select Township</option>'
                                  );
                                  $.each(res, function (key, value) {
                                      $("#township_id").append(
                                          '<option value="' + key + '">' + value + '</option>'
                                      );
                                  });
                              } else {
                                  $("#township_id").empty();
                              }
                          },
                      });
                  } else {
                      $("#township_id").empty();
                      $("#district_id").empty();
                  }
              });


              // address autofill in field
              $('#home_no,#street_name').keyup(function () {
                  var addressArray = [$('#home_no').val(), $('#street_name').val(), $("#township_id option:selected").text(), $("#district_id option:selected").text(), $("#division_id").find(":selected").text()]

                  function displayVals() {
                      $('#address').text(addressArray.join(', '));
                  }

                  $('select').keyup(displayVals);
                  displayVals();

              }).keyup();

              //print function
              $("#printThis").click(function() {
                  $(this).preventDefault;
                  PrintDiv();
              });

              function PrintDiv() {
                  var divToPrint = document.getElementById('printInvoice');
                  var popupWin = window.open('', '_blank', 'width=1366,height=768');
                  popupWin.document.open();
                  popupWin.document.write('<html><body onload="window.print();window.close();">' + divToPrint.innerHTML + '</html>');
                  popupWin.document.close();
              }

              $('#category_id').change(function(){
                  var category_id = $(this).val();
                  console.log(category_id);
                  if(category_id){
                      $.ajax({
                          type: "GET",
                          url: "{{url('getProduct')}}?category_id=" + category_id,
                          success: function(res){
                              console.log(res);
                              if(res){
                                  $("#product").empty();
                                  $("#product").append(
                                      '<option value="">Select Product</option>'
                                  );
                                  $.each(res, function(key, value){
                                      $('#product').append(
                                          '<option value="' + key + '">' + value + '</option>'
                                      );
                                  });
                              }else{
                                  $("#product").empty();
                              }
                          },
                      });
                  }
              });

              $('.cart_update').change(function(e) {
                  e.preventDefault();

                  var ele = $(this);

                  $.ajax({
                      url: '{{ route('update_cart') }}',
                      method: "patch",
                      data: {
                          _token: '{{ csrf_token() }}',
                          id: ele.parents("tr").attr("data-id"),
                          quantity: ele.parents("tr").find(".quantity").val()
                      },
                      success: function(response){
                          window.location.reload();
                      }
                  });
              });


              $('.cart_remove').click(function(e) {
                  e.preventDefault();

                  var ele = $(this);

                  if(confirm("Do you really want to remove?")) {
                      $.ajax({
                          url: '{{ route('remove_from_cart') }}',
                          method: "DELETE",
                          data: {
                              _token: '{{ csrf_token() }}',
                              id: ele.parents("tr").attr("data-id")
                          },
                          success: function(response){
                              window.location.reload();
                          }
                      });
                  }
              });

              $('#edit_table').hide();
              $('#edit').click(function(){
                  $('#edit_table').show();
              })

               //daterange picker
              $(function() {
                  $('input[name="daterange"]').daterangepicker({
                      opens: 'left'
                  }, function(start, end, label) {
                      var daterangestart=start.format('YYYY-MM-DD');
                      var daterangeend=end.format('YYYY-MM-DD');
                      $.ajax({
                          method: "GET",
                          url: "{{ route('date_range') }}",
                          data: {
                              daterangestart,
                              daterangeend
                          },
                          success: function(res) {
                              // console.log(res);
                              $('#total_orders').text(res[1]);
                              $('#pending_orders').text(res[2]);
                              $('#success_orders').text(res[3]);
                              $('#delivered_orders').text(res[4]);
                              $('#canceled_orders').text(res[5]);

                              $('#total_order_price').text(res[6].toLocaleString() + " (MMK)");
                              $('#pending_order_price').text(res[7].toLocaleString() + " (MMK)");
                              $('#success_order_price').text(res[8].toLocaleString() + " (MMK)");
                              $('#delivered_order_price').text(res[9].toLocaleString() + " (MMK)");
                              $('#cancelled_order_price').text(res[10].toLocaleString() + " (MMK)");

                          },
                      });
                  });
              });

			$(function() {
                  $('input[name="daterange1"]').daterangepicker({
                      opens: 'left'
                  }, function(start, end, label) {

                      var daterangestart=start.format('YYYY-MM-DD');
                      var daterangeend=end.format('YYYY-MM-DD');
                      $.ajax({
                          method: "GET",
                          url: "{{ route('product_daterange') }}",
                          data: {
                              daterangestart,
                              daterangeend
                          },
                          success: function(res) {
                                // console.log(res);

                                var tableBody = $('.data_table tbody');
                                tableBody.empty();

                                var counter = 1;

                                for (var i = 0; i < res.length; i++) {
                                    var rowData = res[i];

                                    var row = $('<tr>');

                                    var numberCell = $('<td>').text(counter++);
                                	var productInfoCell = $('<td>').html(rowData.product_name + '<br><br>' + rowData.product_id);
                                    var catNameCell = $('<td>').text(rowData.cat_name);
                                    var countSmCell = $('<td>').text(rowData.count_sm);
                                    var countMCell = $('<td>').text(rowData.count_m);
                                    var countLCell = $('<td>').text(rowData.count_l);
                                    var countXLCell = $('<td>').text(rowData.count_xl);
                                    var totalQtyCell = $('<td>').text(rowData.total_qty);
									                  var cancelledQtyCell = $('<td>').text(rowData.count_cancelled);
                                    var totalPriceCell = $('<td>').text((rowData.price * rowData.total_qty).toLocaleString());

                                    row.append(numberCell, productInfoCell, catNameCell, countSmCell, countMCell, countLCell, countXLCell, totalQtyCell, cancelledQtyCell, totalPriceCell);

                                    tableBody.append(row);
                                }
                          },
                      });
                  });
              });

              //gallery images upload
              $("#photoupload").change(function() {
                $("#photoUploadForm").submit();
              });

			  $(".navbar-toggler").click(function() {
  					$('.sidebar-offcanvas').toggleClass('active')
              });

      		//go back button
              function goBack() {
                  window.history.back();
              }

			  @yield('script');

    </script>
  </body>
</html>
