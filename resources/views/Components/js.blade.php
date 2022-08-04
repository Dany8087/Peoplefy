<script src="js/main.js"></script>
<script src="js/datatables.js"></script>
<script src="js/swiper.js"></script>
<script src="js/ctrleditor.js"></script>
<script src="js/jquery.scrollbar.js"></script>
<script src="js/sortable.js" type="text/javascript"></script> 
<script src="js/fileinput.js" type="text/javascript"></script>
<script src="js/theme.js" type="text/javascript"></script>
<script src="js/jquery.twbsPagination.min.js"></script>
<script src="js/ion.rangeSlider.min.js"></script>
<script>
  $(document).ready(function () {
  $('#sidebarCollapse').on('click', function () {
  $('#sidebar,.content-manger').toggleClass('active');
  });
  
  // Right side panel Code
  $('.rightside-anch').on('click', function () {
  $('.right-sidebar').toggleClass('active');
  });
  
  
     // All checkbox code 
	  $('#select_all').click(function () {    
      $('.input-select').not(this).prop('checked', this.checked);    
      });
  
  // Text Editor
  $("#ctrl-editor").Editor();
  
  $(".inputvideo").fileinput();
  $(".inputphoto").fileinput();

  
  
  
  
  $('.ven-table').DataTable( {
  // ====== responsive: true =======
  language: {
  paginate: {
  next: '<i class="fas fa-angle-right"></i>',
  previous: '<i class="fas fa-angle-left"></i>'  
  }
  },
  'iDisplayLength': 100
  });
  
  // ====== Less and More Content code with datatable =======
  
  var table = $('.incident-table').DataTable({
    language: {
      paginate: {
      next: '<i class="fas fa-angle-right"></i>',
      previous: '<i class="fas fa-angle-left"></i>'  
      }
    },
    "lengthMenu": [
      [5, 10, 25, 50, 100, -1],
      [5, 10, 25, 50, 100, "All"]
    ],
    "autoWidth": true,
    "responsive": true,
    "lengthChange": true,
    "ordering": true,
    columnDefs: [{
      targets: [6],
      createdCell: function(cell) {
        var $cell = $(cell);
        $(cell).contents().wrapAll("<div class='content'></div>");
        var $content = $cell.find(".content");
        $(cell).append($("<button class='readlessbtn'>Read more</button>"));
        $btn = $(cell).find("button");
        $content.css({
          "height": "50px",
          "overflow": "hidden"
        })
        $cell.data("isLess", true);
        $btn.click(function() {
          var isLess = $cell.data("isLess");
          $content.css("height", isLess ? "auto" : "50px")
          $(this).text(isLess ? "Read less" : "Read more")
          $cell.data("isLess", !isLess)
        })
      }
    }]
  });

 
  // Active menu code
  var path = window.location.href;
  //var activePage = url;
  $('.components li a').each(function () {
  if (this.href === path) {
  $(this).addClass('active');
  }
  });
  
  
  
  // Progress bar Editor
  $('.progress .line-bar').css("width",
  function() {
  return $(this).attr("aria-valuenow") + "%";
  }
  )
  
  // Collaspse panel code
  $("a.collapsed").click(function(){
  $(this).find(".btn:contains('answer')").toggleClass("collapsed");
  });
  
  // Upload file code
  $('.file-upload').change(function() {
  var filepath = this.value;
  var m = filepath.match(/([^\/\\]+)$/);
  var filename = m[1];
  $('.filename').html(filename);
  $('.filename').css('color','#445461');
  });
  
  //
  
  
  
  // ====== Meeting room selection  ======= 
  $(".meeting-checkbox").click(function() {
  if($(this).is(":checked")) {
  $(".maxper-div").show();
  } else {
  $(".maxper-div").hide();
  }
  });
  // ====== Multiselect checkbox selection  ======= 
  $('.mcheck').click(function () {
  $(this).parent().parent().find('li .mcheck').prop('checked', $(this).is(':checked'));
  var sibs = false;
  $(this).closest('ul').children('li').each(function () {
  if($('.mcheck', this).is(':checked')) sibs=true;
  })
  $('li .parentli', $(this).parents('ul').parent()).prop('checked', sibs);
  });
  
  
  
  //$(".sb-container").scrollBox();
  
  // ====== Swipper slider selection  ======= 
  var swiper1 = new Swiper('.swiper1', {
  slidesPerView: 1,
  spaceBetween:0,
   pagination: {
    el: '.swiper-pagination1',
     clickable: true,
     },
   });

	
	// Import excel file upload code
	  $('#buttonlabel span[role=button]').bind('keypress keyup', function(e) {
	  if(e.which === 32 || e.which === 13){
	  e.preventDefault();
	  $('#fileupload-input').click();
	  }    
	  });
	  // return chosen filename to additional input
	  $('#fileupload-input').change(function(e) {
	  var filename = $('#fileupload-input').val().split('\\').pop();
	  $('#filename').val(filename);
	  $('#filename').attr('placeholder', filename);
	  $('#filename').focus();
	  });
	
  
  
    $('.scrollbarbar').scrollbar();
    $('.scrollbarbar').css('max-height',($(window).height()- ($('.logo-sidebar').height()+$('.logout-control').height()))+'px');
  
    $(window).resize();

  });
  </script>
