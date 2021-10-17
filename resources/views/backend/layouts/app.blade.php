<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{{ $title?? ($site_settings->site_name?? config('company.name')) }}</title>
      
    @include('layouts.expiredsession')
      
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('vxu') }}/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('vxu') }}/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('vxu') }}/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->

    <link rel="stylesheet" href="{{ asset('vxu') }}/vendors/font-awesome/css/font-awesome.min.css" />
      
    <link rel="stylesheet" href="{{ asset('magnific') }}/magnific-popup.css">
      
    <link rel="stylesheet" href="{{ asset('alertify') }}/css/themes/default.min.css">
          
    <link rel="stylesheet" href="{{ asset('alertify') }}/css/alertify.min.css">
      
    
      
    <link rel="stylesheet" href="{{ asset('notifier') }}/styles/jquery.notifyBar.css">
    <link rel="stylesheet" href="{{ asset('notifier') }}/styles/metro/notify-metro.css">
      
    <link rel="stylesheet" href="{{ asset('datatable') }}/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('datatable') }}/buttons.bootstrap4.min.css">
      
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('vxu') }}/css/style.css" />
    <!-- End layout styles -->
       
    @stack('css')
      
    <link rel="shortcut icon" href="{{ asset('vxu') }}/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      
      @include("backend.layouts.common.navs")
        
      @include("backend.layouts.common.flashes")
        
      <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper pb-0">
    
            @yield("content")
          </div>
          <!-- content-wrapper ends -->
          <footer class="footer text-center">
           
                <span class="text-muted">Copyright © {{ date('Y') }} <a href="javascript:void(0)" target="_blank">Codewalker</a>. All rights reserved.</span>
            
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('vxu') }}/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('vxu') }}/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
    <script src="{{ asset('vxu') }}/vendors/chart.js/Chart.min.js"></script>
    <script src="{{ asset('vxu') }}/vendors/flot/jquery.flot.js"></script>
    <script src="{{ asset('vxu') }}/vendors/flot/jquery.flot.resize.js"></script>
    <script src="{{ asset('vxu') }}/vendors/flot/jquery.flot.categories.js"></script>
    <script src="{{ asset('vxu') }}/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="{{ asset('vxu') }}/vendors/flot/jquery.flot.stack.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('vxu') }}/js/off-canvas.js"></script>
    <script src="{{ asset('vxu') }}/js/hoverable-collapse.js"></script>
    <script src="{{ asset('vxu') }}/js/misc.js"></script>
    <script src="{{ asset('vxu') }}/js/settings.js"></script>
    <script src="{{ asset('vxu') }}/js/todolist.js"></script>
    <!-- endinject -->
      
    <!-- This is data table -->
    <script src="{{ asset('fxu') }}/plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>
      
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
    </form>
    
    <script src="{{ asset('magnific') }}/jquery.magnific-popup.js"></script>
      
     <script src="{{ asset('utils') }}/clipboard.min.js"></script>
    
    <script src="{{ asset('notifier') }}/jquery.notifyBar.js"></script>
    <script src="{{ asset('notifier') }}/notify.js"></script>
    
    <script src="{{ asset('notifier') }}/styles/metro/notify-metro.js"></script>
    
    <script src="{{ asset('alertify') }}/js/alertify.min.js"></script>
    <script src="{{ asset('datatable') }}/jquery.dataTables.min.js"></script>
    <script src="{{ asset('datatable') }}/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('datatable') }}/dataTables.buttons.min.js"></script>
    <script src="{{ asset('datatable') }}/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('datatable') }}/jszip.min.js"></script>
    <script src="{{ asset('datatable') }}/pdfmake.min.js"></script>
    <script src="{{ asset('datatable') }}/vfs_fonts.js"></script>
    <script src="{{ asset('datatable') }}/buttons.html5.min.js"></script>
    <script src="{{ asset('datatable') }}/buttons.print.min.js"></script>
    <script src="{{ asset('datatable') }}/buttons.colVis.min.js "></script>  
    
    @stack('expiredsessjs')
      
    <script>
        alertify.set('notifier','delay', 100);
        alertify.set('notifier','position', 'top-center');
        
        var nb = {
            success: function(message, pos = "top") {
                $.notifyBar({
                    html: message,
                    cssClass: "success",
                    position: pos,
                    waitingForClose: true,
                    closeOnClick: true,
                    close: true,
                });
            },
            error: function(message, pos = "top") {
                $.notifyBar({
                    html: message,
                    cssClass: "error",
                    position: pos,
                    waitingForClose: true,
                    closeOnClick: true,
                    close: true,
                });
            },
            warning: function(message, pos = "top") {
                $.notifyBar({
                    html: message,
                    cssClass: "warning",
                    position: pos,
                    waitingForClose: true,
                    closeOnClick: true,
                    close: true,
                });
            },
            info: function(message, pos = "top") {
                $.notifyBar({
                    html: message,
                    cssClass: "info",
                    position: pos,
                    waitingForClose: true,
                    closeOnClick: true,
                    close: true,
                });
            },
        };
        
        $(function() {
            
            $('[data-toggle="tooltip"]').tooltip({
                trigger : 'hover'
            }); 
            
            $('[data-activate-message]').on('click', function() {
                nb.warning($(this).data('activate-message'));
            }).trigger("click");
            
            
            
            var clipboard = new ClipboardJS('.btn-copy-link');
            
            /*clipboard.on("success", function(e) {
               
            });*/
            
             
            $(".logout-link").on("click", function() {
                $("#logout-form").trigger('submit'); 
                return false;
            });
            
            $(".ajax-popup-link").magnificPopup({
              type: 'ajax',
              closeOnBgClick: false,
              enableEscapeKey: false,
            });
            
            $(".btn-action-delete").on("click", function() {
             
                return window.confirm("Can't reversed this action once acted upon. Continue anyway?");
            
            });
            
            $("body").on("click", function(e) { 
                    
                if ($(e.target).hasClass("btn-mf-close")) {
                    $.magnificPopup.close();
                    //alertify.error("Operation cancelled");
                    
                    return false;
                }
            }).on("submit", function(e) {
                if ($(e.target).hasClass("form-submit")) {
                    
                    var form = $(e.target);
                    var data = form.serialize();
                    var method = form.prop('method');
                    var url = form.prop('action');
                    var delayedSec = 200;
                    
                    
                    form.slideUp(delayedSec, function() {
                        $(this).parent().find("#loader").slideDown();
                    });
                    
                    
                    $.ajax({url: url, data: data, type: method, dataType: 'JSON', success: function(response) {
                        
                        
                        if ("success" in response) {
                            
                            form.parent().find("#loader").slideUp(delayedSec, function() {
                                
                                refreshData(form, response);
                            });
                        }
                        else if ("errors" in response) {
                            nb.error(response.message);
                            displayErrors(form, response.errors);
                            form.parent().find("#loader").slideUp(delayedSec, function() {
                                form.slideDown();
                            });
                        }
                        else if ("error" in response) {
                            nb.error(response.error);
                            form.parent().find("#loader").slideUp(delayedSec, function() {
                                form.slideDown();
                            });
                        }
                        
                    }, error: function(status, response) {
                        nb.error("Error processing your request. Please try again!");
                        
                        form.parent().find("#loader").slideUp(delayedSec, function() {
                            form.slideDown();
                        });
                        
                        
                    }});
                    
                    return false;
                }
            });
            
            $('.admin-table').DataTable();
            
        
            $(".notifier").on("click", function() {
                 nb.warning($(this).html());
            });
        
            $(".notifier").trigger("click");
            
            $("[data-price-update]").on("change", function() {
                var target_id = $(this).find(':selected').data('target');
                
                var min_amount = $(this).find(':selected').data('min-amount');
                
                
                $(target_id).prop('placeholder', 'Min. Amount: ' + formatAmount(min_amount));
                
                $(target_id).prop('disabled', false);
            });
            
        });
        
        function updateFormToLarge(form) {
            form.parent().removeClass("col-md-4");
            form.parent().removeClass("offset-md-4");
            form.parent().addClass("col-md-8");
            form.parent().addClass("offset-md-2");
        }
        
        var timeoutID = null;
        
        function displayErrors(form, errors) {
            
            if (timeoutID != null) { //reset timer
                clearTimeout(timeoutID);
                form.find(".error").remove();
            }
            
            for (var error in errors) {
                var input = form.find("*[name='" + error + "']");
                var errorElem = $(document.createElement('span'));
                //var errorOutput = "";
                
                
                errorElem.html(errors[error][0]);
                errorElem.addClass('error');
                
                input.attr('title', errors[error][0]);
                errorElem.insertAfter(input);
            }
            
            timeoutID = setTimeout(function() {
                form.find(".error").remove();
            }, 15000);
            
        }
        
        function refreshData(form, response) {
            if ("reload" in response) {
                alertify.success(response.success);
                
                form.trigger("reset");
                
                setTimeout(function() {
                    if ("url" in response) {
                        window.location.href = response.url;
                    }
                    else {
                        window.location.reload();
                    }
                    
                    form.parent().html("<h4 class = 'text-orange text-center'>{{ config('company.name') }} refreshing data for a better experience...</h4>");
                }, 1000);
            }
            else {
                updateFormToLarge(form)
                form.parent().append(response.view);
                form.remove();
            }
        }
        
        function formatAmount(amount) {
            var placement = "{{ getCurrencyPlacement() }}";
            var currency = "{{ getCurrency() }}";
            
            if (placement == "left") {
                return currency + amount.toFixed(2);
            }

            return  amount.toFixed(2) + ' ' . currency;
        }
        
        
        $(".biller-nav-service").on("click", function(e) {
            alertify.alert("Coming soon...");
            e.preventDefault();
        });

        function updateDepositAmount(amount, id) {
            var action = $('#action_' + id);
            //Normalize url

            var href = action[0].href;

            var endIndex = href.indexOf('approve');
            var substr = href.substring(0, endIndex);

            href = substr + "approve/" + id;
            
            action[0].href = href + "/" + amount

            console.log(action[0].href);
        }
    </script>

    
    @include('layouts.livechat')
	
      
      
    <!-- Custom js for this page -->
    <script src="{{ asset('vxu') }}/js/dashboard.js"></script>
    <!-- End custom js for this page -->
      
    @stack('js')
  </body>
</html>