<script>
  $(document).ready(function(){
  $(".drug-select").change(function(){
  $(this).find("option:selected").each(function(){
  var optionValue = $(this).attr("value");
  if(optionValue){
  $(".drugbox").not("." + optionValue).hide();
  $("." + optionValue).show();
  } else{
  $(".drugbox").hide();
  }
  });
  }).change();
  });
  </script>
<script>
  $(function() {
  // Bootstrap DateTimePicker v3
  
  $('.datepickertime').datetimepicker();
  
  $('.datepicker').datetimepicker({
  format: 'dd-mm-yyyy',
  minView:2,
  autoclose: true,
  todayHighlight:true
  });
  
  $('.form_time').datetimepicker({
  format: 'hh:ii',
  startView:1,
  minView:0,
  maxView:1,
  autoclose: true,
  minuteStep:10,
  todayHighlight:true,
  });
  
  });
  
  </script>
<script>
  // Notification Code
  $(window).on('load',function(){
  // Sidepanel scroll code 
  
  $('.sidebar-panel').css('height',($(window).height()+'px'));
  $('.right-sidebar').css('height',($(window).height()+'px'));
  $('.scroll-sidebar').css('height',($('.sidebar-panel').outerHeight()- $('.logout-control').outerHeight() - $('.logo-sidebar').outerHeight()-45)+'px');
  $('.wrapper-block').css('min-height',($(window).height()- 66+'px'));	  
	  
  var messages = [
  [ 'alnoti','alert-info','<i class="far fa-bell" aria-hidden="true"></i> You have <strong>3</strong> new notifications.'],
  [ 'almsg','alert-warning','<i class="far fa-comments" aria-hidden="true"></i> You have <strong>3</strong> new messages.'],
  [ 'almail','alert-danger','<i class="far fa-envelope" aria-hidden="true"></i> You have <strong>3</strong> new mails.' ],
  
  ];
  for(i=0;i<messages.length;i++){
  var message = messages[Math.floor(Math.random() * messages.length)];
  $('.notify').append('<div id="'+message[0]+'" class="alert '+message[1]+' notify2"><button type="button" class="close">×</button>'+message[2]+'</div>');
  $('#'+message[0]).delay(Math.floor(Math.random() * 10000) + 2500).fadeIn( "slow");
  $('#'+message[0]).delay(Math.floor(Math.random() * 2500) + 2500).fadeOut( "slow");
  }
  });
  
  $(document).ready(function () {
  $(document).on('click', '.close', function () {$(this).parent().hide();});
  
  // Multiple image upload	
  if(window.File && window.FileList && window.FileReader) {
  $("#files").on("change",function(e) {
  var files = e.target.files ,
  filesLength = files.length ;
  for (var i = 0; i < filesLength ; i++) {
  var f = files[i]
  var fileReader = new FileReader();
  fileReader.onload = (function(e) {
  var file = e.target;
  $("<img></img>",{
  class : "imageThumb",
  src : e.target.result,
  title : file.name
  }).insertBefore(".upload-btn");
  });
  fileReader.readAsDataURL(f);
  }
  });
  } else { alert("Your browser doesn't support to File API") }
  });
  </script>